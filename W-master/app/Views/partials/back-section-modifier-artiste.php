
<section>
    <h3>Modification D'UN ARTISTE</h3>
    <article>
<?php
// ON VA CHERCHER LES INFOS DEPUIS LA TABLE artistes
// AVEC LE FRAMEWORK W
// ON VA PASSER PAR LA CLASSE ArtistesModel
$objetArtistesModel = new \Model\ArtistesModel;

// https://dev-web1a.c9users.io/W-master/docs/tuto/?p=modeles
// findAll RETOURNE UN TABLEAU DE TABLEAU (LIGNES + COLONNES)
// AVEC LES PARAMETRES, ON TRIE SUR LA COLONNE id EN ORDRE DECROISSANT
$tabLigne = $objetArtistesModel->find($id);

// DEBUG
//echo "<pre>";
//print_r($tabLigne);
//echo "</pre>";

// EST-CE QU'ON A UN TABLEAU AVEC DES INFOS DEDANS
if (!empty($tabLigne))
{
    // RECUPERER LES COLONNES
    $id             = $tabLigne["id"];
    $nom            = $tabLigne["nom"];
    $genreArt       = $tabLigne["genreArt"];
    $cheminImage    = $tabLigne["cheminImage"];
    $bio            = $tabLigne["bio"];
    
    // AFFICHER LE CODE HTML

    echo
<<<CODEHTML

    <form method="GET" action="">
        <input type="text" name="nom" required placeholder="NOM" value="$nom"><br>
        <input type="text" name="genreArt" required placeholder="GENRE" value="$genreArt"><br>
        <!-- A REMPLACER PAR UN UPLOAD -->
        <input type="text" name="cheminImage" required placeholder="chemin Image" value="$cheminImage"><br>
        <textarea name="bio" required placeholder="BIO" cols="60" rows="5">$bio</textarea><br>
        <button type="submit">MODIFIER ARTISTE</button>
        <input type="hidden" name="idForm" value="artisteUpdate">
        <input type="hidden" name="id" value="$id">

        <div class="retour">
            $artisteUpdateRetour
        </div>
    </form>

CODEHTML;

}
?>
    </article>
</section>