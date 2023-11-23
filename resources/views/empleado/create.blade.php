<h1>CREAR NUEVO EMPLEADO</h1>

    <form action="/empleado" method="POST">
            @csrf
        <div>
        <label for="" class="form-label">NOMBRE:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Juan">
        </div>
            <br>
        <div>
        <label for="" class="form-label">APELLIDO:</label>
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Perez">
        </div>
            <br>     
        <div>
            <button type="submit">Guardar</button>
            <a href="/empleado">Cancelar</a>
        </div>
    </form>
