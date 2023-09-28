
<form action="agregar" method="POST" class="my-4">
    <div class="row">
        <div class="col-9">
            <div class="form-group">
                <input type="text" name="titulo" class="form-control">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <select name="prioridad" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <textarea name="descripcion" id="" cols="1" rows="3" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>