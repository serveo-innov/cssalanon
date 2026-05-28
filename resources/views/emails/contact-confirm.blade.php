<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 30px 20px; }
        .wrapper { max-width: 620px; margin: auto; }
        .header {
            background: #385469;
            padding: 28px 30px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }
        .header h1 { color: #fff; font-size: 22px; }
        .header p  { color: #F39F5F; font-size: 13px; margin-top: 8px; }
        .body {
            background: #fff;
            padding: 30px;
            border-left: 1px solid #e0e0e0;
            border-right: 1px solid #e0e0e0;
        }
        .body p { font-size: 15px; color: #444; line-height: 1.8; margin-bottom: 16px; }
        .body strong { color: #385469; }
        .recap {
            background: #f9f9f9;
            border-left: 3px solid #F39F5F;
            border-radius: 4px;
            padding: 16px 20px;
            margin: 20px 0;
            font-size: 14px;
            color: #555;
            line-height: 1.8;
        }
        .contact-box {
            background: #385469;
            border-radius: 6px;
            padding: 20px 24px;
            margin-top: 24px;
            color: #fff;
            font-size: 14px;
            line-height: 1.8;
        }
        .contact-box a { color: #F39F5F; text-decoration: none; }
        .footer {
            background: #f0f0f0;
            padding: 18px 30px;
            text-align: center;
            font-size: 12px;
            color: #999;
            border-radius: 0 0 8px 8px;
            border: 1px solid #e0e0e0;
            border-top: none;
        }
        .footer strong { color: #385469; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>✅ Message bien reçu !</h1>
            <p>Complexe Scolaire SALANON — Cotonou, Bénin</p>
        </div>
        <div class="body">
            <p>Bonjour <strong>{{ $data['name'] }}</strong>,</p>

            <p>
                Nous avons bien reçu votre message et nous vous en remercions.
                Notre équipe vous répondra dans les <strong>24 à 48 heures ouvrables</strong>.
            </p>

            <div class="recap">
                <strong>Récapitulatif de votre message :</strong><br><br>
                @if (!empty($data['subject']))
                <strong>Sujet :</strong> {{ $data['subject'] }}<br>
                @endif
                <strong>Message :</strong><br>
                {{ $data['message'] }}
            </div>

            <p>
                Si votre demande est urgente, vous pouvez nous joindre directement
                par téléphone ou WhatsApp.
            </p>

            <div class="contact-box">
                📍 <strong>CS SALANON</strong> — Cotonou, Bénin<br>
                📞 <a href="tel:+22901938392">+229 01 93 83 92</a> /
                   <a href="tel:+22901677258">+229 01 67 72 58 98</a><br>
                📧 <a href="mailto:contact@cssalanon.com">contact@cssalanon.com</a><br>
                🌐 <a href="https://cssalanon.com">cssalanon.com</a>
            </div>
        </div>
        <div class="footer">
            © {{ date('Y') }} <strong>Complexe Scolaire SALANON</strong> — Tous droits réservés
        </div>
    </div>
</body>
</html>