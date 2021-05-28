<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class DropdownSearch extends Component
{
    public string $search = '';
    public array $results = [];

    public function updatedSearch($newValue)
    {
        if($this->search>2){
            $response = Http::get('https://itunes.apple.com/search/?term=' . $this->search . "&limit=10")->json();
            $this->results = $response['results'];
        }
    }

    public function render()
    {
        return view('livewire.dropdown-search');
    }
}
