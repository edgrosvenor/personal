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

        div.line:hover {
            background-color: #efe;
        }

    </style>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/4bee98728d.js" crossorigin="anonymous"></script>
</head>
<body class="font-sans antialiased bg-white">
<header class="bg-gray-50 text-gray-400 pl-4 border-b border-gray-400 top-0 fixed w-full">
    {{ $breadcrumb ?? '<i class="fa fa-folder"></i> Ed' }}
</header>
<!-- Page Content -->
<div class="flex w-full">
<main class="w-full lg:w-3/4 overflow-y-scroll pb-24 border-gray-400 border-r">

        <div class="pt-4">
            {{ $slot }}
        </div>
</main>
<nav class="lg:inline lg:w-1/4 border-t border-gray-400 top-6 right-0 fixed">
    <div>
            <div class="bg-gray-50 px-4 py-1 text-gray-600 border-b-2 border-gray-400">
                <i class="fa fa-window"></i> Project &#9660;
            </div>
            <div class="pl-2 pt-1 text-gray-400">
                <div>
                    <i class="fa fa-angle-down"></i>
                    <i class="fa fa-folder"></i>
                    <span class="font-bold text-black">Ed</span>
                    <span class="text-xs">~/projects/sites/ed</span>
                </div>
                <div class="pl-4">
                    <div>
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-folder text-blue-400"></i>
                        <span class="text-black">app</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-folder"></i>
                        <span class="text-black">bootstrap</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-folder"></i>
                        <span class="text-black">config</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-folder"></i>
                        <span class="text-black">database</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-folder"></i>
                        <span class="text-black">node_modules</span>
                        <span class="text-xs">library root</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-folder"></i>
                        <span class="text-black">public</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-folder"></i>
                        <span class="text-black">resources</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-folder"></i>
                        <span class="text-black">routes</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-folder text-yellow-500"></i>
                        <span class="text-black">storage</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-folder text-green-500"></i>
                        <span class="text-black">tests</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right"></i>
                        <i class="fa fa-folder"></i>
                        <span class="text-black">vendor</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-gear"></i>
                        <span class="text-black">.editorconfig</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">.env</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">.env.example</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">.gitattributes</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">.gitignore</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">artisan</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">composer.json</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">composer.lock</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">package.json</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">package-lock.json</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">phpunit.xml</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">README.me</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">server.php</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">tailwind.config.js</span>
                    </div>
                    <div>
                        <i class="fa fa-angle-right text-white"></i>
                        <i class="fa fa-file"></i>
                        <span class="text-black">webpack.mix.js</span>
                    </div>
                </div>
            </div>

        </div>
</nav>
</div>


</body>
</html>
