<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Devolucion</title>
    <link rel="stylesheet" href="styleFormulario.css">
    <link rel="stylesheet" href="{{ asset('css/styleFormulario.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">Devolver<br>Libro</div>
        <div class="form">
        <form action="/registrarDevolucion" method=POST>
        {{ csrf_field() }}
            <div class="copy">
                <div class="taginput">LIBRO</div>
                <input name="copy_id" class="textinput" type="text">
            </div>
            <div class="buttons">
                <div class="button">
                    <input type="submit" value="DEVOLVER">
                </div>
            </div>
        </div>
        </form>
            <form action="{{ url('/home') }}" metod="GET">
            <div class="button">
                <input  type="submit" value="Volver">
            </div>
            </form>
    </div>
</body>
</html>