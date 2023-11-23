codigo de empleado: {{$empleado}} <br>
codigo de afiliado: {{$afiliado}} <br>
nombre de afiliado: {{$nafiliado}}

<h1>LISTA DE RETIROS</h1>
<a href="/retiro/create/{{$empleado}}/{{$afiliado}}/{{$nafiliado}}">Crear Retiro</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Idempleado</th>
        <th>IdAfiliado</th>
        <th>NombreAfiliado</th>
        <th>Fecha</th>
        <th>Cantidad</th>

    </tr>
    </thead>

    <tbody>
        @foreach($datosRetiro as $retiro)
        <tr>
        <th>{{$retiro->id}}</th>
        <th>{{$retiro->codempleado}}</th>
        <th>{{$retiro->codafiliado}}</th>
        <th>{{$retiro->nombreafiliado}}</th>
        <th>{{$retiro->fecha}}</th>
        <th>{{$retiro->cantidad}}</th>
        </tr>

        @endforeach

    </tbody>

</table>