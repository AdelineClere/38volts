<?php
require_once("inc/init.inc.php");
require_once("inc/header.php");
?>

<header>
    <!-- header : parallax + logo + nav -->
    <div class="container-fluid">  
        <section class="parallax">
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
                <!-- titre + btn Devis -->
                <div class="container">
                    <div id="animTitre" class="animated bounceInDown img-responsive">
                        <h1>Domotique | Electricité </h1>
                        <h2>Besoin d’une intervention ?</h2>
                        <h3>Réactivité, efficacité, qualité</h3> 
                        <button type="button" class="btn btn-info devis"><a href="mailto:contact@38volts.fr">Devis gratuit</a></button>
                        
                       <!--  <button type="button" class="btn btn-info devis"><a href="formulaire.php">Devis gratuit</a></button> -->                       
                        
                    </div>  
                </div>
                    

        </section>           
    </div> <!-- fin container fluid -->
</header>
    
<!-- Menu Les services -->
<div class="container-fluid blocBtn">
    <h2 class="lesServices animated rollIn img-responsive">Les services</h2>
    <div class="services">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-12">
                <div class="row menuService">
                    <div class="col-xs-2 bouton">
                        <a href="#38v"> 
                            <img class="pictos" src="img/pictos/man.png" width="65" alt="">
                        </a>
                    </div>
                    <div class="col-10">
                        <h4>38 Volts ?</h4>
                        <p>Electricien à La Buisse, membre du réseau Bilik, ...</p>
                    </div>
                </div>
            </div>   
            <div class="col-md-4 col-sm-6 col-12">
                <div class="row menuService">
                    <div class="col-xs-2 bouton">
                        <a href="#conseil">
                            <img class="pictos" src="img/pictos/study.png" width="55" alt="">
                        </a>
                    </div>
                    <div class="col-10 ">
                        <h4>Conseils, études</h4>
                        <p>Depuis le 1<sup>er</sup> janvier 2010, la qualité de l’installation électrique a intégré ...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-12">
                <div class="row menuService">
                    <div class="col-xs-2 bouton">
                        <a href="#normes">
                            <img class="pictos" src="img/pictos/norm.png" width="55" alt="">
                        </a>
                        </div>
                    <div class="col-10">
                        <h4>Mise aux normes</h4>
                        <p>Mise aux normes de votre installation, recherche de pannes, ...</p>
                    </div>
                </div>
            </div>  
            <div class="col-md-4 col-sm-6 col-12">
                <div class="row menuService">
                    <div class="col-xs-2 bouton">
                        <a href="#depann">
                            <img class="pictos" src="img/pictos/tools.png" width="50" alt="">
                        </a>
                    </div>
                    <div class="col-10">
                        <h4>Dépannage électrique</h4>
                        <p>Pour les particuliers et les petites entreprises, ...</p>
                    </div>
                </div>
            </div>    
            <div class="col-md-4 col-sm-6 col-12">
                <div class="row menuService">
                    <div class="col-xs-2 bouton">
                        <a href="#alarm">
                            <img class="pictos" src="img/pictos/alarm.png" width="60" alt="">
                        </a>
                    </div>
                    <div class="col-10">
                        <h4>Alarmes et motorisations</h4>
                        <p>Analyse des besoins, domotique, ...</p>
                    </div>
                </div>
            </div>  
            <div class="col-md-4 col-sm-6 col-12">
                <div class="row menuService">
                    <div class="col-xs-2 bouton">
                        <a href="#courants">
                            <img class="pictos" src="img/pictos/eclair.png" width="60" alt="">
                        </a>
                    </div>
                    <div class="col-10">
                        <h4>Courants forts/faibles VDI</h4>
                        <p>Voix, données images, réseaux informatiques, ...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button><a class="flechUp" href="#top"><i class="far fa-arrow-alt-circle-up" aria-hidden="true"></i></a></button>     
</div> <!-- fin div container-fluid blocBtn -->

    <!-- Bandeau Bilik -->
<div class="container-fluid bandeauBilik">
    <div class="membreBilik">
        <a class="" href="https://www.bilik.fr/" target="_blank">
            <img class="bilikLogo" src="img/bilik.png" alt="">
        </a>
        <p><strong>Membre du réseau Bilik</strong> - Le guide des artisans de confiance dans la rubrique : <span>Electricien à Voiron.</span></p>
    </div>
</div>


<!-- Détail Des services -->
<div class="container-fluid homeServices">
    <div class="detailServices">
        <div class="row">
            <div class="col-md-6 col-12 bloc1">
                <div class="row blocService">
                    <div class="col-2 blocServicePicto">
                        <a>
                            <img class="pictos" src="img/pictos/manV.png" width="95" alt="">
                        </a>
                    </div>
                    <div class="col-10 blocServiceText">
                        <h5 id="38v">38 Volts ?</h5>
                        <p>38 Volts vous propose des prestations électriques pour les particuliers et les petites entreprises.</p>
                        <ul>
                            <li>✘ Mise aux normes</li> 
                            <li>✘ Alarmes et motorisations</li> 
                            <li>✘ Conseils, études</li>
                            <li>✘ Dépannage électrique</li>
                            <li>✘ Courants forts/faibles VDI (Voix, Données, Images) </li>
                        </ul>
                    </div>
                </div>
            </div>   
            <div class="col-md-6 col-12 bloc2">
                <div class="row blocService">
                    <div class="col-2 blocServicePicto">
                        <a>
                            <img class="pictos" src="img/pictos/alarmV.png" width="90" alt="">
                        </a>
                    </div>
                    <div class="col-10 blocServiceText">
                        <h5 id="alarm">Alarmes et motorisations</h5>
                        <p>Analyse des besoins, propositions, et installation de la solution retenue.</p>
                        <ul>
                            <li>✘ Alarme maison</li> 
                            <li>✘ Portail électrique</li>  
                            <li>✘ Interphone, digicode</li>
                            <li>✘ Volet électrique</li>
                        </ul>
                        <br>
                        <p><strong>Domotique :</strong> automatisation des systèmes de chauffage, de fermeture, d’alarme, permettant la programmation à la carte :</p>
                        <ul>
                            <li>✘  Chauffage
                            <li>✘ Volet roulant</li>  
                            <li>✘ Portail, porte de garage</li>
                            <li>✘ Contrôle d’accès : interphones, digicodes…</li>
                            <li>✘ Vidéo surveillance</li>
                            <li>✘ etc.</li>
                        </ul>
                    </div>
                </div>
            </div> 
            <div class="col-md-6 col-12 bloc3">
                <div class="row blocService">
                    <div class="col-2 blocServicePicto">
                        <a>
                            <img class="pictos" src="img/pictos/studyV.png" width="85" alt="">
                        </a>
                    </div>
                    <div class="col-10 blocServiceText">
                        <h5 id="conseil">Conseils, études</h5>
                        <p>Depuis le 1<sup>er</sup> janvier 2010, la qualité de l’installation électrique a intégré la liste&nbsp;des diagnostics immobiliers à réaliser obligatoirement lors de la vente&nbsp;d’un logement, qu’il s’agisse d’une maison ou d’un&nbsp;appartement.</p>
                        <ul>
                            <li>✘ Remise en état</li> 
                            <li>✘ Solutions pour économiser de l’énergie</li>  
                            <li>✘ Optimisation de la consommation d’énergie</li>
                            <li>✘ Chauffage radiateurs électriques, chauffage au sol</li>
                        </ul>
                    </div>
                </div>
            </div>     
            <div class="col-md-6 col-12 bloc4">
                <div class="row blocService">
                    <div class="col-2 blocServicePicto">
                        <a>
                            <img class="pictos" src="img/pictos/toolsV.png" width="80" alt="">
                        </a>
                    </div>
                    <div class="col-10 blocServiceText">
                        <h5 id="depann">Dépannage électrique</h5>
                        <ul>
                            <li>✘ Devis gratuit</li> 
                            <li>✘ Dépannage rapide</li>  
                            <li>✘ Particuliers, copropriétés, petits tertiaires</li>
                        </ul>
                    </div>
                </div>
            </div>  
            <div class="col-md-6 col-12 bloc5">
                <div class="row blocService">
                    <div class="col-2 blocServicePicto">
                        <a>
                            <img class="pictos" src="img/pictos/normV.png" width="85" alt="">
                        </a>
                    </div>
                    <div class="col-10 blocServiceText">
                        <h5 id="normes">Mise aux normes</h5>
                        <ul>
                            <li>✘ Tableau électrique</li> 
                            <li>✘ Appareillages</li>  
                            <li>✘ Câblages</li>
                            <li>✘ Particuliers</li>
                            <li>✘ Petits tertiaires</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 bloc6">
                <div class="row blocService">
                    <div class="col-2 blocServicePicto">
                        <a>
                            <img class="pictos" src="img/pictos/eclairV.png" width="90" alt="">
                        </a>
                    </div>
                    <div class="col-10 blocServiceText">
                        <h5 id="courants">Courants forts/faibles VDI</h5>
                        <p>Voix, données images, réseaux informatiques,&nbsp;...</p>
                        <ul>
                            <li>✘ Alarme maison</li> 
                            <li>✘ Portail électrique</li>  
                            <li>✘ Interphone, digicode</li>
                            <li>✘ Volet électrique</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- fin container-fluid -->

<!-- flèche pour remonter dans la pg -->  
<div class="container">
        <button><a class="flechUp" href="#top"><i class="far fa-arrow-alt-circle-up" aria-hidden="true"></i></a></button>     
</div>


<!-- <script>
    const titre = document.querySelector("home");
    let i = 0;

    function hautBas() {
        console.log(i);
        i++
    }
    requestAnimationFrame(hautBas);
</script> -->
        
<?php
require_once("inc/footer.php");
?>

