<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CrudForm extends Component
{
    public $email;
    public $text;

    public function create()
    {
        dd($this->email, $this->text);
    }

    public function render()
    {
        return view('livewire.crud-form');
    }
}
