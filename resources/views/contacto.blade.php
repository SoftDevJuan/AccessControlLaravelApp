<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
        <h1>Contacto</h1>
        <p>Puedes contactarnos a través del siguiente formulario:</p>
        <form >
            @csrf <!-- Agrega el token CSRF para seguridad -->
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>
            <button type="submit">Enviar Mensaje</button>
        </form>
    </main>
    <footer>
        <p>Derechos de autor © {{ date('Y') }}. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
