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
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="fas fa-edit"></span>
                                    </span>
                                    <input type="text" wire:model="name" class="form-control" placeholder="Nombre de la categoria">
                                    @error('name') <span class="text-danger er"> {{$message}} </span> @enderror
                                </div>

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
              <div class="col-lg-9">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"><b>{{$componentName}}</b> | {{$pageTitle}}</h3>
                  </div>
                    <button type="button" class="btn btn-success m-3" wire:click="form" >
                    AGREGAR CLIENTE
                    </button>
    
                    @include('reutilizable.buscador')
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach ($c as $item)
                            <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->DNI}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->phone}}</td>
                            
                            <td class="d-flex justify-content-around">
                                <a href="javascript:void(0)" wire:click="edit({{$item->id}})" class="btn btn-outline-dark mtmobile" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
    
                                {{-- <p class="badge text-bg-warning">{{$item->products->count()}}</p> --}}
    
                                
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
                    {{ $c->links() }}
                  </div>
                  <!-- /.card-body -->
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
