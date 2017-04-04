<?php
$this->insert('partials/back-header', 					[ "titre" => "Tous nos artistes", "style" => "css/back-default.css"  ]);
$this->insert('partials/back-nav');
$this->insert('partials/back-section-artistes-liste',  	[ "artisteDeleteRetour" => $GLOBALS["artisteDeleteRetour"]]);
$this->insert('partials/back-footer');