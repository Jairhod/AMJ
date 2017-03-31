<section>
    <table>
        <tbody>
<?php

$objetArtistesModel = new \Model\ArtistesModel;

$tabLigne = $objetArtistesModel->findAll("nomArtiste", "ASC");

foreach($tabLigne as $index => $tabColonne)
{
    $id         = $tabColonne["id"];

    echo "<tr>";
    foreach($tabColonne as $nomColonne => $valeurColonne)
    {
        $srcImage   = $this->assetUrl('media/img/'.$id.'/imagePrincipale/'.$valeurColonne);
        if($nomColonne == "nomArtiste") echo "<td>$valeurColonne</td>";
        if($nomColonne == "cheminImagePrincipale") echo "<td><img style='width: 100px' src='$srcImage' alt=''></td>";
    }

    // DEFINIR LES VARIABLES 
    $hrefAfficher   = $this->url("back_artiste_afficher", [ "id" => $id ]);
    $hrefModifier   = $this->url("back_artiste_modifier", [ "id" => $id ]);
    $hrefSupprimer  = "?idForm=artisteDelete&id=$id";
    
    echo
<<<CODEHTML
    <td><a href="$hrefAfficher">afficher</a></td>
    <td><a href="$hrefModifier">modifier</a></td>
    <td><a href="$hrefSupprimer">supprimer</a></td>
    </tr>
CODEHTML;
}

?>


        </tbody>
    </table>
</section>