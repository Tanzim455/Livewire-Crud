
      


<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        <div>
            @if (session()->has('message'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    
       
    {{-- <div x-data="{ like: true }">
        <svg @click="like = !like" xmlns="http://www.w3.org/2000/svg" :fill="like ? 'red' : 'white'" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
        </svg>
    </div> --}}
  
    
  
        <form wire:submit.prevent="store" class="flex items-start space-x-3">
            
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
       
</div>