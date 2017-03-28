<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArtistesModel;

class FormController extends Controller
{  

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


    public function artisteCreateTraitement ()
    {
        $nomArtiste             = $this->verifierSaisie("nomArtiste");
        $nomGenre               = $this->verifierSaisie("nomGenre");
        $artistesLies           = $this->verifierSaisie("artistesLies");
        $cheminImagePrincipale  = $this->verifierSaisie("cheminImagePrincipale");
        $descriptionArtiste     = $this->verifierSaisie("descriptionArtiste");
        $dateModification       = date("Y-m-d H:i:s");
        
        if ( ($nomArtiste != "") && ($nomGenre != "") && ($artistesLies != "") && ($cheminImagePrincipale != "") && ($descriptionArtiste != "") )
        {

            $objetArtistesModel = new ArtistesModel;

            $objetArtistesModel->insert([   "nomArtiste"            => $nomArtiste, 
                                            "nomGenre"              => $nomGenre, 
                                            "artistesLies"          => $artistesLies, 
                                            "cheminImagePrincipale" => $cheminImagePrincipale,
                                            "descriptionArtiste"    => $descriptionArtiste,
                                            "dateModification"      => $dateModification,
                                        ]);
                                        
            $GLOBALS["artisteCreateRetour"] = "($nomArtiste) ajouté";

        }
        else
        {
            $GLOBALS["artisteCreateRetour"] = "Erreurs artisteTraitement";          
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
        $nomArtiste                 = $this->verifierSaisie("nomArtiste");
        $nomGenre                   = $this->verifierSaisie("nomGenre");
        $cheminImagePrincipale      = $this->verifierUpload ("cheminImagePrincipale");
        $descriptionArtiste         = $this->verifierSaisie("descriptionArtiste");
        $artistesLies               = $this->verifierSaisie("artistesLies");
        $dateModification           = $this->verifierSaisie("dateModification");

        // update
        $id             = $this->verifierSaisie("id");
        $id             = intval($id);
        
        // VERIFIER SI LES INFOS SONT CORRECTES
        if ( ($id > 0)
            && ($nomArtiste != "") && ($nomGenre != "") && ($cheminImagePrincipale != "") && ($descriptionArtiste != "")
            && ($artistesLies != "") && ($dateModification != "") )
        {
            // SI OK
            // ALORS ON AJOUTE UNE LIGNE DANS LA TABLE artistes
            // AVEC LE FRAMEWORK W
            // JE DOIS CREER UN OBJET DE LA CLASSE ArtistesModel
            // (...car la table mysql s'appelle artistes)
            $objetArtistesModel = new ArtistesModel;
            // ON PEUT UTILISER LA METHODE insert
            $objetArtistesModel->update([   "nomArtiste"             => $nomArtiste, 
                                            "nomGenre"               => $nomGenre, 
                                            "cheminImagePrincipale"  => $cheminImagePrincipale,
                                            "descriptionArtiste"     => $descriptionArtiste,
                                            "artistesLies"           => $artistesLies,
                                            "dateModification"       => $dateModification,
                                        ],
                                        $id); // update
                                        
            // MESSAGE DE RETOUR
            $GLOBALS["artisteUpdateRetour"] = "$nomArtiste modifié. Id: ($id)";

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
                header("Location: accueil");
            }
            else
            {
                $GLOBALS["loginRetour"] = "IDENTIFIANTS INCORRECTS";
            }
        }
    }

    function verifierUpload ($nameInput)
{
    $cheminOK = "";
    
    $idForm = verifierSaisie("idForm");
    
    if (!empty([$_FILES]))
    {
        $tabInfoFichierUploade = $_FILES[$nameInput];
        if (!empty($tabInfoFichierUploade))
        {
            $error = $tabInfoFichierUploade["error"];
            if ($error == 0)
            {
                $name       = $tabInfoFichierUploade["name"];
                $type       = $tabInfoFichierUploade["type"];
                $tmpName    = $tabInfoFichierUploade["tmp_name"];
                $size       = $tabInfoFichierUploade["size"];
                
                if ($size < 10 * 1024 * 1024) // 10 MEGAOCTETS
                {
                    // ON VERIFIE L'EXTENSION
                    $extension = pathinfo($name, PATHINFO_EXTENSION);
                    // METTRE L'EXTENSION EN MINUSCULES
                    $extension = strtolower($extension);

                    $tabExtensionOK = 
                    [ 
                        "jpeg", "jpg", "gif", "png", "svg", 
                        "pdf", "txt", "doc", "docx", "xls", "ppt", "pptx", "odt", 
                        "html", "css", "js", 
                        "ttf", "otf"
                    ];
                    
                    if (in_array($extension, $tabExtensionOK))
                    {
                        $nameOK     =  preg_replace("/[^a-zA-Z0-9-_\.]/", "", $name);
                        $cheminOK   = "assets/uploads/$nameOK";
                        
                        $cheminOK = strtolower($cheminOK);
                      
                        move_uploaded_file($tmpName, $cheminOK);
                    }
                    else
                    {
                        $GLOBALS[$idForm . "Retour"] = "EXTENSION NON CONFORME";
                    }
                }
                else 
                {
                    $GLOBALS[$idForm . "Retour"] = "FICHIER TROP VOLUMINEUX";
                }
            }
        }
    }
        
    return $cheminOK;
}

}