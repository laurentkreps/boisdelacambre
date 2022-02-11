    @extends('layouts.main')

    @section('title') 
    @lang('Présentation du système de réservation')
    @endsection

    @section('content')
     <div class="position-relative overflow-hidden p-3 text-center bg-light bg_img_reservation">
        <div class="col-md-8 p-lg-8 mx-auto my-5">
          <h1 class="display-4 fw-normal white_text">Le système de réservation</h1>
          <div class="mb-5"></div>
          <div class="jumbotron lead fw-normal white_trans_bg text-start"><p>A compter de ce début de saison 2020/21, votre club a adopté le système de réservation <a href="https://ballejaune.com/club/boisdelacambre" class="liens_menu">ballejaune.com</a>. </p>

<p>Le système se veut plus simple, et vous permet de faire plus de choses: créer un nouveau compte, annuler vos terrains, rechercher des partenaires et bien plus encore !</p>

<p>Tous les comptes actifs ces 3 dernières années ont été transférés sur la nouvelle plateforme, et vous devriez avoir déjà reçu vos identifiants de connexion par email (n'hésitez pas à consulter vos spams).</p>

<p>Dans le cas contraire, nous vous invitons à nous le signaler: <a href="mailto:info@boisdelacambre.be" class="liens_menu">info@boisdelacambre.be</a></p>

<p>Nous vous invitons également à vérifier que vos données soient correctes (principalement vos adresse email, nom, numéro de téléphone et votre solde). Votre ancien profil est toujours disponible.</p>
<p class="text-center"><a href="https://ballejaune.com/club/boisdelacambre" class="liens_menu"> <img src="{{ asset('images/ballejaune.png') }}" width="200" /><br>Vers la plateforme de réservation</a></p>
           </div>
         
        </div>
    </div>

   

        

    
                   
                </div>
               </div>

              
              
    @endsection