<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class FechasComponent extends Component
{
    public function render()
    {
        $p = Product::all();
        return view('livewire.fechas-component', compact('p'))
        ->extends('layouts.plantilla.app')
        ->section('contenido');
    }
}
