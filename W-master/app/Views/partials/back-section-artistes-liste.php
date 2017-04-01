<section class="liste-annonce">
    <div class="ligne">
<?php

$objetArtistesModel = new \Model\ArtistesModel;

$tabLigne = $objetArtistesModel->findAll("nomArtiste", "ASC");

foreach($tabLigne as $index => $tabColonne)
{
    $id         = $tabColonne["id"];

    echo "<div class='colonne'>";
    foreach($tabColonne as $nomColonne => $valeurColonne)
    {
        $srcImage   = $this->assetUrl('media/img/'.$id.'/imagePrincipale/'.$valeurColonne);
        if($nomColonne == "nomArtiste") echo "<p id='nom-artiste'>$valeurColonne</p>";
        if($nomColonne == "cheminImagePrincipale") echo "<div><img src='$srcImage' alt=''></div>";
    }

    // DEFINIR LES VARIABLES 
    $hrefAfficher   = $this->url("back_artiste_afficher", [ "id" => $id ]);
    $hrefModifier   = $this->url("back_artiste_modifier", [ "id" => $id ]);
    $hrefSupprimer  = "?idForm=artisteDelete&id=$id";
    
    echo
<<<CODEHTML
    <span class="links"><a href="$hrefAfficher">afficher</a></span>
    <span class="links"><a href="$hrefModifier">modifier</a></span>
    <span class="links"><a href="$hrefSupprimer">supprimer</a></span>
    </div>
CODEHTML;
}

?>

            </div>
</section>