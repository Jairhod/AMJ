<?php
$this->insert('partials/back-header-simple', 			[ "titre" => "Tous nos artistes" ]);
$this->insert('partials/back-section-artistes-liste',  	[ "artisteDeleteRetour" => $GLOBALS["artisteDeleteRetour"]]);
$this->insert('partials/back-footer-simple');