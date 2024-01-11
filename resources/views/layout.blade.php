<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Produits</title>
</head>
<body>
    <header>
        <h1>Mes Produits</h1>
        <nav>
            <ul>
                <li><a href="{{ route('products.index') }}">Accueil</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>
