@extends ('layouts.template')

@section('subtitle', 'Ver')

@section('content')
@if (Session::has('mensaje'))
  {{ Session::get('mensaje') }}
@endif

<div>
  <div class="flex justify-end">
    <a class="btn btn-accent m-4 bg-emerald-300 px-10 hover:bg-emerald-500 hover:border-inherit border-inherit" href="{{url('menu/create')}}"><img src="{{asset ('storage/add-icon.png')}}" alt="add.svg"></a>
  </div>
  <div class="px-5">
    <table class="table w-full">
      <!-- head -->
      <thead>
        <tr class="text-center">         
          <th class="text-xl font-mono font-bold text-center">N°</th><!--Id-->
          <th class="text-xl font-mono font-bold">Imagen</th>
          <th class="text-xl font-mono font-bold">Nombre</th>
          <th class="text-xl font-mono font-bold">Descripción</th>
          <th class="text-xl font-mono font-bold">Precio</th>
          <th class="text-xl font-mono font-bold">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <!-- row 1 -->
        @foreach ($platillos as $plato)
        <tr class="text-xl font-mono text-center">
          <td>{{$plato -> id}}</td>
          <td>
            <img src="{{asset ('storage').'/'.$plato->image}}" alt="platillo" class="w-68 h-48">
          </td>
          <td>{{$plato -> name}}</td>
          <td>{{$plato -> description}}</td>
          <td>${{$plato -> price}}</td>
          <td>
            <a class="btn my-2 bg-blue-700 hover:bg-blue-800 text-white hover:border-inherit border-inherit" href="{{ url('/menu/'.$plato->id.'/edit')}}">
              <img src="{{asset ('storage/edit-icon.png')}}" alt="edit.svg" class="pr-3">
              Editar 
            </a>
  
            <form action="{{ url('/menu/'.$plato->id) }}" method="post">
              @csrf
              {{ method_field('DELETE') }}
              <button type="submit" class="btn my-2 bg-red-500 hover:bg-red-700 text-white hover:border-inherit border-inherit" onclick="return alert()" value="BORRAR">
                <img src="{{asset ('storage/delete-icon.png')}}" alt="delete.svg" class="pr-3">
                BORRAR
              </button>
              
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <script>
    function alert(){
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
          )
        }
      })      
    }


  </script>
</div>
@endsection