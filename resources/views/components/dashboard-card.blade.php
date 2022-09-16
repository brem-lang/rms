<div class="col-sm-6 col-lg-4">
    <div class="card card-sm">
        <div class="card-body">
        <div class="row align-items-center">
            <div class="col-auto">
            <span {{$attributes}}><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-activity" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M3 12h4l3 8l4 -16l3 8h4" />
                </svg>
            </span>
            </div>
            <div class="col">
            <div class="font-weight-medium">
                {{ $number }}
            </div>
            <div class="text-muted">
                {{ $textSub }}
            </div>
            </div>
        </div>
        </div>
    </div>
</div>