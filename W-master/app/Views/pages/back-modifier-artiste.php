<?php

$this->insert('partials/back-header', [ "titre" => "Modifier artiste" ]);
$this->insert('partials/back-section-modif-artiste', [ "id" => $id, "artisteUpdateRetour" => $artisteUpdateRetour ]);
$this->insert('partials/back-footer');