<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class SearchUsers extends Component
{
    // public $users = [];
    public $searchTerm = '';

    public function render()
    {
        // $this->users = User::all();
        return view('livewire.search-users', [
            'users' => User::where('name', 'like', '%' . $this->searchTerm . '%')->get()
        ]);
    }
}
