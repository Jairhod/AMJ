</main>
</div> <!-- FIN DIV WRAPPER --> 
  <footer id="footer" class="container-fluid ">
        <div class="row footer-row">
            <div class="col-md-6 col-footer">
                <p>&copy;Amj Productions - <span><?php echo date('Y');?></span> -</p>
                <a href="<?php echo $this->url('vitrine_mentions_legales') ?>">Mentions légales</a>
                <a href="http://localhost/myphp/GitHub/AMJ/W-master/public/label#map">Infos pratiques</a>
            </div>
            <div class="col-md-6 btn-share">
                <a href="https://www.facebook.com/AMJ-Productions-867525126641828/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a href="https://https://soundcloud.com/o2gam-live"><i class="fa fa-soundcloud" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/channel/UCg6TbHDPivo--VikpRLXrTQ"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/in/christophe-moura-a968ba89/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
        </div>

<!-- Bootstrap -->
<script     src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
            crossorigin="anonymous"></script>

<script>
    var urlRouteAjax = '<?php echo $this->url('vitrine_ajax')?>';
</script>

<script src="<?php echo $this->assetUrl("js/audioscript.js"); ?>"></script>
<script src='http://api.html5media.info/1.1.8/html5media.min.js'></script>

<script type="text/javascript" src="<?php echo $this->assetUrl("js/script.js"); ?>"></script>
<script type="text/javascript" src="<?php echo $this->assetUrl("js/scrollreveal.min.js"); ?>"></script>

<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfUBUWs15WAhtm3nSdqcOPFOBhtN-mwD0&callback=initMap">
</script>

  </footer>
</body>
</html>