<div x-data="{ open: false }">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open" class="absolute bg-white z-20 rounded shadow-md py-2 mt-1 w-40">
        {{ $slot }}
    </div>
</div>