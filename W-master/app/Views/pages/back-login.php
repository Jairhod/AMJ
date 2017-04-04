<?php
$this->insert('partials/back-header', 			[ "titre" 		=> "Login du back-office", "style" => "css/back-login.css" ]);
$this->insert('partials/back-section-login', 	[ "loginRetour" => $loginRetour ]);
$this->insert('partials/back-footer');