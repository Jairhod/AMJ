
<section id="artistes">
	<h2>Les Styles</h2>
	<div id="breadcrumbs"><a href="#!">artiste machin</a></div>
	<div id="recherche-artiste">
		<form action="" method="GET" class="section-accueil">
            <span class="artistes-glob"> 
                <select name="genres" id="genres" class="form-control form-accueil">
                    <option value="hide" selected disabled>Choisir son style...</option>         
                    <!--<option value="tous">Tous styles</option>-->
                    <?php
                        $objetArtistesModel = new \Model\ArtistesModel;
                        $tabLigne = $objetArtistesModel->findAll("nomGenre", "ASC");
                        $tableGenre = []; 
                        foreach($tabLigne as $index => $tabColonne)
                        {
                            $id                  = $tabColonne["id"];
                            $nomGenre            = $tabColonne["nomGenre"];
                            $tabGenre[$nomGenre] = $nomGenre;
                        }
                        foreach($tabGenre as $nomColonne => $valeurColonne)
                        {
                            echo "<option classe='genre'>$valeurColonne</option>";        
                        }                                   

                    ?>      
                </select>
            </span>
        </form>
	</div>
        <div class="grid artistes-row">
            

                        <?php
                            $objetArtistesModel = new \Model\ArtistesModel;
                            $tabLigne = $objetArtistesModel->findAll("nomArtiste", "ASC");

                            foreach($tabLigne as $index => $tabColonne)
                            {
                                $id         = $tabColonne["id"];
                                $hrefAfficher   = $this->url("vitrine_fiche_artiste", [ "id" => $id ]);
                                $nomArtiste = $tabColonne  ["nomArtiste"];
                                $imagePrincipale = $tabColonne["imagePrincipale"];
                                $descriptionArtiste = $tabColonne["descriptionArtiste"];
                                $descriptionArtiste = strip_tags($descriptionArtiste);
                                $descriptionArtiste = substr("$descriptionArtiste", 0, 80);
                                $srcImage   = $this->assetUrl('media/img/'.$id.'/imagePrincipale/'.$imagePrincipale);
                                
                                echo
<<<CODEHTML
<div class="artiste-col">
<figure class="effect-marley">
<img src="$srcImage" alt="photo du groupe class=""img-responsive>
<figcaption class="">
<h4>$nomArtiste</h4>
<p>$descriptionArtiste</p>
</div>
CODEHTML;
                            }                        
?>
        </div><!-- FIN DIV grid artistes-row-->

	<div class="devis-btn">
		<a href="#!">Simuler un devis</a>
	</div>
</section>