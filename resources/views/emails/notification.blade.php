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
        <td style="padding:36px 40px 8px;">
            <h1 style="font-family:Arial,sans-serif;font-size:24px;color:#124B7E;margin:0 0 8px;">Novo contacto através do site</h1>
            <p style="font-size:15px;color:#54595F;margin:0 0 24px;">Recebeu uma nova mensagem do formulário de contacto de zenvyor.com.</p>
        </td>
    </tr>
    <tr>
        <td style="padding:0 40px;">
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:rgba(98,171,188,0.22);border-radius:12px;padding:24px;">
                <tr>
                    <td style="padding:10px 24px;width:110px;font-size:13px;color:#54595F;">Nome</td>
                    <td style="padding:10px 0;font-size:15px;color:#202020;"><strong>{{ $submission->name }}</strong></td>
                </tr>
                <tr>
                    <td style="padding:10px 24px;font-size:13px;color:#54595F;">Empresa</td>
                    <td style="padding:10px 0;font-size:15px;color:#202020;">{{ $submission->company ?? '—' }}</td>
                </tr>
                <tr>
                    <td style="padding:10px 24px;font-size:13px;color:#54595F;">Email</td>
                    <td style="padding:10px 0;font-size:15px;"><a href="mailto:{{ $submission->email }}" style="color:#124B7E;">{{ $submission->email }}</a></td>
                </tr>
                <tr>
                    <td style="padding:10px 24px;font-size:13px;color:#54595F;">Telefone</td>
                    <td style="padding:10px 0;font-size:15px;"><a href="tel:{{ $submission->phone }}" style="color:#124B7E;">{{ $submission->phone }}</a></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="padding:28px 40px 36px;">
            <p style="font-size:13px;color:#54595F;margin:0 0 8px;text-transform:uppercase;letter-spacing:1px;">Mensagem</p>
            <p style="font-size:15px;color:#202020;line-height:1.7;margin:0;white-space:pre-line;">{{ $submission->message }}</p>
        </td>
    </tr>
    <tr>
        <td style="padding:0 40px 36px;">
            <a href="mailto:{{ $submission->email }}" style="display:inline-block;background-color:#97BB36;color:#ffffff;font-size:15px;text-decoration:none;padding:10px 32px;border-radius:12px;">Responder</a>
        </td>
    </tr>
    <tr>
        <td style="background:#124B7E;padding:20px 40px;">
            <p style="font-size:12px;color:rgba(255,255,255,0.7);margin:0;">ZENVYOR — Industrial Solutions · Rua das Areias nº 24, 3025-137 Coimbra</p>
        </td>
    </tr>
</table>
</td></tr>
</table>
</body>
</html>
