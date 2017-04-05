<?php

$objetArtistesModel = new \Model\ArtistesModel;

$tabLigne = $objetArtistesModel->find($id);

if (!empty($tabLigne))
{
    // RECUPERER LES COLONNES
    $nomArtiste             = $tabLigne["nomArtiste"];
    $nomGenre               = $tabLigne["nomGenre"];
    $imagePrincipale        = $tabLigne["imagePrincipale"];
    $descriptionArtiste     = $tabLigne["descriptionArtiste"];
    $artistesLies           = $tabLigne["artistesLies"];
    $srcImage               = $this->assetUrl('media/img/'.$id.'/imagePrincipale/'.$imagePrincipale);
    $hrefModifierImages     = $this->url("back_artiste_modifier_images", [ "id" => $id ]);
        
    // AFFICHER LE CODE HTML

    echo
<<<CODEHTML

<section>
    <h3>$nomArtiste</h3>
    <img style="width: 200px" src="$srcImage" alt="$nomArtiste">
    <p>id: $id</p>
    <form method="POST" enctype="multipart/form-data" action="">
        <input style="width: 400px" type="text" name="nomArtiste" required placeholder="Nom" value="$nomArtiste"><br>
        <input style="width: 400px" type="text" name="nomGenre" required placeholder="Genre" value="$nomGenre"><br>
        <input style="width: 400px" type="text" name="artistesLies" required placeholder="Artistes liés" value="$artistesLies"><br>
        <textarea name="descriptionArtiste" required placeholder="descriptionArtiste" cols="60" rows="5">$descriptionArtiste</textarea><br>
        <span>Modifier image de profil : </span>
        <input type="file" name="imagePrincipale" value="$imagePrincipale" placeholder="Image de profil"><br>
        <div class="ligne">
        <span class="links"><a href="$hrefModifierImages">Ajout ou suppression d'autres images</a></span>
        <button class="links" type="submit">Enregistrer</button>
        </div>
        <input type="hidden" name="idForm" value="artisteUpdate">
        <input type="hidden" name="id" value="$id">

        <div class="retour">
            $artisteUpdateRetour
        </div>
    </form>
</section>
CODEHTML;

}
?>

