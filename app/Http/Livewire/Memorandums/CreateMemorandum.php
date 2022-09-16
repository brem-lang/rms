<?php

namespace App\Http\Livewire\Memorandums;

use Livewire\Component;
use App\Models\Memorandum;
class CreateMemorandum extends Component
{
    public function render()
    {
        $memorandum_count = Memorandum::count();
        $count = sprintf("%05d", $memorandum_count + 1);
        $document_series_number = 'GFI-MR-'.date('Y').'-'.$count;
        return view('livewire.memorandums.create-memorandum',compact('document_series_number'));
    }
}
