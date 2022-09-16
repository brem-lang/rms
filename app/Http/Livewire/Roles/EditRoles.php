<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use DB;
class EditRoles extends Component
{

    public $hiddenId;
    public $name;
    protected $rules = [
        'name'=>'required'
    ];
    public function mount($id){
        $data = Role::find($id);
        $this->hiddenId = $data->id;
        $this->name = $data->name;
    }

    public function render()
    {
        return view('livewire.roles.edit-roles');
    }

    public function update(){
        $validateData = $this->validate();
        $updateId = $this->hiddenId;
        $updateArray = array(
            'name'=>$validateData['name']
        );
        DB::table('roles')->where('id',$updateId)->update($updateArray);
        return to_route('admin.roles');
    }
}
