<section>
	<h3>Liste des artistes</h3>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>nom</th>
				<th>genre</th>
				<th>cheminImage</th>
				<th>bio</th>
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
    echo $this->url("back_afficher_artiste", ["id" => $id]);

    echo '" >afficher</a></td>';
    echo "<td><a>modifier</a></td>";
    echo "<td><a>supprimer</a></td>";
    echo "</tr>";
}

?>


		</tbody>
	</table>
</section>