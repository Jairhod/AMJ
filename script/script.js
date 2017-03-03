console.log('Javascript is linked & jQuery is installed :)')

/* Script Prallax Accueil ========== */

$(document).ready(function() {
  var origheight = $("#trans1").height();
  var height = $(window).height();
  if (height > origheight) {
    $("#trans1").height(height);
  }
  
  $(window).scroll(function(){
    var x = $(this).scrollTop();
    $('#trans1').css('background-position','center -'+parseInt(x/5)+'px');
});
  
});