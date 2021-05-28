<?php

namespace Tests\Feature;

use App\Http\Livewire\Form;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FormTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->get('/')->assertSeeLivewire('form');
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_livewire_form()
    {
        Livewire::test(Form::class)
            ->set('name', 'kadiro')
            ->set('email', 'kadiro@gmail.com')
            ->set('message', '12345')->call('handleSubmit')
            ->assertSee("it's work");

    }
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_livewire_form_name_filed()
    {
        Livewire::test(Form::class)
            ->set('email', 'kadiro@gmail.com')
            ->set('message', '12345')
            ->call('handleSubmit')
            ->assertHasErrors(['name'=>'required']);

    }
}
