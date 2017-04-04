<?php

namespace Controller;

use \W\Controller\Controller;

class AjaxController 
		extends FormController // HERITAGE DE LA CLASSE FormController
{

	/**
	 * Page pour la route /api-web-ajax
	 */
	public function traiterForm()
	{
		// TABLEAU QUI VA CONTENIR LES INFOS A RENVOYER AU NAVIGATEUR
		$tabReponseJson = [];
		
		// DETECTER SI IL Y A UN FORMULAIRE A TRAITER
		$idForm = $this->verifierSaisie("idForm");
		if ($idForm == "newsletter")
		{
			// IL FAUT TRAITER LE FORMULAIRE DE NEWSLETTER
			$this->newsletterTraitement();
			
			// AVANTAGE DE AJAX
			// JE N'ENVOIE QUE LA REPONSE A LA REQUETE
			// JE N'ENVOIE PAS LA PAGE HTML ENTIERE
			$tabReponseJson["retour"] = $GLOBALS["newsletterRetour"];
		}

		// RENVOYER LE TABLEAU D'INFO JSON
		// TRANSFORME LE TABLEAU ASSOCIATIF PHP
		// EN OBJET JAVASCRIPT
		// (JSON => JS Object Notation)
		// LA METHODE EFFECTUE json_encode
		$this->showJson($tabReponseJson);
		
		// CREE LA PAGE HTML
		//$this->show('default/home');
		
	}


}