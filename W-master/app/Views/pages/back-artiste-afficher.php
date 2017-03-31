<?php
$this->insert('partials/back-header', 			[ "titre" => "Fiche artiste du back-office" ]);
$this->insert('partials/back-nav');
$this->insert('partials/back-section-artiste',	[ "id" => $id ]);
$this->insert('partials/back-footer');