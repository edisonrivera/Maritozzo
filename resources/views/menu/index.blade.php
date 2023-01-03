@extends ('layouts.template')

@section('subtitle', 'Ver')

@section('content')

@if (Session::has('mensaje'))
  {{ Session::get('mensaje') }}
@endif

<div>
  <a href="{{url('menu/create')}}">Agregar</a>
  <table class="table w-full">
    <!-- head -->
    <thead>
      <tr>         
        <th>N°</th><!--Id-->
        <th>Imagen</th>
        <th>Nombre Platillo</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      @foreach ($platillos as $plato)
      <tr>
        <td>{{$plato -> id}}</td>
        <td>
          <img src="{{asset ('storage').'/'.$plato->image}}" alt="platillo">
        </td>
        <td>{{$plato -> name}}</td>
        <td>{{$plato -> description}}</td>
        <td>{{$plato -> price}}</td>
        <td>
          <a href="{{ url('/menu/'.$plato->id.'/edit')}}">
            Editar 
          </a>

            <form action="{{ url('/menu/'.$plato->id) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Desea eliminarlo?')" value="Borrar"/>
            </form>    
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection