{include file="header.tpl"}

<!-- formulario de alta de habitaciones -->
<form action="add" method="POST" class="my-4">
    <div class="row">
        
        <div class="col-3">
            <div class="form-group">
                <label>Habitacion Nro: </label>
                <input name="nro_habitacion" type="text" class="form-control">  
            </div>
        </div> 
                 
        <div class="col-3">
            <div class="form-group">
                <label>Cantidad de camas: </label>  
                <input name="cant_camas" type="number" class="form-control">
            </div>
        </div>

        <div class="col-3">
            <div class="form-group">
                <label>Descripcion: </label>  
                <textarea name="descripcion" rows="10" cols="50">escribe la descripcion aqui</textarea>
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label>Ocupada: </label>  
                <select name="ocupacion">
                <option value="si">SI</option>
                <option value="no">NO</option>
                </select>
            </div>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary mt-2">Agregar</button>
</form>

<!-- lista de habitaciones -->

<a href="show" type='button' class='btn btn-success'>mostrar hab disponibles</a>


        
<a href='show-capacity' type='button' class='btn btn-danger'>Mostrar capacidad Hotelera</a>


<p class="mt-3"><small>Mostrando habitaciones disponibles </small></p>


{include file="footer.tpl"}