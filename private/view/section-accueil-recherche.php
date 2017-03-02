<div class="container-fluid full-width">
      <section id="recherche-accueil">
        <h1>AMJ Productions</h1>
        <h2>Vous cherchez un groupe pour un évènement dans la région PACA ?</h2>
        <form action="" method="GET" class="form-inline section-accueil">
            <input type="hidden" name="idForm" value="choixAccueil">
            <div class="bla">
               
                <select name="genres" id="genres" class="form-control form-accueil">                    
                    <option value="2">Pop</option>
                    <option value="3">Soul-Funk-Blues</option>
                </select>
              
                <select name="artistes" id="artistes" class="form-control form-accueil form-artistes-accueil">               
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
                $.get('http://localhost/myphp/github/amj/private/controler/ajax/recupGenres.php', {artiste: $(this).val()}, function(data){
                   $('#artistes').html(data);
                });
            });
        });
    </script>