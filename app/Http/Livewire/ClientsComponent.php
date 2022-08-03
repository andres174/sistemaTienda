<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use Livewire\WithPagination;

class ClientsComponent extends Component
{

    public $search;
    protected $queryString = ['search'];
    
    use WithPagination;

    public $name, $address, $phone, $DNI;
    public $selected_id, $pageTitle, $componentName;
    
    protected $paginationTheme = 'bootstrap';

    public $formEdit = false;
    

    

    protected $rules = [
        'name' => 'required|min:3',
        'address' => 'required|min:3',
        'phone' => 'required|min:10',
        'DNI' => 'required|min:10',
    ];

    protected $messages = [
        'name.required' => 'Campo requerido.',

        'name.min' => 'Minimo 3 caracteres',

        'address.required' => 'Campo requerido.',

        'address.min' => 'Minimo 3 caracteres',

        'phone.required' => 'Campo requerido.',

        'phone.min' => 'Minimo 10 caracteres',

        'DNI.required' => 'Campo requerido.',

        'DNI.min' => 'Minimo 10 caracteres',
    ];

    public function mount(){
        $this->pageTitle = 'Listado';
        $this->componentName = 'Clientes';
    }

    public function render()
    {

        $c = Client::where('DNI', 'like', '%'.$this->search.'%')
        ->where('estado', 1)
        ->paginate(5)/* ->get() */;
        return view('livewire.clients-component', compact('c'))
        ->extends('layouts.plantilla.app')
        ->section('contenido');
    }

    public function edit($id){
        
        
        $record = Client::find($id);

        $this->selected_id = $id;
        $this->name = $record->name;
        $this->address = $record->address;
        $this->phone = $record->phone;
        $this->DNI = $record->DNI;
        

        $this->formEdit = true;

    }

    public function ocultar(){
        $this->formEdit = false;
    }

    public function actualizar(){
        $this->validate();
        $category = Client::find( $this->selected_id);
        $category->update([
            'name' => $this->name,
            'address' => $this->addres,
            'phone' => $this->phone,
            'DNI' => $this->DNI,
        ]);

        $this->resetUI();


        /* $this->reset(); */
    }

    public function resetUI(){
        $this->name = '';
        $this->address = '';
        $this->phone = '';
        $this->DNI = '';
        $this->selected_id = 0;
        
        
    }

    public function form(){
        return redirect('clients-form');
    }

    
    public function destroy($id)
    {
        $category = Client::find($id);
        $category->update([
            'estado' => 0,
            
        ]);
        $this->resetUI();
        
    }

}
