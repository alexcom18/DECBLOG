<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre de el role...']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>          
    @enderror

</div>

<h2 class="h3">Lista de permisos</h2>

@foreach ($permissions as $permission)

    <div>
        <label>
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mr-1']) !!}
            {{$permission->description}}
        </label>
    </div>
@endforeach

{{-- <div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese slug de el role...', 'readonly']) !!}

    @error('slug')
    <span class="text-danger">{{$message}}</span>          
    @enderror
</div> --}}