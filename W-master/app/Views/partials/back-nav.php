
<header>
	<nav>
		<ul>
			<li><a href="<?php echo $this->url('back_accueil') ?>">Accueil</a></li>

<?php if ( isset($w_user["id"]) && ($w_user["id"] > 0) ) : ?> 
			<li><a href="<?php echo $this->url('back_artiste_creer'); ?>">Créer une fiche</a></li>
			<li><a href="<?php echo $this->url('back_artiste_liste'); ?>">Afficher/Modifier/Supprimer une fiche</a></li>
			<li><a href="<?php echo $this->url('back_logout'); ?>">Logout</a></li>
<?php else: ?>			        
			<li><a href="<?php echo $this->url('back_login'); ?>">Login</a></li>
<?php endif; ?>	
		</ul>
	</nav>
</header>