<?php

namespace App\Livewire\Posts;

use App\Models\Posts as ModelsPosts;
use Livewire\Component;

class Posts extends Component
{

    public function placeholder()
    {
        return view('components.placeholder');
    }

    public function render()
    {
        $posts = Posts::all();
        return view('livewire.posts.posts', [
            'posts' =>  $posts,
        ]);
    }
}
