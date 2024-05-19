<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | {{ config('app.name', 'My App') }}</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <!-- My Css -->
    @yield('adds')

    <!-- My Css -->
    <!-- Add Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add Tailwind -->

</head>
<body>
    @yield('content')
</body>
</html>
