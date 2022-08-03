<div class="card">
    <div class="card-header">

    </div>
    <div class="card-body">
        @if ($total > 0)
        <table id="example1" class="table table-bordered table-striped mt-1">
            <thead class="text-white bg-dark">
            <tr>
              <th style="width: 10%">Nombre</th>
              <th class="table-th text-left">Nombre</th>
              <th class="table-th text-left">Precio U.</th>
              <th class="table-th text-left" style="width: 13%">Cantidad</th>
              <th class="table-th text-left">Precio F.</th>
              <th class="table-th text-left">Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($cart as $item)
                <tr>
                    <td class="text-center">
                        @if (count($item->attributes) > 0)
                            <span> 
                                <img src="{{ asset('storage/productos/'.$item->attributes[0]/* $item->image */)}}" alt="Imagen" height="50px" class="rounded"> 
                            </span>
                        @endif
                    </td>
                    <td class="text-center">{{$item->name}}</td>
                    <td class="text-center">${{number_format($item->price, 2)}}</td>
                    <td class="text-center">
                        <input type="number" id="r{{$item->id}}" wire:change="updateCantidad({{$item->id}}, $('#r' + {{$item->id}}).val())" style="font-size: 1rem!important" class="form-control text-center" value="{{$item->id}}">
                    </td>
                    <td class="text-center">
                        ${{number_format($item->price * $item->quantity, 2)}}
                    </td>
                    <td class="text-center">
                        <a href="javascript:void(0)" wire:click="destroyP({{$item->id}})" class="btn btn-outline-dark mbmobile" title="Editar">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                        <a href="javascript:void(0)" wire:click="menosCantidad({{$item->id}})" class="btn btn-outline-dark mbmobile" title="Editar">
                            <i class="fas fa-minus"></i>
                        </a>
                        <a href="javascript:void(0)" wire:click="masCantidad({{$item->id}})" class="btn btn-outline-dark mbmobile" title="Editar">
                            <i class="fas fa-plus"></i>
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
        @else
        <h5 class="text-center text-muted">
            Agrega productos a la venta
          </h5>
        @endif

        <div>
            <h4 class="text-danger text-center" wire:loading.inline wire:target="guardarVenta">
                Guardando la venta
            </h4>
        </div>
    </div>
    <div class="card-footer">
          
    </div>
</div>