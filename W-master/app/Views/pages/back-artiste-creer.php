<?php
$this->insert('partials/back-header', 		  		  [ "titre" => "Creation", "style" => "css/back-default.css"  ]);
$this->insert('partials/back-nav');
$this->insert('partials/back-section-artiste-creer',  [ "artisteCreateRetour" => $GLOBALS["artisteCreateRetour"]]);
$this->insert('partials/back-footer');