<section>
    <select>
<?php

$objetArtistesModel = new \Model\ArtistesModel;

$tabLigne = $objetArtistesModel->findAll("nomArtiste", "ASC");

foreach($tabLigne as $index => $tabColonne)
{
    $id         = $tabColonne["id"];

    
    foreach($tabColonne as $nomColonne => $valeurColonne)
    {
        if($nomColonne == "nomArtiste") echo "<option>$valeurColonne</option>";
    }

    // DEFINIR LES VARIABLES 
    $hrefAfficherArtiste   = $this->url("test_jo", [ "id" => $id ]);

    echo
<<<CODEHTML
CODEHTML;
}

?>
    </select>
</section>