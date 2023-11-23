<h1>Editar Empleado</h1>

    <form action="/empleado/{{$datosEmpl->id}}" method="POST">
        @csrf
        @method('PUT')
    <div>
        <label for="" class="form-label">IDENTIFICADOR</label>
        <input type="text" class="form-control" id="id" value="{{$datosEmpl->id}}" name="id" readonly>
    </div>
    <div>
        <label for="" class="form-label">NOMBRE</label>
        <input type="text" class="form-control" id="nombre" value="{{$datosEmpl->nombre}}" name="nombre">
    </div>
    <div>
        <label for="" class="form-label">APELLIDO</label>
        <input type="text" class="form-control" id="apellido" value="{{$datosEmpl->apellido}}" name="apellido">
    </div>
    <div>
        <button type="submit">Guardar</button> <br>
        <a href="/empleado">Cancelar</a>
    </div>
</form>