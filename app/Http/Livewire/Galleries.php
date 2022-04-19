<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Gallery;
use File;

class Galleries extends Component
{
    use WithFileUploads;

    public $photos;
    public $new_photos = [];
    public $photo_name;

    public function getPhotos()
    {
        return collect(File::allFiles('images/gallery/store/'))
            ->sortByDesc(function ($file) {
                return $file->getCTime();
            })
            ->map(function ($file) {
                return $file->getFileName();
            })->toArray();
    }

    public function render()
    {
        $this->photos = json_encode($this->getPhotos());
        
        return view('admin/gallery')
            ->layout('admin/layout');
    }

    public function fresh()
    {
        $this->reset();
    }

    public function rules()
    {
        return [
            'new_photos.*' => 'image|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'new_photos.*.image' => 'All files should be an image. Please try again.',
            'new_photos.*.max' => 'Some photos have large file sizes, minimum file size is 2MB',
        ];
    }

    public function save()
    {
        $this->resetValidation();
        $this->validate();

        foreach ($this->new_photos as $photo)
        {
            $photo->storeAs('images/gallery/store/', $photo->getClientOriginalName().'.'.$photo->getClientOriginalExtension());
        }

        session()->flash('success', 'Photo(s) uploaded.');
    }

    public function set($photo_name)
    {
        $this->resetValidation();

        $this->photo_name = $photo_name;
    }

    public function delete()
    {
        File::delete('images/gallery/store/'.$this->photo_name);

        session()->flash('success', 'Photo deleted.');
        $this->fresh();
    }
}
