<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>
</head>
<body>
    <header>
        <nav>
            <a href="/mascotas">Mascotas</a> |
            <a href="/servicios">Servicios</a> |
            <a href="/citas">Citas</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        
    </footer>
</body>
</html>
