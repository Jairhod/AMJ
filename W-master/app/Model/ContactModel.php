<?php

namespace Model;

// ON VA HERITER DE LA CLASSE Model DU FRAMEWORK W
use W\Model\Model;

// LE MECANISME DU FRAMEWORK W
// VA DEDUIRE A PARTIR DU NOM DE LA CLASSE
// QUEL EST LE NOM DE LA TABLE MYSQL CORRESPONDANTE
// (CamelCase => snake_case)
// NewsletterListeModel => newsletter_liste

class ContactModel 
        extends Model   // ON FAIT UN HERITAGE A PARTIR DE LA CLASSE PARENTE Model
{
    
}