    @extends('layouts.main')

    @section('title') 
    @lang('Présentation de l\'école')
    @endsection



    @section('content')
    <div class="position-relative overflow-hidden p-3 text-center bg-light bg_img_ecole">
        <div class="col-md-8 p-lg-8 mx-auto my-5">
          <h1 class="display-4 fw-normal white_text">L'école de tennis</h1>
          <div class="mb-5"></div>
          <div class="jumbotron lead fw-normal white_trans_bg"><p>De l’initiation à la maîtrise de la technique, <a href="#coaches" class="liens_menu">Michaël Cooreman et son équipe de moniteurs dynamiques et expérimentés</a> vous accueillent dans le cadre verdoyant du Tennis Club du Bois de la Cambre.</p>

            <p>Venez y pratiquer votre sport favori en choisissant la formule qui vous convient (<a href="#philosophie" class="liens_menu">philosophie de l'école</a>) !</p>



            <p>Contact : <a href="mailto:michael@boisdelacambre.be" class="liens_menu">michael@boisdelacambre.be</a></p>



            <p>Téléchargez l'application de votre école de tennis ou parcourez cette page pour vous inscrire <a href="#cours" class="liens_menu">aux cours</a>, <a href="#stages" class="liens_menu">aux stages</a>, mais également pour être prévenus lorsque les cours sont remis pour cause d'intempérie ou <a href="#events" class="liens_menu">voir nos prochains événements.</a></p>

            <ul>
                <li>Vous pouvez la télécharger pour votre iPhone/iPad sur l'<a href="https://itunes.apple.com/be/app/ecole-de-tennis-du-bois-de-la-cambre/id1224548313?mt=8" class="liens_menu">App Store</a>.</li>
                <li>Vous pouvez la télécharger pour votre smartphone Android sur le <a href="https://play.google.com/store/apps/details?id=be.boisdelacambre.ecole.ecolebdc&hl=fr" class="liens_menu">Google Play Store</a>.</li>
            </ul></div>

        </div>
    </div>



    <a name="cours"></a>
    <div class="mt-5"></div>
    <div class="text-center"><h2>Les cours</h2></div>
    <div class="text-center">Passer votre souris / votre doigt sur le terrain pour en connaître les spécificités</div>
    <div class="container-fluid" style="padding: 40px;">
      <div class="row gx-4">

        <div class="col-lg-2 col-md-6">
            <div class="titre_ecole text-center">Terrain blanc</div>
            <img src="{{ asset('images/terrain_blanc.png') }}" class="img-fluid" id="terrain_blanc" data-bs-toggle="popover" data-bs-trigger="hover focus" title="Terrain blanc" data-bs-content="Enfants 3-4 ans. Terrain ouvert (pas de lignes ni filet). Jeu en 2D (pas de rebond). Ballon paille, balle mousse. Raquette 17.">
        </div>

        <div class="col-lg-2 col-md-6">
           <div class="titre_ecole text-center">Terrain bleu</div>
           <img src="{{ asset('images/terrain_bleu.png') }}" class="img-fluid" id="terrain_bleu" data-bs-toggle="popover" data-bs-trigger="hover focus" title="Terrain bleu" data-bs-content="Enfants -5 ans (2017, 2018). Terrain 8M avec lignes, sans filet. Jeu en 2D (pas de rebond). Balle mousse ou Starter. Raquette 19.">
       </div>

       <div class="col-lg-2 col-md-6">
           <div class="titre_ecole text-center">Terrain rouge</div>
           <img src="{{ asset('images/terrain_rouge.png') }}" class="img-fluid" id="terrain_rouge" data-bs-toggle="popover" data-bs-trigger="hover focus" title="Terrain rouge" data-bs-content="Enfants -7 ans (2015, 2016). Terrain 12M avec filet (Hauteur: 80 cm). Jeu en 3D. Balle Starter. Raquette 23 (ou 21 en première année).">
       </div>

       <div class="col-lg-2 col-md-6">
           <div class="titre_ecole text-center">Terrain orange</div>
           <img src="{{ asset('images/terrain_orange.png') }}" class="img-fluid" id="terrain_orange" data-bs-toggle="popover" data-bs-trigger="hover focus" title="Terrain orange" data-bs-content="Enfants -9 ans (2013,2014). Terrain 18M avec filet (Hauteur: 80 cm). Jeu en 3D. Balle soft. Raquette 25 (ou 23/24 en première année).">
       </div>

       <div class="col-lg-2 col-md-6">
           <div class="titre_ecole text-center">Terrain vert</div>
           <img src="{{ asset('images/terrain_vert.png') }}" class="img-fluid" id="terrain_vert" data-bs-toggle="popover" data-bs-trigger="hover focus" title="Terrain vert" data-bs-content="Enfants -11 ans (2011, 2012). Terrain 21M avec filet (Hauteur: 91,4 cm). Jeu en 3D. Balle MID. Raquette 26 (ou 25 en première année).">
       </div>

       <div class="col-lg-2 col-md-6">
           <div class="titre_ecole text-center">Terrain jaune</div>
           <img src="{{ asset('images/terrain_jaune.png') }}" class="img-fluid" id="terrain_jaune" data-bs-toggle="popover" data-bs-trigger="hover focus" title="Terrain jaune" data-bs-content="Jeunes -13 ans (2009, 2010), -15 ans (2007, 2008). Terrain 24M avec filet (Hauteur: 91,4 cm). Balle dure. Raquette adulte.">
       </div>

   </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-12">
        <h2 class="titre_ecole_vert">loisirs</h2>
        <ul>
            <li>1h / semaine</li>
            <li>Groupe de 4 ou 6</li>
            <li>625 € / 435 €</li>
        </ul>
        Terrain blanc <br/>
        Terrain bleu <br/>
        Terrain Rouge <br/>
        Terrain orange* <br/>
        Terrain vert* <br/>
        Terrain jaune* 
        <p>* uniquement groupe de 4</p>
    </div>

    <div class="col-lg-4 col-md-6">
        <h2 class="titre_ecole_vert">développement</h2>
        <ul>
            <li>2h / semaine</li>
            <li>Groupe de 4</li>
            <li>1150 €</li>
        </ul>

        Terrain bleu <br/>
        Terrain Rouge <br/>
        Terrain orange <br/>
        Terrain vert <br/>
        Terrain jaune  <br/>  
    </div>

    <div class="col-lg-4 col-md-6">
        <h2 class="titre_ecole_vert">performance</h2>
        <ul>
            <li>minimum 3h / semaine</li>
            <li>Programme personnalisé</li>
            <li>Prix sur demande</li>
        </ul>
        Terrain Rouge <br/>
        Terrain orange <br/>
        Terrain vert <br/>
        Terrain jaune <br/>
    </div>
</div>
</div>  
<div class="text-center"><button type="button" class="btn btn-success"><i class="fas fa-user-edit"></i> Inscription</button></div> 
<div class="mt-5"></div>
<h2 class="titre_ecole_vert text-center">Cours particuliers</h2>        
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <ul class="list-group">
              <li class="list-group-item list-group-item-success">
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2"><img src="{{ asset('images/oneplayer-green.png') }}" width="32"> </div>
                        <div class="col-md-6">Cours collectif un joueur</div>
                        <div class="col-md-4"> 40 € + terrain</div>
                    </div>
                </div>
            </li>
            <li class="list-group-item">
               <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"><img src="{{ asset('images/twoplayer-green.png') }}" width="32"> </div>
                    <div class="col-md-6">Cours collectif deux joueurs</div>
                    <div class="col-md-4"> 45 € + terrain</div>
                </div>
            </div>
        </li>
    </ul>
</div>
<div class="col-md-2"><button type="button" class="btn btn-success"><i class="fas fa-user-edit"></i> Inscription</button></div>
</div>
</div>
<div class="mt-5"></div>&nbsp;
<a name="stages"></a>
<div class="mt-5"></div>
<div class="text-center"><h2>Les stages (kids & Ados)</h2> (Voir <a href="#adultes" class="liens_menu">les stages pour adultes</a>)</div>

<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <img src="{{ asset('images/stages01.jpg') }}" class="img-fluid"> 
        </div>
        <div class="col-md-8">
            <ul class="list-group">
               <li class="list-group-item list-group-item-darkgreen">
                  <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">Formule</div>
                        <div class="col-md-8">Description</div>
                        <div class="col-md-2">Tarif</div>
                    </div>
                </div>
            </li>
            <li class="list-group-item list-group-item-success">
              <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"><img src="{{ asset('images/creativity.png') }}" width="32"> Créa-tennis</div>
                    <div class="col-md-8">De 3 à 9 ans. Tennis le matin. Bricolage, théâtre, danse & cuisine l’après midi.</div>
                    <div class="col-md-2"> 180 €</div>
                </div>
            </div>
        </li>
        <li class="list-group-item">
          <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"><img src="{{ asset('images/multisport.png') }}" width="32"> Tennis - Multisports</div>
                <div class="col-md-8">A partir de 6 ans. 2h30 de tennis + 3h de multisports : mini-foot, basket, base-ball,…</div>
                <div class="col-md-2"> 180 €</div>
            </div>
        </div>
    </li>
    <li class="list-group-item list-group-item-success">
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"><img src="{{ asset('images/tennisicon.png') }}" width="32"> Tennis - Tennis</div>
            <div class="col-md-8">A partir de 6 ans. 5h30 de tennis par jour. </div>
            <div class="col-md-2"> 180 €</div>
        </div>
    </div>
</li>
<li class="list-group-item">
  <div class="container-fluid">
    <div class="row">
        <div class="col-md-2"><img src="{{ asset('images/competition.png') }}" width="32"> Tennis - Compétition</div>
        <div class="col-md-8">A partir de 9 ans. 5h de tennis avec tournoi officiel.</div>
        <div class="col-md-2"> 195 €</div>
    </div>
</div>
</li>
</ul>
<button type="button" class="btn btn-success"><i class="fas fa-user-edit"></i> Inscription</button>
<div class="mt-5"></div>
<h3>Déroulement des stages:</h3>
<div class="mt-5"></div>
<div class="container">
    <div class="process">
        <div class="process-row">
            <div class="process-step">
                <button type="button" class="btn btn-success btn-circle" disabled="disabled">08:30</button>
                <p>Accueil</p>
            </div>
            <div class="process-step">
                <button type="button" class="btn btn-secondary btn-circle" disabled="disabled">09:00</button>
                <p>Mise en condition</p>
            </div>
            <div class="process-step">
                <button type="button" class="btn btn-secondary btn-circle" disabled="disabled">09:30</button>
                <p>Tennis</p>
            </div> 
            <div class="process-step">
                <button type="button" class="btn btn-secondary btn-circle" disabled="disabled">11:30</button>
                <p>Repas</p>
            </div> 
            <div class="process-step">
                <button type="button" class="btn btn-secondary btn-circle" disabled="disabled">12:15</button>
                <p>Activités récréatives</p>
            </div> 
            <div class="process-step">
                <button type="button" class="btn btn-secondary btn-circle" disabled="disabled">13:00</button>
                <p>Option choisie</p>
            </div>
            <div class="process-step">
                <button type="button" class="btn btn-success btn-circle" disabled="disabled">16:00</button>
                <p>Fin du stage <br/>+ Début garderie</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<a name="adultes"></a>
<div class="mt-5"></div>
<div class="text-center"><h2>Les stages (Adultes)</h2></div>
<div class="mt-5"></div>
<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item list-group-item-success">
                    <h4 class="titre_ecole_vert text-center">La Carte 3/5 (3 heures en 5 jours)</h4>   <br/>
                    Pendant les congés scolaires à partir de 16h :<br/>

                    - pour une personne : 130€ (pro et court inclus).<br/>

                    - pour deux personnes. : 140€ (pro et court inclus).   <br/>        
                </li>
            </ul>
            <button type="button" class="btn btn-success"><i class="fas fa-user-edit"></i> Inscription</button>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('images/stages02.jpg') }}" class="img-fluid"> 

        </div>
    </div>
</div></div>   

<a name="philosophie"></a>
<div class="mt-5"></div>
<div class="text-center"><h2>La philosophie de l'école</h2></div>  
<div class="mt-5"></div>      
<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-6"> <img src="{{ asset('images/philosophy.jpg') }}" class="img-fluid"> </div>
        <div class="col-md-6">
            <p><strong>Philosophie de l'école de tennis chez les juniors</strong></p>
            <p>Sur un court, on se dépense et on s&rsquo;amuse pour échanger la balle et tenter de gagner des points. La pédagogie de l&rsquo;école de Tennis est basée sur l&rsquo;utilisation de matériels et terrains adaptés permettant aux enfants de jouer dès les premières séances. Tout en s&rsquo;amusant, les jeunes pratiquants acquièrent les bases tactico-techniques. Ils continueront ainsi de progresser et de prendre du plaisir sur le court, notamment en réalisant des échanges de plus en plus intéressants et élaborés menant rapidement à l&rsquo;opposition.</p>
            <p>En jouant au tennis, les enfants développent leurs qualités physiques : la vitesse, l&rsquo;endurance, la coordination, l&rsquo;explosivité, l&rsquo;adresse, la mobilité. C&rsquo;est l&rsquo;assurance pour eux de se dépenser à fond. Le tennis mobilise aussi les qualités psychologiques des jeunes joueurs : le contrôle de soi, la concentration, l&rsquo;adaptation... Face à un partenaire de jeu, on analyse la situation, on s&rsquo;adapte à différents jeux pour renvoyer la balle et gagner des points.</p>
            <p>Deux préoccupations majeures guident les moniteurs :</p>
            <ul>
              <li>Mettre au maximum l&rsquo;enfant en activité.  Varier le plus possible les situations de jeu.</li>
              <li>Encourager l&rsquo;effort car sans l&rsquo;intervention de la volonté, de son attention, de son désir, il n&rsquo;y a pas d&rsquo;acquisition sérieuse possible.</li>
          </ul>
          <p>Il faut donc aménager le milieu et le matériel pour que l&rsquo;enfant puisse toujours être en activité, être motivé et qu&rsquo;il conserve toujours la joie de jouer.</p>
          <p>Le tennis évolutif est sûrement la meilleure façon de débuter dans ce sport passionnant qu&rsquo;est le tennis.  Un enfant n&rsquo;est pas un adulte en miniature.  Il est vraiment autre et ce que l&rsquo;adulte considère pour lui-même comme de bonnes méthodes d&rsquo;acquisition de l&rsquo;habilité doit indispensablement être adapté à l&rsquo;enfant.</p>


      </div>

  </div></div>
  <div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <p>Il faut impérativement tenir compte de ce qui caractérise les enfants aux différentes étapes de leur développement, pour ne pas les empêcher de s&rsquo;épanouir totalement et leur permettre d&rsquo;atteindre leur plus haut niveau possible au tennis.</p>
            <p>S&rsquo;amuser au tennis constitue le meilleur garant de la continuité et de la persévérance.</p>
            <p>Ce n&rsquo;est pas leur « bagage technique » qui doit amener les enfants vers le tennis adulte, mais un ensemble de compétences.</p>
            <p>Mettre à la portée des enfants l&rsquo;ensemble complexe de ce que représente le tennis permet d&rsquo;aborder très rapidement une pratique globale. On veut signifier par-là que la réalisation des premiers petits échanges sur terrain adapté est en tous points similaire à ceux que réalisent les adultes. Dans ces conditions, on peut donc aborder l&rsquo;apprentissage dont l&rsquo;objectif est de mettre l&rsquo;adversaire en difficulté.</p>
            <p>Cette approche développe la notion de compétition et/ou d&rsquo;opposition qui existe chez beaucoup enfants, mais qui tend à disparaître si l&rsquo;apprentissage ne consiste qu&rsquo;en une succession d&rsquo;exercices sans adversaire. Il importe de s&rsquo;adapter aux situations difficiles imposées par l&rsquo;adversaire, d&rsquo;observer et de prélever des informations au-delà du filet, au lieu de se concentrer uniquement sur la balle et d&rsquo;organiser ses déplacements et ses mouvements pour offrir la meilleure réponse à la situation induite.</p>
            <p>Pour "porter&rdquo; cette philosophie, un univers pensé pour les enfants a été créé.</p>
            <p> Il se destine à tous les enfants et donne la priorité au plaisir du jouer et de disputer des matches en s&rsquo;amusant.</p>
            <p>L&rsquo;idée est de pouvoir proposer à tous les enfants, dès leur arrivé au club, un terrain, une raquette et une balle qui leur permettront d&rsquo;être immédiatement en situation d&rsquo;opposition. Ce matériel (raquette, terrain, balles) évoluera avec l&rsquo;acquisition progressive des compétences et la morphologie de l&rsquo;enfant. Nous parlerons donc de « tennis évolutif ».</p>
            <p>Le tennis étant un jeu d&rsquo;opposition, le tennis évolutif est donc un moyen/un outil idéal de développement. Au sein du club et de l&rsquo;école, ce tennis évolutif permet de :</p>
            <ul>
              <li>Respecter la personnalité de l&rsquo;enfant</li>
              <li>Faire découvrir le tennis par le jeu</li>
              <li>Rendre le tennis accessible…</li>
              <li>Développer les « valeurs »</li>
          </ul>            
      </div>
      <div class="col-md-6"> <img src="{{ asset('images/tennistoddler.jpg') }}" class="img-fluid"> </div>
  </div>
</div>  
<a name="events"></a>        
<div class="mt-5"></div>
<div class="text-center"><h2>L'agenda des événements</h2></div>  
<div class="mt-5"></div>      
<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
<p class="lead">
    Les événements et dates importantes de votre club !
</p>
<hr />
<p><strong>Stages HIVER 2021/22</strong></p>



NOEL/NOUVEL AN: du Lundi 27/12 au Vendredi 31/12/21 & du Lundi 03/01 au Vendredi 07/01/22<br/>

CARNAVAL: du Lundi 28/02 au Vendredi 04/03/22<br/>

PAQUES: du Lundi 04/04 au Vendredi 08/04/22 & du Lundi 11/04 au Vendredi 15/4/22<br/>
&nbsp;<br/>
<p><strong>RUNNING du SAMEDI</strong></p>
<p>chaque Samedi à 10H. RDV devant le club.</p>
<br/>
<p><strong>ANIMATIONS du Dimanche (Hiver)</strong></p>


  "Jeux & Matches".<br/>

   DE 10H à 11H: enfants jouant sur Terrain ROUGE (12 Mètres).<br/>

   DE 11H à 12H: enfants jouant sur Terrain ORANGE (18 Mètres).<br/>

   12 places à chaque heure. Inscriptions via Doodle. <br/>

   Encadrement par pro BDC.<br/>
<hr>
<div class="agenda">
    <div class="table-responsive">
        <table class="table table-condensed table-bordered">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Evénement</th>
                </tr>
            </thead>
            <tbody>
                <!-- Single event in a single day -->
                <tr>
                    <td class="agenda-date" class="active" rowspan="1">
                        <div class="dayofmonth">20</div>
                        <div class="dayofweek">Samedi</div>
                        <div class="shortdate text-muted">Novembre, 2021</div>
                    </td>
                    <td class="agenda-time">
                        17 - 19h
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            <i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
                            Animation terrain vert. Inscription: <a href="mailto:dimitri@boisdelacambre.be" class="liens_menu">dimitri@boisdelacambre.be</a>. Ouverts à tous les élèves, gratuit.
                        </div>
                    </td>
                </tr>
                 <tr>
                    <td class="agenda-date" class="active" rowspan="1">
                        <div class="dayofmonth">27</div>
                        <div class="dayofweek">Samedi</div>
                        <div class="shortdate text-muted">Novembre, 2021</div>
                    </td>
                    <td class="agenda-time">
                        17 - 19h
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            <i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
                            Animation terrain jaune. Inscription: <a href="mailto:giovanni@boisdelacambre.be" class="liens_menu">giovanni@boisdelacambre.be</a> Ouverts à tous les élèves, gratuit.
                        </div>
                    </td>
                </tr>

                 <tr>
                    <td class="agenda-date" class="active" rowspan="1">
                        <div class="dayofmonth">24</div>
                        <div class="dayofweek">Samedi</div>
                        <div class="shortdate text-muted">Décembre, 2021</div>
                    </td>
                    <td class="agenda-time">
                        17 - 19h
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            <i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
                            Compétition (BDC - Club invité). Inscription: <a href="mailto:kevin@boisdelacambre.be" class="liens_menu">kevin@boisdelacambre.be</a>. Sur sélection.
                        </div>
                    </td>
                </tr>


                 <tr>
                    <td class="agenda-date" class="active" rowspan="1">
                        <div class="dayofmonth">24</div>
                        <div class="dayofweek">Samedi</div>
                        <div class="shortdate text-muted">Décembre, 2021</div>
                    </td>
                    <td class="agenda-time">
                        17 - 19h
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            <i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
                            CHJ/Terrains Orange & Vert (BDC - Roseau). Inscription: <a href="mailto:caroline.s@boisdelacambre.be" class="liens_menu">caroline.s@boisdelacambre.be</a>. Sur sélection.
                        </div>
                    </td>
                </tr>

 <tr>
                    <td class="agenda-date" class="active" rowspan="1">
                        <div class="dayofmonth">15</div>
                        <div class="dayofweek">Samedi</div>
                        <div class="shortdate text-muted">Janvier, 2022</div>
                    </td>
                    <td class="agenda-time">
                        17 - 19h
                    </td>
                    <td class="agenda-events">
                        <div class="agenda-event">
                            <i class="glyphicon glyphicon-repeat text-muted" title="Repeating event"></i> 
                            Tournoi doubles surprises. Inscription: <a href="mailto:vincent@boisdelacambre.be" class="liens_menu">vincent@boisdelacambre.be</a>.
                        </div>
                    </td>
                </tr>


               
            </tbody>
        </table>
    </div>
</div>

</div></div></div>
@endsection

@push('scripts')
<script language="javascript">
    var terrain_blanc = document.getElementById('terrain_blanc')
    var popover_tbc = new bootstrap.Popover(terrain_blanc)

    var terrain_bleu = document.getElementById('terrain_bleu')
    var popover_tbl = new bootstrap.Popover(terrain_bleu)

    var terrain_rouge = document.getElementById('terrain_rouge')
    var popover_ro = new bootstrap.Popover(terrain_rouge)

    var terrain_orange = document.getElementById('terrain_orange')
    var popover_or = new bootstrap.Popover(terrain_orange)

    var terrain_vert = document.getElementById('terrain_vert')
    var popover_vt = new bootstrap.Popover(terrain_vert)

    var terrain_jaune = document.getElementById('terrain_jaune')
    var popover_ja = new bootstrap.Popover(terrain_jaune)
</script>  
@endpush