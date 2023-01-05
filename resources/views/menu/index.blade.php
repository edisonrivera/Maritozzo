@extends ('layouts.template')

@section('subtitle', 'Ver')

@section('content')

@if (Session::has('mensaje'))
<div class="p-4 mb-4 mx-12 mt-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
  <span class="font-medium">{{ Session::get('mensaje') }} </span> 
</div>
@endif

<div class="flex justify-end">
    <a class="btn btn-accent m-4" href="{{url('menu/create')}}">Agregar</a>
</div>
<!--Search-->
<form action="{{url('/menu')}}" method="get" class="flex items-center justify-start lg:mx-48 w-3/12">   
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" name="texto" id="simple-search" value="{{$texto}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Search" required>
    </div>
    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <span class="sr-only">Buscra</span>
    </button>
</form>
<!--End Search-->
<!--Table-->
<div class="container">
 <!--div Users Table-->
 <h1 class="text-extrabold text-green-500 text-center text-2xl py-6"> Lista de platos </h1>
  <div class="overflow-x-auto md:px-48 lg:px-48">
    <table class="table w-full border-separate border-spacing-2">
      <!-- head -->
      <thead>
        <tr class="text-center">
          <th class="border border-cyan-500 bg-white">N°</th><!--Id-->
          <th class="border border-cyan-500 bg-white">Imagen</th>
          <th class="border border-cyan-500 bg-white">Nombre Platillo</th>
          <th class="border border-cyan-500 bg-white">Descripción</th>
          <th class="border border-cyan-500 bg-white">Precio</th>
          <th class="border border-cyan-500 bg-white">Acciones</th>
        </tr>
      </thead>
    <tbody class="text-center">
      @if (count($platillos)<=0)
        <tr>
          <td class="font-extrabold text-blue-500">
            No hay resultados
          </td>
        </tr>
      @else
      <!-- row 1 -->
      @foreach ($platillos as $plato)
      <tr>
        <td class="border  border-green-500">{{$plato -> id}}</td>
        <td class="border  border-green-500">
          <img src="{{asset ('storage').'/'.$plato->image}}" alt="platillo">
        </td>
        <td class="border  border-green-500">{{$plato -> name}}</td>
        <td class="border  border-green-500">{{$plato -> description}}</td>
        <td class="border  border-green-500">{{$plato -> price}}</td>
        <td>
          <a class="btn" href="{{ url('/menu/'.$plato->id.'/edit')}}">
            Editar 
          </a>

          <form action="{{ url('/menu/'.$plato->id) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn" type="submit" onclick="return confirm('¿Desea eliminarlo?')" value="Borrar"/></span> 
          </form>
        </td>
      </tr>
      @endforeach
      @endif
    </tbody>
    </table>
    <div class="grid grid-rows-1">   
      {!!$platillos ->links()!!}
    </div>
</div>
<!-- End div Table-->

@endsection