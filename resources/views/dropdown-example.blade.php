@extends('layouts.app')

@section('content')
    <div class="p-2 ml-2 w-3/4" x-data="{ text: '' }">
        <x-dropdown>
            <x-slot name="trigger">
                <button class="bg-gray-100">Show more...</button>
            </x-slot>

            <ul>
                <x-dropdown-link>One</x-dropdown-link>
                <x-dropdown-link>Two</x-dropdown-link>
                <x-dropdown-link>Three</x-dropdown-link>
            </ul>
        </x-dropdown>
        <span @custom-event.window="text = $event.detail.dropdown"></span>
        <div x-show="text === 'One'">
            <x-content>Test one</x-content>
        </div>
        <div x-show="text === 'Two'">
            <x-content>Test two</x-content>
        </div>
        <div x-show="text === 'Three'">
            <x-content>Test three</x-content>
        </div>

        <x-content>
            <x-blog-card></x-blog-card>
        </x-content>
    </div>
@endsection