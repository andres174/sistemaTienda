<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Código de barras</th>
                          <th>Fecha de elaboración</th>
                          <th>Fecha caducidad</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($p as $item)
                              <tr>
                              <td>{{$item->name}}</td>
                              <td>{{$item->barcode}}</td>
                              <td>{{$item->fecha_cad}}</td>
                              <td>{{$item->fecha_elab}}</td>
                              
                              
                            </tr>
                          @endforeach
                          
                          
                        </tbody>
                        
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
