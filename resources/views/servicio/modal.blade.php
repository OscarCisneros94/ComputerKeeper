<div class="modal fade" id="modal-delete-servicio{{$ser->Cod_Servicio}}" tabindex="-1" arialabelledby="ModalLabel" aria-hidden="true">
{{Form::Open(array('action'=>array('App\Http\Controllers\ServicioController@destroy',$ser->Cod_Servicio),'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar servicio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" arialabel="Close"></button>
            </div>
            <div class="modal-body">
                <p>Confirme si desea eliminar el Servicio #{{$ser->Cod_Servicio}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" arialabel="Close">Cerrar</button>
                <button type="submit" class="btn btn-primary">Confirmar</button>
            </div>
        </div>
    </div>
</div>
{{Form::Close()}}