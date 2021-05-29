<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FilesUpload extends Component
{
    use WithFileUploads;

    public  $photo;

    protected $rules = [
        'photo' => 'nullable|sometimes|image|max:1024', // 1MB Max
    ];

    public function updatedPhoto()
    {
        $this->validate();
    }

    public function save()
    {
        $this->validate();

        $this->photo->store('photos','public');
        $this->photo = null;
    }

    public function cancel()
    {
        $this->initializeTraits();
    }

    public function render()
    {
        return view('livewire.files-upload');
    }
}
