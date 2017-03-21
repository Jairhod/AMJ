/* global $ */
/* global urlRouteAjax */

// DEBUG
// alert("SCRIPT.JS");

// JE VEUX UTILISER JQUERY
// VERSION LONGUE: $(document).ready(function(){...});
$(function(){
   // JE METS MON CODE DANS LA FONCTION DE DEMARRAGE

   // JE RAJOUTE MA FONCTION SUR LE CLICK DU BOUTON SUBMIT
   $("form.ajax").on("submit", function(event){
       // BLOQUER LE COMPORTEMENT NORMAL DU FORMULAIRE
       event.preventDefault();
       
       // JE RECUPERE TOUTES LES INFOS DU FORMULAIRE
       // https://api.jquery.com/serialize/
       var paramForm = $(this).serialize();
       
       // DEBUG
       //console.log(paramForm);
       
       // ENVOYER SUR LE SERVEUR LES INFOS VERS UNE URL DU SERVEUR
       // console.log(urlRouteAjax);
       
       // astuce:
       // JE MEMORISE LE FORMULAIRE EN COURS
       // POUR L'UTILISER DANS LA FONCTION success
       var formEnCours = $(this);
       
       // ENVOYER LA REQUETE AJAX
       // https://api.jquery.com/jQuery.ajax/
       $.ajax({
           url:         urlRouteAjax,   // URL VERS LAQUELLE ON ENVOIE LES INFOS
           type:        "POST",         // PERMET DE NE PAS AVOIR DE CACHE NAVIGATEUR
           data:        paramForm,      // ENVOYER LES INFOS
           dataType:    "json",         // FORMAT DE LA REPONSE
           success:     function(reponse){
               // reponse EST UN OBJET JAVASCRIPT
               // CAR dataType VAUT "json"
               
               // CE CODE SERA ACTIVE QUAND LE NAVIAGTEUR VA RECEVOIR LA REPONSE
               // console.log(reponse);
               // ON VEUT AFFICHER reponse
               // DANS LA div.retour
               // https://api.jquery.com/find/
               // astuce: 
               // je pars du formulaire actuel
               // et je change seulement la div.retour 
               // qui est à l'intérieur du formulaire
               // console.log(this);
               
               // formEnCours CONTIENT LE FORMULAIRE EN COURS
               //formEnCours.find("div.retour").html(reponse.retour);
                // ON PEUT AUSSI ECRIRE COMME EN PHP POUR UN TABLEAU ASSOCIATIF
                formEnCours.find("div.retour").html(reponse["retour"]);
           }
       });
       
   });
});