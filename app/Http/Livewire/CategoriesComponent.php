<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Illuminate\Support\Facades\Storage;


class CategoriesComponent extends Component
{
    public $search;
    protected $queryString = ['search'];
    use WithFileUploads;
    use WithPagination;

    public $name, $image;
    public $selected_id, $pageTitle, $componentName;
    
    protected $paginationTheme = 'bootstrap';

    public $formEdit = false;
    

    

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

        $c = Category::where('name', 'like', '%'.$this->search.'%')
        /* ->where('id', 5) */
        ->paginate(5)/* ->get() */;
        return view('livewire.categories-component', compact('c'))
        ->extends('layouts.plantilla.app')
        ->section('contenido');
    }

    public function edit($id){
        
        
        $record = Category::find($id);

        $this->selected_id = $id;
        $this->name = $record->name;
        $this->image = null;

        $this->formEdit = true;

    }

    public function ocultar(){
        $this->formEdit = false;
    }

    public function actualizar(){
        $this->validate();
        $c = Category::find( $this->selected_id);
        $c->update([
            'name' => $this->name
        ]);


        /* $this->reset(); */
    }

    public function resetUI(){
        $this->name = '';
        $this->image = null;
        
    }

    public function form(){
        return redirect('categories-form');
    }
}
