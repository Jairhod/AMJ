<?php
$this->insert('partials/back-header', [ "titre" => "Login du back-office" ]);
$this->insert('partials/back-section-login-simple', [ "loginRetour" => $GLOBALS["loginRetour"] ]);
$this->insert('partials/back-footer');