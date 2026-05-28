<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 30px 20px; }
        .wrapper { max-width: 580px; margin: auto; }
        .header { background: #385469; padding: 26px 30px; border-radius: 8px 8px 0 0; text-align: center; }
        .header h1 { color: #fff; font-size: 20px; }
        .header p  { color: #F39F5F; font-size: 13px; margin-top: 6px; }
        .body { background: #fff; padding: 30px; border: 1px solid #e0e0e0; border-top: none; }
        .body p { font-size: 15px; color: #444; line-height: 1.8; margin-bottom: 16px; }
        .highlight {
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
            padding: 18px 22px;
            margin-top: 22px;
            color: #fff;
            font-size: 14px;
            line-height: 1.8;
        }
        .contact-box a { color: #F39F5F; text-decoration: none; }
        .footer { background: #f0f0f0; padding: 16px 30px; text-align: center; font-size: 12px;
                  color: #999; border-radius: 0 0 8px 8px; border: 1px solid #e0e0e0; border-top: none; }
        .footer strong { color: #385469; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>✅ Inscription confirmée !</h1>
            <p>Complexe Scolaire SALANON — Cotonou, Bénin</p>
        </div>
        <div class="body">
            <p>Bonjour,</p>
            <p>
                Vous êtes maintenant abonné(e) à la newsletter du <strong>Complexe Scolaire SALANON</strong>.
                Vous recevrez en avant-première nos actualités, événements et informations importantes.
            </p>
            <div class="highlight">
                📌 Adresse inscrite : <strong>{{ $email }}</strong><br>
                🏫 École : Complexe Scolaire SALANON, Cotonou – Bénin
            </div>
            <p>
                Si vous n'êtes pas à l'origine de cette inscription, ignorez simplement ce message.
                Aucune action n'est requise de votre part.
            </p>
            <div class="contact-box">
                📍 <strong>CS SALANON</strong> — Sainte Rita Tonato, Cotonou<br>
                📞 <a href="tel:+22901938392">+229 01 93 83 92</a> /
                   <a href="tel:+22901677258">+229 01 67 72 58 98</a><br>
                📧 <a href="mailto:contact@cssalanon.com">contact@cssalanon.com</a>
            </div>
        </div>
        <div class="footer">
            © {{ date('Y') }} <strong>Complexe Scolaire SALANON</strong> — Tous droits réservés
        </div>
    </div>
</body>
</html>