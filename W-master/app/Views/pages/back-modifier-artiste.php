<?php

$this->insert('partials/header', [ "titre" => "Modifier artiste" ]);
$this->insert('partials/admin-section-modifier-artiste', [ "id" => $id, "artisteUpdateRetour" => $artisteUpdateRetour ]);
$this->insert('partials/footer');