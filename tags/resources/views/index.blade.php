<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">

        <title>Tags</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <h1 class="page-header">Sistema de etiquetas</h1>
                </div>
                <br><br><br><br>
                <form action="{{ route('posts.store') }}" method="POST">
                    {{ @csrf_field() }}

                    <div class="form-group">
                          <label for="title">Titulo</label>
                            <input placeholder="" name="title" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="body">Conteúdo</label>
                            <textarea name="body" class="form-control"
                             rows="7"></textarea>


                    </div>
                    <div class="form-group well">
                        <label for="tags">Etiquetas</label>
                        <input type="text" name="tags" data-role="tagsinput" class="form-control">
                    </div>

                    <div class="form-group">
                        <input value="Enviar" class="btn btn-primary " type="submit">
                    </div>

                </form>


                <br><br><br>
                <hr>
                @foreach ($posts as $post)
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                            {{ $post->title }}
                          </div>
                          <div class="panel-body">
                              {{ $post->body }}
                          </div>
                          <div class="panel-footer">
                               @forelse ($tags as $tag)
                                   <span class="label label-info">{{ $tag->name }}</span>
                               @empty
                                  <em>Nenhuma etiqueta</em>
                               @endforelse
                          </div>
                        </div>




                @endforeach
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
