    @extends('layouts.main')

    @section('title') 
    @lang('Présentation du système de réservation')
    @endsection

    @push('styles')
    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
    @endpush

    @section('content')
     <div class="position-relative p-3 text-center bg-light bg_img_contact" style="height:300px;">
        <div class="col-md-8 p-lg-8 mx-auto my-5">

        </div>
    </div>

<div class="container contact">
    <div class="row">
        <div class="col-md-3 col-bg">
            <div class="contact-info">
                <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                <h2 class="text-white">Contactez-nous</h2>
               
            </div>
        </div>
        <div class="col-md-9">
            <div class="contact-form">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="fname">Nom</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="fname" placeholder="Entrez votre nom de famille" name="fname">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="lname">Prénom</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control" id="lname" placeholder="Entrez votre prénom" name="lname">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Entrez votre email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="comment">Commentaire</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                  </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Envoyer</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
        

     <div class="mt-5"></div>
     &nbsp;
      <div class="mt-5"></div>
                   
             

              
              
    @endsection