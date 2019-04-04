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
                <form action="{{ route('posts.store') }}" method="POST">
                    {{ @csrf_field() }}

                    <div class="input-field col s12">
                            <input placeholder="" name="title" type="text" class="validate">
                            <label for="first_name">Titulo</label>
                    </div>
                    <div class="input-field col s12">
                            <textarea name="body" class="materialize-textarea" data-length="120" rows="7"></textarea>

                            <label for="first_name">Conteúdo</label>
                    </div>
                    <div class="">
                        <label for=""></label>
                        <input type="text" name="tags" data-role="tagsinput">
                    </div>
                    <div>
                        <input value="Enviar" class="btn form-control " type="submit">
                    </div>

                </form>

                <hr>


                @foreach ($posts as $post)
                    <div class="">{{ $post->title }}</div>
                    <div class="">{{ $post->body }}</div>

                @endforeach
            </div>
        </div>


            <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var elems = document.querySelectorAll('.chips');
                    var instances = M.Chips.init(elems, options);
                  });

                  // Or with jQuery

                  $('.chips').chips();
                  $('.chips-initial').chips({
                    data: [{
                      tag: 'Apple',
                    }, {
                      tag: 'Microsoft',
                    }, {
                      tag: 'Google',
                    }],
                  });
                  $('.chips-placeholder').chips({
                    placeholder: 'Enter a tag',
                    secondaryPlaceholder: '+Tag',
                  });
                  $('.chips-autocomplete').chips({
                    autocompleteOptions: {
                      data: {
                        'php': null,
                        'Laravel': null,
                        'Vuejs': null,
                        'Html':null
                      },
                      limit: Infinity,
                      minLength: 1
                    }
                  });
        </script>
    </body>
</html>
