<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;

use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Illuminate\Support\Facades\Storage;

class ProductsComponent extends Component
{

    
    use WithFileUploads;
    use WithPagination;

    public $name, $barcode, $price, $cost, $stock, $alerts, $categoryId, $image, $fecha_elab, $fecha_cad;
    public $selected_id, $pageTitle, $componentName;
    
    protected $paginationTheme = 'bootstrap';

    public $formEdit = false;

    public $search;
    protected $queryString = ['search'];

    protected $rules = [
        'name' => 'required|min:3',
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
        $p = Product::join('categories as c', 'c.id', 'products.category_id')
        ->select('products.*', 'c.name as category')
        ->where('products.name', 'like', '%'.$this->search.'%')
        ->orWhere('c.name', 'like', '%'.$this->search.'%')
        ->paginate(5);
        $c = Category::all();
        return view('livewire.products-component', compact('p', 'c'))
        ->extends('layouts.plantilla.app')
        ->section('contenido');
    }

    public function edit(Product $product){
        
        
        /* $record = Category::find($id); */

        $this->selected_id = $product->id;
        $this->name = $product->name;
        $this->barcode = $product->barcode;
        $this->cost = $product->cost;
        $this->price = $product->price;
        $this->stock = $product->stock;
        $this->alerts = $product->alerts;
        $this->categoryId = $product->category_id;
        $this->fecha_cad = $product->fecha_caducidad;
        $this->fecha_elab = $product->fecha_elaboracion;
        $this->image = null;

        $this->formEdit = true;

    }

    public function actualizar(){

        
        $this->validate();

        $product = Product::find($this->selected_id);
        $product->update([
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
            $imageTemp = $product->image; //imagen temporal
            $product->image = $customFileName;
            
            $product->save();

            if($imageTemp!=null)
            {    
                if(file_exists('storage/products' . $imageTemp));
                {
                    Storage::delete('storage/products' . $imageTemp);
                }
            }
            
            
        }

        $this->resetUI();
        $this->ocultar();

    }

    public function form(){
        return redirect('products-form');
    }

    public function fechasProductos(){
        return redirect('fechas-productos');
    }

    public function resetUI(){
        $this->name = '';
        $this->barcode ='';
        $this->cost ='';
        $this->price ='';
        $this->stock ='';
        $this->alerts ='';
        $this->image = null;
        $this->categoryId = 'Elegir';
        
        $this->search = '';
        $this->selected_id = 0;
    }

    public function ocultar(){
        $this->resetUI();
        $this->formEdit = false;
    }

    public function destroy($id)
    {
        $p = Product::find($id);
        $imageName = $p->image; //imagen temporal
        $p->delete();

        if($imageName !=null)
        {    
           Storage::delete('storage/productos' . $imageName);
        }
        $this->resetUI();
        
    }
}
