<div>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row row-deck row-cards">
        <div class="col-12">
            <div class="row row-cards">
                <x-dashboard-card number="500" textSub="Pending memorandum" class="bg-blue text-white avatar" />
                <x-dashboard-card number="300" textSub="In-review memorandum" class="bg-blue text-white avatar" />
                <x-dashboard-card number="50" textSub="Approve memorandum" class="bg-blue text-white avatar" />
            </div>
        </div>
        <div class="col-12">
            <div class="row row-cards">
                <x-dashboard-card number="132" textSub="Total Pending Memorandum Today" class="bg-secondary text-white avatar" />
                <x-dashboard-card number="20" textSub="Total In-review memorandum Today" class="bg-secondary text-white avatar"/>
                <x-dashboard-card number="78" textSub="Total Approve memorandum Today" class="bg-secondary text-white avatar" />
            </div>
        </div>
    </div>
</div>
