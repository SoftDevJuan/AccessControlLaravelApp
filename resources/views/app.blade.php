<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre del Proyecto</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
    <div class="container-fluid">
    <button id="toggle-sidebar-buttonwe">Toggle Sidebar</button>
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                

                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    Opción 1
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Opción 2
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Opción 3
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Opción 4
                </a>
            </li>
        </ul>
        <ul class="nav flex-column mt-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>

                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="row">
        <!-- Primer div horizontal -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <!-- Contenido de la primera tarjeta -->
                    <h5 class="card-title">Tarjeta 1</h5>
                    <p class="card-text">Aquí puedes poner algunos datos informativos.</p>
                </div>
            </div>
        </div>
        
        <!-- Segundo div horizontal -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <!-- Contenido de la segunda tarjeta -->
                    <h5 class="card-title">Tarjeta 2</h5>
                    <p class="card-text">Aquí puedes poner algunos datos informativos.</p>
                </div>
            </div>
        </div>
        
        <!-- Tercer div horizontal -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <!-- Contenido de la tercera tarjeta -->
                    <h5 class="card-title">Tarjeta 3</h5>
                    <p class="card-text">Aquí puedes poner algunos datos informativos.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Tabla 1 -->
    <div class="row mt-4">
        <div class="col-md-12">
            <h3>Tabla 1</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí puedes llenar la tabla con datos dinámicos -->
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Tabla 2 -->
    <div class="row mt-4">
        <div class="col-md-12">
            <h3>Tabla 2</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Aquí puedes llenar la tabla con datos dinámicos -->
                </tbody>
            </table>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="mt-4">
        <p>Footer de tu aplicación</p>
    </footer>
</main>

                @yield('content')
            </main>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
