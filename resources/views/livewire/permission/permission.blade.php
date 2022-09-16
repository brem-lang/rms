<div>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Permission') }}
        </h2>
    </x-slot>

    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter table-mobile-md card-table">
                        <thead>
                            <tr>
                                <th>ID Number</th>
                                <th>Name</th>
                                <th>Action</th>
                        
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>                    
                                    <td data-label="Name">
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">{{$permission->id}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-label="Name">
                                        <div class="d-flex py-1 align-items-center">
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">{{$permission->name}}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <a                                     
                                            class="btn">
                                                Edit
                                            </a>
                                            <a 
                                            {{-- href="{{ route('admin.users.show', $user->id) }}"  --}}
                                            class="btn">
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

