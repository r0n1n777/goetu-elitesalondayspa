<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Promotion;
use File;

class Promotions extends Component
{
    use WithFileUploads;

    public $promo_id;
    public $promos;

    public $title;
    public $description;
    public $photo;
    public $new_photo;
    public $new_photo_preview;
    public $active = true;

    public function rules()
    {
        return [ 
            'title' => 'required|unique:promotions,title,'.$this->promo_id.',id',
            'description' => 'required',
            'new_photo' => 'image|max:1024',
        ];
    }

    public function render()
    {        
        $this->promos = Promotion::orderBy('id', 'desc')->get();

        return view('admin/promotions')
            ->layout('admin/layout');
    }

    public function fresh()
    {
        $this->reset(['title', 'description', 'photo', 'new_photo', 'active']);
        $this->resetValidation();
        $this->setDescription();
    }

    public function save()
    {
        $this->resetValidation();

        // Skip validating the new photo if there's none selected and only if there is already existing
        if ($this->new_photo == null && $this->photo)
        {
            $new_rule = [
                'title' => 'required|unique:promotions,title,'.$this->promo_id.',id',
                'description' => 'required',
            ];

            $this->validate($new_rule); // Validate without the new_photo
            $photo_name = $this->photo; // Use the current photo to be inserted in the db
        }
        else
        {
            $this->validate(); // Validate using the default rule
            $photo_name = $this->title.'.'.$this->new_photo->getClientOriginalExtension(); // Use the new photo to be inserted in the db
        }
        
        // Create new record if non-existing, update if already recorded
        Promotion::updateOrCreate([
            'id' => $this->promo_id
        ],
        [
            'title' => ucwords(trim($this->title)),
            'photo' => $photo_name,
            'description' => $this->description,
            'active' => $this->active
        ]);

        // Upload only if their is a selected photo to be uploaded
        if ($this->new_photo)
        {
            $this->new_photo->storeAs('images/promotions', $this->title.'.'.$this->new_photo->getClientOriginalExtension());
        }

        session()->flash('success', 'Record saved.');
        $this->fresh();
    }

    public function set($id)
    {
        $this->fresh();

        $promo = Promotion::find($id);
        $this->promo_id = $promo->id;
        $this->title = $promo->title;
        $this->photo = $promo->photo;
        $this->description = $promo->description;
        $this->active = $promo->active;
    }

    public function delete()
    {
        Promotion::find($this->promo_id)->delete();

        session()->flash('success', 'Record deleted.');
        $this->fresh();
    }

    public function setDescription()
    {
        // Update the tinymce editor content
        $this->dispatchBrowserEvent('setDescription');
    }

    public function updatedNewphoto()
    {
        $this->new_photo_preview = $this->new_photo->temporaryUrl();
    }

    public function toggle($id)
    {
        $promo = Promotion::find($id);

        $status = $promo->active;

        if ($status)
        {
            $promo->active = false;
        }
        else
        {
            $promo->active = true;
        }

        $promo->save();
    }
}
