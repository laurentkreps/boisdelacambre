    @extends('layouts.main')

    @section('title') 
    @lang('Présentation du restaurant')
    @endsection

    @section('content')
     <div class="position-relative overflow-hidden p-3 text-center bg-light bg_img_resto_bandeau">
        <div class="col-md-8 p-lg-8 mx-auto my-5">
          <h1 class="display-4 fw-normal white_text">Le restaurant</h1>
          <div class="mb-5"></div>
          <div class="jumbotron lead fw-normal white_trans_bg"><p>Le restaurant du TC Bois de la Cambre vous offre une cuisine de qualité dans un <a href="#photos" class="liens_menu">cadre extraordinaire</a>. En été, il est plaisant de déjeuner sur la maginifique terrasse bordée d'un vaste jardin. L'hiver, la terrasse est couverte par une grande véranda qui offre tous les plaisirs d'un jardin d'hiver.</p>
            <p>En plus de notre carte, que nous vous invitons <a href="#carte" class="liens_menu">à parcourir</a>, de nombreuses suggestions "de saison" sont proposées chaque semaine.</p>

    <p>Nous organisons également des banquets pour <a href="#banquets" class="liens_menu">vos événements privés et professionnels.</a></p></div>
         
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
        <button type="button" data-bs-target="#carouselPhotosControls" data-bs-slide-to="3" aria-label="Photo 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/resto03.jpeg') }}" class="d-block w-100" alt="Photo 1">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/resto04.jpeg') }}" class="d-block w-100" alt="Photo 2">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/resto05.jpeg') }}" class="d-block w-100" alt="Photo 3">
        </div>
         <div class="carousel-item">
          <img src="{{ asset('images/resto06.jpeg') }}" class="d-block w-100" alt="Photo 4">
        </div>
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
 <a name="carte"></a>
     <div class="mt-5"></div>
     <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center
                    ">
                        <div class="page-section">
                           <h1 class="page-title">La Carte</h1>
                        </div>
                    </div>
                </div>
                <div class="mt-5"></div>
                <div class="row">
                    <!-- entrées -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                        <div class="menu-block">
                            <h3 class="menu-title titre_entrees">Entrées</h3>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Oeuf poché, mousseline, épinards et crevettes grises</h5>           
                                            <div class="dish-price">
                                            <p>	1 pièce: 14,50 €  2 pièces: 18,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                           <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Les Incontournables Fondus Fromages</h5>           
                                            <div class="dish-price">
                                            <p>14,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Croquette aux Crevettes grises</h5>           
                                            <div class="dish-price">
                                            <p>16,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Carpaccio de Boeuf, parmesan, roquette et tomates séchées</h5>           
                                            <div class="dish-price">
                                            <p>	entrée : 13,50 € Plat : 17,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Poëlée de scampis aux courgettes, tomates fraiches et aïl</h5>           
                                            <div class="dish-price">
                                            <p>	entrée : 14,50 € plat : 18,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- /.entrées -->
                    <!-- salades -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                        <div class="menu-block">
                            <h3 class="menu-title titre_salades">&nbsp; <span  style="font-size:12px;">Salades</span></h3>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Croustillant de chèvre et lardons sur jeunes pousses d'épinard</h5>           
                                            <div class="dish-price">
                                            <p>	15,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                           <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Salade "détox", oeuf mollet, haricot croquant, quinoa et avocat</h5>           
                                            <div class="dish-price">
                                            <p>17,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Salade "club" poulet, bacon, oignons crispy et avocat</h5>           
                                            <div class="dish-price">
                                            <p>16,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                           

                        </div>
                    </div>
                    <!-- /.salades -->
                    

      <!-- pâtes -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                        <div class="menu-block">
                            <h3 class="menu-title titre_pates">Pâtes</h3>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Spaghetti Bolognaise</h5>           
                                            <div class="dish-price">
                                            <p>14,00  Big : 16.00 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                           <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Fettucini aux champignons de paris et caviar d'aubergines (végé)</h5>           
                                            <div class="dish-price">
                                            <p>15,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Linguine au homard et asperges vertes</h5>           
                                            <div class="dish-price">
                                            <p>23,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Linguine aux scampis, saté, poireaux et champignons</h5>           
                                            <div class="dish-price">
                                            <p>16,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                    <!-- /.pâtes -->


                     <!-- poissons -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                        <div class="menu-block">
                            <h3 class="menu-title titre_poissons">POissons</h3>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Mi-cuit de Saumon, miel, thym et citron, légumes croquants</h5>           
                                            <div class="dish-price">
                                            <p>20,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                           <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Filet de Bar grillé, légumes confits et caviar d'Aubergines</h5>           
                                            <div class="dish-price">
                                            <p>23,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                           

                            

                        </div>
                    </div>
                    <!-- /.poissons -->

                     <!-- viandes -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                        <div class="menu-block">
                            <h3 class="menu-title titre_viandes">Viandes</h3>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Blanc de volaille grillé parfumé à la coriandre sur lit de légumes croquants</h5>           
                                            <div class="dish-price">
                                            <p>16,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                           <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Tartare de Bœuf (haché minute) comme vous ou comme nous</h5>           
                                            <div class="dish-price">
                                            <p>17,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Entrecôte Irlandaise grillée *</h5>           
                                            <div class="dish-price">
                                            <p>21,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Filet Pur Grillé *</h5>           
                                            <div class="dish-price">
                                            <p>26,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                             <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Carré d'Agneau farci au chèvre frais, jus crémé à la ciboulette</h5>           
                                            <div class="dish-price">
                                            <p>22,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                             <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Noix de ris de veau aux morilles</h5>           
                                            <div class="dish-price">
                                            <p>28,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                    <!-- /.viandes -->

                         <!-- desserts -->
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mb40">
                        <div class="menu-block">
                            <h3 class="menu-title titre_viandes">Desserts</h3>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Pain perdu aux pommes caramélisées</h5>           
                                            <div class="dish-price">
                                            <p>10,00 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                           <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Moelleux au chocolat</h5>           
                                            <div class="dish-price">
                                            <p>9,00 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Tartelette aux pommes et glace vanille</h5>           
                                            <div class="dish-price">
                                            <p>9,00 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                            <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Panaché de sorbet en farandole de fruits</h5>           
                                            <div class="dish-price">
                                            <p>8,50 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                             <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Coupe Brésilienne</h5>           
                                            <div class="dish-price">
                                            <p>8,00 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                             <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Dame blanche</h5>           
                                            <div class="dish-price">
                                            <p>8,00 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

    <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Crème brulée/h5>           
                                            <div class="dish-price">
                                            <p>8,00 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>


    <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Café glacé</h5>           
                                            <div class="dish-price">
                                            <p>9,00 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>


    <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Mousse au chocolat</h5>           
                                            <div class="dish-price">
                                            <p>8,00 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>


    <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Café gourmand</h5>           
                                            <div class="dish-price">
                                            <p>10,00 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>


    <div class="menu-content">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="dish-content">
                                            <h5 class="dish-title">Irish Coffee</h5>           
                                            <div class="dish-price">
                                            <p>11,00 €</p>
                                        </div>
                                        </div>
                                     </div>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                    <!-- /.desserts -->
                   
                </div>
               </div>

               <div class="container-fluid">
                   <div class="row justify-content-md-center">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><img src="{{ asset('images/kidsmenu.jpg') }}" class="img-fluid"></div>
                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                            <span class="titre_menuenfant text-center" style="font-size: 30px;">Menu enfant</span>
    <ul class="list-group">
                             <li class="list-group-item">Une boisson au choix   </li>  
     <li class="list-group-item list-group-item-success">Spaghetti bolognaise </li>
         <li class="list-group-item list-group-item-success"><span class="dish-price">ou</span> Poulet crème frites </li>
             <li class="list-group-item list-group-item-success"><span class="dish-price">ou</span> Boulettes sauce tomate, frites </li>
                 <li class="list-group-item list-group-item-success"><span class="dish-price">ou</span> Steak haché, frites et haricots verts  </li>
    <li class="list-group-item">Boule de glace (vanille ou chocolat) / Mousse au chocolat  </li>
    </ul>  <div class="dish-price">
                                            <p>13,50 €</p>
                                        </div>
     
                        </div>
                   </div>
               </div>
               <a name="banquets"></a>
               <div class="mt-5"></div>
                <div class="position-relative overflow-hidden p-3 text-center bg-light bg_img_banquets_bandeau">
                    <h1 class=" white_text">Les événements</h1>
        <div class="row">
        <div class="col-md-6 p-lg-6 my-5">
          <div class="jumbotron lead fw-normal white_trans_bg"><p>Pour les groupes de 12 personnes ou plus, nous proposons de nombreux menus, pour tous les budgets (menus 3 services à partir de 24 € par personne).</p>

    <p>Ces menus proposant des marchandises ne figurant pas nécessairement à la carte, nous invitons les groupes à choisir un menu et à nous communiquer le choix des convives à l'avance. Veuillez noter que le menu ne doit pas nécessairement être choisi "tel quel", il est tout à fait possible des les dépareiller (prendre l'entrée de l'un, avec le plat d'un autre et le dessert d'un troisième) au sein d'une même gamme de prix ou non.</p>

    <p>Dans les cas où il ne vous est pas possible de connaître les choix de vos convives à l'avance, nous pouvons, pour les groupes de moins de 20 personnes, vous proposer 3 choix d'entrées, de plats et de desserts figurant à notre carte et de laisser les invités choisir au moment même.</p>

    <p>A partir de 40 personnes, nous pouvons vous proposer différents buffets (voir les fichiers ci-dessous).</p>

    <p>Nous pouvons également vous proposer, pour accompagner vos cocktails dinatoires, un assortiments de zakouski's. Veuillez noter également que les buffets peuvent être organisés sous forme de walking dinner.</p>

    <p>Enfin, nous avons également des menus spéciaux pour les communions ou les fêtes de fin d'année.</p></div>
         
        </div>
        <div class="col-md-6 p-lg-6 my-5">
            <div class="row">
                <div class="col-md-6 p-lg-6 mx-auto jumbotron lead fw-normal white_bg">
                    <strong>Téléchargez notre brochure pour vos événements:</strong> <br/>
<span style="font-size: 5em; color: #0d6a36;">
                   <a href="{{ asset('./docs/banquets.pdf') }}" class="liens_menu"> <i class="fas fa-file-pdf"></i></a>
</span>
                </div>
            </div>
             <div class="row">
                <div class="col-md-6 p-lg-6 mx-auto jumbotron lead fw-normal green_bg text-white">
                    <strong>Pour toute information ou réservation, veuillez contacter Caroline:</strong>
                    <p>&nbsp;</p>
                    <p><i class="fas fa-phone-square-alt"></i> + 32 2 672 49 86</p>
                    <p><i class="fas fa-envelope-open-text"></i> caroline@boisdelacambre.be</p>

                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection