<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Hola</h1>
    @auth
        <p>Bienvenido {{auth()->user()->username ?? auth()->user()->name}} Estás autenticado</p>
        <a href="{{route('logout')}}"> Logout</a>
    @endauth

    @guest
        <p>No estás autenticado</p>
    @endguest
    
</body>
</html>
