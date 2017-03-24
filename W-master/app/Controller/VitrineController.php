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

		$this->show('pages/back-login');

		$idForm = $this->verifierSaisie("idForm");
	    if ($idForm == "login")
	    {
	        $this->loginTraitement();
	    }

	    $this->show('pages/back-login', [ "loginRetour" => $GLOBALS["loginRetour"] ]);
	}

	public function catalogue()
	{

		$this->show('pages/catalogue');
	}

	public function ficheArtiste()
	{

		$this->show('pages/fiche-artiste');
	}

}