<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('welcome') }}">Inicio</a></li>
                <li><a href="{{ route('sobre_nosotros') }}">Sobre Nosotros</a></li>
                <li><a href="{{ route('contacto') }}">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Sobre Nosotros</h1>
        <p>Somos una empresa dedicada a...</p>
        <p>Contamos con un equipo de expertos en...</p>
        <p>Estamos comprometidos con la calidad y...</p>
    </main>
    <footer>
        <p>Derechos de autor © {{ date('Y') }}. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
