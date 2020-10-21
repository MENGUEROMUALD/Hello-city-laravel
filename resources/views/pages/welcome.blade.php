<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello-city</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Bienvenue à Douala</h1>

        <p>Il est actuellement {{ date("H:i",time()) }}</p>

        <footer>
            <p>&copy; Copyright {{date('Y',time())}} &middot; <a href="/a-propos">A propros</a></p>
        </footer>
    </body>
</html>
