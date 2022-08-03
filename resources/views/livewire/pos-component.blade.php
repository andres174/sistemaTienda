<div>
    {{-- Stop trying to control. --}}
    COMPONENTE DE VENTAS
    <div class="row">
        <div class="col-sm-12 col-md-8">
        {{-- DETALLES DE LA VENTA --}}
        @include('livewire.partials.detail')
        </div>
        <div class="col-sm-12 col-md-4">
            {{-- TOTAL --}}
            @include('livewire.partials.total')
            {{-- DENOMINATIONS --}}
            @include('livewire.partials.coins')
        </div>
    </div>

</div>
