<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionar Devolucion</title>
    <link rel="stylesheet" href="styleFormulario.css">
    <link rel="stylesheet" href="{{ asset('css/styleFormulario.css') }}" />
</head>
<body>
    <div class="container">
        <div class="title">Gestionar<br>Devolucion</div>
        
        <table>
            <tr>
                <th>TITLE</th>
                <th>ID COPY</th>
                <th>ID CLIENT</th>
                <th>NAME CLIENT</th>
                <th>DATE LOAN</th>
                <th>DATE RETURN</th>
                <th>STATE</th>
            </tr>
            @foreach($ReturnModel as $rm)
            <tr>
            @foreach($Loan as $Lo)
            @if($rm->loans_id == $Lo->id)
                @foreach($Copy as $Co)
                    @if($Lo->copys_id == $Co->id)
                    @foreach($Book as $Bo)
                        @if($Co->books_id == $Bo->id)
                        <td>{{$Bo->title}}</td>
                        @break
                        @endif
                    @endforeach
                    @endif
                @endforeach
                @foreach($Copy as $Co)
                    @if($Lo->copys_id == $Co->id)
                    <td>{{$Co->id}}</td>    
                    @break
                    @endif
                @endforeach
                @foreach($Client as $Cli)
                    @if($Lo->clients_id == $Cli->id)
                    <td>{{$Cli->id}}</td>    
                    @break
                    @endif
                @endforeach
                @foreach($Client as $Cli)
                    @if($Lo->clients_id == $Cli->id)
                    @foreach($People as $Peo)
                        @if($Cli->peoples_id == $Peo->id)
                        <td>{{$Peo->name}}</td>
                        @break
                        @endif
                    @endforeach
                    @endif
                @endforeach
                <td>{{$Lo->date_loan}}</td>
                <td>{{$Lo->date_return}}</td>
                <td>{{$Lo->state}}</td>
                @endif
                @endforeach
            </tr>
            @endforeach
            
        </table>
            <form action="{{ url('/gestionarDatos') }}" metod="GET">
            <div class="button">
                <input  type="submit" value="Volver">
        </div>
    </div>
</body>
</html>