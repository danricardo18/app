codigo de empleado {{$empleado}}
<h1>LISTA DE AFILIADOS</h1>
<form action="afiliado/create">
    <button type="submit">Nuevo Afiliado</button>
</form>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>
            Acciones
        </th>
    </tr>
    </thead>

    <tbody>
        @foreach($datosAfiliado as $afiliado)
        <tr>
            <th>{{$afiliado->id}}</th>
            <th>{{$afiliado->nombre}}</th>
            <th>{{$afiliado->apellido}}</th>
            <th><a href="/deposito/{{$empleado}}/{{$afiliado->id}}/{{$afiliado->nombre}}">Deposito</a></th>
            <th><a href="/retiro/{{$empleado}}/{{$afiliado->id}}/{{$afiliado->nombre}}">Retiro</a></th>
        </tr>
        @endforeach
    </tbody>
</table>