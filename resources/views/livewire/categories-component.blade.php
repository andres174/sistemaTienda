<div>
    <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>{{$componentName}}</b> | {{$pageTitle}}</h3>
              </div>
                <button type="button" class="btn btn-success m-3" wire:click="form" >
                AGREGAR CATEGORIA
                </button>

                @include('reutilizable.buscador')
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($c as $item)
                        <tr>
                        <td>{{$item->name}}</td>
                        <td><img src="{{ asset('storage/categorias/'.$item->image)}}" alt="" height="50px"></td>
                        
                        <td>
                            <a href="javascript:void(0)" wire:click="edit({{$item->id}})" class="btn btn-outline-dark mtmobile" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="javascript:void(0)" {{-- esto esta en duda --}} onclick="confirm('{{$item->id}}')" {{-- wire:click="edit({{$item->id}})" --}} class="btn btn-outline-dark" title="Eliminar">
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
          <div class="col-lg-6">
        
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->

</div>


