<div class="container-fluid full-width">
      <section id="recherche-accueil">
        <h1>AMJ Productions</h1>
        <h2>Vous cherchez un groupe pour un évènement dans la région PACA ?</h2>
        <form action="" method="GET" class="form-inline section-accueil">
            <input type="hidden" name="idForm" value="choixAccueil">
            <div class="bla">
               
                <select name="genres" id="genres" class="form-control form-accueil">
                    <option value="0" selected disabled>Choisir son style...</option>                 
                    <option value="SOUL-FUNK-BLUES">SOUL - FUNK - R &amp; BLUES</option>
                    <option value="POP-ROCK-ACTU">POP - ROCK - ACTU</option>
                    <option value="tous">Tous styles</option>
                </select>
              
                <select name="artistes" id="artistes" class="form-control form-accueil form-artistes-accueil">
                    <option value="0" selected disabled>Choisir son artiste...</option>             
                </select> 
                             
                <button type="submit" name="envoyerAccueil" class="search-submit-accueil"><img src="assets/css/img/search.png" alt=""></button>
             
            </div>
        </form>
      </section>
    </div>

    <script>
        $(document).ready(function(){
            $('#genres').on('change', function(){
               //alert($(this).val());
                $.get('private/controler/ajax/recupGenre.php', {genre: $(this).val()}, function(data){
                   $('#artistes').html(data);
                });
            });
        });
    </script>
