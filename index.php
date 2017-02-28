<!DOCTYPE html>
<html lang="fr">
<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <title>AMJ Productions</title>
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
        <li><a href="catalogue.php">Notre Catalogue</a></li>
        <li><a href="">Actus</a></li>
        <li><a href="">Devis</a></li>
        <li><a href="">Contact</a></li>
      </ul>
    </nav>

  </header>

  <main>

    <div>
      <section id="recherche-accueil">
        <h1>AMJ Productions</h1>
        <h2>une baseline</h2>

        <form action="" method="GET">

          <input type="hidden" name="idForm" value="choixAccueil">

          <select name="genres">
            <option name="genre" value="genre">genre</option>
            <option name="jazz" value="jazz">jazz</option>
            <option name="pop" value="pop">pop</option>
            <option name="rock" value="rock">Rock</option>
          </select>

          <select name="artistes">
            <option name="artistes" value="artistes">artistes</option>
            <option name="bobdylan" value="bobdylan">bobdylan</option>
            <option name="ledzeppelin" value="ledzeppelin">ledzeppelin</option>
            <option name="madonna" value="madonna">madonna</option>
          </select> 

          <input type="submit">

        </form>
      </section>
    </div>
    <div>
      <section id="descriptif">
        <h3>Descriptif</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores alias dolorem repellendus nobis</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores alias dolorem repellendus nobis</p>
      </section>
    </div>
    <div>
      <section id="label-accueil"></section>
      <h3>Le Label</h3>
      <div><img src="" alt="le label"></div>
      <article>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis commodi quod quos, nam corrupti. Iste excepturi soluta iusto quis consequuntur, saepe deserunt, sapiente, nostrum nesciunt necessitatibus quasi rerum eligendi ex! </p>
      </article>
      <a href="">Lire la suite...</a>
    </div>

    <div>
      <section id="contact">
        <h3>Contact</h3>

        <div>
        <fieldset>
          <form action="" method="GET">
            <input type="hidden" name="idForm" value="contact" >
            <label for="nom">Nom ou raison social</label>
            <input type="text" name="nom">
            <label for="email">Email</label>
            <input type="text" name="email">
            <label for="objet">Objet</label>
            <input type="text" name="objet">
            <legend>Message</legend>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <button type="submit">Envoyer</button>
          </form>
        </fieldset>
        </div>

        <div class="devis-btn">
          <a href="">Simuler un devis</a>
        </div>
        
      </section>
    </div>

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
