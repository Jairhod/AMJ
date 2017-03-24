console.log('Javascript is linked & jQuery is installed :)')


$(document).ready(function(){
    
/* Effet au scroll scrollreveal ========== */
   
    window.sr = ScrollReveal({reset: true});
    var fooReveal = {
        distance : '50px',
        easing   : 'ease-in-out',
        scale    : 1.1
    };
    
    sr.reveal('.anim-descr', fooReveal);

    
/* API FACEBOOK : pour fil d'actu */


    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8&appId=1417053915025497";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    
/* BACK OFFICE : menu ==================== */
    
		$('.navbar-fostrap').click(function(){
			$('.nav-fostrap').toggleClass('visible');
			$('body').toggleClass('cover-bg');
		});
  
});
    

