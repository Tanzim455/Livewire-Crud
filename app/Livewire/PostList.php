<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\UserPostLike;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
     public $isLiked;
     
    use WithPagination;
   
    public function likeStatus($id)
    { 
       
         $postId=Post::findOrFail($id)->id;
          
        // dd($postId);

         $postLikeId=UserPostLike::where('post_id',$postId)
         ->where('user_id',auth()?->user()->id)
         
         ->exists();
         
         $likedPost=UserPostLike::where('post_id',$postId)
         ->where('user_id',auth()?->user()->id)->first();
         
        
        
          
       
        if($postLikeId){
            
            $likedPost->delete();
        
        }
        if(!$postLikeId){
            
             UserPostLike::create([
                'user_id'=>auth()?->user()?->id,
                 'post_id'=>$postId,
                 
             ]);
        // dd("Post is not liked");
        
        }
        
        
        
    }
    public function render()
    {
        $posts=Post::withCount('likedPosts')->paginate(10);
        return view('livewire.post-list',compact('posts'));
    }
    public function delete(Post $post)
    {
        $post->delete();

        
    }
}
