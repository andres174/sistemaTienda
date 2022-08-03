<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Product;

class Expirado extends Component
{
    public function render()
    {
        $p = Product::where('fecha_caducidad', '<', Carbon::now()->add(6, 'day'))->get();

        return view('livewire.expirado', compact('p'))
        ->extends('layouts.plantilla.app')
        ->section('contenido');
    }
}
