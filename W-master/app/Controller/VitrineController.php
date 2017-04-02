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
    
    public function mentionsLegales()
	{
		$this->show('pages/mentions-legales');
	}
    
    public function label()
	{
		$this->show('pages/label');
	}
    

	public function catalogue()
	{

		$this->show('pages/catalogue');
	}

	public function ficheArtiste()
	{

		$this->show('pages/fiche-artiste');
	}
    
    public function testJo()
	{

		$this->show('pages/test-jo');
	}

}