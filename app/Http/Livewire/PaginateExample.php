<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class PaginateExample extends Component
{
    use WithPagination;

    public $perPage = 10;

    public function render()
    {
        return view('livewire.paginate-example', [
            'users' => User::paginate($this->perPage)
        ]);
    }
}
