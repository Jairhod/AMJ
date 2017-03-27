<?php



namespace Controller;

class AdminController 
    extends FormController  // ON HERITE DE LA CLASSE FormController 
                            // QUI HERITE DE LA CLASSE W\Controller\Controller
{

	public function backArtisteGerer()
	{
		$this->allowTo('admin');
		$GLOBALS["artisteCreateRetour"] = "";
		$GLOBALS["artisteDeleteRetour"] = "";
    
	    $idForm = $this->verifierSaisie("idForm");
	    if ($idForm == "artisteCreate")
	    {
	        $this->artisteCreateTraitement();
	    }

	    if ($idForm == "artisteDelete")
	    {
	        $this->artisteDeleteTraitement();
	    }
	    
		$this->show('pages/back-artiste-gerer', 
					[ 
						"artisteCreateRetour" => $GLOBALS["artisteCreateRetour"], 
						"artisteDeleteRetour" => $GLOBALS["artisteDeleteRetour"], 
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


	public function backArtisteAfficher($id)
	{
		$this->allowTo('admin');
		$this->show('pages/back-artiste-afficher', ["id" => $id ]);
	}

}