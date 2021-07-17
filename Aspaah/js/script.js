document.getElementById("button-up").addEventListener("click", scrollUp);

function scrollUp(){

    var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;

    if (currentScroll > 0){
		window.requestAnimationFrame(scrollUp);
        window.scrollTo (0, currentScroll - (currentScroll/15));
    }
}
buttonUp = document.getElementById("button-up");

window.onscroll = function(){

	var scroll = document.documentElement.scrollTop || document.body.scrollTop;
	if (scroll > 400){
		buttonUp.style.transform = "scale(1)";
	} else if(scroll < 400){
		buttonUp.style.transform = "scale(0)";
	}
}


var audio = document.getElementById('audio');
var playPauseBTN = document.getElementById('playPauseBTN');
var count = 0;

function playPause(){
	if(count == 0){
		count = 1;
		audio.play();
		playPauseBTN.innerHTML = "🔊";
	}else{
		count = 0;
		audio.pause();
		playPauseBTN.innerHTML = "🔈";
	}

}