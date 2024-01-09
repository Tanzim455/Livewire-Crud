<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        @if (session()->has('message'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            {{ session('message') }}
          </div
        @endif
       
        {{-- <form wire:submit.prevent="store" class="flex items-start space-x-3">
            @csrf
            <div class="grow">
                <label for="title" class="sr-only">Book title</label>
                <input type="text" id="title" wire:model="title" placeholder="Book title" class="w-full border border-slate-300 rounded-lg">
                @error('title')
                    <div class="mt-1 text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="grow">
                <label for="title" class="sr-only">Book author</label>
                <input type="text" id="author" wire:model="description" placeholder="Book author" class="w-full border border-slate-300 rounded-lg">
                @error('description')
                    <div class="mt-1 text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg font-medium disabled:opacity-50">
                <span wire:loading.delay.long>
                    Loading
                </span>

                <span wire:loading.remove.delay.long>
                    Submit
                </span>
            </button>
        </form>
          {{$this->likeStats}}
        @if ($this->likeStats)
            The status is liked
        @endif --}}

        <div x-data="{ likes: {{Js::from($likeStats)}},changeLike(){
            this.likes =! this.likes
        } }">
        <button wire:click="likeStatus()">Like</button>
        <template x-if="likes">
            <div>It is Liked</div>
        </template>
        <div x-text="likes"></div>
             <button @click="changeLike()">Check Likes</button>
          
        </div>
        
    </div>
</div>
