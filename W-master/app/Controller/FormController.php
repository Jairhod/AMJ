<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\NewsletterModel;
use \Model\ArtistesModel;

class FormController extends Controller
{  
    // Propriétés
    protected $tabVariableView = [];

    // Getter
    
    // Setter
    function setVar($nomVariable, $valeurVariable)
    {
        $this->tabVariableView[$nomVariable] = $valeurVariable;
    }

    // METHODE
    // JE SURCHARGE LA METHODE show DE LA CLASSE PARENTE Controller 
    public function show($file, array $data = array())
    {
        //incluant le chemin vers nos vues
        $engine = new \League\Plates\Engine(self::PATH_VIEWS);

        //charge nos extensions (nos fonctions personnalisées)
        $engine->loadExtension(new \W\View\Plates\PlatesExtensions());

        $app = getApp();

        // Rend certaines données disponibles à tous les vues
        // accessible avec $w_user & $w_current_route dans les fichiers de vue
        $engine->addData(
            [
                'w_user'          => $this->getUser(),
                'w_current_route' => $app->getCurrentRoute(),
                'w_site_name'     => $app->getConfig('site_name'),
            ]
        );

        // JE PEUX AJOUTER DES VARIABLES 
        // QUI SERONT DISPONIBLES DANS TOUTES LES FICHIERS VIEW
        $this->setVar("var1", "Some info");
        $engine->addData($this->tabVariableView);

        // on peut rajouter des fonctions supplementaires
        $engine->registerFunction('afficherDate', function(){
            echo date("d/m/Y");
        });

        $engine->registerFunction('afficherVarGlob', function($nomVar){
            if (isset($GLOBALS["$nomVar"]))
            {
                echo $GLOBALS["$nomVar"];
            }
        });
        
        // Retire l'éventuelle extension .php
        $file = str_replace('.php', '', $file);

        // Affiche le template
        echo $engine->render($file, $data);
        die();
    }

    public function __construct()
    {
        // traitement du formulaire
        $idFormClasse   = $this->verifierSaisie("idFormClasse");
        $idFormMethode  = $this->verifierSaisie("idFormMethode");

        // je vais completer le chemin vers le namespace
        $idFormClasse = "\Controller\Traitement\\$idFormClasse";

        if (($idFormClasse != "") && ($idFormMethode != ""))
        {
            if(method_exists($idFormClasse, $idFormMethode))
            {
                $objet = new $idFormClasse;
                $objet->$idFormMethode($this);
            }
        }
    }
    
    public function verifierSaisie($name)
    {

    $valeurSaisie = ""; 

    if (isset($_REQUEST[$name]))
        {
            $valeurSaisie = $_REQUEST[$name];
            
            $valeurSaisie = strip_tags($valeurSaisie);

            $valeurSaisie = trim($valeurSaisie);
       
        }
        
    return $valeurSaisie;

    }

    public function verifierEmail ($email)
    {
        $resultat = false;

        if ( ($email != "") && (filter_var($email, FILTER_VALIDATE_EMAIL) !== false) )
        {
            $resultat = true;
        }
        
        return $resultat;
    }

    public function newsletterTraitement ()
    {
        $email = $this->verifierSaisie("email");
        if ($this->verifierEmail($email))
        {
            $dateInscription = date("Y-m-d H:i:s");

            //$this->ajouterLigneTable("newsletter", [ "email" => $email, "date" => $dateInscription ]);
            // Avec le framework W on va stocker l'email et la date dans newsletter
            // on va passer par un objet de la partie Model
            // il faut utiliser un objet de la classe NewsletterModel

            $objetNewsletterModel = new NewsletterModel;
            $objetNewsletterModel->insert(["email"=>$email, "dateInscription"=>$dateInscription]);             

            $GLOBALS["newsletterRetour"] = "MERCI DE VOTRE INSCRIPTION ($email)";
          
        }
        else 
        {
            $GLOBALS["newsletterRetour"] = "ENTREZ UN EMAIL VALIDE";
        }
         
    }

    public function artisteCreateTraitement ()
    {
        // A COMPLETER
        // RECUPERER LES INFOS DU FORMULAIRE
        $nom            = $this->verifierSaisie("nom");
        $genreArt       = $this->verifierSaisie("genreArt");
        $cheminImage    = $this->verifierSaisie("cheminImage");
        $bio            = $this->verifierSaisie("bio");
        
        // VERIFIER SI LES INFOS SONT CORRECTES
        if ( ($nom != "") && ($genreArt != "") && ($cheminImage != "") && ($bio != "") )
        {
            // SI OK
            // ALORS ON AJOUTE UNE LIGNE DANS LA TABLE artistes
            // AVEC LE FRAMEWORK W
            // JE DOIS CREER UN OBJET DE LA CLASSE ArtistesModel
            // (...car la table mysql s'appelle artistes)
            $objetArtistesModel = new ArtistesModel;
            // ON PEUT UTILISER LA METHODE insert
            $objetArtistesModel->insert([   "nom"           => $nom, 
                                            "genreArt"      => $genreArt, 
                                            "cheminImage"   => $cheminImage,
                                            "bio"           => $bio,
                                        ]);
                                        
            // MESSAGE DE RETOUR
            $GLOBALS["artisteCreateRetour"] = "ARTISTE AJOUTE ($nom)";

        }
        else
        {
            // MESSAGE DE RETOUR
            $GLOBALS["artisteCreateRetour"] = "INFORMATION(S) MANQUANTES";
            
        }
    }

    public function artisteDeleteTraitement ()
    {
       $id = $this->verifierSaisie("id");
       $id = intval($id);
       if ($id>0)
       {
        $objetArtistesModel = new ArtistesModel;
        $objetArtistesModel->delete($id);
        $GLOBALS["artisteDeleteRetour"] = "Artiste ($id) supprimé";
       }
       else
       {
        $GLOBALS["artisteDeleteRetour"] = "Erreur sur ($id)";
       }
    }

    public function artisteUpdateTraitement()
    {
                // A COMPLETER
        // RECUPERER LES INFOS DU FORMULAIRE
        $nom            = $this->verifierSaisie("nom");
        $genreArt       = $this->verifierSaisie("genreArt");
        $cheminImage    = $this->verifierSaisie("cheminImage");
        $bio            = $this->verifierSaisie("bio");

        // update
        $id             = $this->verifierSaisie("id");
        $id             = intval($id);
        
        // VERIFIER SI LES INFOS SONT CORRECTES
        if ( ($id > 0)
            && ($nom != "") && ($genreArt != "") && ($cheminImage != "") && ($bio != "") )
        {
            // SI OK
            // ALORS ON AJOUTE UNE LIGNE DANS LA TABLE artistes
            // AVEC LE FRAMEWORK W
            // JE DOIS CREER UN OBJET DE LA CLASSE ArtistesModel
            // (...car la table mysql s'appelle artistes)
            $objetArtistesModel = new ArtistesModel;
            // ON PEUT UTILISER LA METHODE insert
            $objetArtistesModel->update([   "nom"           => $nom, 
                                            "genreArt"      => $genreArt, 
                                            "cheminImage"   => $cheminImage,
                                            "bio"           => $bio,
                                        ],
                                        $id); // update
                                        
            // MESSAGE DE RETOUR
            $GLOBALS["artisteUpdateRetour"] = "$nom modifié. Id: ($id)";

        }
        else
        {
            // MESSAGE DE RETOUR
            $GLOBALS["artisteUpdateRetour"] = "INFORMATION(S) MANQUANTES";
            
        }

    }

    public function loginTraitement()
    {
        $identifiant = $this->verifierSaisie("identifiant");
        $password    = $this->verifierSaisie("pamplemousse");

        if ( ($identifiant != "") && ($password != "") )
        {
            $objetAuthentificationModel = new  \W\Security\AuthentificationModel;

            $idUser = $objetAuthentificationModel->isValidLoginInfo($identifiant, $password);

            if ($idUser > 0)
            {
                $objetUsersModel = new \W\Model\UsersModel;

                $tabUser = $objetUsersModel->find($idUser);
                $objetAuthentificationModel->logUserIn($tabUser);

                $username = $tabUser['username'];

                $GLOBALS["loginRetour"] = "BIENVENUE ($username)";
            }
            else
            {
                $GLOBALS["loginRetour"] = "IDENTIFIANTS INCORRECTS";
            }
        }
    }

}