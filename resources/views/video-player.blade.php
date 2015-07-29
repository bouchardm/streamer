<!DOCTYPE html>
<html>
<head>
    <title>Streamer</title>
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="content">
        <h1>Streamer</h1>
        <video id="video" controls>
            <source src="/video/{{ $video }}" type="video/mp4">
            <track label="French" kind="subtitles" srclang="fr" src="/subtitle/{{ $subtitle }}" default>
        </video>
        <h2>Sous-titre disponible</h2>
        <ul>
            @foreach ($subtitles as $subtitle)
                <li><a href="{{ URL::route('videoPlayer', [$video, $subtitle]) }}">{{ $subtitle }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
</body>
</html>
