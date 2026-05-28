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
        .header h1 { color: #fff; font-size: 22px; margin: 0; }
        .header p  { color: #F39F5F; font-size: 13px; margin-top: 6px; }
        .body {
            background: #fff;
            padding: 30px;
            border-left: 1px solid #e0e0e0;
            border-right: 1px solid #e0e0e0;
        }
        .field { margin-bottom: 22px; }
        .label {
            font-size: 11px;
            font-weight: bold;
            text-transform: uppercase;
            color: #F39F5F;
            letter-spacing: 1px;
            margin-bottom: 6px;
        }
        .value {
            font-size: 15px;
            color: #222;
            line-height: 1.6;
            padding: 12px 16px;
            background: #f9f9f9;
            border-left: 3px solid #F39F5F;
            border-radius: 4px;
        }
        .value a { color: #385469; text-decoration: none; }
        .message-value {
            white-space: pre-line;
            min-height: 80px;
        }
        .reply-btn {
            display: inline-block;
            margin-top: 24px;
            padding: 12px 28px;
            background: #F39F5F;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
        }
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
            <h1>📬 Nouveau message de contact</h1>
            <p>Reçu depuis le formulaire du site web du CS SALANON</p>
        </div>
        <div class="body">

            <div class="field">
                <div class="label">Nom complet</div>
                <div class="value">{{ $data['name'] }}</div>
            </div>

            <div class="field">
                <div class="label">Adresse email</div>
                <div class="value">
                    <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
                </div>
            </div>

            @if (!empty($data['phone']))
            <div class="field">
                <div class="label">Téléphone</div>
                <div class="value">{{ $data['phone'] }}</div>
            </div>
            @endif

            @if (!empty($data['subject']))
            <div class="field">
                <div class="label">Sujet</div>
                <div class="value">{{ $data['subject'] }}</div>
            </div>
            @endif

            <div class="field">
                <div class="label">Message</div>
                <div class="value message-value">{{ $data['message'] }}</div>
            </div>

            <a href="mailto:{{ $data['email'] }}" class="reply-btn">
                Répondre à {{ $data['name'] }}
            </a>
        </div>
        <div class="footer">
            Message reçu via <strong>cssalanon.com</strong> — {{ now()->format('d/m/Y à H:i') }}
        </div>
    </div>
</body>
</html>