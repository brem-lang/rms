<div>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Roles') }}
        </h2>
    </x-slot>

    <x-slot name="actionBtn">
        <a href="{{ route('admin.roles') }}" class="btn btn-primary w-100">
            Back
        </a>
    </x-slot>

    <div class="row">
        <div class="col-12">
            <div class="page-center">
                <div class="container-tight py-4">
                  <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
                  </div>
                  <form class="card card-md" wire:submit.prevent="store">
                    @if (session()->has('success'))
                        <div style="color:green">{{session('success')}}</div>
                    @endif
                    <div class="card-body">
                      <h2 class="card-title text-center mb-4">Add Roles</h2>
                      <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Role Name" autocomplete="off" wire:model.lazy="name">
                        @error('name')
                            <span style="color:red">{{$message}}</span>
                        @enderror
                      </div>
                      <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Add</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
        </div>
    </div>
</div>
