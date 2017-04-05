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
    
    public function ajax()
	{

		// TABLEAU QUI VA CONTENIR LES INFOS A RENVOYER AU NAVIGATEUR
		$tabReponseJson = [];
		
		// DETECTER SI IL Y A UN FORMULAIRE A TRAITER
		$idForm = $this->verifierSaisie("idForm");
		if ($idForm == "recupInfoGenre")
		{
            $afficheGenre = $this->verifierSaisie("afficheGenre");
		
            $objetArtistesModel = new \Model\ArtistesModel;
                        $tabLigne = $objetArtistesModel->search(['nomGenre'=>$afficheGenre]);
                        $htmlOption = '';
            
                        foreach($tabLigne as $index => $tabColonne)
                        {
                            $id         = $tabColonne["id"];
                            $valeurColonne = $tabColonne["nomArtiste"];
                            
                            $htmlOption .="<li classe='genre'>$valeurColonne</li>";        
                            
                            
                        }
			
			// AVANTAGE DE AJAX
			// JE N'ENVOIE QUE LA REPONSE A LA REQUETE
			// JE N'ENVOIE PAS LA PAGE HTML ENTIERE
			$tabReponseJson["retour"] = $htmlOption;
		}

		// RENVOYER LE TABLEAU D'INFO JSON
		// TRANSFORME LE TABLEAU ASSOCIATIF PHP
		// EN OBJET JAVASCRIPT
		// (JSON => JS Object Notation)
		// LA METHODE EFFECTUE json_encode
		$this->showJson($tabReponseJson);		
	}

}