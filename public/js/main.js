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

$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});

video.on("ended", function () {
    $.ajax({
        type: "POST",
        url: "completions",
        data: { videoId: 1 },
    });
});
