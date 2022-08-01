{{-- @include('reutilizable.modal-header') --}}

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
<div class="modal-body">
    <div class="row">
        <div class="col-sm-12">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fas fa-edit"></span>
                    </span>
                </div>
                <input type="text" wire:model.lazy="name" class="form-control" placeholder="Nombre de la categoria">
                @error('name') <span class="text-danger er"> {{$message}} </span> @enderror
            </div>
        </div>
        <div class="col-sm-12 mt-3">
            <div class="form-group custom-file">
                <input type="file" wire:model="image" class="form-control custom-file-input" accept="image/x-png, image/gif, image/jpeg">
                <label class="custom-file-label">
                    Imagen: {{$image}}
                </label>
                @error('image') <span class="text-danger er"> {{$message}} </span> @enderror
            </div>
        </div>
    </div>
</div>
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-dark close-btn text-info" data-dismiss="modal" wire:click.prevent="resetUI()">
      CERRAR
    </button>
    

    @if ($selected_id < 1)
      <button type="button" class="btn btn-dark" wire:click.prevent="guardar()">
          GUARDAR
      </button>
    @else
      <button type="button" class="btn btn-dark" wire:click.prevent="update()">
          ACTUALIZAR
      </button>
    @endif
  </div>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
{{-- @include('reutilizable.modal-footer') --}}