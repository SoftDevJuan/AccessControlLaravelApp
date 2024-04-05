<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Landing Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .hero-image {
            width: 100%;
            height: auto;
        }
        .cta-button {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }
        .cta-button:hover {
            background-color: #0056b3;
        }
        .features {
            margin-top: 50px;
        }
        .feature-item {
            text-align: center;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Bienvenido a tu Landing Page</h1>
            <p>Descripción breve de tu producto o servicio.</p>
            <img src="tu-imagen.jpg" alt="Hero Image" class="hero-image">
        </div>
        <a href="{{ route('login') }}" class="cta-button">Conoce más</a>
        <div id="features" class="features">
            <h2>Características Principales</h2>
            <div class="feature-item">
                <h3>Feature 1</h3>
                <p>Descripción de la característica 1.</p>
            </div>
            <div class="feature-item">
                <h3>Feature 2</h3>
                <p>Descripción de la característica 2.</p>
            </div>
            <div class="feature-item">
                <h3>Feature 3</h3>
                <p>Descripción de la característica 3.</p>
            </div>
        </div>
    </div>
</body>
</html>
