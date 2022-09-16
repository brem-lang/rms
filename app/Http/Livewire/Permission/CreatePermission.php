<?php

namespace App\Http\Livewire\Permission;

use Livewire\Component;
use Spatie\Permission\Models\Permission;

class CreatePermission extends Component
{
    public $name;
    protected $rules = [
        'name'=>'required|min:3;'
    ];
    public function render()
    {
        return view('livewire.permission.create-permission');
    }

    public function store(){
        $validateData = $this->validate();
        Permission::create($validateData);
        session()->flash('success','Permission is Added');
        return to_route('admin.createPermission');
    }
}
