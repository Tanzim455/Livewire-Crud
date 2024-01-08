<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
        <form wire:submit.prevent="store" class="flex items-start space-x-3">
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

        {{-- <button wire:click="example" class="disabled:opacity-50" wire:loading.attr="disabled">Click me</button> --}}

        {{-- <div wire:loading.delay.long>
            Loading
        </div> --}}
    </div>
</div>
