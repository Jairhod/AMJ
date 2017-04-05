<?php

$this->insert('partials/back-header', 						   	[ "titre" 	     		=> "Modifier images", 
																  "style" 				=> "css/back-default.css"  ]);
$this->insert('partials/back-nav');
$this->insert('partials/back-section-artiste-modifier-images', 	[ "id" 					=> $id, 
														  		  "imagesUpdateRetour"	=> $imagesUpdateRetour ]);
$this->insert('partials/back-footer');