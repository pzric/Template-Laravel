<?php

namespace App\Http\Livewire;

use App\Models\Concept;
use Livewire\Component;

class ShowConcepts extends Component
{
    public function render()
    {
        $concepts = Concept::all();
        return view('livewire.show-concepts',compact('concepts'));
    }
}
