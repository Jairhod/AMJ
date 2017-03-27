<section>
	<h3>Liste des artistes</h3>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>nom</th>
				<th>genre</th>
				<th>chemin_image</th>
                <th>bio</th>
                <th>artistes_liés</th>
				<th>date_modifiée</th>
                <!-- colonnes techniques -->
                <th>afficher</th>
                <th>modifier</th>
                <th>supprimer</th>				
			</tr>
		</thead>
		<tbody>
<?php

$objetArtistesModel = new \Model\ArtistesModel;

$tabLigne = $objetArtistesModel->findAll("id", "DESC");

foreach($tabLigne as $index => $tabColonne)
{
    echo "<tr>";
    foreach($tabColonne as $nomColonne => $valeurColonne)
    {
        echo "<td>$valeurColonne</td>";
    }
    
    $id = $tabColonne["id"];

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