<?php

namespace App\Livewire;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;


class CreatePost extends Component
{
    use WithPagination;
    public $likeStats=false;
    public $title;
    public $description;
    
    public function likeStatus():void
    {
        $this->likeStats =! $this->likeStats;
        
        
        
    }
   
    
    public function store()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
  
        Post::create($validatedDate);
  
        session()->flash('message', 'Post Created Successfully.');
  
       
    }
 
  

    public function render():View
    {
        
        return view('livewire.create-post');
    }
}
