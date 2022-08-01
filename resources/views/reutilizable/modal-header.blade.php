<div wire:ignore.self class="modal fade" id="modal-default" {{-- tabindex="-1" role="dialog" --}}>
    <div class="modal-dialog modal-lg" {{-- role="document" --}}>
      <div class="modal-content">
        {{-- <div class="overlay">
            <i class="fas fa-2x fa-sync fa-spin"></i>
        </div> --}}
        <div class="modal-header">
          <h4 class="modal-title">
            <b>{{$componentName}}</b> | {{$selected_id > 0 ? 'EDITAR' : 'INGRESAR'}} 
          </h4>
          <h6 class="text-center text-warning" wire:loading>
            ESPERE...
          </h6>
        </div>