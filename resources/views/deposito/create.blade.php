<h1>CREAR NUEVO DEPOSITO</h1>
    <form action="" method="post">
        <div>
        <label for="" class="form-label">CODIGO EMPLEADO:</label>
        <input type="text" name="codempleado" value="{{$codempleado}}">
        </div>
            <br>
        <div>
        <label for="" class="form-label">CODIGO AFILIADO:</label>
        <input type="text" name="codafiliado" value="{{$codafiliado}}">
        </div>
            <br>
            <div>
        <label for="" class="form-label">NOMBRE AFILIADO:</label>
        <input type="text" name="nombreafiliado" value="{{$nomafiliado}}">
        </div>
            <br>
            <div>
        <label for="" class="form-label">FECHA DE REALIZACION:</label>
        <input type="date" name="fecha" value="">
        </div>
            <br> 
            <div>
        <label for="" class="form-label">MONTO A DEPOSITAR:</label>
        <input type="text" name="cantidad" value="">
        </div>
            <br>      
        <div>
            <button type="submit">Guardar</button>
            <a href="/empleado">Cancelar</a>
        </div>
    </form>
