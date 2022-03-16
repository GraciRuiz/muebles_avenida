@extends('layouts.app')
@section('content')
<div class="container my-5 py-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Indice de todos los Articulos</h1>
        </div>
        @foreach ($articles as $article)
        <div class="col-12 col-md-3 mt-5">
            <div class="card" style="width: 18rem;">
                <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{$article->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$article->price}}</h6>
                    <p class="card-text"> {{$article->description}}</p>
                    <div class="d-flex flex-column">
                        <a href="#">{{$article->category->name}}</a>
                        @foreach ($article->tags as $tag)
                        <a href="">#{{ $tag->name }}</a>
                        @endforeach
                        <i>{{$article->created_at->format('d/m/Y')}}</i>
                        <a href="{{route("articles.details", ['id'=>$article->id])}}">Detalles</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
