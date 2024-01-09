
<div>
    @foreach ($posts as $post)
    <div class="p-6">
        <h5
          class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
          {{$post->title}}
        </h5>
        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
            {{$post->description}}
        </p>
        <div class="flex ">
            <div>
                <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="button" x-on:click="$wire.delete('{{ $post->id }}')">
                    Delete
                 </button>
            </div>
            <button wire:click="likeStatus('{{ $post->id }}')" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
            </button>
            
        </div>
        
      </div>
    @endforeach
    
    
</div>


</div>

{{-- <button
type="button"

x-on:click="$wire.delete('{{ $post->id }}')"
>
          Delete
                </button> --}}