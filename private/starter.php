<?php

// http://php.net/manual/fr/function.error-reporting.php
// CONFIG DE DEVELOPPEMENT
error_reporting(E_ALL);

// CONFIG DE PRODUCTION
// error_reporting(0);

// DECLARATION DE NOS FONCTIONS

$GLOBALS["hostDB"]     = "localhost";      
$GLOBALS["databaseDB"] = "annonces7";
$GLOBALS["userDB"]     = "root";
$GLOBALS["passwordDB"] = "";



// DECLARATION DE MES FONCTIONS
require_once("private/functions-model.php");
require_once("private/functions-view.php");
require_once("private/functions-controller.php");





// CONTROLLER
// JE VAIS DETECTER idForm
// ET SI IL Y A UNE INFO DE FORMULAIRE idForm
// ALORS JE VAIS CHARGER LE FICHIER DE TRAITEMENT ASSOCIE
// private/controller/traitement-$idForm.php
// EN HTML
// <input type="hidden" name="idForm" value="toto" />
// EN PHP
// $idForm = verifierSaisie("idForm"); 
// => $idForm = "toto";
// LE FICHIER DE TRAITEMENT ASSOCIE
// private/controller/traitement-toto.php
$idForm = verifierSaisie("idForm");
if ($idForm != "")
{
    // CHERCHER LE FICHIER DE TRAITEMENT
    $cheminFichierTraitement = "private/controller/traitement-$idForm.php";
    // EST-CE QUE LE DEVELOPPEUR A PREVU UN FICHIER DE TRAITEMENT?
    if (is_file($cheminFichierTraitement))
    {
        // ALORS JE CHARGE LE CODE DU FICHIER
        require_once($cheminFichierTraitement);
    }
}


// https://dev-web1a.c9users.io/php8-backoffice
// COOKIE
// http://php.net/manual/fr/function.setcookie.php
setcookie("bonjour", "jeudi");
// ON PEUT UTILISER LES COOKIES POUR PERSONNALISER LA NAVIGATION D'UN VISITEUR
// ON PEUT IDENTIFIER UN VISITEUR EN LUI ATTRIBUANT UN COOKIE SPECIFIQUE
// http://php.net/manual/fr/function.uniqid.php
// JE VAIS TESTER SI LE VISITEUR A DEJA UN COOKIE idVisiteur
// SI IL EN A UN JE NE FAIS RIEN
// SINON JE LUI CREE UN
if (!isset($_COOKIE["cookieVisiteur"]))
{
    setcookie("cookieVisiteur", uniqid());
}
setcookie("cookieIP", $_SERVER["REMOTE_ADDR"]);

// JE PEUX ASSOCIER UN FICHIER SUR LE SERVEUR AVEC CET IDENTIFIANT
// POUR LIRE UN COOKIE, ON PASSE PAR LE TABLEAU ASSOCIATIF $_COOKIE
// SECURITE:
// COMME LE COOKIE VIENT DU NAVIGATEUR
// ON NE PEUT PAS FAIRE CONFIANCE AU COOKIE
// IL FAUT FAIRE UNE FONCTION lireCookie DANS LE MEME STYLE QUE verifierSaisie
$cookieVisiteur = $_COOKIE["cookieVisiteur"];
$date           = date("Y-m-d H:i:s");
$uri            = $_SERVER["REQUEST_URI"];
$ip             = $_SERVER["REMOTE_ADDR"];
$userAgent      = $_SERVER["HTTP_USER_AGENT"];

file_put_contents("private/mouchard/log-$cookieVisiteur", "$date,$uri,$ip,$userAgent\n", FILE_APPEND);
if (!empty($_REQUEST))
{
    // JE VEUX CONSERVER L'EMAIL DANS UN FICHIER
    // http://php.net/manual/fr/function.json-encode.php
    file_put_contents("private/mouchard/data-$cookieVisiteur", json_encode($_REQUEST)."\n", FILE_APPEND);
}
