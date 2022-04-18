<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Service;
use App\Models\Category;
use File;

class Services extends Component
{
    use WithFileUploads;

    public $services;

    public $service_id;
    public $category_id;

    public $name;
    public $photo;
    public $note;
    public $new_photo;

    public $name_category;

    public function rules()
    {
        return [ 
            'name' => 'required|unique:services,name,'.$this->service_id.',id',
            'new_photo' => 'image|max:1024',
            'note' => 'nullable'
        ];
    }

    public function render()
    {        
        $this->services = Service::with('categories')->get();

        return view('admin/services')
            ->layout('admin/layout');
    }

    public function fresh()
    {
        $this->reset(['name', 'photo', 'note', 'new_photo', 'name_category']);
        $this->resetValidation();
        $this->setNote();
    }

    public function save()
    {
        $this->resetValidation();

        // Skip validating the new photo if there's none selected and only if there is already existing
        if ($this->new_photo == null && $this->photo)
        {
            $new_rule = [
                'name' => 'required|unique:services,name,'.$this->service_id.',id',
                'note' => 'nullable'
            ];

            $this->validate($new_rule); // Validate without the new_photo
            $photo_name = $this->photo; // Use the current photo to be inserted in the db
        }
        else
        {
            $this->validate(); // Validate using the default rule
            $photo_name = $this->name.'.'.$this->new_photo->getClientOriginalExtension(); // Use the new photo to be inserted in the db
        }
        
        // Create new record if non-existing, update if already recorded
        Service::updateOrCreate([
            'id' => $this->service_id
        ],
        [
            'name' => ucwords(trim($this->name)),
            'photo' => $photo_name,
            'note' => $this->note
        ]);

        // Upload only if their is a selected photo to be uploaded
        if ($this->new_photo)
        {
            $this->new_photo->storeAs('images/services', $this->name.'.'.$this->new_photo->getClientOriginalExtension());
        }

        session()->flash('success', 'Record saved.');
        $this->fresh();
    }

    public function set($id)
    {
        $this->fresh();

        $service = Service::find($id);
        $this->service_id = $service->id;
        $this->name = $service->name;
        $this->photo = $service->photo;
        $this->note = $service->note;
    }

    public function delete()
    {
        Service::find($this->service_id)->delete();

        session()->flash('success', 'Record deleted.');
        $this->fresh();
    }

    public function setNote()
    {
        // Update the tinymce editor content
        $this->dispatchBrowserEvent('setNote');
    }

    public function updatedNewphoto()
    {
        $this->photo = $this->new_photo->temporaryUrl();
    }

    // Categories
    public function saveCategory()
    {
        $this->resetValidation();

        $rules = [
            'name_category' => 'required|unique:categories,name,'.$this->category_id.',id',
        ];

        $this->validate($rules);

        Category::updateOrCreate([
            'id' => $this->category_id
        ],
        [
            'name' => ucfirst($this->name_category),
            'service_id' => $this->service_id
        ]);

        session()->flash('success', 'Record saved.');
        $this->reset();
    }

    public function setCategory($id, $service_id)
    {
        $this->fresh();

        $this->service_id = $service_id;

        if ($id)
        {
            $this->category_id = $id;
            $this->name_category = Category::find($id)->name;
        }
    }

    public function deleteCategory()
    {
        Category::find($this->category_id)->delete();

        session()->flash('success', 'Record deleted.');
        $this->reset();
    }
}
