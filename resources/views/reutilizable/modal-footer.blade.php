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