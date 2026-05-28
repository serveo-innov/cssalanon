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
        .email-box {
            background: #f9f9f9;
            border-left: 3px solid #F39F5F;
            border-radius: 4px;
            padding: 14px 18px;
            font-size: 16px;
            color: #385469;
            font-weight: bold;
            margin: 20px 0;
        }
        .footer { background: #f0f0f0; padding: 16px 30px; text-align: center; font-size: 12px;
                  color: #999; border-radius: 0 0 8px 8px; border: 1px solid #e0e0e0; border-top: none; }
        .footer strong { color: #385469; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>📧 Nouvelle inscription newsletter</h1>
            <p>Un visiteur vient de s'abonner à la newsletter du CS SALANON</p>
        </div>
        <div class="body">
            <p>Bonne nouvelle ! Une nouvelle adresse email vient d'être ajoutée à votre liste newsletter.</p>
            <div class="email-box">{{ $email }}</div>
            <p>Pensez à ajouter cette adresse à votre liste de diffusion pour les prochaines communications.</p>
        </div>
        <div class="footer">
            Reçu via <strong>cssalanon.com</strong> — {{ now()->format('d/m/Y à H:i') }}
        </div>
    </div>
</body>
</html>