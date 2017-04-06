
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
    $imagePrincipale       = $tabLigne["imagePrincipale"];
    $descriptionArtiste    = $tabLigne["descriptionArtiste"];
    $artistesLies          = $tabLigne["artistesLies"];
    $dateModification      = $tabLigne["dateModification"];
    $srcImage              = $this->assetUrl('media/img/'.$id.'/imagePrincipale/'.$imagePrincipale);
    $hrefModifier          = $this->url("back_artiste_modifier", [ "id" => $id ]);
    $hrefSupprimer         = "?idForm=artisteDelete&id=$id";
    
    // AFFICHER LE CODE HTML
    echo
<<<CODEHTML
<section>
    <h3>$nomArtiste</h3>
    <img style="width: 200px" src="assets/media/img/$id/imagePrincipale/$srcImage" alt="$nomArtiste">
    <h4>Dernière modification : $dateModification</h4>
    <h4>$nomGenre</h4>
    <p>$descriptionArtiste</p>
    <div class="ligne">
    <span class="links"><a href="$hrefModifier">modifier</a></span>
    <span class="links"><a href="$hrefSupprimer">supprimer</a></span>
    </div>
</section> 
CODEHTML;

}
?>

