<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class CrudForm extends Component
{
    public $email;
    public $text;

    public function create()
    {   
        // $messages = Message::orderBy('id', 'DESC')->get();

        // return view('')
        // dd($this->email, $this->text);
    }

    public function render()
    {   
        $messages = Message::orderBy('id', 'DESC')->get();

        return view('livewire.crud-form', ['messages' => $messages]);
    }
}
