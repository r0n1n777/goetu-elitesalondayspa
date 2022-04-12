<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;

class Services extends Component
{
    public $services;

    public $service_id;
    public $name;

    public function rules()
    {
        return [ 'name' => 'required|unique:services,name,'.$this->service_id.',id' ];
    }

    public function render()
    {
        $this->name = ucwords($this->name);

        $this->services = Service::all();

        return view('admin/services')
            ->extends('admin/layout')
            ->section('content')
            ->with('services', $this->services);
    }

    public function close()
    {
        $this->reset();
        $this->resetValidation();
    }

    public function save()
    {
        $this->validate();
        
        Service::updateOrCreate([
            'id' => $this->service_id
        ],
        [
            'name' => $this->name
        ]);

        session()->flash('success', 'Service has been saved.<br><h1>'.$this->name.'</h1>');
        $this->reset();
        $this->resetValidation();
    }

    public function edit($id)
    {
        $service = Service::find($id);
        $this->service_id = $service->id;
        $this->name = $service->name;
    }
}
