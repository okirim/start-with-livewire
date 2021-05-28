<?php

namespace Tests\Feature;

use App\Http\Livewire\DropdownSearch;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TestDropdownSearch extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->get('/')->assertSeeLivewire('dropdown-search');
        Livewire::test(DropdownSearch::class)->set('search','laravel')->assertSee('Taylor Otwell');
    }
}
