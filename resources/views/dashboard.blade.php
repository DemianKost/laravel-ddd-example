<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4 p-6 flex items-center justify-between">
                <h2 class="text-4xl text-gray-900 font-bold">Good morning, {{ auth()->user()->name }}!</h2>
                <button class="px-4 py-2 bg-red-500 text-white rounded-md">Complete your profile</button>
            </div>
        </div>
    </div>
</x-app-layout>
