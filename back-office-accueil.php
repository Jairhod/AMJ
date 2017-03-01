<?php
    require_once('private/view/head.php');
    require_once('private/view/nav.php');
?>
       <div class="contenu-bo container-fluid">
           <div>
                <div>
                    <a href="index.php"><img src="assets/css/img/forbidden-mark.png" alt=""></a>
                </div>
               <form action="" id="form-bo" method="GET">
                   <select>
                        <option value=""  id="" name=""></option>
                       <option value="profil"  id="profil" name="profil">Profil</option>
                       <option value="parametres" id="parametres" name="parametres">Paramètres</option>
                       <option value="deconnexion" id="deconnexion" name="deconnexion">Déconnnexion</option>
                   </select>
                   <input type="hidden" name="idForm" value="menu-bo"/>
               </form>
               <div class="titre-bo">
                   <h1 id="titre-bo">AMJ Back office</h1>
               </div>
            </div>
            <div id="btn-bo">
                <div class="btn-bo-1">
                   <a href="#" class="btn"><div>Créer une page Artiste</div><img src="assets/css/img/edit.png" alt=""></a>
                </div>
                <div class="btn-bo-2">
                   <a href="#" class="btn"><div>Modifier une page Artiste</div><img src="assets/css/img/edit.png" alt=""></a>
                </div>
            </div>
       </div>
