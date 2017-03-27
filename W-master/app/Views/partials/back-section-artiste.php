<section>
    <h3>Fiche artiste</h3>
    <article>
<?php
$objetArtistesModel = new \Model\ArtistesModel;
$tabLigne = $objetArtistesModel->find($id);

if (!empty($tabLigne))
{
    $id            		   = $tabLigne["id"];
    $nomArtiste            = $tabLigne["nomArtiste"];
    $nomGenre       	   = $tabLigne["nomGenre"];
    $cheminImagePrincipale = $tabLigne["cheminImagePrincipale"];
    $descriptionArtiste    = $tabLigne["descriptionArtiste"];
    
    // AFFICHER LE CODE HTML
    echo
<<<CODEHTML
    <h4>$nomArtiste</h4>
    <strong>$nomGenre</strong>
    <div>$cheminImagePrincipale</div>
    <p>$descriptionArtiste</p>
CODEHTML;

}
?>
    </article>
</section>