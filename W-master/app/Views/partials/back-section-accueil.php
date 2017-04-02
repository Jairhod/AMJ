
    <div class="contenu-bo container-fluid">
        <div class="bo-global">
            <div class="bo-col-1">
                <a href="<?php echo $this->url('front_logout'); ?>">retour au site AMJ<i class="fa fa-sign-out" aria-hidden="true"></i></a>  
            </div>
            <div class="titre">
               <h1 id="titre-bo">AMJ Back office</h1>
            </div>
            <nav>
                <div class="nav-fostrap">
                    <ul>
                        <li><a href="javascript:void(0)"><?php echo($w_user["username"]); ?><span class="arrow-down"></span></a>
                            <ul class="dropdown">
                                <li><a href=""><?php echo($w_user["role"]); ?></a></li>
                                <li><a href="<?php echo $this->url('back_logout'); ?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="nav-bg-fostrap">
                    <div class="navbar-fostrap"> <span></span> <span></span> <span></span> </div>
                    <a href="" class="title-mobile">Menu</a>
                </div>
            </nav>
        </div>
        <div id="btn-bo">
            <div class="btn-col">
                <a href="<?php echo $this->url('back_artiste_creer'); ?>" class="btn">Créer une page Artiste</a>
                <div class="btn-svg"><img src="<?php echo $this->assetUrl('media/img/create.svg'); ?>" alt=""></div>
            </div>
            <div class="btn-col">
               <a href="<?php echo $this->url('back_artiste_liste'); ?>" class="btn">Modifier une page Artiste</a>
               <div class="btn-svg"><img src="<?php echo $this->assetUrl('media/img/modify.svg'); ?>" alt=""></div>
            </div>
        </div><!-- fin div bo global -->
    </div><!-- fin div container bo -->