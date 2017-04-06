
<section id="artistes">
    <div class="contenu-intro-catalogue">
        <h1>LE CATALOGUE AMJ PROD</h1>                       
        <p>Consultez, cherchez et trouvez ici l'artiste, le groupe qui convient pour votre évènement ! </p>
        <div class="bla">
            <div id="recherche-artiste">
                <form action="" method="GET" class="section-accueil">
                    <input type="hidden" name="idForm" value="choixCatalogue">              
                        <select name="genres" id="genres" class="form-control form-accueil">
                            <option value="hide" selected disabled>Choisir son style...</option>         
                            <option value="tous">TOUS LES STYLES</option>
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
                </form>
            </div>
        </div>  
    </div>   
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