
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
           $folderImage = 'media/img/'.$id.'/images';
           $folder      = $this->assetUrl($folderImage);
           $results     = scandir('assets/'.$folderImage);
           foreach ($results as $result) 
           {
            if ($result === '.' or $result === '..') continue;
              if (is_file($_SERVER['DOCUMENT_ROOT'].$folder . '/' . $result)) 
              {
                  $srcImage = $folder . '/' . $result;
                  $hrefRemove = $this->url("back_artiste_remove_image", [ "id" => $id, "name" => $result ]);
                  echo '
                    <div class="col col-lg-3 col-md-4 col-sm-6" >
                      <div class="thumbnail">
                        <img src="'.$srcImage.'" alt="...">
                        <div class="caption">
                        <p><a href="'.$hrefRemove.'" class="btn btn-danger btn-xs" role="button">Remove</a></p>
                        </div>
                      </div>
                    </div>';
              }
           } ?>

        </div>