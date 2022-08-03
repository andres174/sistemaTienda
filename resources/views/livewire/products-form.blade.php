<div>
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
                                    <div class="input-group-prepend m-4">
                                        <span class="input-group-text">
                                            <label>Nombre:</label>
                                        </span>
                                        <input type="text" wire:model="name" class="form-control" placeholder="Nombre del producto">
                                        @error('name') <span class="text-danger er"> {{$message}} </span> @enderror
                                    </div>
                                    <div class="input-group-prepend m-4">
                                        <span class="input-group-text">
                                            <label>Código:</label>
                                        </span>
                                        <input type="text" wire:model="barcode" class="form-control" placeholder="Código de barras">
                                        @error('barcode') <span class="text-danger er"> {{$message}} </span> @enderror
                                    </div>

                                    <div class="input-group-prepend m-4">
                                        <span class="input-group-text">
                                            <label>Costo:</label>
                                        </span>
                                        <input type="text" data-type="currency" wire:model="cost" class="form-control" placeholder="0.00">
                                        @error('cost') <span class="text-danger er"> {{$message}} </span> @enderror
                                    </div>

                                    <div class="input-group-prepend m-4">
                                        <span class="input-group-text">
                                            <label>Precio:</label>
                                        </span>
                                        <input type="text" data-type="currency" wire:model="price" class="form-control" placeholder="0.00">
                                        @error('price') <span class="text-danger er"> {{$message}} </span> @enderror
                                    </div>

                                    <div class="input-group-prepend m-4">
                                        <span class="input-group-text">
                                            <label>Stock:</label>
                                        </span>
                                        <input type="number" wire:model="stock" class="form-control" placeholder="0">
                                        @error('stock') <span class="text-danger er"> {{$message}} </span> @enderror
                                    </div>

                                    <div class="input-group-prepend m-4">
                                        <span class="input-group-text">
                                            <label>Stock Min:</label>
                                        </span>
                                        <input type="number" wire:model="alerts" class="form-control" placeholder="5">
                                        @error('alerts') <span class="text-danger er"> {{$message}} </span> @enderror
                                    </div>

                                    <div class="input-group-prepend m-4">
                                        <span class="input-group-text">
                                            <label>Fecha de elaboración</label>
                                        </span>
                                        <input type="date" wire:model="fecha_elab" class="form-control" {{-- min="1999-01-01" --}} {{-- max="{{$date}}" --}}>
                                        @error('fecha_elab') <span class="text-danger er"> {{$message}} </span> @enderror
                                    </div>
                                    <div class="input-group-prepend m-4">
                                        <span class="input-group-text">
                                            <label>Fecha de elaboración</label>
                                        </span>
                                        <input type="date" wire:model="fecha_cad" class="form-control" {{-- min="1999-01-01" --}} {{-- max="{{$date}}" --}}>
                                        @error('fecha_cad') <span class="text-danger er"> {{$message}} </span> @enderror
                                    </div>

                                    <div class="form group">
                                        <label>Categorias</label>
                                        <select wire:model="categoryId" class="form-control">
                                            <option value="Elegir" disabled>
                                                Elegir
                                            </option>
                                            @foreach ($c as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('categoryId') <span class="text-danger er"> {{$message}} </span> @enderror
                                    </div>
                                    <div class="form-group custom-file mt-4">
                                        <input type="file" wire:model.defer="image" class="form-control custom-file-input" accept="image/x-png, image/gif, image/jpeg">
                                        <label class="custom-file-label">
                                            Imagen: {{$image}}
                                        </label>
                                        @error('image') <span class="text-danger er"> {{$message}} </span> @enderror
                                    </div>
            
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
                                
                                <button type="button" class="btn btn-outline-success" wire:click="guardar">
                                    GUARDAR
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    
</div>
