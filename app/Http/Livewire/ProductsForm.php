<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

use Livewire\WithFileUploads;
use Livewire\WithPagination;



use Illuminate\Support\Facades\Storage;

class ProductsForm extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $name, $barcode, $price, $cost, $stock, $alerts, $categoryId, $image, $fecha_elab, $fecha_cad;
    public $selected_id, $pageTitle, $componentName;
    

    protected $rules = [
        'name' => 'required|unique:products|min:3',
        'cost' => 'required',
        'price' => 'required',
        'stock' => 'required',
        'alerts' => 'required',
        'categoryId' => 'required|not_in:Elegir',
        'fecha_elab' => 'required',
        'fecha_cad' => 'required',
        
    ];

    protected $messages = [
        'name.required' => 'Campo requerido.',
        
        'name.unique' => 'Categoria existente. Ingrese otra.',

        'name.min' => 'Minimo 3 caracteres',
        
        'cost.required' => 'Campo requerido.',
        'price.required' => 'Campo requerido.',
        'stock.required' => 'Campo requerido.',
        'alerts.required' => 'Campo requerido.',
        'categoryId.not_in' => 'Debes elegir una categoría',
        'fecha_elab.required' => 'Campo requerido.',
        'fecha_cad.required' => 'Campo requerido.',
    ];

    public function mount(){
        $this->pageTitle = 'Listado';
        $this->componentName = 'Productos';
        $this->categoryId = 'Elegir';
        
    }

    public function render()
    {
        $c = Category::all();
        

        /* dd($date); */
        return view('livewire.products-form', compact('c'))
        ->extends('layouts.plantilla.app')
        ->section('contenido');
    }

    public function guardar(){

        
        $this->validate();

        $product = Product::create([
            'name' => $this->name,
            'cost' => $this->cost,
            'price' => $this->price,
            'barcode' => $this->barcode,
            'stock' => $this->stock,
            'alerts' => $this->alerts,
            'category_id' => $this->categoryId,
            'fecha_elaboracion' => $this->fecha_elab,
            'fecha_caducidad' => $this->fecha_cad
            
        ]);

        $customFileName;
        
        if ($this->image) {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/productos', $customFileName);
            $product->image = $customFileName;
            $product->save();
            
            
        }

        $this->resetUI();

    }

    public function resetUI(){
        $this->name = '';
        $this->barcode ='';
        $this->cost ='';
        $this->price ='';
        $this->stock ='';
        $this->alerts ='';
        $this->image = null;
        
        $this->search = '';
        $this->selected_id = 0;
    }

    public function regresar(){
        return redirect('productos');
    }
}
