<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;
    public function render()
    {
        $posts=Post::paginate(10);
        return view('livewire.post-list',compact('posts'));
    }
    public function delete(Post $post)
    {
        $post->delete();

        
    }
}
