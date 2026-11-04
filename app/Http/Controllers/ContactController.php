<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        if ($request->filled('website')) {
            return back()->with('success', 'O seu formulário foi enviado com sucesso');
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'message' => ['required', 'string', 'max:5000'],
            'terms' => ['accepted'],
        ], [
            'name.required' => 'O campo Nome é obrigatório.',
            'email.required' => 'O campo Email é obrigatório.',
            'email.email' => 'Insira um endereço de email válido.',
            'phone.required' => 'O campo Telefone é obrigatório.',
            'message.required' => 'O campo Mensagem é obrigatório.',
            'terms.accepted' => 'Tem de aceitar os Termos e Condições.',
        ]);

        $submission = ContactSubmission::create([
            'name' => $validated['name'],
            'company' => $validated['company'] ?? null,
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
            'ip' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 500),
        ]);

        try {
            Mail::to(config('mail.contact_to', 'geral@zenvyor.com'))
                ->send(new \App\Mail\ContactNotification($submission));
            Mail::to($submission->email)
                ->send(new \App\Mail\ContactAutoReply($submission));
        } catch (\Throwable) {
            // O envio por email falhou mas a submissão ficou registada na base de dados.
        }

        return back()->with('success', 'O seu formulário foi enviado com sucesso');
    }
}
