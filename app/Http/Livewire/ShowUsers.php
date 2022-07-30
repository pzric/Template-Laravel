<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowUsers extends Component
{
    use WithPagination;

    public $search;

    protected $listeners = ['render', 'delete'];

    public function delete (User $user){
      if (auth()->user()->id == $user->id ) {
        $this->emit('alert','Invalid operation.','Record cannot be deleted.', 'warning');
      } else {
        $user->delete();
        $this->emit('alert','Deleted!','The record has been deleted.', 'success');
      }

    }

    public function updatingSearch(){
      $this->resetPage();
    }

    public function render()
    {
        $users = User::where('user', 'like', '%' . $this->search . '%')->orderby('id', 'desc')->paginate(10);
        return view('livewire.show-users', compact('users'));
    }
}
