<?php
	
	$w_routes = array(
		['GET',  	'/accueil', 			      'Vitrine#accueil', 			'vitrine_accueil'],
		['GET',  	'/actus', 				      'Vitrine#actus', 				'vitrine_actus'],
		['GET',  	'/catalogue', 		          'Vitrine#catalogue', 			'vitrine_catalogue'],
		['GET',  	'/fiche-artiste', 		      'Vitrine#ficheArtiste', 		'vitrine_fiche_artiste'],
		
		['GET',  	'/back/accueil', 		      'Vitrine#backAccueil', 		'back_accueil'],
		['GET',  	'/back/login', 			      'Vitrine#backLogin', 			'back_login'],
		['GET',  	'/back/logout', 		      'Vitrine#backLogout', 		'back_logout'],
		['GET',  	'/back/modif/artiste/[i:id]', 'Vitrine#backModifArtiste', 	'back_modif_artiste'],

	);