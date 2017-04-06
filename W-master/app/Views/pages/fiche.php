<?php
$this->insert('partials/header', [ "titre" => "Fiche artiste","metaDescription" => "Fiche technique et descriptive de chaque artiste: bio, ecoute des morceaux, clips, photos...." ]);
$this->insert('partials/nav');
$this->insert('partials/section-catalogue-nav');
$this->insert('partials/section-fiche', [ "id" => $id ]);
$this->insert('partials/section-fiche-artistes-lies', [ "id" => $id ]);
$this->insert('partials/footer');