<div class="container mx-auto m-4 w-full h-full">
    <table class="border-collapse border-2 border-gray-400 w-full">
        <thead>
            <tr>
                <th class="border border-gray-400 px-4 py-2 text-gray-800">Name</th>
                <th class="border border-gray-400 px-4 py-2 text-gray-800">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="border border-gray-400 px-4 py-2">{{ $user->name }}</td>
                    <td class="border border-gray-400 px-4 py-2">{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <footer class="pin-b">
        <div class="m-4">
            <label for="perPage">Per Page:</label>
            {{-- <input wire:model="perPage" type="number"> --}}
            <select name="perPage" wire:model="perPage">
                <option>10</option>
                <option>20</option>
                <option>30</option>
            </select>
        </div>
        {{ $users->links() }}
    </footer>
</div>
