<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserManagement extends Component
{
    public $users = [];

    protected $rules = [
        'name' => 'required|min:3|20',
        'email' => 'required|email'
    ];

    public function render()
    {
        $this->users = User::all();
        return view('livewire.user.user-management');
    }

    public function show(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();

        dd($user,$roles,$permissions);
        // return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }
}
