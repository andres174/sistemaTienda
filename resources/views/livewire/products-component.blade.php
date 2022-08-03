<div>
    
    <div>
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-9">
              @if ($formEdit == true)
                      <div class="card card-secondary">
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
                            <button type="button" class="btn btn-outline-dark" wire:click="ocultar">
                                OCULTAR
                            </button>  
    
                            <button type="button" class="btn btn-outline-danger" wire:click="resetUI">
                                LIMPIAR
                            </button>
                            
                            <button type="button" class="btn btn-outline-success" wire:click="actualizar">
                                ACTUALIZAR
                            </button>
                          </div>
                        </form>
                    </div>
                  @endif  
            </div>
          </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><b>{{$componentName}}</b> | {{$pageTitle}}</h3>
                  </div>
                    <button type="button" class="btn btn-success m-3" wire:click="form" >
                    AGREGAR PRODUCTO
                    </button>
    
                    @include('reutilizable.buscador')

                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Código de barras</th>
                        <th>Categoría</th>
                        <th>Costo</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Stock Min.</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($p as $item)
                            <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->barcode}}</td>
                            <td>{{$item->category}}</td>
                            <td>{{$item->cost}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->stock}}</td>
                            <td>{{$item->alerts}}</td>
                            <td><img src="{{ asset('storage/productos/'.$item->image)}}" alt="producto" height="50px"></td>
                            
                            <td class="d-flex justify-content-around">
                                <a href="javascript:void(0)" wire:click="edit({{$item->id}})" class="btn btn-outline-dark mtmobile" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
    
                                {{-- <p class="badge text-bg-warning">{{$item->products->count()}}</p> --}}
    
                                {{-- @if ($item->products->count() < 1)
                                  <a href="javascript:void(0)" wire:click="destroy({{$item->id}})" class="btn btn-outline-danger" title="Eliminar">
                                    <i class="fas fa-trash"></i>
                                  </a>
                                @endif --}}
                                <a href="javascript:void(0)" wire:click="destroy({{$item->id}})" class="btn btn-outline-danger" title="Eliminar">
                                  <i class="fas fa-trash"></i>
                                </a>
    
                            </td>
                            
                          </tr>
                        @endforeach
                        
                        
                      </tbody>
                      <tfoot>
                      <tr>
                        {{-- poner aqui lo de la paginacion --}}
                      </tr>
                      </tfoot>
                      
                    </table>
                  </div>
                  <div class="pagination m-2">
                    {{ $p->links() }}
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="button" class="btn btn-success m-3" wire:click="fechasProductos" >
                      FECHAS DE LOS PRODUCTOS
                    </button>
                  </div>
                </div>

                
    
    
                </div><!-- /.card -->
              </div>
              <!-- /.col-md-6 -->
              <div class="col-lg-9">
                  
              </div>
              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
    
      
    </div>
    
    
    
    
    

</div>
