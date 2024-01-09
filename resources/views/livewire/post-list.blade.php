<div>
    <div class="min-w-full align-middle">
        <table class="min-w-full border divide-y divide-gray-200">
            <thead>
            <tr>
                <th class="px-6 py-3 text-left bg-gray-50">
                    <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Name</span>
                </th>
                <th class="px-6 py-3 text-left bg-gray-50">
                    <span class="text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase">Description</span>
                </th>
                <th class="px-6 py-3 text-left bg-gray-50">
                </th>
            </tr>
            </thead>
    <tbody class="bg-white divide-y divide-gray-200 divide-solid">
        @forelse($posts as $post)
            <tr class="bg-white">
                <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                    {{ $post->title }}
                </td>
                <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                    {{ $post->description }}
                </td>
                <td class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                    {{-- <button wire:confirm="Are you sure?" wire:click="delete({{ $post->id }})"
                        class="ml-2 text-indigo-600 hover:text-indigo-900">
                        Delete
                    </button --}}
                    <button
    type="button"
    
    x-on:click="$wire.delete('{{ $post->id }}')"
>
              Delete
                    </button>
                </td>
                
            </tr>
        @empty
            <tr class="bg-white">
                <td colspan="3" class="px-6 py-4 text-sm leading-5 text-gray-900 whitespace-no-wrap">
                    No products found.
                </td>
            </tr>
        @endforelse
    </tbody>
</table>
</div>
</div>
