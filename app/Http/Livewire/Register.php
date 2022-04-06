<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Register extends Component
{
    public $name;
    public function submit()
    {
        dd($this->name);
    }
    public function render()
    {
        return view('livewire.register');
    }
}
