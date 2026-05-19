<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        body  { font-family: Arial, sans-serif; background:#f4f4f4; padding:20px; }
        .card { background:#fff; padding:30px; border-radius:8px;
                max-width:600px; margin:auto; border-top:4px solid #F39F5F; }
        h2    { color:#F39F5F; margin-top:0; }
        .label { font-weight:bold; color:#555; margin-bottom:4px; }
        .value { color:#222; margin-bottom:20px; }
        .footer { margin-top:30px; font-size:12px; color:#aaa;
                  border-top:1px solid #eee; padding-top:12px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>📬 Nouveau message de contact</h2>

        <div class="label">Nom :</div>
        <div class="value">{{ $data['name'] }}</div>

        <div class="label">Email :</div>
        <div class="value">
            <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
        </div>

        <div class="label">Message :</div>
        <div class="value" style="white-space:pre-line;">{{ $data['message'] }}</div>

        <div class="footer">
            Message reçu via le formulaire de contact de cssalanon.com
        </div>
    </div>
</body>
</html>