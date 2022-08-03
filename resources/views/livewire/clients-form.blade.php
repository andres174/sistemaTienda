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
                                <input type="text" wire:model="name" class="form-control" placeholder="Nombre y apellido.">
                                @error('name') <span class="text-danger er"> {{$message}} </span> @enderror
                            </div>
                            <div class="input-group-prepend mt-3">
                                <span class="input-group-text">
                                    <span class="fas fa-edit"></span>
                                </span>
                                <input type="text" wire:model="address" class="form-control" placeholder="Dirección">
                                @error('address') <span class="text-danger er"> {{$message}} </span> @enderror
                            </div>

                            <div class="input-group-prepend mt-3">
                                <span class="input-group-text">
                                    <span class="fas fa-edit"></span>
                                </span>
                                <input type="text" wire:model="phone" class="form-control" placeholder="Teléfono">
                                @error('phone') <span class="text-danger er"> {{$message}} </span> @enderror
                            </div>

                            <div class="input-group-prepend mt-3">
                                <span class="input-group-text">
                                    <span class="fas fa-edit"></span>
                                </span>
                                <input type="text" wire:model="DNI" class="form-control" placeholder="Cedula">
                                @error('DNI') <span class="text-danger er"> {{$message}} </span> @enderror
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
</div>
