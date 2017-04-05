<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ArtistesModel;
use \Model\ImagesModel;

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
        $descriptionArtiste     = $this->verifierSaisie("descriptionArtiste");
        $tabInfoFichierUploade  = $_FILES["imagePrincipale"];
        $dateModification       = date("Y-m-d H:i:s");

        $objetArtistesModel = new ArtistesModel;
                
        if ( ($nomArtiste != "") && ($nomGenre != "") && ($artistesLies != "") && (!empty($tabInfoFichierUploade)) && ($descriptionArtiste != "") )
        {

            $objetArtistesModel->insert([   "nomArtiste"            => $nomArtiste, 
                                            "nomGenre"              => $nomGenre, 
                                            "artistesLies"          => $artistesLies, 
                                            "descriptionArtiste"    => $descriptionArtiste,
                                            "dateModification"      => $dateModification,
                                        ]);


            $tabLigne = $objetArtistesModel->findAll("dateModification", "DESC");
            
            if (!empty($tabLigne))
            {
                $id = $tabLigne[0]["id"];
                $this->verifierUpload($id, "imagePrincipale");
                $this->verifierMultiUpload($id, "images");
            }       
                                
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
        $objetImagesModel   = new ImagesModel;
        $tabLigne           = $objetImagesModel->findAll("id", "ASC");

        foreach ($tabLigne as $key => $value) {

            $id_images = $tabLigne[$key]["id"];
            $idArtiste = $tabLigne[$key]["idArtiste"];
            if ($idArtiste == $id)
            {
              $objetImagesModel->delete($id_images);
            } 
        }

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
        $descriptionArtiste         = $this->verifierSaisie("descriptionArtiste");
        $artistesLies               = $this->verifierSaisie("artistesLies");
        $tabInfoFichierUploade      = $_FILES["imagePrincipale"];
        $dateModification           = date("Y-m-d H:i:s");
        
        if ( ($id > 0)
            && ($nomArtiste != "") && ($nomGenre != "") && (!empty($tabInfoFichierUploade)) && ($descriptionArtiste != "")
            && ($artistesLies != "") )
        {

            $objetArtistesModel = new ArtistesModel;

            $objetArtistesModel->update([   "nomArtiste"             => $nomArtiste, 
                                            "nomGenre"               => $nomGenre, 
                                            "descriptionArtiste"     => $descriptionArtiste,
                                            "artistesLies"           => $artistesLies,
                                            "dateModification"       => $dateModification,
                                        ],
                                        $id);
           
            $this->verifierUpload($id, "imagePrincipale");              
                                        
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

    function verifierUpload ($id, $nameInput)
{
    $objetArtistesModel = new ArtistesModel;
    $idForm             = $this->verifierSaisie("idForm");

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

                //  chmod($tmpName, 0777);
                
                if ($size < 15 * 1024 * 1024)
                {
                    $extension = pathinfo($name, PATHINFO_EXTENSION);
                    $extension = strtolower($extension);
                    $tabExtensionOK = [ "jpeg", "jpg", "gif", "png", "svg" ];
                    
                    if (in_array($extension, $tabExtensionOK))
                    {
                        if (is_dir("assets/media/img/$id/$nameInput")) 
                          {
                              $this->deleteFolder("assets/media/img/$id/$nameInput");
                          }                    

                        //$nameOK       =  preg_replace("/[^a-zA-Z0-9-_\.]/", "", $name);
                        $nameOK       = date('YmdHis',time()).mt_rand().'.'.$extension;
                        $cheminOK     = "assets/media/img/$id/$nameInput/$nameOK";
                        $cheminOK     = strtolower($cheminOK);
                        $this->createFolders($id);
                        $objetArtistesModel->update([ "imagePrincipale" => $nameOK ], $id);
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
        
}

    function verifierMultiUpload ($id, $nameInput)
{
    $this->createFolders($id);
    $img              = $_FILES[$nameInput];
    $objetImagesModel = new ImagesModel;

    if(!empty($img))
    {
        $img_desc = $this->reArrayFiles($img);
       
        foreach($img_desc as $val)
        {
            $error = $val["error"];
            if ($error == 0)
            {
                $name       = $val["name"];
                $type       = $val["type"];
                $tmpName    = $val["tmp_name"];
                $size       = $val["size"];

                if ($size < 15 * 1024 * 1024)
                {
                    $extension = pathinfo($name, PATHINFO_EXTENSION);
                    $extension = strtolower($extension);
                    $tabExtensionOK = 
                    [ 
                        "jpeg", "jpg", "gif", "png", "svg" 
                    ];

                    if (in_array($extension, $tabExtensionOK))
                    {
                        $nameOK       = date('YmdHis',time()).mt_rand().'.'.$extension;
                        $cheminOK     = "assets/media/img/$id/$nameInput/$nameOK";
                        $cheminOK     = strtolower($cheminOK);
                        $objetImagesModel->insert([ "idArtiste" => $id, "cheminImage" => $nameOK ]);
                        move_uploaded_file($val['tmp_name'], $cheminOK);
                    }
                }
            } 
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
    
    public function thumbnailTraitement()    
    {
        $image = new ImageResize("assets/media/img/$id/imagePrincipale");
        $image->resizeToBestFit(480, 360);
        $chemin = "assets/media/img/$id/thumbs";
        $image->save("$chemin");
        if(!is_dir($chemin)){
           mkdir($chemin, 0777);       
    }

}