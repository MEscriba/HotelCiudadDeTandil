
{include file="homenuevo.tpl"}


{foreach from=$habdisponibles item=$habitacion}
    <ul class="list-group">
        
            <li class='list-group-item d-flex justify-content-between align-items-center'>
                <span> Nro habitacion: {$habitacion->nro_habitacion} - Cantidad de camas: {$habitacion->cant_camas} 
                - descripcion: {$habitacion->descripcion}- Hab Disponible: SI </span>
                                       
            </li>    
    </ul>  
{/foreach} 


{include file="footer.tpl"}