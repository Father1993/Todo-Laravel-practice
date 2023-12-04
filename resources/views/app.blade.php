<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App- @yield('title')</title>
</head>
<body>
    
    @section('sidebar')
        Контент по умолчанию в боковой панели
    @show

    <div>
        @yield('content')
    </div>

</body>
</html>