
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
