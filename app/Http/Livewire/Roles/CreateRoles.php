<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class CreateRoles extends Component
{
    public $name;
    protected $rules = [
        'name'=>'required|min:3;'
    ];
    public function render()
    {
        return view('livewire.roles.create-roles');
    }

    public function store(){
        $validateData = $this->validate(['name'=>'required']);
        Role::create($validateData);
        session()->flash('success','Role is Added');
        return to_route('admin.roles');
    }
}
