<?php

namespace App\Http\Livewire;
use Spatie\Permission\Models\Role;
use Livewire\Component;
use DB;
class Roles extends Component
{
    public function render()
    {
        $roles = Role::whereNotIn('name', ['admin','super'])->get();
        return view('livewire.roles.roles', compact('roles'));
    }
    public function delete($id){
        DB::table('roles')->where('id',$id)->delete();
    }
}
