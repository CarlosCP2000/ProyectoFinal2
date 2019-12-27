<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Libro</title>
    <link rel="stylesheet" href="styleFormulario.css">
    <link rel="stylesheet" href="{{ asset('css/styleFormulario.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">Modificar<br>Libro</div>
        <div class="form">
        <form action="/modificarLibro" method="POST">
        {{ csrf_field() }}
            <div class="idofbook">
                <div class="taginput">ID OF BOOK</div>
                <input name="book_id" class="textinput" type="text">
            </div>
            <div class="titlebook">
                <div class="taginput">TITLE</div>
                <input name="title" class="textinput" type="text">
            </div>
            <div class="author">
                <div class="taginput">AUTHOR</div>
                <input name="author" class="textinput" type="text">
            </div>
            <div class="numberpages">
                <div class="taginput">N° OF PAGES</div>
                <input name="number_pages" class="textinput" type="text">
            </div>
            <div class="category">
                <div class="taginput">CATEGORY</div>
                <input name="category" class="textinput" type="text">
            </div>
            <div class="buttons">
                <div class="button">
                    <input type="submit" value="MODIFICAR">
                </div>
            </div>
            </form>
            <form action="/gestionarLibro" metod="GET">
            <div class="button">
                <input  type="submit" value="CANCELAR">
            </div>
            </form>
        </div>
    </div>
</body>
</html>