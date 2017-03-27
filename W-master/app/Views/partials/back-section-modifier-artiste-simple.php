
<section>
    <h3>Modification D'UN ARTISTE</h3>
    <article>
<?php

$objetArtistesModel = new \Model\ArtistesModel;

$tabLigne = $objetArtistesModel->find($id);

if (!empty($tabLigne))
{
    // RECUPERER LES COLONNES
    $id             = $tabLigne["id"];
    $nomArtiste     = $tabLigne["nomArtiste"];
    $genreArt       = $tabLigne["nomGenre"];
    $cheminImage    = $tabLigne["cheminImagePrincipale"];
    $bio            = $tabLigne["descriptionArtiste"];
    $artistesLies   = $tabLigne["artistesLies"];
    
    // AFFICHER LE CODE HTML

    echo
<<<CODEHTML

    <form method="GET" action="">
        <input type="text" name="nomArtiste" required placeholder="NOM" value="$nomArtiste"><br>
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