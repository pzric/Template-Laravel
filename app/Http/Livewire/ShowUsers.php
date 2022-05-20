<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{
    public $search, $user;
    public $sort = 'id';
    public $direction = "asc";

    public function render()
    {
        $users = User::where([['name', 'like', '%' . $this->search . '%'],['id', '<>', auth()->user()->id]])
        ->orderby($this->sort, $this->direction)
        ->get();
        return view('livewire.show-users',compact('users'));
    }

    public function order($sort){
      $this->sort = $sort;
    }

    public function edit($id){
      $user = User::find($id);
      $this->user = $user;
      $this->emit('editUser', $user->id);
    }
}
