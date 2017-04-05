<?php
	
	$w_routes = array(

		['GET',  	'/accueil', 			         'Vitrine#accueil', 			'vitrine_accueil'],
		['GET',  	'/actus', 				         'Vitrine#actus', 				'vitrine_actus'],
		['GET',  	'/catalogue', 		             'Vitrine#catalogue', 			'vitrine_catalogue'],
		['GET',  	'/fiche-artiste', 		         'Vitrine#ficheArtiste', 		'vitrine_fiche_artiste'],
    	['GET',  	'/mentions-legales', 		  	  'Vitrine#mentionsLegales',    'vitrine_mentions_legales'],
    	['GET',  	'/label', 		            	  'Vitrine#label', 		        'label'],
      	['GET',  	'/test-jo', 		              'Vitrine#testJo', 		    'test_jo'],
	   	['GET|POST',  	'/ajax', 		                'Vitrine#ajax', 			'vitrine_ajax'],     
       		
		['GET|POST',  	'/back/accueil', 		         'Admin#backAccueil', 			'back_accueil'],
		['GET|POST',  	'/back/login', 			         'Admin#backLogin', 			'back_login'],
		['GET|POST',  	'/back/logout', 		         'Admin#backLogout', 			'back_logout'],
		['GET|POST',  	'/front/logout', 		         'Admin#frontLogout', 			'front_logout'],
		['GET|POST',  	'/back/artiste/creer',           'Admin#backArtisteCreer',    	'back_artiste_creer'],
		['GET|POST',  	'/back/artiste/liste',           'Admin#backArtisteListe',    	'back_artiste_liste'],
		['GET|POST',  	'/back/artiste/afficher/[i:id]', 'Admin#backArtisteAfficher', 	'back_artiste_afficher'],
		['GET|POST',  	'/back/artiste/modifier/[i:id]', 'Admin#backArtisteModifier', 	'back_artiste_modifier'],
		
		['GET|POST',  	'/back/artiste/upload/images/[i:id]', 		'Admin#backArtisteUploadImages', 	'back_artiste_upload_images'],
		['GET|POST',  	'/back/artiste/modifier/images/[i:id]', 	'Admin#backArtisteModifierImages', 	'back_artiste_modifier_images'],

		['GET|POST',  	'/back/artiste/modifier/images/removeImage/[i:id]/[*:name]', 	'Admin#backArtisteRemoveImage', 	'back_artiste_remove_image'],
	);