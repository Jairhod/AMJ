<?php
function ajouterLigneTable ($nomTable, $tabColVal)
{
    $hostDB     = $GLOBALS["hostDB"];      
    $databaseDB = $GLOBALS["databaseDB"];
    $userDB     = $GLOBALS["userDB"];
    $passwordDB = $GLOBALS["passwordDB"];
    
    // JE CREE UNE VARIABLE $objetPDO QUI VA CONTENIR COMME VALEUR
    // UN OBJET DE LA CLASSE PDO
    $objetPDO = new PDO("mysql:host=$hostDB;charset=utf8;dbname=$databaseDB", $userDB, $passwordDB);
    
    // PREPARER LA REQUETE SQL
    
      if ($nomTable == "contact"){
        $requeteSQL = "INSERT INTO contact( nom, email, message, date ) VALUES ( :nom, :email, :message, :date) ";
    }
    
    envoyerRequeteSQL($requeteSQL,$tabColVal);
}

function envoyerRequeteSQL ($requeteSQL, $tabToken)
{
        // SE CONNECTER A LA BASE DE DONNEES
        $hostDB  = $GLOBALS["hostDB"];
        $databaseDB  = $GLOBALS["databaseDB"];
        $userDB      = $GLOBALS["userDB"];
        $passwordDB  = $GLOBALS["passwordDB"];
        $dsn         = "mysql:host=$hostDB;dbname=$databaseDB;charset=utf8";
        
    try 
    {
        $objetPDO    = new PDO($dsn, $userDB, $passwordDB);
            
        $objetPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    
        // PREPARER LA REQUETE SQL
        // http://php.net/manual/fr/pdo.prepare.php
        $objetPDOStatement = $objetPDO->prepare($requeteSQL);
        
        // EXECUTER LA REQUETE SQL
        $objetPDOStatement->execute($tabToken);
        
        // SI ON FAIT UNE LECTURE
        // ON VEUT RECUPERER LES INFOS DANS UN TABLEAU ASSOCIATIF
        // QUAND ON FERA APPEL A LA METHODE fetch
        // http://php.net/manual/fr/pdostatement.setfetchmode.php
        $objetPDOStatement->setFetchMode(PDO::FETCH_ASSOC);
    }
    catch (PDOException $e)
    {
        // ON AFFICHE LES MESSAGES D'ERREUR DE MYSQL
        echo $e->getMessage();
    }
    
    return $objetPDOStatement;
}

// demarrer une session si aucune session n'est ouverte
// et retrouve une session deja ouverte dans une autre page
// => c'est PHP qui gère ça (avec un cookie PHPSESSID) ;-p 
function demarrerSession ()
{
    if (session_id() == "")
    {
        // AUCUNE SESSION N'A ETE DEMARREE
        // ON DEMARRE UNE NOUVELLE SESSION
        
        // DEBUG
        // http://php.net/manual/fr/function.session-save-path.php
        // ON VA UTILISER LE DOSSIER private/session POUR STOCKER LES SESSIONS
        //session_save_path(__DIR__."/session");
        // http://php.net/manual/fr/function.realpath.php
        session_save_path(realpath("private/session"));
        // WARNING: 
        // IL FAUT CREER LE DOSSIER private/session
        
        // http://php.net/manual/fr/function.session-start.php
        session_start();
        // => PHP CREE LA VARIABLE $_SESSION POUR NOUS
    }
    
}

// enregistre une info (cle, valeur) dans la session de l'utilisateur
function ecrireSession ($cle, $valeur)
{
    // demarrer une session si aucune session n'est ouverte
    // et retrouve une session deja ouverte dans une autre page
    demarrerSession();
    
    // JE MEMORISE L'INFO DANS LE TABLEAU DE SESSION
    $_SESSION[$cle]     = $valeur;
    
    // A LA FIN DU PROGRAMME PHP
    // PHP VA AUTOMATIQUEMENT SAUVEGARDER LES INFOS DU TABLEAU 
    // DANS UN FICHIER DE SESSIONS
}

// recupere une info (cle, valeur) par sa cle
// ou si la cle n'existe pas 
// alors la fonction renvoie la valeur par défaut fournie en 2è paramètre
function lireSession ($cle, $valeurDefaut)
{
    // demarrer une session si aucune session n'est ouverte
    // et retrouve une session deja ouverte dans une autre page
    demarrerSession();

    $valeur = $valeurDefaut;
    
    // JE RECUPERE L'INFO DANS LE TABLEAU DE SESSION
    if (isset($_SESSION[$cle]))
    {
        $valeur = $_SESSION[$cle];
    }
    
    return $valeur;
}

// gere une info de session "debutSession"
// et calcule si la limiteMax
function verifierDureeSession ($limiteMax)
{
    $resultat = false;
    
    $debutSession = lireSession("debutSession", time());
    $maintenant   = time();
    echo "($maintenant - $debutSession < $limiteMax)";
    if ($maintenant - $debutSession < $limiteMax)
    {
        $resultat = true;
        
        // METTRE A JOUR LE DEBUT
        // POUR RECHARGER LE TEMPS DE CONNEXION
        ecrireSession("debutSession", $maintenant);
    }
    
    return $resultat;
}