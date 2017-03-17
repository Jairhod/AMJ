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

}