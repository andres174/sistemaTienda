<div class="row mt-3">
    <div class="col-sm-12">
        <div class="card-header">
            <h5 class="text-center mb-2">
                DENOMINACIONES
            </h5>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    @foreach ($denominations as $d)
                    <div class="col-sm mt-2">
                        <button class="btn btn-dark btn-block den" wire.click="aCash({{$d->value}})">
                            {{$d->value > 0 ? '$'.number_format($d->value, 2, '.', '') : 'EXACTO'}}
                        </button>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="mt-4">
                <div class="card">
                    <div class="card-body">
                        <div class="input-group input-group-md mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text input-gp hideonsm" style="background: #7180ee; color: white;">
                                    Efectivo
                                </span>
                            </div>
                            <input type="number" id="cash" wire:model="efectivo" wire:keydown.enter="guardarVenta" class="form-control text-center" value="{{$efectivo}}">
                            <div class="input-group-append">
                                <span class="input-group-text" wire:click="$set('efectivo', 0)" style="background: #7180ee;">
                                    <i class="fas fa-backspace"></i>
                                </span>
                            </div>
                        </div>
                        <h4 class="text-muted">
                            Cambio: ${{number_format($change, 2)}}
                        </h4>
                        <div class="row justify-content-between mt-5">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                @if ($total>0)
                                <button class="btn btn-dark mtmobile" wire:click="cancelarVenta"> {{-- o vaciar el carrito --}}
                                    CANCELAR
                                </button>
                                @endif
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                @if ($efectivo>=$total && $total>0)
                                <button class="btn btn-dark btn-md btn-block" wire:click="guardarVenta"> {{-- guardar la venta --}}
                                    GUARDAR
                                </button>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 