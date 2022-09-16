<?php

namespace App\Http\Livewire\Memorandums;

use Livewire\Component;
use App\Models\Memorandum;

class Memorandums extends Component
{
    public function render()
    {
        $data = Memorandum::paginate(5);
        return view('livewire.memorandums.memorandum',compact('data'));
    }
}
