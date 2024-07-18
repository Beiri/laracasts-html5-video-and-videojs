var video = videojs("my-video");

video.on("pause", function () {
    alert("You have " + this.remainingTime() + " seconds left to watch.");
});

// video.ready(function () {
//     var speed = prompt("How fast should we go?");

//     this.playbackRate(speed);

//     this.play();
// });
