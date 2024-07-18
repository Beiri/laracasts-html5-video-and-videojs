var video = videojs("my-video", {
    playbackRates: [0.5, 1, 1.5, 2, 2.5],
    fluid: true,
    plugins: {
        hotkeys: {
            seekStep: 10,
            enableNumbers: false,
        },
    },
});

// video.on("pause", function () {
//     alert("You have " + this.remainingTime() + " seconds left to watch.");
// });

// video.ready(function () {
//     this.hotkeys({
//         seekStep: 10,
//         enableNumbers: false,
//     });
// });
