<div class="container mx-auto flex flex-row items-center content-center justify-center w-60">
    <button class="flex-1 bg-blue-500 hover:bg-blue-700 text-white text-center font-bold py-2 px-4 rounded" wire:click="increment">+</button>
    <h1 class="flex-1 text-xl text-center m-2">{{ $count }}</h1>
    <button class="flex-1 bg-blue-500 hover:bg-blue-700 text-white text-center font-bold py-2 px-4 rounded" wire:click="decrement">-</button>
</div>
