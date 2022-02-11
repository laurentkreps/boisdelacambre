<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Tennis Club du Bois de la Cambre - @yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

    

    <!-- Bootstrap core CSS -->
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
  </head>
  <body>
    
@include('layouts.header')

<main>
  <div class="position-relative overflow-hidden p-3 text-center bg-light bg_img">
    <div class="col-md-8 p-lg-8 mx-auto my-5">
      <h1 class="display-4 fw-normal white_text">Bienvenue au Tennis Club du Bois de la Cambre</h1>
      <div class="mb-5"></div>
      <div class="jumbotron lead fw-normal white_trans_bg">En plein coeur de Bruxelles, le Tennis Club du Bois de la Cambre vous accueille dans un environnement enchanteur et verdoyant. Ses 6 terrains en terre battue surplombent un vaste jardin et une magnifique terrasse où il est plaisant de déjeuner.

Hiver comme été, il fait bon s'y arrêter d'autant plus que, fait rare dans un club de sport, la cuisine est de grande qualité. N'hésitez pas à visiter la partie "Restaurant" de ce site pour en savoir plus...</div>
     
    </div>
   <!--  <div class="product-device shadow-sm d-none d-md-block"></div> -->
    <!-- <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div> -->
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden bg_img_resto">
      <div class="my-3 py-3">
        <h2 class="display-5 white_text">Le Restaurant</h2>
        <div class="jumbotron white_trans_bg"><a class="liens_menu" href="#">Découvrez notre restaurant, notre carte, et nos menus pour vos événements</a>
  <p>&nbsp;<p/>
    Liens rapides:
      <ul class="list-group">
        <li class="list-group-item"><a href="#" class="liens_shortcut">Photos</a></li>
        <li class="list-group-item list-group-item-success"><a href="#" class="liens_shortcut">La carte</a></li>
        <li class="list-group-item"><a href="#" class="liens_shortcut">Les menus</a></li>
        <li class="list-group-item list-group-item-success"><a href="#" class="liens_shortcut">Réservations</a></li>
      </ul>
        </div>
      </div>
     <div>
     
     </div>
    </div>
    <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden bg_img_club">
      <div class="my-3 p-3">
        <h2 class="display-5 white_text">Le Club</h2>
        <div class="jumbotron white_trans_bg"><a class="liens_menu" href="#">Découvrez notre club, ses terrains de tennis (indoor / outdoor), son école et ses animations</a>
          <p>&nbsp;</p>
<p> Liens rapides:</p>
      <ul>
        <li class="list-group-item"><a href="#" class="liens_shortcut">Photos</a></li>
        <li class="list-group-item list-group-item-success"><a href="#" class="liens_shortcut">Les terrains</a></li>
        <li class="list-group-item"><a href="#" class="liens_shortcut">Réservations</a></li>
        <li class="list-group-item list-group-item-success"><a href="#" class="liens_shortcut">L'école de tennis</a></li>
        <li class="list-group-item"><a href="#" class="liens_shortcut">Les cours</a></li>
        <li class="list-group-item list-group-item-success"><a href="#" class="liens_shortcut">Les stages</a></li>
        <li class="list-group-item"><a href="#" class="liens_shortcut">Inscriptions</a></li>
      </ul>
        </div>
        <div>
     
     </div>
      </div>
      
    </div>
  </div>

</main>

<!-- Remove the container if you want to extend the Footer to full width. -->
  <!-- Footer -->
 @include('layouts.footer')


  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="https://kit.fontawesome.com/9a75d89802.js" crossorigin="anonymous"></script>
      
  </body>
</html>
