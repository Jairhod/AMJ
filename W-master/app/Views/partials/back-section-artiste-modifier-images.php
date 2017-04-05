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
    $srcImage               = $this->assetUrl('media/img/'.$id.'/imagePrincipale/'.$imagePrincipale);
    $hrefModifierImages     = $this->url("back_artiste_modifier_images", [ "id" => $id ]);
    $hrefUploadImages       = $this->url("back_artiste_upload_images", [ "id" => $id ]);
        
    // AFFICHER LE CODE HTML

}
?>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">PHP File Uploader</a>
        </div>
      </div>
    </div>
 
 
    <div class="container">

        <div class="row">
           <?php
            //scan "uploads" folder and display them accordingly
           $folder = "uploads";
           $results = scandir('uploads');
           foreach ($results as $result) {
            if ($result === '.' or $result === '..') continue;
            
            if (is_file($folder . '/' . $result)) {
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
 
          <div class="row">
            <div class="col-lg-12">
               <form class="well" action="<?php echo $hrefUploadImages ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="file">Select a file to upload</label>
                    <input type="file" name="images">
                    <p class="help-block">Only jpg,jpeg,png and gif file with maximum size of 1 MB is allowed.</p>
                  </div>
                  <input type="submit" class="btn btn-lg btn-primary" value="Upload">
                </form>
            </div>
          </div>
    </div> <!-- /container -->
