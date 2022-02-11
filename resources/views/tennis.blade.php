    @extends('layouts.main')

    @section('title') 
    @lang('Présentation du restaurant')
    @endsection

    @section('content')
     <div class="position-relative overflow-hidden p-3 text-center bg-light bg_img_tennis_bandeau">
        <div class="col-md-8 p-lg-8 mx-auto my-5">
          <h1 class="display-4 fw-normal white_text">Le tennis</h1>
          <div class="mb-5"></div>
          <div class="jumbotron lead fw-normal white_trans_bg text-start"><p>Le Tennis Club du Bois de la Cambre est, avant toute chose, un club de tennis. Ses 6 terrains de terre battue, couverts en hiver et extérieurs en été, accueille petits et grands, membres ou non, pour une partie de tennis entre amis, un cours ou un tournoi.</p>
           <p>Car il ne faut pas être membre pour jouer au TC Bois de la Cambre, ni payer de cotisation, la seule chose que vous devez faire, c'est de vous inscrire sur ce site. Ensuite, vous avez deux possiblités:</p>

<p><strong>- vous pouvez réserver un "terrain fixe":</strong><br/>
dans ce cas, vous vous engagez à venir jouer, chaque semaine à la même heure et pour toute la saison. Vous payer alors un tarif préférentiel et ne devrez pas payer à chaque fois mais en deux temps (en septembre et en janvier). Lorsque, pour une raison ou une autre, vous ne pouvez pas venir jouer, vous pouvez récupérer ce terrain (endéans la saison) à condition de prévenir le club au moins 24 heures à l'avance. Pour réserver un terrain fixe, veuillez nous contacter par email (info@boisdelacambre.be)</p>

<p><strong>- vous pouvez réserver un "terrain occasionnel":</strong><br/>
il vous faut alors créditer votre compte sur ce site, soit via la plateforme "balle jaune", soit sur place. Le terrain se paie à la réservation. Vous pouvez créditer votre compte et réserver <a href="#" class="liens_menu">sur cette page</a>.</p>

<p>L'école de tennis propose des cours et des entraînements tous les jours, pour le débutants comme pour les compétiteurs. N'hésitez pas à parcourir la partie consacrée à l'école de tennis.</p>

           </div>
         
        </div>
    </div>
    <a name="photos"></a>
     <div class="mt-5"></div>
    <div class="page-section text-center">
            <h1 class="page-title">Les photos</h1>
                        </div>

    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div id="carouselPhotosControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselPhotosControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Photo 1"></button>
        <button type="button" data-bs-target="#carouselPhotosControls" data-bs-slide-to="1" aria-label="Photo 2"></button>
        <button type="button" data-bs-target="#carouselPhotosControls" data-bs-slide-to="2" aria-label="Photo 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/tennis01.jpeg') }}" class="d-block w-100" alt="Photo 1">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/tennis02.jpeg') }}" class="d-block w-100" alt="Photo 2">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/tennis03.jpeg') }}" class="d-block w-100" alt="Photo 3">
        </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselPhotosControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselPhotosControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>
    </div>
    </div>

     <div class="mt-5"></div>
    
                   
                </div>
               </div>

              
              
    @endsection