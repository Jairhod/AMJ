<section>
    <ul>
<?php

$objetArtistesModel = new \Model\ArtistesModel;

$tabLigne = $objetArtistesModel->findAll("nomArtiste", "ASC");

foreach($tabLigne as $index => $tabColonne)
{
    $id         = $tabColonne["id"];

    
    foreach($tabColonne as $nomColonne => $valeurColonne)
    {
        if($nomColonne == "nomArtiste") echo "<td>$valeurColonne</td>";
    }
    
    echo "<li>";
    
    // DEFINIR LES VARIABLES 
    $hrefAfficher   = $this->url("test_jo", [ "id" => $id ]);

    
    echo
<<<CODEHTML
CODEHTML;
}

?>


    </ul>
</section>