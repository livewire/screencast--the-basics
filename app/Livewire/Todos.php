<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;

class Todos extends Component
{
    public $todos = [
        'Take out trash',
        'Do dishes',
    ];

    public function render()
    {
        return view('livewire.todos');
    }
}
