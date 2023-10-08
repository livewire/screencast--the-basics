<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostRow extends Component
{
    public Post $post;

    public function archive()
    {
        $this->post->archive();
    }
}
