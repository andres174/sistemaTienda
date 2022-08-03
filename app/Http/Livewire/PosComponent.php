<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Denomination;
use Darryldecode\Cart\Facades\CartFacade as Cart;

use App\Models\Product;

class PosComponent extends Component
{
    public $total, /* $cart = [], */ $cantidadItems, $efectivo, $change, $title;

    public $noProducto = false;
    public $noStock = false;
    public $scanOk = false;

    public function mount(){
        $this->efectivo = 0;
        $this->change = 0;
        $this->total = Cart::getTotal();
        $this->cantidadItems = Cart::getTotalQuantity();
    }

    public function render()
    {   
        $denominations = Denomination::orderBy('value', 'desc')->get();
        $cart = Cart::getContent()->sortBy('name');

        return view('livewire.pos-component', compact('denominations', 'cart'))
        ->extends('layouts.plantilla.app')
        ->section('contenido');
    }

    public function aCash($value){
        $this->efectivo+=(
            $value==0 ? $this->total : $value
        );
        $this->change = ($this->efectivo - $this->total);
    }

    public function scanCode($barcode, $cant = 1){

        $product = Product::where('barcode', $barcode)->first();

        if ($product = null || empty($empty)) {
            $this->noProducto = true; //si no encuentra el producto
        } else {
            if($this->inCart($product->id)){
                $this->masCantidad($product->id);
                return;
            }
            if($product->stock < 1){
                $this->noStock = true; //si no hay stock
                return;
            }

            Cart::add($product->id, $product->name, $product->price, $cant, $product->image);
            $this->total = Cart::getTotal();
            $this->scanOk = true; //producto ingresado correctamente
            
        }
    }

    public function inCart($productId){
        $exist = Cart::get($productId);
        if($exist){
            return true;
        }else{
            return false;
        }
    }

    public function masCantidad($productId, $cant = 1){
        $this->title = '';
        $product = Product::find($productId);
        $exist = Cart::get($productId);
        if($exist){
            $title = 'Cantidad actializada';
        }else{
            $title = 'Producto agregado';
        }

        if($exist){
            if($product->stock < ($cant + $exist->quantity)){
                $this->noStock = true; //si no hay stock
                return;
            }
        }
        Cart::add($product->id, $product->name, $product->price, $cant, $product->image);
        $this->total = Cart::getTotal();
        $this->cantidadItems = Cart::getTotalQuantity();

        
    }
}
