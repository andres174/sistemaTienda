<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Denomination;

class PosComponent extends Component
{
    public $total, $cart = [], $cantidadItems, $denominations = [], $efectivo, $change;
    public function render()
    {
        $this->denominations = Denomination::all();

        return view('livewire.pos-component')
        ->extends('layouts.plantilla.app')
        ->section('contenido');
    }
}
