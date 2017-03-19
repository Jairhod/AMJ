<?php

namespace Controller;

use \W\Controller\Controller;

class VitrineController
	extends Controller
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

		$this->show('pages/back-login');
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