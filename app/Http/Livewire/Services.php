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
        $this->services = Service::all();

        return view('admin/services')
            ->extends('admin/layout')
            ->section('content')
            ->with('services', $this->services);
    }

    public function cancel()
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
            'name' => ucwords($this->name)
        ]);

        session()->flash('success', 'Record saved.');
        $this->reset();
        $this->resetValidation();
    }

    public function edit($id)
    {
        $service = Service::find($id);
        $this->service_id = $service->id;
        $this->name = $service->name;
    }

    public function delete()
    {
        Service::find($this->service_id)->delete();
        session()->flash('success', 'Record deleted.');
        $this->reset();
        $this->resetValidation();
    }
}
