<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Prestamo</title>
    <link rel="stylesheet" href="styleFormulario.css">
    <link rel="stylesheet" href="{{ asset('css/styleFormulario.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">Prestar<br>Libro</div>
        <div class="form">
            <form action="/registrarPrestamo" method="POST">
            {{ csrf_field() }}
            <div class="titlebook">
                <div class="taginput">CLIENT</div>
                <select class="textinput" name="client_id"> 
                @foreach($Client as $Cli)
                @if($Cli->state == "Responsable")
                <option  class="textinput" value="{{$Cli->id}}">{{$Cli->peoples_id}}</option>
                @endif
                @endforeach
                </select>
            </div>
            <div class="copy">
                <div class="taginput">BOOK</div>
                <input name="copy_id" class="textinput" type="text">
            </div>
            <div class="datereturn">
                <div class="taginput">DATE OF RETURN</div>
                <input name="date_return" class="textinput" type="date">
            </div>
            <div class="buttons">
                <div class="button">
                    <input type="submit" value="PRESTAR">
                </div>
            </div>
            </form>
            <form action="{{ url('/home') }}" metod="GET">
            <div class="button">
                <input  type="submit" value="Volver">
            </div>
            </form>
        </div>
    </div>
</body>
</html>
