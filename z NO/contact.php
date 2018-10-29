<?php
require_once("inc/init.inc.php");
require_once("inc/header.php");
?>

    <header>
        <div class="container-fluid">  
            <section class="parallaxContact">
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
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                                <a class="navbar-brand" href="https://www.bilik.fr/" target="_blank">
                                    <img class="bilikMenu" src="img/bilik.png" width="85" alt="">
                                </a>
                            </ul>
                        </div>
                    </nav>
                <div>
                

                <!-- FORMUALIRE -->
                <div class="container">   
                    <div class="contact animated bounceInDown img-responsive">
                        <h1>Contact</h1>
                    </div>  
                    <div class="formulaire">   
                        <div class="row justify-content-center">
                            <!-- <div class="col-sm-8 col-sm-push-2 col-10 col-push-1"> -->
                                <div class="col-md-8 col-md-push-2 col-10 col-sm-push-1 col-12">
                                <form id="message" data-toggle="validator">
                                    <div class="row">

                                        <div class="col-12">
                                            <input type="text" id="nom" class="form-control" name="nom" placeholder="Nom" aria-label="Nom" aria-describedby="basic-addon1" required>
                                        </div>

                                        <div class="col-12">
                                            <input type="text" id="prenom" class="form-control" name="prenom" placeholder="Prénom" aria-label="Prénom" aria-describedby="basic-addon2" required>
                                        </div>

                                        <div class="col-sm-6 col-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon3">@</span>
                                                </div>
                                                <input type="email" id="email" class="form-control email" name="email" placeholder="Email" aria-label="Username" aria-describedby="basic-addon3" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-12">
                                            <!-- <input type="tel" id="tel" class="form-control tel" name="tel" placeholder="Téléphone" aria-label="Telephone" aria-describedby="basic-addon4" required> -->
                                            <input type="text" id="tel" class="form-control tel" name="tel" placeholder="Tél (Ex. 0123456789)" aria-label="tel" pattern="^0\d(?:\d{2}){4}$" title="format: 0123456789" required/>
                                        </div>

                                        <div class="col-12">
                                            <input type="text" id="text" class="form-control" name="sujet" placeholder="Sujet" aria-label="Sujet" aria-describedby="basic-addon5" required>
                                        </div>

                                        <div class="col-12">
                                            <textarea id="message" id="message" class="form-control" name="message" rows="8" placeholder="Message" required></textarea>           
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary envoyer">Envoyer</button>
                                        </div>
                                    </div>                                  
                                </form>
                            </div>
                        </div>                        
                    </div>                             
                </div>
            </section>             
        </div> <!-- fin container fluid -->
                
        
    </header>
                                    
        <!-- <div class="container">
                <button><a class="flechUp flechUpContact" href="#top"><i class="far fa-arrow-alt-circle-up" aria-hidden="true"></i></a></button>     
        </div> -->

<footer>
        <div class="container-fluid footerContact">
            <!-- <hr class="filetFooter"> -->
            <div class="textFooter">
                <div class="adresse">
                    <p><span class="nom"><strong>Fabien Clère</strong></span><br>
                        36, rue de l’Egala 38500 La Buisse<br>
                        <span class="tel"><strong>Tél. 06 29 82 16 46</strong></span><br>
                        Fax : 09 72 14 42 92<br>
                        <span class="mail">Mail : <a href="mailto:contact@38volts.fr" class="mailTo">contact@38volts.fr</a>
                        
                    </p>
                </div>

                <!-- <div class="mentionsFooter">
                    <p>Réalisation © adeline-clere.fr 2018   |  <a id="mentionsLeg" href="">Mentions légales<a/></p>
                </div> -->

                <div class="mentionsFooter">
                    <!-- Trigger the modal with a button -->
                    <p>Réalisation © <a class="webA2l" target="_blank" href="http://adeline-clere.fr/">adeline-clere.fr</a> 2018   |  <a class="mentionsLeg" data-toggle="modal" data-target="#myModal" href="">Mentions légales<a/></p>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">                                                            
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Mentions légales</h4>
                                </div>
                                <div class="modal-body">
                                    <h5>Mentions légales</h5>
                                    <p>Raison sociale : 38 volts<br>
                                        Enseigne : 38 volts<br>
                                        Forme juridique : EURL<br>
                                        Adresse : Fabien Clère - 179 chemin de la Plaine<br> 
                                        Tél : 06 29 82 16 46<br>
                                        RCS : 000 000 000br> 
                                        N° de SIRET : 000000000000000<br></p>     

                                    <h6>Le site Internet</h6>  
                                    <p>www.38volts.fr est le site de la société 38 volts.<br> 
                                        Directeur de publication : M. Fabien Clère<br>   
                                        Hébergement Web : OVH<br> 
                                        Conception graphique et développement <a class="a2l" target="_blank" href="http://adeline-clere.fr/">A2L</a><br> 
                                        Maintenance du site : <a class="a2l" target="_blank" href="http://adeline-clere.fr/">A2L</a><br>     
                                        Droits d'auteur – Copyright<br> 
                                        L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris les documents téléchargeables et les représentations iconographiques et photographiques. La reproduction de tout ou partie de ce site sur un support électronique, quel qu'il soit, est formellement interdite, sauf autorisation expresse du directeur de la publication.<p>     

                                    <h6>Modification du site</h6>   
                                    <p>L'équipe éditoriale se réserve le droit de modifier ou de corriger le contenu de ce site et cette mention légale à tout moment et ceci sans préavis.<p>     

                                    <h6>Liens à d'autres sites Internet</h6>   
                                    <p>Les liens vers d'autres sites Internet présents sur ce site sont fournis exclusivement pour vous fournir une information la plus complète.www.38volts.fr a vérifié la page pointée par le lien actif mais il ne contrôle ni n'est responsable de ces sites ou de leur contenu. Pour cette raison, nous déclinons toute responsabilité concernant ces sites ou les informations y figurant, les logiciels ou autres documents qui s'y trouvent ou concernant les conséquences de leur utilisation. Si vous décidez d'accéder à des sites externes reliés à notre site, vous le faites sous votre entière responsabilité.<p>    

                                    <h6>Exonération de responsabilité</h6> 
                                    <p>Il appartient à l'utilisateur de ce site de prendre toutes les mesures appropriées de façon à protéger ses propres données et/ou logiciels de contamination par d'éventuels virus circulant sur le réseau Internet. www.38volts.fr ne pourra être tenu responsable des dommages directs ou indirects résultant de l'usage de ce site Internet ou d'autres sites qui lui sont liés, notamment du fait de non-accès à son site, de dysfonctionnements liés au réseau Internet, à l'hébergeur du site ou l'hébergeur d'une partie du site ou d'interruption de service pour cause de maintenance ou de mise à jour. Ce site Internet est régi par le droit français.<p>   

                                    <h6>Hébergement</h6>  
                                    <p>www.www.38volts.fr est hébergé par : OVH
                                        2 rue Kellermann - 59100 Roubaix - France</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">FERMER</button>
                                </div>
                            </div>   <!-- end modal-content -->
                        </div>   <!-- end modal-dialog -->
                    </div>  <!-- end modal fade -->
                </div> <!-- end mentionsFooter -->
            </div> <!-- end textFooter -->   
        </div> <!-- end container-fluid --> 

    </footer>

        <!-- Mon Fichier JS -->
        <script src="assets/verif-form.js"></script>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap 4 -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- Mon Fichier JS -->
        <script src="assets/style.js"></script>

     </body> 
</html>