<nav id="nav" class="navbar navbar-expand-md navbar-light fixed-top" aria-label="Fourth navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">MUEBLES AVENIDA</a>
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item m-2">
            <a class="nav-link active fw-bold fs-5 text-uppercase" href="{{ route('login') }}">Iniciar Sesion</a>
          </li>
          <li class="nav-item m-2">
            <a class="nav-link active fw-bold fs-5 text-uppercase" href="{{ route('register') }}">Registrarse</a>
          </li>
          <li class="nav-item m-2">
            <a class="nav-link active fw-bold fs-5 text-uppercase" href="{{ route('articles.create') }}">Crear Articulo</a>
          </li>
          <li class="nav-item m-2">
            <a class="nav-link active fw-bold fs-5 text-uppercase" href="{{ route('articles.index') }}">Todos los articulos</a>
          </li>     
          <li class="nav-item m-2 dropdown">
            <a class="nav-link active fw-bold fs-5 text-uppercase dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($categories as $category)
            <li>
                <a class="dropdown-item" href="{{route('articles.category',['name'=>$category->name,'id'=>$category->id])}}">{{$category->name}}</a>
            </li>
            <li><hr class="dropdown-divider"></li>
            @endforeach
            </ul>
          </li>
          <li class="nav-item m-2 dropdown">
            <a class="nav-link active fw-bold fs-5 text-uppercase dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Desplegable Usuario</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown04">
                @auth
                <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
                @endauth
            </ul>
          </li>
          <form action="{{route('logout')}}" method="POST">
          @csrf
          <button class="nav-link m-2 active fw-bold fs-5 text-uppercase bg-transparent text-decoration-none border-0" type="submit">Logout</button>
          </form>
        </ul>
      </div>
    </div>
</nav>