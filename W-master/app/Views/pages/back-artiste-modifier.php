<?php

$this->insert('partials/back-header', 					[ "titre" 				=> "Modifier artiste", "style" => "css/back-default.css"  ]);
$this->insert('partials/back-nav');
$this->insert('partials/back-section-modifier-artiste', [ "id" 					=> $id, 
														  "artisteUpdateRetour" => $artisteUpdateRetour ]);
$this->insert('partials/back-footer');