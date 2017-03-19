<?php
	
	$w_routes = array(
		['GET',  	'/accueil', 			'Vitrine#accueil', 				'vitrine_accueil'],
		['GET',  	'/actus', 				'Vitrine#actus', 				'vitrine_actus'],
		['GET',  	'/catalogue', 			'Vitrine#catalogue', 			'vitrine_catalogue'],
		['GET',  	'/fiche-artiste', 		'Vitrine#ficheArtiste', 		'vitrine_fiche_artiste'],
		
		['GET',  	'/back-accueil', 		'Vitrine#backAccueil', 			'vitrine_back_accueil'],
		['GET',  	'/back-login', 			'Vitrine#backLogin', 			'vitrine_back_login'],

	);