<div class="form-control w-full max-w-screen-2xl px-8  container mx-auto">
    <label class="label">
        <span class="label-text font-extrabold ">Nombre Platillo:</span>
    </label>
    <input type="text" name="name" value="{{ isset($platillo -> name)?$platillo->name:''}}" placeholder="Escriba aquí" class="input input-bordered text-black w-full max-w-xs rounded-lg" />
    <br>
    <label class="label">
        <span class="label-text font-extrabold ">Descripción: </span>
    </label>
    <input type="text" name="description" value="{{ isset($platillo -> description)?$platillo->description:''}}" placeholder="Escriba aquí" class="text-center input input-bordered text-black w-full h-60 max-w-xs rounded-lg" />
    <br>
    <label class="label">
        <span class="label-text font-extrabold ">Precio:</span>
    </label>
    <input type="decimal" name="price" value="{{ isset($platillo -> price)?$platillo->price:''}}" placeholder="Escriba aquí" class="input input-bordered text-black w-full max-w-xs rounded-lg" />
    <br>
    <label class="label">
        <span class="label-text font-extrabold "> Imagen:</span>
    </label>
    @if(isset($platillo->image))
    <img src="{{asset ('storage').'/'.$platillo->image}}" alt=""/>
    @endif
    <br>
    <input type="file" name="image" value="" class="file-input file-input-bordered file-input-info w-full max-w-xs" />
    <br>
    <input type="submit" value="Guardar datos" class="btn btn-xs sm:btn-sm md:btn-md lg:btn-lg rounded-lg text-white border-inherit"/>
    <a href="{{url('menu/')}}">Volver</a>
</div>
