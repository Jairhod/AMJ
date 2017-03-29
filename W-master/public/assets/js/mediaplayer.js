$(document).ready(function(){

   	//Burger menu animation with greensock / gsap
var form = $("#form"),
    circ = $("#circ"),
    play = $(".playButton"),
    fast = $("#fastForward"),
    rewind = $("#rewind"),
    timebar = $("#timeBar"),
    neckBolt = $(".neckBolt"),
    Xit = $("#Xit"),
    BG = $("#Bg-panel"),
    playCont = $("#player-container"),
    speed = .4;

//instantiate  timeline
var tl = new TimelineLite({paused:true}); //pause default

//collapse menu
tl
.set(play,  {top: "35%", left: '57%', ease:Quart.easeIn})
.set(fast,  {opacity: 0, ease:Power4.easeIn}, "label--0")
.set(rewind,  {opacity: 0, ease:Power4.easeIn}, "label--0")


.to(circ, .33, { height: 435, width: 435, ease:Quint.easeInOut, force3D:true}, "label--2") 

.to(form, .2, { transformOrigin: '0% 100%', top: 228, height: 172,   ease:Quint.easeInOut, force3D:true}, "label--2") 



.to(circ, .36, {top: -132, right: -18, ease:Power4.easeInOut, force3D:true}, "label--2") 

.to(play, .4, {top: '40%', left: '48.125%', height:15,width:15, borderWidth:0, scaleX:1, boxShadow: "inset -5px 0px 0px black, inset 5px 0px 0px black", ease:Power4.easeInOut, force3D:true}, "label--2") 

.to(timebar, 0.3, { top: 208, height: 20,  ease:Quint.easInOut, force3D:true}, "label--3-=0.3") 
.to(Xit, 0.4, { rotation: 225, opacity: 0.54, transformOrigin: "50%, 50%",  ease:Quint.easOut, force3D:true}, "label--3-=0.4")



.to(fast, .4, {opacity: 0.75, ease:Power4.easeInOut, force3D:true}, "label--3-=0.4") 
.to(rewind, .4, {opacity: 0.75, ease:Power4.easeInOut, force3D:true}, "label--3-=0.4") 



;


// play timeline on click, reverse animation if active
 
  Xit.on('mousedown', function() {
    playCont.toggleClass('active');
    circ.toggleClass('active');
    $(this).toggleClass('active');

    if ( $(this).hasClass('active') ) {
        tl.play().timeScale(0.67); 
      // timeScale adjusts playback speed (2.0 = 2x double-time, 0.5 = 1/2 half-timed)
    }  
    else {
        tl.reverse().timeScale(0.67); 
    }
});

});