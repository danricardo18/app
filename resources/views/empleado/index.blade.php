<h1>LISTA DE EMPLEADOS</h1>
<form action="empleado/create">
    <button type="submit">Nuevo Empleado</button>
</form>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Accion</th>
    </tr>
    </thead>

    <tbody>
        @foreach($datosEmpleado as $empleado)
        <tr>
            <th>{{$empleado->id}}</th>
            <th>{{$empleado->nombre}}</th>
            <th>{{$empleado->apellido}}</th>
            <th><a href="\afiliado\{{$empleado->id}}">Afiliados</a></th>
            <th><a href="\empleado\{{$empleado->id}}\editar">Editar</a></th>
        </tr>
        @endforeach

    </tbody>

</table>