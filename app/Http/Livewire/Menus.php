<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\Menu;
use App\Models\Price;

class Menus extends Component
{
    public $services;
    public $service;
    public $categories;
    public $menus;
    
    public $service_id;
    public $category_id;
    public $menu_id;
    public $price_id;

    public $name;
    public $description;

    public $amount = '0.00';
    public $amount_plus = false;

    public function mount($id)
    {
        $this->service_id = $id;
    }

    public function rules()
    {
        return [ 
            // Unique name in table:menus with current menu_id & service_id
            'name' => 'required|unique:menus,name,'.$this->menu_id.',id,service_id,'.$this->service_id,
            'description' => 'nullable',
            'amount' => 'required|numeric'
        ];
    }

    public function render()
    {
        $this->services = Service::all();
        $this->service = Service::with('categories.menus.prices')->find($this->service_id);
        $this->categories = $this->service->categories; // With all corresponding categories
        $this->menus = $this->service->menus->where('category_id', 0); // Without category only

        return view('admin/menus')
            ->layout('admin/layout');
    }

    public function fresh($category_id)
    {
        $this->category_id = $category_id;

        // Reset only input fields, to avoid resetting ids
        $this->reset(['menu_id', 'name', 'description', 'amount']);
        $this->resetValidation();
        $this->amount_plus = false;
        $this->setDescription();
    }

    public function save()
    {
        $this->resetValidation();
        $this->validate();

        // Create new record if non-existing, update if already existing
        $menu = Menu::updateOrCreate([
            'id' => $this->menu_id
        ],
        [
            'name' => ucwords(trim($this->name)),
            'description' => $this->description,
            'service_id' => $this->service_id,
            'category_id' => $this->category_id
        ]);

        $menu->prices()->updateOrCreate([
            'menu_id' => $this->menu_id,
        ],
        [
            'amount' => $this->amount,
            'amount_plus' => $this->amount_plus
        ]);

        session()->flash('success', 'Record saved.');
        $this->fresh($this->category_id);
    }

    public function set($id)
    {
        $this->resetValidation();

        $menu = Menu::with('prices')->find($id);
        
        $this->category_id = $menu->category_id;

        $this->menu_id = $menu->id;
        $this->name = $menu->name;
        $this->description = $menu->description;
        $this->setDescription();

        $this->amount = number_format($menu->prices()->first()->amount, 2);
        $this->amount_plus = $menu->prices()->first()->amount_plus;
    }

    public function delete()
    {
        Menu::find($this->menu_id)->delete();

        session()->flash('success', 'Record deleted.');
        $this->fresh($this->category_id);
    }

    public function setDescription()
    {
        // Update the tinymce editor content
        $this->dispatchBrowserEvent('setDescription');
    }
}
