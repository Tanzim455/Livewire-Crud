<!-- resources/views/dashboard.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    <!-- Include Navbar component with a custom logo -->
                    

                    <livewire:counter />
                    <nav>
                        <a href="/" wire:navigate>Dashboard</a>
                        <a href="{{route('dashboard')}}" wire:navigate>Dashboard</a>
                        <a href="/counter" wire:navigate>Counter</a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
