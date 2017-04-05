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
        <form action="" method="POST" enctype="multipart/form-data">
            <span>Ajouter d'autres images</span>
            <input class="links" type="file" name="images[]" multiple="" >
            <button class="links" type="submit">Enregistrer</button>           
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="idForm" value="imagesUpdate">
        </form>
        </div>

        <hr>


        <div class="row">
           <?php
            //scan "uploads" folder and display them accordingly
           $folder = $this->assetUrl($folderImage);
           
           $results = scandir('assets/'.$folderImage);
           //print_r($results);
           foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;
            if (is_file($_SERVER['DOCUMENT_ROOT'].$folder . '/' . $result)) {
                $srcImage = $folder . '/' . $result;
                $hrefRemove = $this->url("back_artiste_remove_image", [ "id" => $id, "name" => $result ]);
                echo '
                  <div class="col-md-3">
                    <div class="thumbnail">
                      <img src="'.$srcImage.'" alt="...">
                      <div class="caption">
                      <p><a href="'.$hrefRemove.'" class="btn btn-danger btn-xs" role="button">Remove</a></p>
                      </div>
                    </div>
                  </div>';
            }
           }
           ?>
        </div>