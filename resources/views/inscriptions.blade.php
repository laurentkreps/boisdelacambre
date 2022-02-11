    @extends('layouts.main')

    @section('title') 
    @lang('Présentation du système de réservation')
    @endsection

    @section('content')
    <div class="position-relative overflow-hidden p-3 text-center bg-light bg_img_inscriptions">
        <div class="col-md-8 p-lg-8 mx-auto my-5">
          <h1 class="display-4 fw-normal white_text">Inscriptions à l'école de tennis</h1>
          <div class="mb-5"></div>
          
      </div>
  </div>







</div>
</div>

<div class="container px-5 my-5" style="background-color: #0d6a36; box-shadow: 5px 10px #888888;">
    <div class="mt-5">&nbsp;</div>
    <form action="{{ url('/post/inscription') }}" method="post" id="contactForm" class="requires-validation" novalidate>
        <h4 class="text-white"><i class="fas fa-user-edit"></i> Nous vous invitons à remplir le formulaire ci-dessous pour vos inscriptions à nos cours et stages.</h4>
        <div class="mt-3">&nbsp;</div>
        <div class="form-floating mb-3">
            <input class="form-control" id="votreNom" type="text" placeholder="Votre nom" required/>
            <label for="votreNom">Votre nom</label>
          
           <div class="invalid-feedback">
               Le champ "nom" est obligatoire !
           </div>

       </div>
       <div class="form-floating mb-3">
        <input class="form-control" id="votreAdresseEmail" type="email" placeholder="Votre adresse email" required />
        <label for="votreAdresseEmail">Votre adresse email</label>
        
        <div class="invalid-feedback">Votre adresse email Email n'est pas valable.</div>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" id="votreTelephone" type="text" placeholder="Votre téléphone" required/>
        <label for="votreTelephone">Votre téléphone</label>
      
        <div class="invalid-feedback">Votre téléphone est requis.</div>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" id="nomDuJoueur" type="text" placeholder="Nom du joueur (si différent)"/>
        <label for="nomDuJoueurSiDifferent">Nom du joueur (si différent)</label>
    </div>
    <div class="form-floating mb-3">
        <input class="form-control" id="ageDuJoueur" type="text" placeholder="Age du joueur" required />
        <label for="ageDuJoueur">Age du joueur</label>
        <div class="invalid-feedback">L'âge du joueur est une information requise.</div>
   
    </div>
    <div class="form-floating mb-3">
        <select class="form-select" id="concerne" aria-label="Concerne" onchange="choixFormule();">
          <option value="sel">Veuillez choisir une formule</option>
          <option value="cours">Cours</option>
          <option value="stages">Stages</option>
      </select>
      <label for="concerne">Concerne</label>
  </div>
  <div id="GroupeCours" style="display: none;">
    <div class="form-floating mb-3">
        <select class="form-select" id="formuleDeCours" aria-label="Formule de cours" required>
            <option value="Terrain blanc">Terrain blanc</option>
            <option value="Terrain bleu">Terrain bleu</option>
            <option value="Terrain rouge">Terrain rouge</option>
            <option value="Terrain orange">Terrain orange</option>
            <option value="Terrain vert">Terrain vert</option>
            <option value="Terrain jaune">Terrain jaune</option>
            <option value="ne sais pas">Ne sais pas</option>
        </select>
        <label for="formuleDeCours" id="formuleDeCoursLabel">Formule de cours</label>
        <div class="invalid-feedback">Veuillez choisir une formule.</div>
    
    </div>
    <div class="form-floating mb-3">
        <select class="form-select" id="type" aria-label="Type">
            <option value="Loisir">Loisir</option>
            <option value="Performance">Performance</option>
            <option value="Développement">Développement</option>
        </select>
        <label for="type" id="typeLabel">Type</label>
    </div>
     <div class="invalid-feedback">Veuillez choisir un type de cours.</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 text-white" id="pref1">Préférence 1:</div>
            <div class="col-md-4">
               <div class="form-floating mb-3"><select class="form-select" id="jourPref1" aria-label="Jour de préférence 1" required>
                <option value="Lundi">Lundi</option>
                <option value="Mardi">Mardi</option>
                <option value="Mercredi">Mercredi</option>
                <option value="Jeudi">Jeudi</option>
                <option value="Vendredi">Vendredi</option>
                <option value="Samedi">Samedi</option>
                <option value="Dimanche">Dimanche</option>
            </select>
            <label for="jourPref1" id="jourPref1Label">Jour de préférence 1</label>

        </div>
         <div class="invalid-feedback">Veuillez indiquer votre préférence.</div>
    </div>
    <div class="col-md-4">
       <div class="form-floating mb-3"><select class="form-select" id="heurePref1" aria-label="Heure de préférence 1" required>
        <option value="9">09:00</option>
        <option value="10">10:00</option>
        <option value="11">11:00</option>
        <option value="12">12:00</option>
        <option value="13">13:00</option>
        <option value="14">14:00</option>
        <option value="15">15:00</option>
        <option value="16">16:00</option>
        <option value="17">17:00</option>
        <option value="18">18:00</option>
        <option value="19">19:00</option>
        <option value="20">20:00</option>
        <option value="21">21:00</option>

    </select>
    <label for="heurePref1" id="heurePref1Label">Heure de préférence 1</label>
</div>
<div class="invalid-feedback">Veuillez indiquer votre préférence.</div>
</div>
</div>
<div class="row">
    <div class="col-md-4 text-white" id="pref2">Préférence 2:</div>
    <div class="col-md-4">
       <div class="form-floating mb-3"><select class="form-select" id="jourPref2" aria-label="Jour de préférence 2" required>
        <option value="Lundi">Lundi</option>
        <option value="Mardi">Mardi</option>
        <option value="Mercredi">Mercredi</option>
        <option value="Jeudi">Jeudi</option>
        <option value="Vendredi">Vendredi</option>
        <option value="Samedi">Samedi</option>
        <option value="Dimanche">Dimanche</option>
    </select>
    <label for="jourPref2" id="jourPref2Label">Jour de préférence 2</label>
</div>
<div class="invalid-feedback">Veuillez indiquer votre préférence.</div>
</div>
<div class="col-md-4">
   <div class="form-floating mb-3"><select class="form-select" id="heurePref2" aria-label="Heure de préférence 2" required>
    <option value="9">09:00</option>
    <option value="10">10:00</option>
    <option value="11">11:00</option>
    <option value="12">12:00</option>
    <option value="13">13:00</option>
    <option value="14">14:00</option>
    <option value="15">15:00</option>
    <option value="16">16:00</option>
    <option value="17">17:00</option>
    <option value="18">18:00</option>
    <option value="19">19:00</option>
    <option value="20">20:00</option>
    <option value="21">21:00</option>

</select>
<label for="heurePref2" id="heurePref2Label">Heure de préférence 2</label>
</div>
<div class="invalid-feedback">Veuillez indiquer votre préférence.</div>
</div>
</div>
<div class="row">
    <div class="col-md-4 text-white" id="pref3">Préférence 3:</div>
    <div class="col-md-4">
       <div class="form-floating mb-3"><select class="form-select" id="jourPref3" aria-label="Jour de préférence 3" required>
        <option value="Lundi">Lundi</option>
        <option value="Mardi">Mardi</option>
        <option value="Mercredi">Mercredi</option>
        <option value="Jeudi">Jeudi</option>
        <option value="Vendredi">Vendredi</option>
        <option value="Samedi">Samedi</option>
        <option value="Dimanche">Dimanche</option>
    </select>
    <label for="jourPref3" id="jourPref3Label">Jour de préférence 3</label>
</div>
<div class="invalid-feedback">Veuillez indiquer votre préférence.</div>
</div>
<div class="col-md-4">
   <div class="form-floating mb-3"><select class="form-select" id="heurePref3" aria-label="Heure de préférence 3" required>
    <option value="9">09:00</option>
    <option value="10">10:00</option>
    <option value="11">11:00</option>
    <option value="12">12:00</option>
    <option value="13">13:00</option>
    <option value="14">14:00</option>
    <option value="15">15:00</option>
    <option value="16">16:00</option>
    <option value="17">17:00</option>
    <option value="18">18:00</option>
    <option value="19">19:00</option>
    <option value="20">20:00</option>
    <option value="21">21:00</option>

</select>
<label for="heurePref3" id="heurePref3Label">Heure de préférence 3</label>
</div>
<div class="invalid-feedback">Veuillez indiquer votre préférence.</div>
</div>
</div>
</div>
</div>
<div id="GroupeStage" style="display: none;">
    <div class="form-floating mb-3">
        <select class="form-select" id="formuleDeStage" aria-label="Formule de stage" required>
            <option value="Créa-tennis">Créa-tennis</option>
            <option value="Tennis-tennis">Tennis-tennis</option>
            <option value="Tennis-multisport">Tennis-multisport</option>
            <option value="Tennis compétition">Tennis compétition</option>
        </select>
        <label for="formuleDeStage">Formule de stage</label>
    </div>
    <div class="form-floating mb-3">
        <select class="form-select" id="semaineDeStage" aria-label="Semaine de stage" required>
        </select>
        <label for="semaineDeStage">Semaine de stage</label>
    </div>
    <div class="invalid-feedback">Veuillez indiquer votre préférence.</div>
</div>
<div class="form-floating mb-3">
    <textarea class="form-control" id="remarque" type="text" placeholder="Remarque" style="height: 10rem;"></textarea>
    <label for="remarque">Remarque</label>
</div>


<div class="d-grid">
    <button class="btn btn-secondary btn-lg" id="submitButton" type="submit">Envoyer</button>
</div>
<div class="mt-5">&nbsp;</div>

</form>
</div>  


@endsection

@push('scripts')
<script>
    (function () {
'use strict'
const forms = document.querySelectorAll('.requires-validation')
Array.from(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()

 function choixFormule() {

    var concerne = document.getElementById('concerne').value;

    switch(concerne) {
        case 'sel':
        document.getElementById('GroupeCours').style.display = 'none';
        document.getElementById('GroupeStage').style.display = 'none';
        break;

        case 'cours':
        document.getElementById('GroupeCours').style.display = 'block';
        document.getElementById('GroupeStage').style.display = 'none';
        break;

        case 'stages':
        document.getElementById('GroupeCours').style.display = 'none';
        document.getElementById('GroupeStage').style.display = 'block';
        break;
    }
}
window.onload = function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var dropdown = document.getElementById('semaineDeStage');
        dropdown.length = 0;

        var defaultOption = document.createElement('option');
        defaultOption.text = 'Choisissez une semaine';

                    //dropdown.add(defaultOption);
                    dropdown.appendChild(defaultOption);
                    dropdown.selectedIndex = 0;

                    //console.log(this.responseText);
                    var semainesStage = JSON.parse(this.responseText);
                    var count = Object.keys(semainesStage.semaine).length;
                    //var optionsList = '';
                    for(i = 0; i < count; i++){
                        //console.log(semainesStage.semaine[i].intitule);
                        //optionsList += '<option value="'+ semainesStage.semaine[i].intitule +'">' + semainesStage.semaine[i].intitule + '</option>';
                          //option = document.createElement('option');
                          //option.text = semainesStage.semaine[i].intitule;
                          //option.value = semainesStage.semaine[i].intitule;
                          //selectElement.add(new Option('Text', 'value'));
                          var optionValue = semainesStage.semaine[i].intitule + ' (Du ' + semainesStage.semaine[i].dateDebut + ' au ' + semainesStage.semaine[i].dateFin + ')';
                          dropdown.add(new Option(optionValue, optionValue));

                      }


                  }
                //console.log(optionsList);
            };
            xhttp.open("GET", "./docs/conges.json", true);
            xhttp.send();
        }
    </script>


    @endpush