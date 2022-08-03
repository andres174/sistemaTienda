<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Stock extends Component
{
    public $stock;
    public function render()
    {
        $p = Product::all();
        return view('livewire.stock', compact('p'))
        ->extends('layouts.plantilla.app')
        ->section('contenido');
    }

    /* public function  */
}
