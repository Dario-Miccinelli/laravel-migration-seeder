<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="bg-black text-white w-100 m-auto">
    <header class="w-75 m-auto text-center">
        @yield('page-header')
    </header>

    <main class="w-75 m-auto pt-5">
        @yield('page-main')
    </main>

</body>
</html>
