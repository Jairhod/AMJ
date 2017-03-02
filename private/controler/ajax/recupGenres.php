<?php

$artiste = strip_tags($_GET['artiste']);


//file_put_contents('recupGenres.txt', $artiste);
$bdd = new PDO('mysql:host=localhost;dbname=amj_bdd;charset=utf8', 'root', '');

$requete = "SELECT idGenre, nomGenre
			FROM genres
			WHERE idArtiste = :artiste";

$stmtGenres = $bdd->prepare($requete);

$stmtGenres->bindValue(':artiste', $artiste, PDO::PARAM_INT);
$stmtGenres->execute();

$listeGenres = $stmtGenres->fetchAll(PDO::FETCH_ASSOC);


foreach($listeGenres as $sousCat)

{
	echo '<option value="'.$sousCat['idGenre']. '">' .$sousCat['nomGenre'].'</option>';
}





