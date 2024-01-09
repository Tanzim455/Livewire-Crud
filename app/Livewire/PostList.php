<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\UserPostLike;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    public $postId;
    use WithPagination;
    #[Computed]
    public function isLiked(){
        
    }
    public function likeStatus($id)
    { 
       
         $postId=Post::findOrFail($id)->id;
        //  dd($postId);
         $postLikeId=UserPostLike::where('post_id',$postId)
         ->where('user_id',auth()?->user()->id)
         
         ->exists();
         $likedPost=UserPostLike::where('post_id',$postId)
         ->where('user_id',auth()?->user()->id)->first();
         $isLiked=$likedPost->is_liked;
        
          
        if($postLikeId && $isLiked){
            
            $likedPost->update([
               'is_liked'=>false
            ]);
        
        }
        if($postLikeId && !$isLiked){
            
            $likedPost->update([
               'is_liked'=>true
            ]);
        
        }
        if(!$postLikeId){
            
             UserPostLike::create([
                'user_id'=>auth()?->user()?->id,
                 'post_id'=>$postId,
                 'is_liked'=>true
             ]);
        // dd("Post is not liked");
        
        }
        
        
        
    }
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
