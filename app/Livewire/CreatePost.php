<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{
    public function render()
    {
        return view('livewire.create-post');
    }
}
