<?php

$objetArtistesModel = new \Model\ArtistesModel;

$tabLigne = $objetArtistesModel->find($id);

if (!empty($tabLigne))
{
    // RECUPERER LES COLONNES
    $id                     = $tabLigne["id"];
    $nomArtiste             = $tabLigne["nomArtiste"];
    $nomGenre               = $tabLigne["nomGenre"];
    $imagePrincipale        = $tabLigne["imagePrincipale"];
    $descriptionArtiste     = $tabLigne["descriptionArtiste"];
    $artistesLies           = $tabLigne["artistesLies"];
    $folderImage            = 'media/img/'.$id.'/images';

    $hrefModifierImages     = $this->url("back_artiste_modifier_images", [ "id" => $id ]);
    $hrefUploadImages       = $this->url("back_artiste_upload_images", [ "id" => $id ]);
        
    // AFFICHER LE CODE HTML

}
?>
 
    <div class="container">

        <div class="row">
           <?php
            //scan "uploads" folder and display them accordingly
           $folder = $this->assetUrl($folderImage);
           
           $results = scandir('assets/'.$folderImage);
           //print_r($results);
           foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;
            if (is_file($_SERVER['DOCUMENT_ROOT'].$folder . '/' . $result)) {
                echo '
                <div class="col-md-3">
                    <div class="thumbnail">
                        <img src="'.$folder . '/' . $result.'" alt="...">
                            <div class="caption">
                            <p><a href="remove.php?name='.$result.'" class="btn btn-danger btn-xs" role="button">Remove</a></p>
                        </div>
                    </div>
                </div>';
            }
           }
           ?>
        </div>