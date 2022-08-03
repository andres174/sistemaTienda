<div>
    <div class="card">    
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Código de barras</th>
                  <th>Stock</th>
                  <th>Stock Min.</th>
                  
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($p as $item)
                      <tr>
                      <td>{{$item->name}}</td>
                      <td>{{$item->barcode}}</td>
                      
                      <td>
                          <input type="number" wire:model="stock" class=" mx-3">
                          {{$item->stock}}
                      </td>
                      <td>{{$item->alerts}}</td>
                      
                      
                      <td class="d-flex justify-content-around">
                          <a href="javascript:void(0)" wire:click="edit({{$item->id}})" class="btn btn-outline-dark mtmobile" title="Editar">
                              <i class="fas fa-edit"></i>
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
    </div>
                  
</div>
