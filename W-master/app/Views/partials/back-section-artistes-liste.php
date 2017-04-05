<section class="liste-annonce">
    <div class="ligne">
<?php

$objetArtistesModel = new \Model\ArtistesModel;

$tabLigne = $objetArtistesModel->findAll("nomArtiste", "ASC");

foreach($tabLigne as $index => $tabColonne)
{

    // DEFINIR LES VARIABLES
    $id             = $tabColonne["id"];     
    $hrefAfficher   = $this->url("back_artiste_afficher", [ "id" => $id ]);
    $hrefModifier   = $this->url("back_artiste_modifier", [ "id" => $id ]);
    $hrefSupprimer  = "?idForm=artisteDelete&id=$id";

    echo "<div class='colonne'>";
    foreach($tabColonne as $nomColonne => $valeurColonne)
    {
        $srcImage = $this->assetUrl('media/img/'.$id.'/imagePrincipale/'.$valeurColonne);
        if($nomColonne == "nomArtiste") echo "<h4><a href='$hrefAfficher'>$valeurColonne</a></h4>";
        if($nomColonne == "imagePrincipale") echo "<div><a href='$hrefAfficher'><img src='$srcImage' alt=''></a></div>";
    }
    
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