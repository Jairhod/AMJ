<!DOCTYPE html>
<html lang="fr">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>Catalogue</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  <!-- My LESS file -->
  <link rel="stylesheet" type="text/css" href="./style/main.less">

</head>
<body>
  <header>
    <nav>
      <div><img src="http://amjprod.com/content/uploads/2014/11/Logo_Couleur_vecto.png" width="100" alt="logo"></div>
      <ul>
        <li><a href="">Le Label</a></li>
        <li><a href="">Notre Catalogue</a></li>
        <li><a href="">Actus</a></li>
        <li><a href="">Devis</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </nav>

  </header>

  <main>
  <h1>Catalogue AMJ</h1>
      <div id="secondary_nav">
        <h2>Les genres</h2>
        <form action="" method="GET">
          <input type="hidden" name="idForm" value="secondaryNav">
          <button type="submit" name="touslesgenres" value="touslesgenres">tous les genres</button>
          <button type="submit" name="jazz" value="jazz">jazz</button>
          <button type="submit" name="rock" value="rock">rock</button>
          <button type="submit" name="pop" value="pop">pop</button>
        </form>  
      </div>
      <div id="breadcrumbs"><a href="#!">artiste machin</a></div>
          <div id="recherche-artiste">
            <form action="" method="GET"></form>
            <input type="hidden" name="idForm" value="rechercheArtiste">
            <button type="submit" name="rechercher" value="rechercher">Rechercher un artiste</button>
          </div>
          <div class="container">
            
              <section>

                <h2>Nom Artiste</h2>
                  
                  <img src="" alt=""/>
                  <div class="row">
                  <div class="col-md-8">
                  <article>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam error repudiandae eius temporibus accusamus aut saepe reiciendis molestiae consequuntur, magni dicta ratione ea eveniet dolor, nisi dolorem aspernatur quis. Adipisci.</p>
                  </article>
                  </div>
                  <div class="col-md-4">lecteur audio</div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">video</div>
                    <div class="col-md-4">video</div>
                    <div class="col-md-4">video</div>
                  </div>
                  <div class="devis-btn">
                    <a href="#!">Simuler un devis</a>
                  </div>

                
              </section>

            </div>
            <aside>
              <h3>Artistes liés</h3>
              
                <div id="listeArtistesLies" class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <h4>nom artiste</h4>
                        <a href="#!"><img src="" alt=""></a>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, hic?</p>
                    </div>
                    <div class="col-md-4">
                      <h4>nom artiste</h4>
                        <a href="#!"><img src="" alt=""></a>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, excepturi.</p>
                    </div>
                    <div class="col-md-4">
                      <h4>nom artiste</h4>
                        <a href="#!"><img src="" alt=""></a>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, accusantium!</p>
                    </div>
                  </div>
                </div>
              
            </aside>
  </main> 

  <footer>

  <div>&copy;Amj Productions</div>

  </footer>

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js" integrity="sha256-nzh8GLE0fQjJPBBicaZCrsbQS9YUgZCThGOct+WrQgY=" crossorigin="anonymous"></script>

  <!-- My javascript file -->
  <script type="text/javascript" src="./script/script.js"></script>
</body>
</html>