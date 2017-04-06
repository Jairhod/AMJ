 <nav class="navbar navbar-default navbar-made navbar-fixed-top">
        <div class="container-fluid header-nav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
             <span class="glyphicon glyphicon-menu-hamburger"></span>
              </button>
              <a class="navbar-brand" href="<?php echo $this->url('vitrine_accueil'); ?>"><a href="accueil"></a></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse container green borderXwidth" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="">
                        <a href="<?php echo $this->url('vitrine_accueil'); ?>">AMJ</a>
                    </li>
                </ul>             
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="<?php echo $this->url('vitrine_label'); ?>" class="active-nav">Le Label</a>
                    </li>
                    <li class="">
                        <a href="<?php echo $this->url('vitrine_catalogue'); ?>" class="active-nav">Le Catalogue</a>
                    </li>
                    <li>
                        <a href="<?php echo $this->url('vitrine_actus'); ?>" class="active-nav">Actus</a>
                    </li>
                    <li>
                        <a href="#devis" class="active-nav">Devis</a>
                    </li>
                    <li>
                        <a href="http://localhost/myphp/GitHub/AMJ/W-master/public/accueil#contact" class="active-nav">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  </header>

  <main>

  <?php echo $this->url('back_login'); ?>