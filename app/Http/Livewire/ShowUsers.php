<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowUsers extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch(){
      $this->resetPage();
    }

    public function render()
    {
        $users = User::where('user', 'like', '%' . $this->search . '%')->paginate(10);
        return view('livewire.show-users', compact('users'));
    }
}
