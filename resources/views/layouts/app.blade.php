<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Application')</title>
</head>

<body>
    <header>
        <nav style="display: flex; align-items: center; justify-content: space-between;">
            <ul style="list-style: none; display:flex; gap:10px">
                <li><img src="{{ asset('images/logo-ecole.png') }}" alt="" width="30"></li>
                <li><a href="/">Accueil</a></li>
                <li><a href="/presentation">Presentation</a></li>
                <li><a href="/notes">Resultat</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <ul style="list-style: none;display:flex; gap:10px">
                <li>
                    <input type="search" name="" id="" placeholder="Search">
                </li>
                <li>
                    <input type="submit" value="rechercher">
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <img src="{{ asset('images/back.jpg') }}" alt="">
        @yield('content')
    </main>

    <footer>
        footer
    </footer>
</body>

</html>