<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href=" {{ asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@200;400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    @include('components.header')
    @yield('main')
    @include('components.footer')

</body>
</html>
