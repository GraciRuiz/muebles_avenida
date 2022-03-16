@extends('layouts.app')
@section('content')
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1><i>CREAR ARTICULO</i></h1>
        </div>
        <div class="col-12">
            <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    Nuevo anuncio (Secret: {{$uniqueSecret}})
                </div>
                <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre Del Articulo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name"
                        value="{{old ('name') }}">
                    @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Precio Del Articulo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="price"
                        value="{{ old('price') }}">
                    @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="form-label">Categorias</label>
                    <select class="form-control" id="categories" name="category_id">
                        @foreach($categories ?? '' as $category)
                        <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected' : ''}}>
                            {{$category->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="form-label">Etiquetas</label>
                    <select class="form-select" aria-label="default select example" name="tags[]">
                        @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripcion Del Articulo</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"
                        name="description">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="articleImages" class="form-label">Subir Imagenes</label>
                <div class="dropzone" id="drophere"></div>
                    @error('images')
                    <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
                    <button class="btn btn-success" type="submit">Subir Articulo</button>
                {{-- <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Subir Imagenes</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" name="image"
                        value="{{ old('image') }}">
                    @error('image')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div> --}}
            </form>
        </div>
    </div>
</div>
@endsection
