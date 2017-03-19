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

	public function backOfficeAccueil()
	{

		$this->show('pages/back-office-accueil');
	}

	public function catalogue()
	{

		$this->show('pages/catalogue');
	}

}