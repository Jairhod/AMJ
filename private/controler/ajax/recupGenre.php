<?php

$genre = strip_tags($_GET['genre']);

$bdd = new PDO('mysql:host=localhost;dbname=amj_bdd;charset=utf8', 'root', '');

if ($genre == "tous"){
	$requete = "SELECT nomArtiste
			FROM artistes";
}else{

$requete = "SELECT nomArtiste
			FROM artistes
			WHERE nomGenre = :genre";}

$stmtGenres = $bdd->prepare($requete);
$stmtGenres->bindValue(':genre', $genre, PDO::PARAM_STR);
$stmtGenres->execute();

$listeArtistes = $stmtGenres->fetchAll(PDO::FETCH_ASSOC);

foreach($listeArtistes as $Artiste)
{
	echo '<option value="' .$Artiste['idArtiste']. '">' .$Artiste['nomArtiste']. '</option>';
}









