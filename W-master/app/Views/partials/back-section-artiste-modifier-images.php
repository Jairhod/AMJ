<?php

$objetArtistesModel = new \Model\ArtistesModel;

$tabLigne = $objetArtistesModel->find($id);

if (!empty($tabLigne))
{
    // RECUPERER LES COLONNES
    $id                     = $tabLigne["id"];
    $nomArtiste             = $tabLigne["nomArtiste"];
    $nomGenre               = $tabLigne["nomGenre"];
    $imagePrincipale        = $tabLigne["imagePrincipale"];
    $descriptionArtiste     = $tabLigne["descriptionArtiste"];
    $artistesLies           = $tabLigne["artistesLies"];
    $srcImage               = $this->assetUrl('media/img/'.$id.'/imagePrincipale/'.$imagePrincipale);
    $hrefModifierImages     = $this->url("back_artiste_modifier_images", [ "id" => $id ]);
        
    // AFFICHER LE CODE HTML
    echo $nomArtiste;

}
?>
    </article>
</section>