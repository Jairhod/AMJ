<div class="test-resize">
	    <form action="" method="get" enctype="multipart/form-data">
    <p>Formulaire d'envoi de fichier</p>
	        <input type="file" name="upload" placeholder="upload">
	        <input type="hidden" name="idForm">
	        <button type="submit">envoyer</button>
	    </form>
	</div>
	<?php
    if (count($_GET) > 0)
        {
            $upload  = $_GET["upload"];
            $destination = ("assets/media/artistes/artiste-1/image-a-la-une");
            move_uploaded_file ( $upload , $destination );
        } 
            $renommerThumbnail = "thumbnail";         

            $image = new \Controller\ImageResize('../assets/media/artistes/artiste-1/image-a-la-une/GOSPEL-2.jpg');
            $image->resizeToHeight(500);
            $image->save('../assets/media/artistes/artiste-1/image-a-la-une/GOSPEL-2.jpg');
            $image = new ImageResize('../assets/media/artistes/artiste-1/thumbnail/GOSPEL-2/'+ $renommerThumbnail +'.jpg');
            $image->resizeToWidth(300);
            $image->save('../assets/media/artistes/artiste-1/thumbnail/GOSPEL-2/'+ $renommerThumbnail +'.jpg');
          
        
    ?>