<?php
require_once("inc/init.inc.php");
require_once("inc/header.php");
?>
    <!-- header : parallax + logo + nav -->
    <header>
        <div class="container-fluid">  
            <section class="parallaxReal">
                    <div class="mainNav">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#">
                                <img class="logo" src="img/log38v.png" width="220" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link " href="index.php">Accueil<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="realisations.php">Réalisations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="formulaire.php">Contact</a>
                                    </li>
                                    <a class="navbar-brand" href="https://www.bilik.fr/" target="_blank">
                                        <img src="img/bilik.png" class="bilikMenu img-responsive" width="85" alt="">
                                    </a>
                                </ul>
                            </div>
                        </nav>
                    <div>
                    <!-- Titre -->
                    <div class="container">
                        <div class="animReferences animated bounceInDown img-responsive">
                            <h1>Références chantiers</h1>
                        </div> 
                    </div>                     
                    
                    <!-- <div class="container">      
                        <div class="row">
                            <div class="col-xs-12">
                                <figure>
                                <img class="img-responsive" src="img/fond1.jpg" alt="" title="">
                                    <figcaption>
                                        <h1>Références chantiers</h1>
                                    </figcaption>                          
                                </figure>
                            </div>
                        </div>
                    </div>  -->

            </section>           
        </div> <!-- fin container fluid -->
    </header> <!-- fin container fluid -->

    <!-- bandeau Réalisations -->
    <div class="container-fluid">
        <div class="bandeauReal">
            <div class="container">
                <h2 class="col-xs-12 realisations animated rollIn img-responsive">Réalisations</h2>
            </div>
        </div>
    </div> <!-- fin container-fluid -->  

    <!-- book photos légendées -->
    <div class="container">
        <section class="col-sm-12 portfolio">          
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img class="img-responsive" id="imgZoom" src="img/tofs/cam-thermique.jpg" style="width:100%">
                    <div id="overlay" onmousemove="zoomIn()"></div>
                    <h5>★ Passage de caméra thermique</h5>
                    <p>Détection de faux contacts.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img class="img-responsive zoom" id="imgZoom" src="img/tofs/couratier.jpg" style="width:100%">
                    <h5>★ Couratier, St Martin-d'Hères, 850&nbsp;m<sup>2</sup> </h5>
                    <p>Salle de sport. <br> Installation électrique, éclairage, vidéosurveillance, système de diffusion vidéo sur 8 écrans, vidéo-projecteur, sonorisation, câblage réseau informatique, contrôle d'accès par badges, ...</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img class="img-responsive zoom" id="imgZoom" src="img/tofs/domotique.jpg" style="width:100%">
                    <h5>★ Domotique</h5>
                    <p>Création sur mesure d'automatisation de volets roulants.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img class="img-responsive zoom" id="imgZoom" src="img/tofs/fip-domene.jpg" style="width:100%">
                    <h5>★ FIP Domène</h5>
                    <p>Salle d'archive du centre des impôts : mise en sécurité d'une installation courant faible.<br>Protection des connexions dans une gaine technique et coffrets.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img class="img-responsive zoom" id="imgZoom" src="img/tofs/lycee-eclairage-ventilation.jpg" style="width:100%">
                    <h5>★ Lycée Voiron : <br>éclairage & ventilation</h5>
                    <p>Salle de classe : création d'éclairage avec pavés Leds. <br>Installation d'une ventilation.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img class="img-responsive zoom" id="imgZoom" src="img/tofs/signoret.jpg" style="width:100%">
                    <h5>★ Signoret, maison neuve</h5>
                    <p>Mise en sécurité et aux normes d'un tableau électrique triphasé. Installation électrique dans l'aménagement d'un sous-sol : cuisine, salon, hall, terrasse. Pose de chauffage au sol (St Etienne de Crossey)</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img class="img-responsive zoom" id="imgZoom" src="img/tofs/naturavelo.jpg" style="width:100%">
                    <h5>★ Naturavelo, Grenoble, 80&nbsp;m<sup>2</sup></h5>
                    <p>Création d'un magasin de cycles.<br>Etude d'éclairage, installation électrique.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img class="img-responsive zoom" id="imgZoom" src="img/tofs/vanderbosch.jpg" style="width:100%">
                    <h5>★ Vanderbosch, Laval, maison neuve, 120&nbsp;m<sup>2</sup></h5>
                    <p>Installation électrique : plan électrique, câblage, tableau, passage du Consuel.</p>
                </div>
                
            </div>
        </section>
    </div>  <!-- fin container -->




    <!-- flèche pour remonter dans la pg -->         
    <div class="container">
        <button><a class="flechUp" href="#top"><i class="far fa-arrow-alt-circle-up" aria-hidden="true"></i></a></button>     
    </div>



<?php
require_once("inc/footer.php");
?>