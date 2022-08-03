<div class="card">
    <div class="card-header">
        <h5 class="text-center">
            RESUMEN DE VENTA
        </h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <div>
                    <h2>Total: ${{number_format($total, 2)}}</h2>
                    <input type="hidden" id="hiddenTotal" value="{{$total}}">
                </div>
                <div>
                    <h4 class="mt-3">
                        Articulos: {{$cantidadItems}}
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">

    </div>
</div>