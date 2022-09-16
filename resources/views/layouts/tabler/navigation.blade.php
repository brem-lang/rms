<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <x-navigation :active="request()->routeIs('dashboard')" :href="route('dashboard')">
                        <x-slot name="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>
                        </x-slot>

                        <x-slot name="slot">
                            Home
                        </x-slot>
                    </x-navigation>

                    @role('admin')                   
                    <x-navigation :active="request()->routeIs('admin.users')" :href="route('admin.users')">
                        <x-slot name="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>
                        </x-slot>

                        <x-slot name="slot">
                            Users
                        </x-slot>
                    </x-navigation>

                    <x-navigation :active="request()->routeIs('admin.roles')" :href="route('admin.roles')">
                        <x-slot name="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-check"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                                <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                                <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                                <line x1="11" y1="6" x2="20" y2="6" />
                                <line x1="11" y1="12" x2="20" y2="12" />
                                <line x1="11" y1="18" x2="20" y2="18" />
                            </svg>

                        </x-slot>

                        <x-slot name="slot">
                            Roles
                        </x-slot>
                    </x-navigation>
                    <x-navigation :active="request()->routeIs('admin.permission')" :href="route('admin.permission')">
                        <x-slot name="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-check"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                                <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                                <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                                <line x1="11" y1="6" x2="20" y2="6" />
                                <line x1="11" y1="12" x2="20" y2="12" />
                                <line x1="11" y1="18" x2="20" y2="18" />
                            </svg>

                        </x-slot>

                        <x-slot name="slot">
                            Permission
                        </x-slot>
                    </x-navigation>
                    <x-navigation :active="request()->routeIs('create.memorandum')" :href="route('create.memorandum')">
                        <x-slot name="svg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-check"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                                <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                                <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                                <line x1="11" y1="6" x2="20" y2="6" />
                                <line x1="11" y1="12" x2="20" y2="12" />
                                <line x1="11" y1="18" x2="20" y2="18" />
                            </svg>

                        </x-slot>

                        <x-slot name="slot">
                            Memorandum
                        </x-slot>
                    </x-navigation>
                    @endrole
                </ul>
            </div>
        </div>
    </div>
</div>
