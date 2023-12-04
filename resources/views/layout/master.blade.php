<!doctype html>
<html lang="ru" data-bs-theme="auto">
    <head>
        <script src="/docs/5.3/assets/js/color-modes.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Andrej Spinej">
        <meta name="theme-color" content="#712cf9">

        <title>{{ config('app.name') }}</title>

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

            <div class="container">
                @include('layout.flash_message')
            </div>

            @yield('content')

            @include('layout.sidebar')
        
            @include('layout.footer')


            @push('scripts')
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            @endpush
            
            @prepend('scripts')
                ///
            @endprepend

            @stack('scripts')

        </body>
</html>
