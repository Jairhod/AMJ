<?php
$this->insert('partials/back-header', 			[ "titre" => "Fiche artiste du back-office", "style" => "css/back-default.css" ]);
$this->insert('partials/back-nav');
$this->insert('partials/back-section-artiste',	[ "id" => $id ]);
$this->insert('partials/back-footer');