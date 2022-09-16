@props(['active'])

@php
$classes = $active ?? false ? 'nav-item active' : 'nav-item';
$hrefClassess = $hrefClass ?? false ? 'nav-link' : 'nav-link';
@endphp


<li {{ $attributes->merge(['class' => $classes]) }}>
    <a {{ $attributes->merge(['class' => $hrefClassess]) }}>
        <span class="nav-link-icon d-md-none d-lg-inline-block">
            <!-- Download SVG icon from http://tabler-icons.io/i/home -->
            {{ $svg }}
        </span>
        <span class="nav-link-title">
            {{ $slot }}
        </span>
    </a>
</li>
