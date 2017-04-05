
<!--PHOTO ET TEXTE PRESENTATION-->  

<?php
$objetArtistesModel = new \Model\ArtistesModel;
$tabLigne = $objetArtistesModel->find($id);

if (!empty($tabLigne))
{
    $id                  = $tabLigne["id"];
    $nomArtiste            = $tabLigne["nomArtiste"];
    $nomGenre            = $tabLigne["nomGenre"];
    $imagePrincipale       = $tabLigne["imagePrincipale"];
    $descriptionArtiste    = $tabLigne["descriptionArtiste"];
    $artistesLies          = $tabLigne["artistesLies"];
    $dateModification      = $tabLigne["dateModification"];
    $srcImage              = $this->assetUrl('media/img/'.$id.'/imagePrincipale/'.$imagePrincipale);
    $hrefModifier          = $this->url("back_artiste_modifier", [ "id" => $id ]);
    $hrefSupprimer         = "?idForm=artisteDelete&id=$id";
    
    // AFFICHER LE CODE HTML
    echo
<<<CODEHTML


<div class="container containerblue">
  <div class="borderbleuvert">
    <div id="$id" class="photoprincipale">
        <center><img src="$imagePrincipale" width="70%" alt="$nomArtiste" class="img-responsive"></center>
        <div class="h2centre">
        <h2>$nomArtiste</h2>
        </div>
    </div>
  </div>
      <div class="containerficheartiste">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12">
          <div class="texteficheartiste">
            <p>$descriptionArtiste</p> 
            </div> 
          </div>
CODEHTML;

}
?>          
        <!--/////////////////PLAYER AUDIO//////////////////////////////////////////--> 
        
        <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="audiogeneral">
          <div class="containeraudio">
            <div class="columnaudio center">
            </div>
            <div class="column add-bottom">
                <div id="mainwrap">
                    <div id="nowPlay">
                        <span class="left" id="npAction">Paused...</span>
                        <span class="right" id="npTitle"></span>
                    </div>
                    <div id="audiowrap">
                        <div id="audio0">
                            <audio preload id="audio1" controls="controls">Your browser does not support HTML5 Audio!</audio>
                        </div>
                        <div id="tracks">
                            <a id="btnPrev">&laquo;</a>
                            <a id="btnNext">&raquo;</a>
                        </div>
                    </div>
                    <div id="plwrap">
                        <ul id="plList"></ul>
                    </div>
                </div>
            </div>
        </div>
      </div> 
      </div>
      <!--fin row :--> 
    </div>    
          

      
   <!--CAROUSEL -->
   <div>
    <div class="centre">
      <div class="bs-example">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Carousel indicators -->
              <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>   
              <!-- Wrapper for carousel items -->
              <div class="carousel-inner">
                  <div class="item active">
                      <img src="./assets/media/img/40/images/201704040205071094986970.jpeg" alt="First Slide">
                  </div>
                  <div class="item">
                      <img src="./assets/media/img/40/images/201704040205071682790129.jpeg" alt="Second Slide">
                  </div>
                  <div class="item">
                      <img src="./assets/media/img/40/images/201704040205071526597577.jpeg" alt="Third Slide">
                  </div>
              </div>
              <!-- Carousel controls -->
              <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="carousel-control right" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
          </div>
      </div>
    </div> 
  </div>   


  <!--VIDEO--> 
  <div class="row">
    <div class="backgroundvideo">
   
      <div class="col-md-12 backgroundvideo">
        <div class="centre">
            <iframe width="365" height="229" src="https://www.youtube.com/embed/Fz3DDoNq5Wk" frameborder="0" allowfullscreen class="marginvideo"></iframe>
            <iframe width="365" height="229" src="https://www.youtube.com/embed/Ffo4ZxWfEGs" frameborder="0" allowfullscreen class="marginvideo"></iframe>
            <iframe width="365" height="229" src="https://www.youtube.com/embed/PPgKnxSXGms" frameborder="0" allowfullscreen class="marginvideo"></iframe>
        </div>      
      </div>  
    </div>
  </div>  
    <div class="row row-eq-height">
        <div class="col-md-6 col-sm-12 fase3">
          <p><strong>QUATRE ARTISTES MUSICIENS</strong></p>
          <p>CHANTEUSE</p>
          <p>GUITARE</p>
          <p>BASSE</p>
          <p>DRUMS</p><br />
          <p><strong>ARTISTES SUPPLEMENTAIRES</strong></p>
          <p>PIANISTE, CHORISTE</p>
          <p>SECTION DE CUIVRES</p>
        </div>  
       <div class="col-md-6 col-sm-12 fase3">
          <p><strong>RÉFÉRENCES</strong></p>
          <p>LA CABRO D'OR - BAUX DE PROVENCE</p>
          <p>HARD ROCK CAFÉ - MARSEILLE</p>
          <p>RIVIERA ST PONS - GEMENOS</p>
          <p>CHÂTEAU DE ROQUEFEUILLE - POURRIÈRES</p>
        </div>
      </div>  
    </div>
</div>  

 



    
 