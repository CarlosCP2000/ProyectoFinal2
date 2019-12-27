<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Cliente</title>
    <link rel="stylesheet" href="styleFormulario.css">
    <link rel="stylesheet" href="{{ asset('css/styleFormulario.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">Eliminar<br>Cliente</div>
        <div class="form">
        <form action="/eliminarCliente" method="POST">
        {{ csrf_field() }}
            <div class="idofclient">
                <div class="taginput">ID OF CLIENT</div>
                <input name="client_id" class="textinput" type="text">
            </div>
            <div class="buttons">
                <div class="button">
                    <input type="submit" value="ELIMINAR">
                </div>
            </div>
            </form>
            <form action="/gestionarCliente" metod="GET">
            <div class="button">
                <input  type="submit" value="CANCELAR">
            </div>
            </form>
        </div>
    </div>
</body>
</html>