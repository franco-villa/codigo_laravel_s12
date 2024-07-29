<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Recibido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            margin: 20px 0;
        }
        .content h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .content p {
            margin: 5px 0;
            font-size: 16px;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #eee;
            font-size: 14px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Mensaje Recibido</h1>
        </div>
        <div class="content">
            <h2>Detalles del Mensaje</h2>
            <p><strong>Nombre:</strong> {{ $mensaje['nombre'] }}</p>
            <p><strong>Correo:</strong> {{ $mensaje['email'] }}</p>
            <p><strong>Asunto:</strong> {{ $mensaje['asunto'] }}</p>
            <p><strong>Mensaje:</strong> {{ $mensaje['mensaje'] }}</p>
        </div>
        <div class="footer">
            <p>Este es un correo generado automáticamente. Por favor, no responda a este mensaje.</p>
        </div>
    </div>
</body>
</html>
