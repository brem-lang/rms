<div>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <x-slot name="actionBtn">
        <a href="{{ route('admin.createUser') }}" class="btn btn-primary w-100">
            Add User
        </a>
    </x-slot>

    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter table-mobile-md card-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th class="w-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td data-label="Name">
                                        <div class="d-flex py-1 align-items-center">
                                            <span class="avatar me-2"
                                                style="background-image: url(./static/avatars/010m.jpg)"></span>
                                            <div class="flex-fill">
                                                <div class="font-weight-medium">{{ $user->name }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-muted"><a href="#" class="text-reset">{{ $user->email }}</a>
                                    </td>
                                    <td>
                                        <div class="btn-list flex-nowrap">
                                            <a href="{{ route('admin.users.show', $user->id) }}" class="btn">
                                                Roles
                                            </a>
                                            <div class="dropdown">
                                                <button class="btn dropdown-toggle align-text-top"
                                                    data-bs-toggle="dropdown">
                                                    Actions
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">
                                                        Action
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        Another action
                                                    </a>
                                                </div>
                                            </div>
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
