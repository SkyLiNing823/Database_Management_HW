const btn = document.getElementById('profile_img')
const bat = document.getElementById('bat')
const audio = document.createElement("audio");
audio.src = "resources/sound.mp3";


btn.addEventListener('click', function() {
    audio.currentTime = 0;
    audio.play();
    bat_container.innerHTML = '<img id="bat" src="resources/bonk.png" height="50%" width="50%">';
    setTimeout(function() {
        bat_container.innerHTML = '<img id="bat" src="resources/bonk.png" height="50%" width="50%" style="display:none">';
    }, 500);
})