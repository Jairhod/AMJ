
<hr>
<section>

    <script src="<?php echo $this->assetUrl('js/jssor.slider-23.0.0.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo $this->assetUrl('js/jssor_1_slider_init.js'); ?>" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo $this->assetUrl('css/jssor.css'); ?>">

<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:809px;height:150px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url(<?php echo $this->assetUrl('media/img/loading.gif'); ?>) no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:809px;height:150px;overflow:hidden;">

<?php

$chemin = "*/media/img/".$id."/images/*";
$tableauPhoto = glob($chemin);

foreach($tableauPhoto as $key => $value)
{
    $trimmed = ltrim($value, "assets/");
    $src = $this->assetUrl($trimmed);
    $imageHtml = "<img data-u='image' src=" .$src. ">";

echo
<<<IMAGES
<div>
    $imageHtml;    
</div>
IMAGES;

}

?>

            
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:21px;height:21px;">
                <div data-u="numbertemplate"></div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->

</section>

<hr>
