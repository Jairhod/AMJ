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


	public function catalogue()
	{

		$this->show('pages/catalogue');
	}

	public function ficheArtiste()
	{

		$this->show('pages/fiche-artiste');
	}



}