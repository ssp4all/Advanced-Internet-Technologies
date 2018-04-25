let audio = document.getElementById("audioId");
let progressBar = document.getElementById("progress-bar");

audio.addEventListener('timeupdate', () => {
    let percentage = Math.floor((100 / audio.duration) * audio.currentTime);
    progressBar.value = percentage;
})

progressBar.addEventListener('click', (e) => {
    let percent = e.offsetX / progressBar.offsetWidth
    audio.currentTime = percent * audio.duration;
})

function pause(){
    audio.pause();
}

function play(){
    audio.play();
}

function restart(){
    audio.currentTime = 0;
    audio.play()
}
