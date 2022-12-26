@extends('layouts.app')

@section('subtitle', 'Login')

@section('content')
<!-- Container -->
<div class="grid justify-items-center font-mono">
    <div class="flex justify-center px-6 my-12">
        <!-- Row -->
        <div class="w-full xl:w-3/4 lg:w-11/12 flex">
            <!-- Col -->
            <div
                class="w-full h-auto bg-green-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg p-2 pt-12"
                img="background-image: url('../../images/Maritozzo.svg')"
            >
            <img src = "{{asset('/storage/Maritozzo.svg')}}" alt="Maritozzo.svg">
            </div>
            <!-- Col -->
            <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none bg-gray-100">
                <form class="px-8 pt-6 pb-8 mb-4 bg-gray-100 rounded" method="POST" action="/login">
                    @csrf
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            Usuario / Email
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            type="text"
                            placeholder="Carlos o carlos@carlos.com"
                            name="username"
                        />
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            Contraseña
                        </label>
                        <input
                            class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            id="email"
                            type="password"
                            placeholder="******************"
                            name="password"
                        />
                    </div>
                    
                    <div class="mb-6 text-center">
                        <button
                            class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                            type="submit"
                        >
                            Continuar
                        </button>
                    </div>
                    <hr class="mb-6 border-t" />
                    <div class="text-center">
                        <a
                            class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                            href="#"
                        >
                            Olvidaste tu contraseña?
                        </a>
                    </div>
                    <div class="text-center">
                        <a
                            class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                            href="{{route('register')}}"
                        >
                            No tienes una cuenta? Registrate!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection