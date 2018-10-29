// Valider email cf. paulunde
var validateEmail = email => {
    // var validateEmail = function(email) {
    var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    var valid = emailReg.test(email);

    if(!valid) {
        return false;
    } else {
        return true;
    }
}
// Valider tel avec les expressions régulières
var validateTel = function(tel) {
    var telReg = new RegExp("(0|\\+33|0033)[1-9][0-9]{8}");
    var valid = telReg.test(tel);

    if(!valid) {
        return false;
    } else {
        return true;
    }
}

// Initialiser jQuery
$(function() {

// Ecouter formulaire envoyé 
    $('#message').on('submit', e => {

        // Empêcher redirection HTML5 
        e.preventDefault();

        // Alertes erreurs 
        $('#inscription .has-error').removeClass('has-error');
        $('#inscription .text-danger').remove();

        // Déclarer les variables à vérif 
        var nom     = $('#nom');
        var prenom  = $('#prenom');
        var email   = $('#email');
        var tel     = $('#tel');
        var sujet   = $('#sujet');
        var message = $('#message');

        // Vérifier chaque champ

            // 1. Vérifier Nom 
            if(nom.val().length === 0) {
                nom.parent().addClass('has-error');
                $('<p class="text-danger">Veuillez saisir votre nom</p>').appendTo(nom.parent());
            } else {
                nom.parent().addClass('has-success');
            }

            // 2. Vérifier Prénom
            if(prenom.val().length === 0) {
                prenom.parent().addClass('has-error');
                $('<p class="text-danger">Veuillez saisir votre prénom</p>').appendTo(prenom.parent());
            } else {
                prenom.parent().addClass('has-success');
            }

            // 3. Vérifier Mail
            if(!validateEmail(email.val())) {
                email.parent().addClass('has-error');
                $('<p class="text-danger">Vérifiez votre adresse email</p>').appendTo(email.parent());
            } else {
                email.parent().addClass('has-success');
            }

            // 4. Vérifier Téléphone
            if(!validateTel(tel.val())) {
                tel.parent().addClass('has-error');
                $('<p class="text-danger">Vérifiez votre numéro de téléphone</p>')
                    .appendTo(tel.parent());
            } else {
                tel.parent().addClass('has-success');
            }
            
            // 4. Vérifier Sujet
            if(sujet.val().length === 0) {
                sujet.parent().addClass('has-error');
                $('<p class="text-danger">Veuillez saisir un sujet</p>').appendTo(sujet.parent());
            } else {
                sujet.parent().addClass('has-success');
            }
            // 4. Vérifier Message
            if(message.val().length === 0) {
                message.parent().addClass('has-error');
                $('<p class="text-danger">Veuillez saisir votre message</p>').appendTo(message.parent());
            } else {
                message.parent().addClass('has-success');
            }


        // Vérifier si erreurs dans le formulaire
        if($('#message').find('.has-error').length === 0) {

            $('#message').replaceWith(`
                <div class="alert alert-success">
                    Votre message a bien été envoyé !
                </div>
            `);
        } else {

            $('#inscription').prepend(`
                <div class="alert alert-danger">
                    Nous n'avons pas été en mesure d'envoyer votre message. Vérifiez vos informations.
                </div>
            `);
        }
    });


});

/* <script>
    var animTitre = document.getElementById("animTitre");
    var vitesse = 500; // Valeur du déplacement en pixels

    // Déplace le bloc sur sa gauche
    function deplacerTitre() {
        // Conversion en nombre de la position gauche du bloc (valeur de la forme "XXpx")
        var yTitre = parseFloat(getComputedStyle(animTitre).top);
        // Déplacement du bloc
        animTitre.style.top = (yTitre + vitesse) + "px";
        // Demande au navigateur d'appeler deplacerBloc dès que possible
        requestAnimationFrame(deplacerTitre);
    }
    requestAnimationFrame(deplacerTitre); // Début de l'animation
</script> */}

// MODAL pour mentions légales
// récup des éléments
// var mentions = getElementById('mentionsLeg');

// // écouter l'événement
// mentions.addEventListener('click', function () {
//     prompt("mentions légales 
//     Raison sociale : 38 volts
//     Enseigne : 38 volts
//     Forme juridique : EURL
//     Adresse : Fabien Clève - 36, rue de l’Egala 38500 La Buisse 
//     Tél : 06 29 82 16 46 
//     RCS : 000 000 000 
//     N° de SIRET : 000000000000000     
    
//     Le site Internet :  
//     www.38volts.fr est le site de la société  38 volts. 
//     Directeur de publication : M. Fabien Clève   
//     Hébergement Web : OVH 
//     Conception graphique et développement : Amaneï 
//     Maintenance du site : Amaneï     
//     Droits d'auteur – Copyright 
//     L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris les documents téléchargeables et les représentations iconographiques et photographiques. La reproduction de tout ou partie de ce site sur un support électronique, quel qu'il soit, est formellement interdite, sauf autorisation expresse du directeur de la publication.     
    
//     Modification du site   
//     L'équipe éditoriale se réserve le droit de modifier ou de corriger le contenu de ce site et cette mention légale à tout moment et ceci sans préavis.     
    
//     Liens à d'autres sites Internet   
//     Les liens vers d'autres sites Internet présents sur ce site sont fournis exclusivement pour vous fournir une information la plus complète.www.38volts.fr a vérifié la page pointée par le lien actif mais il ne contrôle ni n'est responsable de ces sites ou de leur contenu. Pour cette raison, nous déclinons toute responsabilité concernant ces sites ou les informations y figurant, les logiciels ou autres documents qui s'y trouvent ou concernant les conséquences de leur utilisation. Si vous décidez d'accéder à des sites externes reliés à notre site, vous le faites sous votre entière responsabilité.    
    
//     Exonération de responsabilité 
//     Il appartient à l'utilisateur de ce site de prendre toutes les mesures appropriées de façon à protéger ses propres données et/ou logiciels de contamination par d'éventuels virus circulant sur le réseau Internet. www.38volts.fr ne pourra être tenu responsable des dommages directs ou indirects résultant de l'usage de ce site Internet ou d'autres sites qui lui sont liés, notamment du fait de non-accès à son site, de dysfonctionnements liés au réseau Internet, à l'hébergeur du site ou l'hébergeur d'une partie du site ou d'interruption de service pour cause de maintenance ou de mise à jour. Ce site Internet est régi par le droit français.   
    
//     Hébergement  
//     www.www.38volts.fr est hébergé par :
//     OVH
//     2 rue Kellermann - 59100 Roubaix - France")
// });
// function();


