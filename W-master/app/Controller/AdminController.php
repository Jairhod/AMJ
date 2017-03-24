<?php

namespace Controller;

class AdminController 
    extends FormController  // ON HERITE DE LA CLASSE FormController 
                            // QUI HERITE DE LA CLASSE W\Controller\Controller
{
    // METHODE
    
	/**
	 * Page de /admin/artistes
	 */
	public function gererArtiste()
	{
		// Sécurité
		// Seulement les role admin peuvent y accéder
		//$this->allowTo(['admin', 'super-admin']);
		$this->allowTo('admin');

	    // CONTROLLER
	    // TRAITEMENT DU FORMULAIRE
	    $GLOBALS["artisteCreateRetour"] = "";
	    $GLOBALS["artisteDeleteRetour"] = "";
	    
	    // RECUPERER L'INFO idForm
	    $idForm = $this->verifierSaisie("idForm");
	    if ($idForm == "artisteCreate")
	    {
	        // ACTIVER LE CODE POUR TRAITER LE FORMULAIRE newsletter
	        $this->artisteCreateTraitement();
	    }
	    if ($idForm == "artisteDelete")
	    {
	        // ACTIVER LE CODE POUR TRAITER LE FORMULAIRE newsletter
	        $this->artisteDeleteTraitement();
	    }
	    
		$this->show('pages/admin-artistes', 
					[ 
						"artisteCreateRetour" => $GLOBALS["artisteCreateRetour"], 
						"artisteDeleteRetour" => $GLOBALS["artisteDeleteRetour"], 
					]);
	}

	public function modifierArtiste($id)
	{
		$this->allowTo('admin');
		
		$GLOBALS["artisteUpdateRetour"] = "";
		// Controller
		$idForm = $this->verifierSaisie("idForm");
	    if ($idForm == "artisteUpdate")
	    {
	        // ACTIVER LE CODE POUR TRAITER LE FORMULAIRE newsletter
	        $this->artisteUpdateTraitement();
	    }


		// View
		$this->show("pages/admin-modifier-artiste", 
			[
			"id" => $id,
			"artisteUpdateRetour" => $GLOBALS["artisteUpdateRetour"],
			]);
	}

}