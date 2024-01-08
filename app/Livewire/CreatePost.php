<?php

namespace App\Livewire;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Livewire\Component;

class CreatePost extends Component
{
    public string $title;
    public string $description;
 
    public function store()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
  
        Post::create($validatedDate);
  
        session()->flash('message', 'Post Created Successfully.');
  
       
    }
 
    protected function rules(): array
    {
        return (new PostRequest())->rules();
    }

    public function render():View
    {
        return view('livewire.create-post');
    }
}
