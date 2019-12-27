<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Clientes</title>
    <link rel="stylesheet" href="styleFormulario.css">
    <link rel="stylesheet" href="{{ asset('css/styleFormulario.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">Gestionar<br>Clientes</div>
        
        <table>
            <tr>
                <th>DNI</th>
                <th>ID</th>
                <th>NAME</th>
                <th>LASTNAME</th>
                <th>STATE</th>
            </tr>
            @foreach($Client as $Cli)
            <tr> 
                @foreach($People as $Peo)
                    @if($Peo->id == $Cli->peoples_id)
                        <td>{{$Peo->id}}</td>
                        <td>{{$Cli->id}}</td>
                        <td>{{$Peo->name}}</td>
                        <td>{{$Peo->lastname}}</td>
                    @endif
                @endforeach
                <td>{{$Cli->state}}</td>
            </tr>
            @endforeach
            
        </table>
        <form action="{{ url('/modificarCliente') }}" metod="GET">
        <div class="button">
                <input  type="submit" value="Modificar">
            </div>
            </form>
            <form action="{{ url('/eliminarCliente') }}" metod="GET">
            <div class="button">
                <input  type="submit" value="Eliminar">
            </div>
            </form>
            <form action="{{ url('/gestionarDatos') }}" metod="GET">
            <div class="button">
                <input  type="submit" value="Volver">
        </div>
        </form>
    </div>
</body>
</html>