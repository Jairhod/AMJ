<section>
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
    $artistesLies          = $tabLigne["artistesLies"];
    $dateModification      = $tabLigne["dateModification"];
    $srcImage              = $this->assetUrl('media/img/'.$id.'/imagePrincipale/'.$cheminImagePrincipale);
    
    // AFFICHER LE CODE HTML
    echo
<<<CODEHTML
    <section>
    <h3>$nomArtiste</h3>
    <img style="width: 200px" src="$srcImage" alt="$nomArtiste">
    <h4>Dernière modification : $dateModification</h4>
    <h4>$nomGenre</h4>
    <p>$descriptionArtiste</p>
CODEHTML;

}
?>
    </article>
</section>