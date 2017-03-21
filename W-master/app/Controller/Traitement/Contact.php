<?php

namespace Controller\Traitement;

class Contact
{
	public function contactTraitement ($formController)
	{
		// DEBUG
        // $GLOBALS["contactRetour"] = "EN COURS DE CONSTRUCTION...";

        // recupérer les infos du formulaire de contact
        $email		= $formController->verifierSaisie("email");
        $nom		= $formController->verifierSaisie("nom");
        $message	= $formController->verifierSaisie("message");

        if ( $formController->verifierEmail($email)
        		&& ($nom != "")
        			&& ($message != "") )
        {
            // ON PEUT ENREGISTRER LA LIGNE DANS LA TABLE contact
            // id               INT             PRIMARY_KEY A_I
            // email            VARCHAR(255)
            // nom              VARCHAR(255)
            // message          TEXT
            // dateCreation     DATETIME
            
            // COMPLETER LES INFOS MANQUANTES
            $date = date("Y-m-d H:i:s");
            
            // CREER UN OBJET DE LA CLASSE ContactModel
            $objetContactModel = new \Model\ContactModel;
            $objetContactModel->insert([
                    "email"         => $email,
                    "nom"           => $nom,
                    "message"       => $message,
                    "dateCreation"  => $date,
                ]);
                    
            // MESSAGE POUR LE VISITEUR        
            $GLOBALS["contactRetour"] = "MERCI DE VOTRE MESSAGE ($nom)";
        }
        else 
        {
            $GLOBALS["contactRetour"] = "INFORMATION MANQUANTE";
        }

	}

}