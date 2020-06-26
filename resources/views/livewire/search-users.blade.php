<div class="text-lg">
    <table class="table-auto">
        <tbody>
            <tr class="bg-gray-100">
                <td class="border px-4 py-2">
                    Search example
                </td>
            </tr>
            <tr>
                <td class="border px-4 py-2">
                    <input class="shadow-md rounded-md border p-1 m-2" type="text" placeholder="Search user names" wire:model.debounce.500ms="searchTerm" />
                    <ul>
                        @foreach ($users as $user)
                            <li>
                                {{ $user->name }}
                            </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</div>
