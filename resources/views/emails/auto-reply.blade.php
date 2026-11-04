<!DOCTYPE html>
<html lang="pt-PT">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"></head>
<body style="margin:0;padding:0;background-color:#f4f6f8;font-family:Poppins,Arial,sans-serif;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f8;padding:40px 0;">
<tr><td align="center">
<table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background:#ffffff;border-radius:12px;overflow:hidden;">
    <tr>
        <td style="background-color:#124B7E;padding:28px 40px;">
            <img src="{{ $message->embed(public_path('media/Zenvyor-Logo_White.png')) }}" alt="ZENVYOR" width="150" style="display:block;">
        </td>
    </tr>
    <tr>
        <td style="padding:40px;">
            <h1 style="font-family:Arial,sans-serif;font-size:26px;color:#124B7E;margin:0 0 16px;">Obrigado pelo seu contacto, {{ $submission->name }}!</h1>
            <p style="font-size:15px;color:#202020;line-height:1.7;margin:0 0 16px;">Recebemos a sua mensagem e a nossa equipa irá responder com a maior brevidade possível.</p>
            <p style="font-size:15px;color:#54595F;line-height:1.7;margin:0 0 28px;">Enquanto isso, pode também falar connosco diretamente através dos contactos abaixo.</p>
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:rgba(98,171,188,0.22);border-radius:12px;padding:20px;">
                <tr>
                    <td style="padding:12px 24px;font-size:15px;color:#202020;">
                        <strong style="color:#124B7E;">Telefone</strong><br>(+351) 912 510 164 <span style="font-size:11px;color:#54595F;">(custo de chamada para a rede móvel nacional)</span>
                    </td>
                    <td style="padding:12px 24px;font-size:15px;color:#202020;">
                        <strong style="color:#124B7E;">Email</strong><br><a href="mailto:geral@zenvyor.com" style="color:#202020;">geral@zenvyor.com</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="padding:12px 24px;font-size:15px;color:#202020;">
                        <strong style="color:#124B7E;">Morada</strong><br>Caves de Coimbra, Rua das Areias nº 24, Armazém Move On<br>3025-137 Coimbra, Portugal
                    </td>
                </tr>
            </table>
            <a href="https://zenvyor.com/servicos" style="display:inline-block;background-color:#97BB36;color:#ffffff;font-size:15px;text-decoration:none;padding:10px 32px;border-radius:12px;margin-top:28px;">Conhecer os nossos serviços</a>
        </td>
    </tr>
    <tr>
        <td style="background:#124B7E;padding:20px 40px;">
            <p style="font-size:12px;color:rgba(255,255,255,0.7);margin:0;">ZENVYOR — Industrial Solutions · Este é um email automático, não responda diretamente.</p>
        </td>
    </tr>
</table>
</td></tr>
</table>
</body>
</html>
