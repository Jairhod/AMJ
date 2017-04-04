
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

    $objetImagesModel = new \Model\ImagesModel;

	$tabLigne = $objetImagesModel->findAll("id", "ASC");

	foreach ($tabLigne as $key => $value) {

		$idArtiste = $tabLigne[$key]["idArtiste"];
		$id 	   = $tabLigne[$key]["id"];

	}

	echo ("cool dude");









?>

</body>
</html>
