<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Category;

use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Illuminate\Support\Facades\Storage;

class CategoriesForm extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $name, $image;
    public $selected_id, $pageTitle, $componentName;
    
    protected $paginationTheme = 'bootstrap';
    

    

    protected $rules = [
        'name' => 'required|unique:categories|min:3',
    ];

    protected $messages = [
        'name.required' => 'Campo requerido.',
        
        'name.unique' => 'Categoria existente. Ingrese otra.',

        'name.min' => 'Minimo 3 caracteres'
    ];

    public function mount(){
        $this->pageTitle = 'Listado';
        $this->componentName = 'Categorias';
    }

    public function render()
    {
        return view('livewire.categories-form')
        ->extends('layouts.plantilla.app')
        ->section('contenido');
    }

    public function guardar(){

        
        $this->validate();

        $category = Category::create([
            'name' => $this->name
        ]);

        $customFileName;
        
        if ($this->image) {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/categorias', $customFileName);
            $category->image = $customFileName;
            $category->save();
            
            
        }
        $this->resetUI();

    }

    public function resetUI(){
        $this->name = '';
        $this->image = null;
        $this->search = '';
        $this->selected_id = 0;
    }

    public function regresar(){
        return redirect('categorias');
    }
}
