<?php
	
	$w_routes = array(

		['GET',  	'/accueil', 			         'Vitrine#accueil', 			'vitrine_accueil'],
		['GET',  	'/actus', 				         'Vitrine#actus', 				'vitrine_actus'],
		['GET',  	'/catalogue', 		             'Vitrine#catalogue', 			'vitrine_catalogue'],
		['GET',  	'/fiche-artiste', 		         'Vitrine#ficheArtiste', 		'vitrine_fiche_artiste'],
    
    ['GET',  	'/mentions-legales', 		  'Vitrine#mentionsLegales',    'vitrine_mentions_legales'],
    ['GET',  	'/label', 		            'Vitrine#label', 		        'label'],
		
		['GET',  	'/back/accueil', 		             'Admin#backAccueil', 		   	  'back_accueil'],
		['GET',  	'/back/login', 			             'Admin#backLogin', 			      'back_login'],
		['GET',  	'/back/logout', 		             'Admin#backLogout', 			      'back_logout'],
		['GET',  	'/back/artiste/creer',           'Admin#backArtisteCreer',    	'back_artiste_creer'],
		['GET',  	'/back/artiste/liste',           'Admin#backArtisteListe',    	'back_artiste_liste'],
		['GET',  	'/back/artiste/afficher/[i:id]', 'Admin#backArtisteAfficher', 	'back_artiste_afficher'],
		['GET',  	'/back/artiste/modifier/[i:id]', 'Admin#backArtisteModifier', 	'back_artiste_modifier'],

	);