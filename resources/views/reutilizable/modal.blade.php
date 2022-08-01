


<div wire:ignore.self class="modal fade" id="modal-overlay">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="overlay">
            <i class="fas fa-2x fa-sync fa-spin"></i>
        </div>
        <div class="modal-header">
          <h4 class="modal-title">
            <b>{{$componentName}}</b> | {{$selected_id > 0 ? 'EDITAR' : 'INGRESAR'}} 
          </h4>
          <h6 class="text-center text-warning" wire:loading>
            ESPERE...
          </h6>
        </div>



        <div class="modal-body">
          <p>One fine body&hellip;</p>
        </div>
        
        
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-dark close-btn text-info" data-dismiss="modal" wire:click.prevent="resetUI()">
            CERRAR
          </button>
          

          @if ($selected_id < 1)
            <button type="button" class="btn btn-dark close-modal" wire:click.prevent="store()">
                GUARDAR
            </button>
          @else
            <button type="button" class="btn btn-dark close-modal" wire:click.prevent="update()">
                ACTUALIZAR
            </button>
          @endif
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>