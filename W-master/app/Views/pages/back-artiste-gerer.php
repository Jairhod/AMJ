<?php
$this->insert('partials/back-header-simple', 		  [ "titre" => "Gerer artiste" ]);
$this->insert('partials/back-section-artiste-gerer',  [ "artisteCreateRetour" => $GLOBALS["artisteCreateRetour"]]);
$this->insert('partials/back-section-liste-artistes', [ "artisteCreateRetour" => $GLOBALS["artisteCreateRetour"]]);
$this->insert('partials/back-footer-simple');