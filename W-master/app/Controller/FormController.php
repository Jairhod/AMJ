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
        $cheminImagePrincipale  = $this->verifierUpload("temp", "cheminImagePrincipale");
        $descriptionArtiste     = $this->verifierSaisie("descriptionArtiste");
        $dateModification       = date("Y-m-d H:i:s");

        $objetArtistesModel = new ArtistesModel;
                
        if ( ($nomArtiste != "") && ($nomGenre != "") && ($artistesLies != "") && ($cheminImagePrincipale != "") && ($descriptionArtiste != "") )
        {

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

        $tabLigne = $objetArtistesModel->findAll("dateModification", "DESC");
        
        if (!empty($tabLigne))
        {
            $id = $tabLigne[0]["id"];
            $this->renameFolder($id);
            $this->verifierMultiUpload($id, "images");
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
        if (is_dir("assets/media/img/$id")) 
            {
            $this->deleteFolder("assets/media/img/$id");       
            }
        $GLOBALS["artisteDeleteRetour"] = "Artiste ($id) supprimé";
       }
       else
       {
        $GLOBALS["artisteDeleteRetour"] = "Erreur sur ($id)";
       }
    }

    public function artisteUpdateTraitement()
    {
        $id             = $this->verifierSaisie("id");
        $id             = intval($id);

        $nomArtiste                 = $this->verifierSaisie("nomArtiste");
        $nomGenre                   = $this->verifierSaisie("nomGenre");
        $cheminImagePrincipale      = $this->verifierUpload( $id, "cheminImagePrincipale");
        $descriptionArtiste         = $this->verifierSaisie("descriptionArtiste");
        $artistesLies               = $this->verifierSaisie("artistesLies");
        $dateModification           = date("Y-m-d H:i:s");
        
        if ( ($id > 0)
            && ($nomArtiste != "") && ($nomGenre != "") && ($cheminImagePrincipale != "") && ($descriptionArtiste != "")
            && ($artistesLies != "") )
        {

            $objetArtistesModel = new ArtistesModel;

            $objetArtistesModel->update([   "nomArtiste"             => $nomArtiste, 
                                            "nomGenre"               => $nomGenre, 
                                            "cheminImagePrincipale"  => $cheminImagePrincipale,
                                            "descriptionArtiste"     => $descriptionArtiste,
                                            "artistesLies"           => $artistesLies,
                                            "dateModification"       => $dateModification,
                                        ],
                                        $id);
                                        
            $GLOBALS["artisteUpdateRetour"] = "$nomArtiste modifié. Id: ($id)";
        }
        else
        {
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

    function verifierUpload ($folder, $nameInput)
{
    if ($folder!="temp")
    {
        $objetArtistesModel = new ArtistesModel;
        $tab = $objetArtistesModel->find($folder);
        $nameOK   = $tab["cheminImagePrincipale"];
    }
    else $nameOK = "temporary";

    $idForm   = $this->verifierSaisie("idForm");

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

                chmod($tmpName, 0777);
                
                if ($size < 15 * 1024 * 1024) // 15 MEGAOCTETS
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
                        if (is_dir("assets/media/img/$folder/imagePrincipale")) 
                          {
                              $this->deleteFolder("assets/media/img/$folder/imagePrincipale");
                          }                    

                        //$nameOK       =  preg_replace("/[^a-zA-Z0-9-_\.]/", "", $name);
                        $nameOK       = date('YmdHis',time()).mt_rand().'.'.$extension;
                        $cheminOK     = "assets/media/img/$folder/imagePrincipale/$nameOK";
                        $cheminOK     = strtolower($cheminOK);
                        $this->createFolders($folder);
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
        
    return $nameOK;
}

    function verifierMultiUpload ($id, $nameInput)
{
    $this->createFolders($id);
    $img   = $_FILES["images"];

    if(!empty($img))
    {
        $img_desc = $this->reArrayFiles($img);
       
        foreach($img_desc as $val)
        {
            $nameOK       = date('YmdHis',time()).mt_rand().'.'.'.jpg';
            $cheminOK     = "assets/media/img/$id/images/$nameOK";
            $cheminOK     = strtolower($cheminOK);
            move_uploaded_file($val['tmp_name'], $cheminOK);
        }
    }

}

    public function reArrayFiles($file)
    {
        $file_ary = array();
        $file_count = count($file['name']);
        $file_key = array_keys($file);
       
        for($i=0;$i<$file_count;$i++)
        {
            foreach($file_key as $val)
            {
                $file_ary[$i][$val] = $file[$val][$i];
            }
        }
        return $file_ary;
    }  

    public function createFolders($id)
    {
        $chemin = "assets/media/img/$id";
        if(!is_dir($chemin)){
           mkdir($chemin, 0777);
        }        

        $chemin = "assets/media/img/$id/imagePrincipale";
        if(!is_dir($chemin)){
           mkdir($chemin, 0777);
        }        

        $chemin = "assets/media/img/$id/images";
        if(!is_dir($chemin)){
           mkdir($chemin, 0777);
        }        

        $chemin = "assets/media/img/$id/thumbs";
        if(!is_dir($chemin)){
           mkdir($chemin, 0777);
        }
    }


    public function renameFolder($id)
    {
        $old = "assets/media/img/temp";
        $new = "assets/media/img/$id";
        chmod($old, 0777);

        if (is_dir($old)) 
        {
            chmod($old, 0777);
            rename($old, $new);         
        }
    }

    public function deleteFolder($path)
    {
        if (is_dir($path) === true)
        {
            $files = array_diff(scandir($path), array('.', '..'));

            foreach ($files as $file)
            {
                $this->deleteFolder(realpath($path) . '/' . $file);
            }

            return rmdir($path);
        }

        else if (is_file($path) === true)
        {
            return unlink($path);
        }

        return false;
    }

}