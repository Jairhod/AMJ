
<section id="artistes">
	<h2>Les artistes</h2>
	<div id="breadcrumbs"><a href="#!">artiste machin</a></div>
	<div id="recherche-artiste">
		<form action="" method="GET"></form>
		<input type="hidden" name="idForm" value="rechercheArtiste">
		<button type="submit" name="rechercher" value="rechercher">Rechercher un artiste</button>
	</div>
	<div id="listeArtistes" class="container">
		<div class="row">
			<div class="col-md-4">
				<h4>nom artiste</h4>
				<a href="#!"><img src="" alt=""></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, hic?</p>
			</div>
			<div class="col-md-4">
				<h4>nom artiste</h4>
				<a href="#!"><img src="" alt=""></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, excepturi.</p>
			</div>
			<div class="col-md-4">
				<h4>nom artiste</h4>
				<a href="#!"><img src="" alt=""></a>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, accusantium!</p>
			</div>
		</div>
	</div>
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
    
	<div id="pagination">
		<span><a href="#!"><img src="" alt=""><<</a></span>
		<span><a href="#!"><img src="" alt=""><</a></span>
		<span><a href="#!"></a>numero de page</span>
		<span><a href="#!"><img src="" alt="">></a></span>
		<span><a href="#!"><img src="" alt="">>></a></span>
	</div>
	<div class="devis-btn">
		<a href="#!">Simuler un devis</a>
	</div>
</section>