<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ config('app.name', 'MRS') }}</title>
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif !important;
        }
    </style>
    <!-- CSS files -->
    <link href="{{ asset('tabler/dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('tabler/dist/css/demo.min.css') }}" rel="stylesheet" />

    @livewireStyles


</head>

<body>
    <div class="page">
        <header class="navbar navbar-expand-md navbar-light d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href="/">
                        <img src="{{ asset('assets/images/classify-logo1.png') }}" width="110" height="32"
                            alt="Classify" class="navbar-brand-image">
                    </a>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="d-none d-md-flex">
                        @if (Route::has('login'))
                            @auth
                                <div class="mt-3 space-y-1">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                          this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="nav-link px-0 hide-theme-dark me-3">Log in</a>

                                <!-- @if (Route::has('register'))
    <a href="{{ route('register') }}" class="nav-link px-0 hide-theme-dark me-3">Register</a>
    @endif -->
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </header>

        @include('layouts.tabler.navigation')

        <div class="page-wrapper">
            <div class="container-xl">
                <!-- Page title -->
                <div>
                    <div class="page-header d-print-none">
                        <div class="row g-2 align-items-center">
                            <div class="col">
                                @if (\Route::current()->getName() == 'dashboard')
                                    <div class="page-pretitle">
                                        Overview
                                    </div>
                                @endif

                                <h2 class="page-title">
                                    {{ $pageTitle }}
                                </h2>
                            </div>
                            <!-- Page title actions -->
                            <div class="col-12 col-md-auto ms-auto d-print-none">
                                <div class="btn-list">
                                    @if (isset($actionBtn))
                                        {{ $actionBtn }}
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    <!-- Content here -->
                    {{ $slot }}
                </div>
            </div>
            <footer class="footer footer-transparent d-print-none">
                <div class="container-xl">
                    <div class="row text-center align-items-center flex-row-reverse">
                        <div class="col-lg-auto ms-lg-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item"><a href="./docs/index.html"
                                        class="link-secondary">Documentation</a></li>
                                <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a>
                                </li>
                                <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
                                        class="link-secondary" rel="noopener">Source code</a></li>
                                <li class="list-inline-item">
                                    <a href="https://github.com/sponsors/codecalm" target="_blank"
                                        class="link-secondary" rel="noopener">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon text-pink icon-filled icon-inline" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                                        </svg>
                                        Sponsor
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item">
                                    Copyright &copy; 2022
                                    <a href="." class="link-secondary">Tabler</a>.
                                    All rights reserved.
                                </li>
                                <li class="list-inline-item">
                                    <a href="./changelog.html" class="link-secondary" rel="noopener">
                                        v1.0.0-beta11
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    @livewireScripts


    <!-- Libs JS -->
    <script src="{{ asset('tabler/dist/libs/apexcharts/dist/apexcharts.min.js') }}" defer></script>
    <script src="{{ asset('tabler/dist/libs/jsvectormap/dist/js/jsvectormap.min.js') }}" defer></script>
    <script src="{{ asset('tabler/dist/libs/jsvectormap/dist/maps/world.js') }}" defer></script>
    <script src="{{ asset('tabler/dist/libs/jsvectormap/dist/maps/world-merc.js') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('tabler/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('tabler/dist/js/demo.min.js') }}" defer></script>

</body>

</html>
