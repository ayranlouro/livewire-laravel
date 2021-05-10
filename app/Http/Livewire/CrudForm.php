<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CrudForm extends Component
{   
    public $var;
    public function render()
    {
        return view('livewire.crud-form');
    }
}
