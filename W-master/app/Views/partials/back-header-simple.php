<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title><?php echo $this->e($titre); ?></title>
  
</head>

<body>
<header>
	<h1><?php echo $this->e($titre); ?></h1>
	<nav>
		<ul>
			<li><a href="<?php echo $this->url('vitrine_accueil') ?>">Accueil</a></li>

<?php if ( isset($w_user["id"]) && ($w_user["id"] > 0) ) : ?> 
			<li><a href="<?php echo $this->url('back_logout'); ?>">Logout</a></li>
<?php else: ?>			        
			<li><a href="<?php echo $this->url('back_login'); ?>">Login</a></li>
<?php endif; ?>	
		</ul>
	</nav>
</header>