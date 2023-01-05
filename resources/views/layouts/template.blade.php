<!DOCTYPE html>
<html lang="en" class="scroll-smooth" data-theme="bumblebee">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('storage\favicon.svg')}}" type="image/svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.46.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Maritozzo | @yield('subtitle')</title>
</head>
<body class="font-mono">
    @include('partials.navbar')
    <main>
        @yield('content')
        <!-- Card for booking -->
        <div class="grid justify-items-center py-4">
            <div class="card lg:card-side bg-base-100 w-1/2 items-center">
                <figure><img src="{{asset('storage/chef.png')}}" alt="chef" class="h-80 rounded-xl"/></figure>
                <div class="card-body justify-center font-['Open_Sans'] bg-amber-100 h-96 rounded-xl px-6">
                    <h2 class="card-title text-4xl text-center font-extrabold mx-16">Restaurante Maritozzo</h2>
                    <h3 class="font-semibold text-center"> Cocina italiana </h3>
                    <span class="text-center">1 estrella Michelin Guide</span>
                    <p class="text-center">Nos satisface prepararte los mejores platillos italianos</p>
                    <span class="text-center">Número para reservaciones</span>
                    <div class="card-actions justify-center">
                    <a href="https://walink.co/77719d" class="underline">+593 98 968 8541</a></button>
                </div>
            </div>
        </div>
    </main>
    @include('partials.footer')
</body>
</html>