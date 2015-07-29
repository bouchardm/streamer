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

                <h2>Liste des videos</h2>
                <ul>
                    @foreach ($files as $file)
                        <li><a href="{{ URL::route('videoPlayer', $file) }}">{{ $file }}</a></li>
                    @endforeach
                </ul>

                <h2>Télécharger une nouvelle vidéo</h2>
                {!! Form::open(array('route' => 'addVideo', 'files' => true)) !!}
                    {!! Form::file('video') !!}
                    {!! Form::submit('Send') !!}
                {!! Form::close() !!}

                <h2>Ajouter des sous-titres</h2>
                {!! Form::open(array('route' => 'addSubtitle', 'files' => true)) !!}
                    {!! Form::file('subtitle') !!}
                    {!! Form::submit('Send') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </body>
</html>
