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
    sr.reveal('.label-contain', { duration: 1000 }, 50);
    
    var transitionGauche = {
        origin   : 'left',
        distance : '200px',
        easing   : 'ease-in-out',
        useDelay: 'always'
    };
    
    sr.reveal('.col-1-label', transitionGauche);
    sr.reveal('.label-1', { duration: 1000 }, 50);

    
     var transitionDroite= {
        origin   : 'right',
        distance : '500px',
        easing   : 'ease-in-out',
        useDelay: 'always'
    };
    
    sr.reveal('.col-2-label', transitionDroite);
    
/* API FACEBOOK : pour fil d'actu */

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8&appId=1417053915025497";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    
/* SELECT et OPTION STYLED =============== */
    
    $('select').each(function(){
        var $this = $(this), numberOfOptions = $(this).children('option').length;

        $this.addClass('select-hidden'); 
        $this.wrap('<div class="select"></div>');
        $this.after('<div class="select-styled"></div>');

        var $styledSelect = $this.next('div.select-styled');
        $styledSelect.text($this.children('option').eq(0).text());

        var $list = $('<ul />', {
            'class': 'select-options'
        }).insertAfter($styledSelect);

        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }

        var $listItems = $list.children('li');

        $styledSelect.click(function(e) {
            e.stopPropagation();
            $('div.select-styled.active').not(this).each(function(){
                $(this).removeClass('active').next('ul.select-options').hide();
            });
            $(this).toggleClass('active').next('ul.select-options').toggle();
        });

        $listItems.click(function(e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
            //console.log($this.val());
        });

        $(document).click(function() {
            $styledSelect.removeClass('active');
            $list.hide();
        });

    });


    
/* BACK OFFICE : menu ==================== */
    
		$('.navbar-fostrap').click(function(){
			$('.nav-fostrap').toggleClass('visible');
			$('body').toggleClass('cover-bg');
		});
  
});
    

