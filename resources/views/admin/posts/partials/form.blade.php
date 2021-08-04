<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese nombre de la publicacion']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>          
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese slug de la publicacion', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{$message}}</small>          
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class'=> 'form-control']) !!}

    @error('category_id')
        <small class="text-danger">{{$message}}</small>          
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>

    @foreach($tags as $tag)

        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>
        
    @endforeach
    
    @error('tags')
        <br>
        <small class="text-danger">{{$message}}</small>          
    @enderror

    </div>

    <div class="form-group">
        <p class="font-weight-bold">Estado</p>

        <label>
            {!! Form::radio('status', 1, true) !!}
            Borrador
        </label>

        <label>
            {!! Form::radio('status', 2) !!}
            Publicado
        </label>

        <hr>

        
        @error('status')
            <small class="text-danger">{{$message}}</small>          
        @enderror
    </div>

    <div class="row mb-3">
        <div class="col">
            <div class="image-wrapper">
                @isset ($post->image)

                    {{-- <img id="picture" src="{{Storage::url($post->image->url)}}" alt=""> --}}
                    <img id="picture" src="{{asset("storage/" . $post->image->url)}}" alt="">
                @else
                    <img id="picture" src="https://cdn.pixabay.com/photo/2021/07/12/19/42/sup-6421284_960_720.jpg" alt="">
                @endisset
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                {!! Form::label('file', 'Imagen que se mostrara en la publicacion') !!}
                {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
                @error('file')
                    <small class="text-danger">{{$message}}</small>          
                @enderror
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, officiis eum aperiam tempora, quae ducimus unde animi dignissimos nesciunt pariatur ad fugiat illo sint recusandae fugit deserunt rerum debitis illum.</p>
        </div>

    </div>

    <div class="form-group">
        {!! Form::label('extract', 'Extraxto: ') !!}
        {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    
        
        @error('extract')
            <small class="text-danger">{{$message}}</small>          
        @enderror
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Cuerpo de la publicacion: ') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    
    
        
        @error('body')
            <small class="text-danger">{{$message}}</small>          
        @enderror
    </div>