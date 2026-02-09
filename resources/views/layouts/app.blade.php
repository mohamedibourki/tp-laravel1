<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application')</title>
</head>

<body>
    <header>
        <h1>Mon Site</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>(:</p>
    </footer>
</body>

</html>
