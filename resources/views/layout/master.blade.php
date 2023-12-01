<!doctype html>
<html lang="ru" data-bs-theme="auto">
    <head>
        <script src="/docs/5.3/assets/js/color-modes.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Andrej Spinej">
        <meta name="theme-color" content="#712cf9">

        <title>Andrej Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/blog.css">
        <style>
            .completed {
                text-decoration: line-through;
            }
        </style>

    </head>
        <body>

            @include('layout.nav')

            @yield('content')
        
            @include('layout.footer')

        </body>
</html>
