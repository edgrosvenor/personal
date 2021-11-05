<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&family=Waiting+for+the+Sunrise&display=swap"
          rel="stylesheet">

    <style>
        main {
            font-family: 'Fira Code', monospace;
        }

        .line:hover {
            background-color: #efe;
        }

    </style>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css" />


    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@MaybeEdward">
    <meta name="twitter:title" content="gros.co - A Laravel experiment">
    <meta name="twitter:description" content="Every once in a while, every developer has a crisis that results in
    rebuilding their personal site. That's what happened here.">
    <meta name="twitter:image" content="https://user-images.githubusercontent.com/1053395/140463062-b3581d4b-fbfc-4596-a683-9b5538e31022.jpeg">
    @livewireStyles
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/4bee98728d.js" crossorigin="anonymous"></script>
</head>
<body class="font-sans antialiased bg-white" x-data="setUp()" @keydown="toggleSidebar($event)">
<header class="bg-gray-50 text-gray-400 pl-4 border-b border-gray-400 top-0 fixed w-full">
    {{ $breadcrumb ?? '<i class="fa fa-folder"></i> gros.co' }}
    <span class="hidden md:inline float-right mr-6" x-show="toggle">
        <button @mouseup="show = 'code'">
            <i x-bind:class="show === 'code' ? 'text-green-200' : 'text-gay-400'" class="fa
            l
        fa-list-alt"></i>
        </button>
        <button @mouseup="show = 'display'">
        <i x-on:click="show = 'display'" x-bind:class="show === 'display' ? 'text-green-200' : 'text-gray-400'"
           class="fal
        fa-browser"></i>
        </button>
    </span>
</header>
<!-- Page Content -->
<div class="flex w-full">
<main class="w-full lg:w-3/4 overflow-y-scroll pb-24 border-gray-400 border-r">

        <div class="pt-4">
            {{ $slot }}
        </div>
</main>
<nav x-show="sidebar" class="lg:inline lg:w-1/4 border-t border-gray-400 top-6 right-0 hidden md:fixed
overflow-scroll">
    <x-sidebar-navigation/>
</nav>
</div>
<script>
    function setUp() {
        return {
            show: 'code',
            toggle: false,
            sidebar: true,
            toggleSidebar($event) {
                if ($event.metaKey && $event.key === '1') {
                    this.sidebar = ! this.sidebar;
                }
            }
        }
    }
</script>
@livewireScripts
</body>
</html>
