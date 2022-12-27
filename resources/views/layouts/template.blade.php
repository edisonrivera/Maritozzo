<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('storage\favicon.svg')}}" type="image/svg">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Maritozzo | @yield('subtitle')</title>
</head>
<body>
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
</body>
</html>