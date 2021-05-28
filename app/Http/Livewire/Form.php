<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public string $name = '';
    public string $email = '';
    public string $message = '';
    public string $success_message = '';

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function handleSubmit()
    {
        sleep(2);
        $contact = $this->validate();

        $this->resetForm();
        $this->success_message = "it's work";
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }

    public function closeFlashMessage()
    {
        $this->success_message = "";
    }

    public function render()
    {
        return view('livewire.form');
    }
}
