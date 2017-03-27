<?php

namespace Controller;

class VitrineController
	extends FormController
{
	public function accueil()
	{

		$this->show('pages/accueil');
	}

	public function actus()
	{

		$this->show('pages/actus');
	}

	public function backAccueil()
	{

		$this->show('pages/back-accueil');
	}

	public function backLogin()
	{
		$GLOBALS["loginRetour"] = "";

		$idForm = $this->verifierSaisie("idForm");
	    if ($idForm == "login")
	    {
	        $this->loginTraitement();
	    }

	    $this->show('pages/back-login', [ "loginRetour" => $GLOBALS["loginRetour"] ]);
	}


	public function backLogout()
	{
		$objetAuthentificationModel = new \W\Security\AuthentificationModel;

		$objetAuthentificationModel->logUserOut();

		$this->redirectToRoute("back_login");


	}

	public function catalogue()
	{

		$this->show('pages/catalogue');
	}

	public function ficheArtiste()
	{

		$this->show('pages/fiche-artiste');
	}

		public function backModifierArtiste($id)
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
		$this->show("pages/back-modifier-artiste", 
			[
			"id" => $id,
			"artisteUpdateRetour" => $GLOBALS["artisteUpdateRetour"],
			]);
	}



}