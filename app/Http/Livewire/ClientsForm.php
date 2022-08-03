<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use Livewire\WithPagination;

class ClientsForm extends Component
{

    use WithPagination;

    public $name, $address, $phone, $DNI;
    public $selected_id, $pageTitle, $componentName;
    
    protected $paginationTheme = 'bootstrap';
    

    

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
        $this->componentName = 'Categorias';
    }

    public function render()
    {
        return view('livewire.clients-form')
        ->extends('layouts.plantilla.app')
        ->section('contenido');
    }

    public function guardar(){

        
        $this->validate();

        $category = Client::create([
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->phone,
            'DNI' => $this->DNI,
        ]);

        
        $this->resetUI();
        $this->regresar();

    }

    public function resetUI(){
        $this->name = '';
        $this->address = '';
        $this->phone = '';
        $this->DNI = '';
        $this->selected_id = 0;
    }

    public function regresar(){
        return redirect('clientes');
    }
}
