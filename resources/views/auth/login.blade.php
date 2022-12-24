@extends('layouts.app')

@section('subtitle', 'Login')

@section('content')
<div class='grid grid-rows-4 grid-cols-4 gap-4'>

    <div class="bg-green-400 col-span-2 row-span-full">
        <img class="px-2 pt-12" src="{{ asset('storage\Maritozzo.svg') }}" alt="Maritozzo.SVG"> 
    </div>
    
    <!-- FORM -->
    <div class="w-auto max-w-sm col-span-2 row-start-2 row-end-4 mx-12">
        <form class="bg-slate-200 shadow-md rounded px-4 pt-6 pb-8 mb-4" action="/login" method="POST">
            @csrf
            <div class="mb-4">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" type="text" placeholder="Usuario">
            </div>
            <div class="mb-6">
                <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password" type="password" placeholder="Contraseña">
            </div>
            <div class="flex items-center justify-between">
                <input type='submit' value='Login'>
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">Contraseña olvidada?</a>
            </div>
        </form>

        <div class="flex bg-slate-200 shadow-md rounded px-4 py-4 pb-3 mb-4 font-semibold">
            <p class="ml-5 text-base">No tienes una cuenta?<p>
            <a href="{{route('register')}}" class="w-40 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline ml-12">
                Registrar
            </a>
        </div>
        
        <p class="text-center text-gray-500 text-xs">
            &copy;2022 EsTX - Estela. Derechos reservados.
        </p>
    </div>
</div>
@endsection