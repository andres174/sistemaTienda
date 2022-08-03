<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    PRODUCTOS PROXIMOS EXPIRAR (En 5 DIAS)
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Código de barras</th>
                          <th>Fecha caducidad</th>
                          <th>Fecha de elaboración</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($p as $item)
                              <tr>
                              <td>{{$item->name}}</td>
                              <td>{{$item->barcode}}</td>
                              <td>{{$item->fecha_caducidad}}</td>
                              <td>{{$item->fecha_elaboracion}}</td>
                              
                              
                            </tr>
                          @endforeach
                          
                          
                        </tbody>
                        <tfoot>
                            
                        </tfoot>
                        
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
