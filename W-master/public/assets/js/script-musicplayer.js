
var audio = new Audio('http://www.tegos.ru/new/mp3_full/Adele_-_Rolling_In_The_Deep.mp3');
var audioTotalTime = 0;
$('body').on('click','.fa-play',function(e){
  audio.play();
  audioTotalTime = audio.duration / 60;
  $(this).addClass('fa-pause')
  $(this).removeClass('fa-play');
  $('.song_long').text(Math.round(audioTotalTime * 100) / 100);
  updateCurrentTime();
});

$('body').on('click','input[type=range]',function(){
  audio.pause();
  audio.currentTime = audioTotalTime * $(this).val();
   audio.play();
});

$('body').on('click','.fa-pause',function(){
  audio.pause();
  $(this).addClass('fa-play')
  $(this).removeClass('fa-pause');
});

$('body').on('click','.fa-music',function(){
  $('.song_list').slideToggle();
});

function updateCurrentTime(){
  setInterval(function(){
    var time = audio.currentTime;
    var minutes = Math.floor(time / 60);   
    var seconds = Math.floor(time);
    seconds = (seconds - (minutes * 60 )) < 10 ? ('0' + (seconds - (minutes * 60 ))) : (seconds - (minutes * 60 )); 
    var currentTime = minutes + ':' + seconds;
    $('.runing_time').text(currentTime);
    $("input[type=range]").val(time/audioTotalTime )
  },1000)
 
}