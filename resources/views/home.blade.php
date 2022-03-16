@extends('layouts.app')
@push('style')
<style>
    .above {
        height: 100vh;
        width: 100%;
        min-height: 500px;
        background-image: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0) 20%), url('imagenes/muebles_above.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .cardicono {
        border-radius: 30px;
        background: #f3d1b5;
    }

    .sombraImg {
        box-shadow: 5px 5px 8px #530606;
    }

    .btnAbove {
        background-color: #530606;
        padding: 15px 30px; 
        font-weight: 600;
        font-size: 20px;
        color: white;
        border-radius: 12px;
    }

    .sobreNosotros {
        height: 500px;
        width: 100vw;
    }

    .sobreNosotrosNoFoto {
        height: 500px;
        width: 50vw;
        background-color: #530606;
        color: white;
    }

    .sobreNosotrosFoto {
        height: 500px;
        width: 50vw;
        background-image: linear-gradient(transparent, rgba(78, 77, 77, 0.619) 95%), url('imagenes/muebles-avenida-portugalete-foto-1.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endpush
@section('content')

<!-- contenedor above the fold -->
<div class="container-fluid above mb-5 py-3">
    <div class="row h-100 align-items-center justify-content-center">
        <div class="col-12 text-center">
            <h1 class="reveal">MUEBLES AVENIDA</h1>
            <h2 class="reveal">Convierte tu casa en TU HOGAR</h2>
            <button type="submit" class="btn btnAbove">Comenzar!</button>
        </div>
    </div>
</div>

<!-- contenedor con las cards -->
<div class="container my-5 py-5">
    <!-- row con el titulo de las cards -->
    <div class="row">
        <div class="col-12 text-center">
            <h2>DISFRUTA DE NUESTRAS VENTAJAS</h2>
        </div>
    </div>
    <!-- row my-3 py-3 con las cards -->
    <div class="row my-3 py-3">
        <!-- primera col con card -->
        <div class="col-12 col-md-4 text-center mb-3">
            <div class="card shadow cardicono border-0 p-3 revealAds">
                <div>
                    <lord-icon src="https://cdn.lordicon.com/zpxybbhl.json" trigger="loop"
                        colors="primary:#530606,secondary:#530606" style="width:150px;height:150px"></lord-icon>
                </div>
                <p class="mb-0 mt-3 fw-bold text-uppercase">Asesoramiento personalizado sin compromiso</p>
            </div>
        </div>
        <!-- segunda col con card -->
        <div class="col-12 col-md-4 text-center mb-3">
            <div class="card shadow cardicono border-0 p-3 revealAds">
                <div>
                    <lord-icon src="https://cdn.lordicon.com/uetqnvvg.json" trigger="loop"
                        colors="primary:#530606,secondary:#530606" style="width:150px;height:150px">
                    </lord-icon>
                </div>
                <p class="mb-0 mt-3 fw-bold text-uppercase">Envios y montajes a domicilio sin coste alguno</p>
            </div>
        </div>
        <!-- tercera col con card -->
        <div class="col-12 col-md-4 text-center mb-3">
            <div class="card shadow cardicono border-0 p-3 revealAds">
                <div>
                    <lord-icon src="https://cdn.lordicon.com/qrbokoyz.json" trigger="loop"
                        colors="primary:#530606,secondary:#530606" style="width:150px;height:150px">
                    </lord-icon>
                </div>
                <p class="mb-0 mt-3 fw-bold text-uppercase">Disfruta de nuestras ofertas en la seccion de outlet</p>
            </div>
        </div>
    </div>
</div>

<!-- contendor con description -->
<div class="container my-0 py-0 my-md-3 py-md-3">
    <div class="row my-3 py-3">
        <div class="col-12 col-md-6 reveal">
            <img src="/imagenes/muebles.jpg" height="800" width="500" class="d-none d-xl-block mx-auto sombraImg"
                alt="">
        </div>
        <div class="col-12 col-xl-6 text-center mt-0 mt-md-5 reveal">
            <h3>MAS DE 50 AÑOS DECORANDO HOGARES</h3>
            <h4 class="py-2 fw-bold">LOREM IPSUM</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque reprehenderit dignissimos similique
                provident aperiam enim.</p>
            <h4 class="py-2 fw-bold">LOREM IPSUM</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque reprehenderit dignissimos similique
                provident aperiam enim.</p>
            <h4 class="py-2 fw-bold">LOREM IPSUM</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque reprehenderit dignissimos similique
                provident aperiam enim.</p>
            <div id="carouselExampleControls" class="carousel slide sombraImg mt-4 reveal" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagenes/muebles_above.jpg" class="d-block w-100" style="height: 350px" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/muebles_above_1.jpg" class="d-block w-100" style="height: 350px" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/muebles_above_2.jpg" class="d-block w-100" style="height: 350px" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="imagenes/muebles_above_3.jpg" class="d-block w-100" style="height: 350px" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach($articles as $article)
        <div class="col-12 col-md-3 mt-5">
            <div class="card" style="width: 18rem;">
                <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$article->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$article->price}}</h6>
                    <p class="card-text"> {{$article->description}}</p>
                    <div class="d-flex flex-column">
                        <a
                            href="{{route('articles.category',['name'=>$article->category->name,'id'=>$article->category->id])}}">{{$article->category->name}}</a>
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

<!-- contenedor sobre nosotros -->
<div class="container-fluid sobreNosotros my-5 py-5">
    <div class="row h-100">
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center sobreNosotrosNoFoto revealAds">
            <h2 class="my-3 py-3">Sobre Nosotros</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit minima debitis, mollitia nobis iusto eos porro quia molestiae animi veniam vitae aliquam illo soluta enim iste, atque libero eius? Excepturi?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit minima debitis, mollitia nobis iusto eos porro quia molestiae animi veniam vitae aliquam illo soluta enim iste, atque libero eius? Excepturi?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit minima debitis, mollitia nobis iusto eos porro quia molestiae animi veniam vitae aliquam illo soluta enim iste, atque libero eius? Excepturi?</p>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-center sobreNosotrosFoto revealAds"></div>
    </div>
</div>

<!-- contenedor google maps -->
<div class="container-fluid mt-5 pt-5">
    <div class="row my-3 py-3">
        <div class="col-12 text-center reveal">
            <h2>Ven a visitarnos!</h2>
        </div>
        <div class="col-12 m-0 p-0 reveal">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.7416545943015!2d-3.0233705842848977!3d43.31966728195156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4e59863e8ac177%3A0x934b0f7d0fe3146c!2sMuebles%20Avenida!5e0!3m2!1ses!2ses!4v1646652708943!5m2!1ses!2ses" width="1800" height="650" style="border:0; width:100vw" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    ScrollReveal().reveal('.reveal', {
        distance: '100px',
        duration: 800,
        interval: 500
    });
    ScrollReveal().reveal('.revealAds', {
        duration: 600,
        interval: 500,
        scale: 0.85
    });

</script>
@endpush
