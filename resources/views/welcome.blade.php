<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <link href="https://vjs.zencdn.net/5.10.2/video-js.css" rel="stylesheet" /> --}}
    <link href="https://vjs.zencdn.net/8.16.1/video-js.css" rel="stylesheet" />

    <title>Laravel</title>
</head>

<body>
    <h1>Test</h1>
    <video id="my-video" class="video-js vjs-big-play-centered" controls poster="http://vjs.zencdn.net/v/oceans.png">
        <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4">

        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a
            web browser that
            <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
    </video>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    {{-- <script src="https://vjs.zencdn.net/5.10.2/video.min.js"></script> --}}
    <script src="https://vjs.zencdn.net/8.16.1/video.min.js"></script>
    <script src="//cdn.sc.gl/videojs-hotkeys/0.2/videojs.hotkeys.min.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>
