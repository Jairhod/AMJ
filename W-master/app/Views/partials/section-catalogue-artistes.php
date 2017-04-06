 
        <div class="grid artistes-row">            
                        <?php
                            $objetArtistesModel = new \Model\ArtistesModel;
                            $tabLigne = $objetArtistesModel->findAll("nomArtiste", "ASC");

                            foreach($tabLigne as $index => $tabColonne)
                            {
                                $id                 = $tabColonne["id"];
                                $hrefAfficher       = $this->url("vitrine_fiche", [ "id" => $id ]);
                                $nomArtiste         = $tabColonne["nomArtiste"];
                                $nomGenre           = $tabColonne["nomGenre"];
                                $imagePrincipale    = $tabColonne["imagePrincipale"];
                                $descriptionArtiste = $tabColonne["descriptionArtiste"];
                                $descriptionArtiste = strip_tags($descriptionArtiste);
                                $descriptionArtiste = substr("$descriptionArtiste", 0, 80);
                                $srcImage           = $this->assetUrl('media/img/'.$id.'/imagePrincipale/'.$imagePrincipale);   
                                
                                echo
<<<CODEHTML
<div class="artiste-col" data-genres="$nomGenre">
    <figure class="effect-marley">
    <a href="$hrefAfficher">
    <img src="$srcImage" alt="$nomArtiste" class="img-responsive">
        <figcaption>
            <h4>$nomArtiste</h4>
            <p>$descriptionArtiste ...</p>
        </figcaption>
    </a>
    </figure>
</div>
CODEHTML;
                            }                        
?>
        </div><!-- FIN DIV grid artistes-row-->
</section>