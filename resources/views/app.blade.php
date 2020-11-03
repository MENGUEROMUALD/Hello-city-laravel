<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <title>@yield('title', config('app.name'))</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="flex flex-col justify-between min-h-screen items-center">

    <main role="main" class="flex flex-col justify-center items-center">
        @yield('contenu')
    </main>

        <footer class="mb-5">
            <p class="text-gray-400">&copy; Copyright {{date('Y',time())}}
            @if(!Route::is('apropos')) 
                &middot;<a href="{{ route('apropos')}}" class="text-indigo-500 hover:text-indigo-700 underline">A propros</a>
            </p>
            @endif
        </footer>
    </body>
</html>
