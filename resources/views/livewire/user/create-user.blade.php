<div>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <x-slot name="actionBtn">
        <a href="{{ route('admin.users') }}" class="btn btn-primary w-100">
            Back
        </a>
    </x-slot>

    <div class="row row-cards">
        <div class="col-12">
            <h1>Hello user</h1>
        </div>
    </div>
</div>
