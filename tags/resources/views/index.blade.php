<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">

        <title>Tags</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div>
                    <h1 class="">Sistema de etiquetas</h1>
                </div>
                <br>

                <hr>
                @foreach ($posts as $post)
                    <div class="">{{ $post->title }}</div>
                    <div class="">{{ $post->body }}</div>
                    <div class="panel-footer">
                        @forelse ($post->tags as $tag)
                            <div class="chip">
                                    {{ $tag->name }}
                                    <i class="close material-icons">close</i>
                            </div>
                            @empty
                                <em>Sem etiquetas</em>
                            @endempty
                        @endforelse
                    </div>
                @endforeach
            </div>
        </div>


            <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
