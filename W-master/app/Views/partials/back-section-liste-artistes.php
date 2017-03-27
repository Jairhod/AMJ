<section>
	<h3>Liste des artistes</h3>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>nom</th>
				<th>genre</th>
				<th>chemin image</th>
                <th>bio</th>
				<th>artistes liés</th>
                <!-- colonnes techniques -->
                <th>afficher</th>
                <th>modifier</th>
                <th>supprimer</th>				
			</tr>
		</thead>
		<tbody>
<?php		
$objetArtisteModel = new \Model\ArtistesModel;
$tabLigne = $objetArtisteModel->findAll("id", "DESC");

foreach($tabLigne as $index => $tabColonne)
{
    echo "<tr>";
    foreach($tabColonne as $nomColonne => $valeurColonne)
    {
        echo "<td>$valeurColonne</td>";
    }
    echo '<td><a href="';

    $id = $tabColonne["id"];
    echo $this->url("back_artiste_afficher", ["id" => $id]);

    echo '" >afficher</a></td>';
    echo "<td><a>modifier</a></td>";
    echo "<td><a>supprimer</a></td>";
    echo "</tr>";
}

?>


		</tbody>
	</table>
</section>