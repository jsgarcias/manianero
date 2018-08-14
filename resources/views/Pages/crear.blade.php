@extends('layouts.app')

@section('css')
    <!-- include libraries(bootstrap) -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <!-- include summernote css -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
    <!-- include custom css -->
    <link href="{{ asset('css/crear_noticia.css') }}" rel="stylesheet">
@endsection

@section('content')
<div id="main_container">
    <span id="header">Publicar nueva noticia</span>
    
    <!-- Formulario para crear la nueva noticia -->
    <form name="public_new" id="public_new" method="post" action="{{ route('publish') }}" style="text-align: left;" enctype="multipart/form-data">
        
        {{ csrf_field() }}
        
        <!-- Entrada para el título -->
        <label for="titulo" class="tags">Título</label>
        <input id="titulo" name="titulo" type="text"><br>
        
        <!-- Entrada para la imágen -->
        <label for="file" class="tags">Imagen</label><br>
        <input id="file" name="file" type="file"><br>
        
        <!-- Entrada para el cuerpo de la noticia -->
        <label for="summernote" class="tags">Contenido:</label>
        <textarea id="summernote" name="summernote"></textarea>
        
        <!-- Sección de categorías y estado de la publicación -->
        <div class="container">
            <div class="inner">
                <div class="child">
                    <label for="category" class="tags">Categoría</label><br>
                    <select name="category" id="category">
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                        @endforeach
                    </select><br>
                </div>
                <div class="child">
                    <label for="state" class="tags">Estado</label><br>
                    <select name="state" id="state">
                        <option value="Publicado">Publicado</option>
                        <option value="Borrador">Borrador</option>
                    </select><br>
                </div>
            </div>
        </div>
        
        <!-- Botón para enviar el formulario -->
        <div class="container">
            <div class="inner">
                <input id="boton_enviar"type="submit" class="btn-primary">
            </div>
        </div>
    </form>
</div>
    
@endsection

@section('js')
    <!-- include libraries(jQuery) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <!-- include js -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['link', ['linkDialogShow', 'unlink']],
                    ['misc', ['fullscreen', 'codeview', 'undo', 'redo']],
                ],
                tabsize: 2,
                height: 250
            }); 
        });
    </script>
@endsection