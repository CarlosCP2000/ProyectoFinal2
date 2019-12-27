<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Libro</title>
    <link rel="stylesheet" href="styleFormulario.css">
    <link rel="stylesheet" href="{{ asset('css/styleFormulario.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">Registrar<br>Libro</div>
        <div class="form">
        <form action="/registrarLibro" method="POST">
        {{ csrf_field() }}
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
            <div class="numbercopies">
                <div class="taginput">N° OF COPIES</div>
                <input name="number_copies" class="textinput" type="text">
            </div>
            <div class="category">
                <div class="taginput">CATEGORY</div>
                <input name="category" class="textinput" type="text">
            </div>
            <div class="buttons">
                <div class="button">
                    <input type="submit" value="REGISTRAR">
                </div>
            </div>
            </form>
            <form action="/home" metod="GET">
            <div class="button">
                <input  type="submit" value="CANCELAR">
            </div>
            </form>
        </div>
    </div>
</body>
</html>