<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ url('frontend/images/visit-sumenep-logo.png') }}" alt="Logo Visit Sumenep">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto me-5">
            <li class="nav-item mx-md-2">
              <a class="nav-link active" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="#">Daftar Wisata</a>
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="#testimonialHeading">Testimoni</a>
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="{{ route('pesanan-saya')}}">Pesanan Saya</a>
            </li>
      

          </ul>

          @guest
          <!-- Mobile Button -->
          <form class="form-inline d-sm-block d-md-none">
            <button class="btn btn-login my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}' ">Masuk</button>
          </form>
          <!-- Desktop Button -->
          <form class="form-inline d-none d-md-block">
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}'">Masuk</button>
          </form>
          @endguest

          @auth
              <!-- Mobile Button -->
          <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="POST">
            @csrf
            <button class="btn btn-danger my-2 my-sm-0 px-4">Keluar</button>
          </form>
          <!-- Desktop Button -->
          <form class="form-inline d-none d-md-block" action="{{url('logout')}}" method="POST">
            @csrf
            <button class="btn btn-danger btn-navbar-right my-2 my-sm-0 px-4">Keluar</button>
          </form>
          @endauth

        </div>
      </div>
    </nav>
</div>