<div class="container-fluid full-width">
      <section id="recherche-accueil">
        <div class="title-hp">
            <div class="bandeau">
                <marquee><strong>Dernier artiste ajouté</strong> : 
                <?php echo('bidule'); echo date('(Y-m-d)'); ?></marquee> 
                <?php
                        $objetArtistesModel = new \Model\ArtistesModel;
                        $tabLigne = $objetArtistesModel->findAll("dateModification", "DESC" , 1);
                        $nomArtiste = $tabLigne["nomArtiste"];
                echo $nomArtiste;
                        /*foreach($tabLigne as $index => $tabColonne)
                            {
                                $id         = $tabColonne["id"];

                                foreach($tabColonne as $nomColonne => $valeurColonne)
                                {
                                    if($nomColonne == "dateModification") 
                                        echo "<marquee>$valeurColonne</marquee>";
                                    
                                    if($nomColonne == "nomArtiste") 
                                        echo "<marquee>$valeurColonne</marquee>";
                                }     
                            }*/
                ?> 
            </div>
            <div class="etiquette-titre">
                <h1>AMJ Productions</h1>
                <h2>Vous cherchez un groupe pour un évènement dans la région PACA ?</h2>
            </div>
        </div>
        <form action="" method="GET" class="form-inline section-accueil">
            <input type="hidden" name="idForm" value="choixAccueil">
            <div class="bla">   
                <select name="genres" id="genres" class="form-control form-accueil">
                    <option value="hide" selected disabled>Choisir son style...</option>         
                    <option value="tous">Tous styles</option>
                    <?php
                        $objetArtistesModel = new \Model\ArtistesModel;
                        $tabLigne = $objetArtistesModel->findAll("nomGenre", "ASC");

                        foreach($tabLigne as $index => $tabColonne)
                        {
                            $id         = $tabColonne["id"];
                            
                            foreach($tabColonne as $nomColonne => $valeurColonne)
                            {
                                if($nomColonne == "nomGenre") echo "<option>$valeurColonne</option>";        
                            }                                   
                        }
                    ?>      
                </select>
                <select name="artistes" id="artistes" class="form-control form-accueil form-artistes-accueil">
                    <option value="hide" selected disabled>Choisir son artiste...</option>
                    <option value="tousArtistes">Tous les artistes</option>
                <?php
                        $objetArtistesModel = new \Model\ArtistesModel;
                        $tabLigne = $objetArtistesModel->findAll("nomArtiste", "ASC");

                        foreach($tabLigne as $index => $tabColonne)
                        {
                            $id         = $tabColonne["id"];

                            foreach($tabColonne as $nomColonne => $valeurColonne)
                            {
                                if($nomColonne == "nomArtiste") echo "<option>$valeurColonne</option>";
                                
                                    
                            }
                        }
                    ?>        
                </select> 
            </div>
        </form>
         
         
        <div class="row accueil-styles">
            <div class="col">
                <div class="paper">
                    <a href="<?php ?>" class="hover-btn-styles"><img class="poster" src="assets/media/img/jazz.jpg"/></a>
                    <h5>Style</h5>
                    <h6>Jazz World Music</h6>
                    <a class="btn ">Voir!</a>
                    <div class="space"></div>
                </div>
            </div>
            <div class="col">
                <div class="paper">
                    <a href="<?php ?>" class="hover-btn-styles"><img class="poster" src="assets/media/img/blues.jpeg"/></a>
                    <h5>Style</h5>
                    <h6>Soul Funk R&B</h6>
                    <a class="btn ">Voir!</a>
                    <div class="space"></div>
                </div>
            </div>
            <div class="col">
                <div class="paper">
                    <a href="<?php ?>" class="hover-btn-styles"><img class="poster" src="assets/media/img/rock.jpeg"/></a>
                    <h5>Style</h5>
                    <h6>Pop Rock Actuel</h6>
                    <a class="btn ">Voir!</a>
                    <div class="space"></div>
                </div>
            </div>   
             <div class="col">
                <div class="paper">
                    <a href="<?php ?>" class="hover-btn-styles"><img class="poster" src="assets/media/img/danse.jpg"/></a>
                    <h5>Style</h5>
                    <h6>Tributes Spectacles Danse</h6>
                    <a class="btn ">Voir!</a>
                    <div class="space"></div>
                </div>
            </div>          
        </div>
        <div class="row accueil-styles">
            <div class="col">
                <div class="paper">
                    <a href="<?php ?>" class="hover-btn-styles"><img class="poster" src="assets/media/img/strolling.jpg"/></a>
                    <h5>Style</h5>
                    <h6>Strolling</h6>
                    <a class="btn ">Voir!</a>
                    <div class="space"></div>
                </div>
            </div>
            <div class="col">
                <div class="paper">
                    <a href="<?php ?>" class="hover-btn-styles"><img class="poster" src="assets/media/img/orchestre.jpg"/></a>
                    <h5>Style</h5>
                    <h6>Orchestre Clubbing</h6>
                    <a class="btn ">Voir!</a>
                    <div class="space"></div>
                </div>
            </div>
            <div class="col">
                <div class="paper">
                    <a href="<?php ?>" class="hover-btn-styles"><img class="poster" src="assets/media/img/noel.jpeg"/></a>
                    <h5>Style</h5>
                    <h6>Jeune Public (noël)</h6>
                    <a class="btn ">Voir!</a>
                    <div class="space"></div>
                </div>
            </div>   
             <div class="col">
                <div class="paper">
                    <a href="<?php ?>" class="hover-btn-styles"><img class="poster" src="assets/media/img/band-opti.jpg"/></a>
                    <h5>Style</h5>
                    <h6>Autres</h6>
                    <a class="btn ">Voir!</a>
                    <div class="space"></div>
                </div>
            </div>          
        </div>
      </section>
    </div>

    <script>
        $(document).ready(function(){
            $('#genres').on('change', function(){
               //alert($(this).val());
                $.get('private/controler/ajax/recupGenre.php', {genre: $(this).val()}, function(data){
                   $('#artistes').html(data);
                });
            });
        });
    </script>
