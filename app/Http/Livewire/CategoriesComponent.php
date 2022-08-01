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
    /* public $search; */
    protected $paginationTheme = 'bootstrap';
    

    /* protected $queryString = ['search']; */

   /*  protected $rules = [
        'name' => 'required|unique:categories|min:3',
    ];

    protected $messages = [
        'name.required' => 'Campo requerido.',
        
        'name.unique' => 'Categoria existente. Ingrese otra.',

        'name.min' => 'Minimo 3 caracteres'
    ];
 */
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
        ->section('contenido')
        /* ->section('header_izq')
        ->section('header_der') */;
    }

    /* public function guardar(){

        dd("aaaaaaaaaa");
        $this->validate();

        $category = Category::create([
            'name' => $this->name
        ]);

        $customFileName;
        if ($this->image) {
            $customFileName = uniqid() . '_.' . $this->image->extension();
            $this->image->storeAs('public/categorias', $customFileName);
            $category->image = $customFilename;
            $category->save();
            $this->resetUI();
            $this->emit('category-added', 'categoria registrada');
        }

    }

    public function edit($id){
        $record = Category::find($id, ['name', 'id', 'image']);

        
        $this->name = $record->name;
        $this->selected_id = $record->id;
        $this->image = null;

        $this->emit('show-modal', 'show modal!');
    }

    public function resesUI(){
        $this->name = '';
        $this->image = null;
        $this->search = '';
        $this->selected_id = 0;
    } */

    public function form(){
        return redirect('categories-form');
    }

    public function Update(){
      $rules =[
          'name' => "required|min:3|unique:categories,name,¨{$this->selected_id}"
    ];
    $messages=[

'name.required'=> 'nombre de categoria requerido',
'name.min' => 'El nombre de la categoria al meno debe de tener 3 caracteres',
'name.unifique'=> 'El nombre de la categoria y existe'
    ];
    $this->validate($rules,$messages);

    $category = Category::find($this->selected_id);
    $category->update([
    'name' => $this->name

    ]);
  
    if ($this->image) 
    {
        $customFileName = uniqid() . '_.' . $this->image->extension();
        $this->image->storeAs('public/categorias', $customFileName);
        $imageName = $category->image;
        $category->image = $customFileName;
        $category->save();

       if($imageName!=null)
       {
       if(file_exists('storage/categories' . imageName));
       {
        unlink('storage/categories' . imageName);
       }
       }

    }
    $this->resetUI();
  
    }

}
