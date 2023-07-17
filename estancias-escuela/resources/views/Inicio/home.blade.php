@include('assets.template2')
<div id="content-container">
<!DOCTYPE html>
<html lang="en">

<head>
  <title>sliine</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('estiloslidehome.css') }}">
  <link rel="stylesheet" href="{{ asset('css/navbar-space.css') }}">
  <link rel="stylesheet" href="{{ asset('css/fondocolor.css') }}">
  <link rel="stylesheet" href="{{ asset('css/carddepublicaciones.css') }}">
  <link rel="stylesheet" href="{{ asset('css/botondelike.css') }}">
  <link rel="stylesheet" href="{{ asset('js/carddepublicaciones.js') }}">
  <!--slide-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C600%2C700%2C700italic%7COswald%3A400%2C300%7CVollkorn%3A400%2C400italic'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Akivpde0iWs0fALBvJNt5X6Fg3AXK09QmK5TCM1rWj4M5kq9P9Y9o5Y/pB4fsay4lzrZg8yIYV6Td9WT8J+9pQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--fin-->
  <script src="{{asset('js/jadeslidehome.js')}}"></script>
  <script src="{{asset('js/botondelike.js')}}"></script>
  <script src="{{asset('js/botondecomentario.js')}}"></script>
</head>

<body>
 
<main class="main-content">
  <section class="slideshow">
    <div class="slideshow-inner">
      <div class="slides">
        <div class="slide is-active ">
          <div class="slide-content">
            <div class="caption">
              <div class="title">Slide title 1</div>
              <div class="text">
                <p>Slide description 1</p>
              </div> 
              <a href="#" class="btn">
                <span class="btn-inner">Learn More</span>
              </a>
            </div>
          </div>
          <div class="image-container"> 
            <img src="https://www.alixbdanthenay.fr/wp-content/uploads/2015/07/Indispensable-1.jpg" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">Slide title 2</div>
              <div class="text">
                <p>Slide description 2</p>
              </div> 
              <a href="#" class="btn">
                <span class="btn-inner">Learn More</span>
              </a>
            </div>
          </div>
          <div class="image-container">
            <img src="https://www.alixbdanthenay.fr/wp-content/uploads/2015/07/Indispensable-4-1.jpg" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">Slide title 3</div>
              <div class="text">
                <p>Slide description 3</p>
              </div> 
              <a href="#" class="btn">
                <span class="btn-inner">Learn More</span>
              </a>
            </div>
          </div>
          <div class="image-container">
            <img src="https://www.alixbdanthenay.fr/wp-content/uploads/2016/11/11.jpg" alt="" class="image" />
          </div>
        </div>
        <div class="slide">
          <div class="slide-content">
            <div class="caption">
              <div class="title">Slide title 4</div>
              <div class="text">
                <p>Slide description 4</p>
              </div> 
              <a href="#" class="btn">
                <span class="btn-inner">Learn More</span>
              </a>
            </div>
          </div>
          <div class="image-container"> 
            <img src="https://www.alixbdanthenay.fr/wp-content/uploads/2016/11/20mars17-sans-typo.jpg" alt="" class="image" />
          </div>
        </div>
      </div>
      <div class="pagination">
        <div class="item is-active"> 
          <span class="icon">1</span>
        </div>
        <div class="item">
          <span class="icon">2</span>
        </div>
        <div class="item">
          <span class="icon">3</span>
        </div>
        <div class="item">
          <span class="icon">4</span>
        </div>
      </div>
      <div class="arrows">
        <div class="arrow prev">
          <span class="svg svg-arrow-left">
            <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"/> </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
        <div class="arrow next">
          <span class="svg svg-arrow-right">
            <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"> <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"/> </svg>
            <span class="alt sr-only"></span>
          </span>
        </div>
      </div>
    </div> 
  </section>
</main>
<!-- fin del slide -->

</div><!-- End // .directional_nav -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js'></script>
<script src="{{asset('js/jadeslidehome.js')}}"></script>

 <!-- Agregar espacio -->
 <div class="navbar-space"></div>
 <!---->
 
 <!-- card de publicaciones -->
 <div class="card-container">
  @foreach($publicaciones as $publicacion)
    <div class="card">
      <!-- <div class="card-image" style="background-image: url('{{ $publicacion->imagen }}');"></div> -->
    <!-- ======================================= -->
    <!-- ARRIVA FALTA AGREGAR UN CAMPO EN LA BASE DE DATOS CON LA IMAGEN COMENTE LA LINEA PARA EVITAR ERRORES-->
    <!-- ======================================= -->
      <p class="card-title">{{ $publicacion->title }}</p>
      
      <div class="button-container">
        <!-- Botón de "Me gusta" -->
        <button id="like-button" class="like-button">
          <span class="heart-icon"><i class="fa fa-heart"></i></span>
          <span id="like-count" class="like-count">0</span>
        </button>

        <!-- icono de "Comentario" -->
        <i class="fas fa-comment"></i>

        <!-- icono de "compartir" -->
        <i class="fas fa-share"></i>

      </div>
      <p class="card-body">
        {{ $publicacion->description }}
      </p>
      <p class="footer">
         <!-- ======================================= -->
    <!-- iGUAL AQUI LOS CAMPOS DE AUTOR NO LO TIENES EL DE FECHA ES CAMBIARLO POR CREATE AD-->
    <!-- ======================================= -->
        <span class="by-name">{{ $publicacion->autor }}</span>
        <span class="date">{{ $publicacion->created_at }}</span>
      </p>
    </div>
  @endforeach
</div>

<!-- fin de car -->


</body>