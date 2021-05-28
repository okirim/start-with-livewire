<?php

namespace Tests\Feature;

use App\Http\Livewire\DataTable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class TestDataTable extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->get('/')->assertSeeLivewire('data-table');

        Livewire::test(DataTable::class)->set('filter', 'ib')
            ->assertDontSee('Carley Purdy')->assertSee('Ibrahim Harvey');

        Livewire::test(DataTable::class)->set('filter', 'ib')
            ->set('status', true)->assertDontSee('Ibrahim Harvey');
    }
}
