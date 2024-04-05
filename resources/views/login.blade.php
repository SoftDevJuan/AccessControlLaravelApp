<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">

    <title>Login / Registro</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="{{ route('sobre_nosotros') }}">Sobre Nosotros</a></li>
                <li><a href="{{ route('contacto') }}">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Login / Registro</h1>
        <!-- Aquí puedes colocar tu formulario de login o registro usando Blade -->
        <form action="{{ route('login') }}" method="POST">
    @csrf <!-- Agrega el token CSRF para seguridad -->

    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
        <label class="form-check-label" for="rememberMe">Recordarme</label>
    </div>

    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    <a href="">Registrate</a>
</form>
    </main>
    <footer>
        <p>Derechos de autor © {{ date('Y') }}. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
