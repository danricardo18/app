codigo de empleado: {{$empleado}} <br>
codigo de afiliado: {{$afiliado}} <br>
nombre de afiliado: {{$nafiliado}} <br>

<h1>LISTA DE DEPOSITOS</h1>
<a href="/deposito/create/{{$empleado}}/{{$afiliado}}/{{$nafiliado}}">Crear Deposito</a>
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
        @foreach($datosDeposito as $deposito)
        <tr>
        <th>{{$deposito->id}}</th>
        <th>{{$deposito->codempleado}}</th>
        <th>{{$deposito->codafiliado}}</th>
        <th>{{$deposito->nombreafiliado}}</th>
        <th>{{$deposito->fecha}}</th>
        <th>{{$deposito->cantidad}}</th>
        </tr>

        @endforeach

    </tbody>

</table>