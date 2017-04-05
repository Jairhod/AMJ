<?php

namespace Controller;

class AdminController 
    extends FormController  // ON HERITE DE LA CLASSE FormController 
                            // QUI HERITE DE LA CLASSE W\Controller\Controller
{

	public function backAccueil()
	{
		$this->allowTo('admin');

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

	public function frontLogout()
	{
		$objetAuthentificationModel = new \W\Security\AuthentificationModel;

		$objetAuthentificationModel->logUserOut();

		$this->redirectToRoute("vitrine_accueil");
	}

	public function backArtisteCreer()
	{
		$this->allowTo('admin');
		$GLOBALS["artisteCreateRetour"] = "";
		    
	    $idForm = $this->verifierSaisie("idForm");
	    if ($idForm == "artisteCreate")
	    {
	        $this->artisteCreateTraitement();
	    }
    
		$this->show('pages/back-artiste-creer', 
					[ 
						"artisteCreateRetour" => $GLOBALS["artisteCreateRetour"], 
					]);
	}

	public function backArtisteModifier($id)
	{
		$this->allowTo('admin');
		
		$GLOBALS["artisteUpdateRetour"] = "";

		// Controller
		$idForm = $this->verifierSaisie("idForm");
	    if ($idForm == "artisteUpdate")
	    {
	        $this->artisteUpdateTraitement();
	    }

		// View
		$this->show("pages/back-artiste-modifier", 
			[
			"id" => $id,
			"artisteUpdateRetour" => $GLOBALS["artisteUpdateRetour"],
			]);
	}

	public function backArtisteModifierImages($id)
	{
		$this->allowTo('admin');
		$idForm = $this->verifierSaisie("idForm");
		$GLOBALS["imagesUpdateRetour"] = "";

		// Controller
	    if ($idForm == "imagesUpdate")
	    {
	        $this->imagesUpdateTraitement($id);
	    }

		// View
		$this->show("pages/back-artiste-modifier-images", 
			[
			"id" => $id,
			"imagesUpdateRetour" => $GLOBALS["imagesUpdateRetour"],
			]);
	}

	public function backArtisteUploadImages($id)
	{
		$this->verifierUpload ($id, "images");
		$this->redirectToRoute('back_artiste_modifier_images', ['id' => $id]);
	}


	public function backArtisteRemoveImage($id, $name)
	{
		$this->removeImageTraitement ($id, $name);
		$this->redirectToRoute('back_artiste_modifier_images', ['id' => $id]);
	}


	public function backArtisteAfficher($id)
	{
		$this->allowTo('admin');
		$this->show('pages/back-artiste-afficher', ["id" => $id ]);
	}

	public function backArtisteListe()
	{
		$this->allowTo('admin');
		$GLOBALS["artisteDeleteRetour"] = "";

		$idForm = $this->verifierSaisie("idForm");
		if ($idForm == "artisteDelete")
	    {
	        $this->artisteDeleteTraitement();
	    }

		$this->show('pages/back-artiste-liste',
					[ 
						"artisteDeleteRetour" => $GLOBALS["artisteDeleteRetour"], 
					]);

	}

}