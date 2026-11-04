@extends('layouts.app')

@section('content')
    <section class="section contact-top">
        <div class="contact-info">
            <h1>Contactos</h1>
            <p class="lead">Precisa de mais informações ou quer iniciar um projeto? Fale connosco! Estamos disponíveis por telefone, e-mail ou pessoalmente na nossa morada. Teremos todo o gosto em recebê-lo e ajudá-lo a encontrar a solução ideal.</p>
            <ul class="icon-list">
                <li>
                    <svg viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
                    <span>Caves de Coimbra,<br>Rua das Areias nº. 24, Armazém Move On<br>3025-137 Coimbra,<br>Portugal</span>
                </li>
                <li>
                    <svg viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.1 18.4-30 11.6-46.3l-40-96z"/></svg>
                    <a href="tel:+351912510164">(+351) 912 510 164 *</a>
                </li>
                <li>
                    <svg viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
                    <a href="mailto:geral@zenvyor.com">geral@zenvyor.com</a>
                </li>
            </ul>
        </div>
        <div class="contact-map">
            <iframe src="https://www.google.com/maps?q=Rua%20das%20Areias%2024%2C%203025-137%20Coimbra%2C%20Portugal&z=15&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Localização Zenvyor"></iframe>
        </div>
    </section>

    <section class="contact-form-section">
        <p class="contact-note">*Custo de chamada para a rede móvel nacional</p>
        <h2>Formulário</h2>
        <p class="form-intro animate-on-scroll">Precisa de ajuda ou tem alguma questão? Envie-nos a sua mensagem. A nossa equipa está pronta para responder assim que possível!</p>

        <form class="zform animate-on-scroll" method="POST" action="{{ route('contacto.store') }}" novalidate>
            @csrf
            <div class="hp-field" aria-hidden="true">
                <label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
            </div>

            @if(session('success'))
                <div class="form-alert form-alert--success">{{ session('success') }}</div>
            @endif
            @if($errors->any())
                <div class="form-alert form-alert--error">O envio do seu formulário falhou devido a um erro. Verifique os campos.</div>
            @endif

            <div class="form-row">
                <div class="form-group">
                    <input type="text" name="name" aria-label="Nome" placeholder="Nome" value="{{ old('name') }}" required>
                    @error('name')<span class="field-error">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <input type="text" name="company" aria-label="Empresa" placeholder="Empresa" value="{{ old('company') }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <input type="email" name="email" aria-label="Email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')<span class="field-error">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" aria-label="Telefone" placeholder="Telefone" value="{{ old('phone') }}" required>
                    @error('phone')<span class="field-error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-group">
                <textarea name="message" aria-label="Mensagem" placeholder="Mensagem" required>{{ old('message') }}</textarea>
                @error('message')<span class="field-error">{{ $message }}</span>@enderror
            </div>
            <div class="acceptance">
                <input type="checkbox" id="terms" name="terms" value="1" {{ old('terms') ? 'checked' : '' }} required>
                <label for="terms">Declaro que li e que aceito os <a href="/termos-condicoes" target="_blank" rel="noopener">Termos e Condições</a></label>
            </div>
            @error('terms')<span class="field-error">{{ $message }}</span>@enderror
            <button type="submit" class="btn btn-accent" style="margin-top:10px;">Enviar</button>
        </form>
    </section>
@endsection
