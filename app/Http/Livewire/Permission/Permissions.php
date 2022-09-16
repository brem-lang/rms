<?php

namespace App\Http\Livewire\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Permissions extends Component
{
    public $name;
    protected $rules = [
        'name'=>'required|min:3;'
    ];
    public function render()
    {
        $permissions = Permission::all();
        return view('livewire.permission.permission',compact('permissions'));
    }
}
