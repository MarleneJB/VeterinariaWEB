<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <header>
        <h1>Bienvenido a nuestra plataforma</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/mascotas') }}">Mascotas</a></li>
                <li><a href="{{ url('/servicios') }}">Servicios</a></li>
                <li><a href="{{ url('/citas') }}">Citas</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Explora nuestra plataforma:</h2>
        <ul>
            <li><a href="{{ url('/mascotas') }}">Ver mascotas</a></li>
            <li><a href="{{ url('/servicios') }}">Ver servicios</a></li>
            <li><a href="{{ url('/citas') }}">Ver citas</a></li>
        </ul>
    </main>

    <footer>
        <p>&copy; 2024 Plataforma de Mascotas</p>
    </footer>
</body>
</html>



