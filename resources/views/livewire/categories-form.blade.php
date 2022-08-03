<div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">
                        <b>{{$componentName}}</b> | {{$selected_id > 0 ? 'EDITAR' : 'INGRESAR'}} 
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span class="fas fa-edit"></span>
                                </span>
                                <input type="text" wire:model="name" class="form-control" placeholder="Nombre de la categoria">
                                @error('name') <span class="text-danger er"> {{$message}} </span> @enderror
                            </div>
                          
                        <div class="form-group custom-file mt-4">
                            <input type="file" wire:model.defer="image" class="form-control custom-file-input" accept="image/x-png, image/gif, image/jpeg">
                            <label class="custom-file-label">
                                Imagen: {{$image}}
                            </label>
                            @error('image') <span class="text-danger er"> {{$message}} </span> @enderror
                        </div>
    
                      </div>
                      <!-- /.card-body -->
            
                      <div class="card-footer d-flex justify-content-around">
                        <button type="button" class="btn btn-outline-dark" wire:click="regresar">
                            REGRESAR
                        </button>  

                        <button type="button" class="btn btn-outline-danger" wire:click="resetUI">
                            LIMPIAR
                        </button>
                        
                        <button type="button" class="btn btn-outline-success" wire:click.prevent="guardar">
                            GUARDAR
                        </button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
</div>
