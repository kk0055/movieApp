<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="😍韓国ドラマ😍">
    <meta property="og:description" content="Movie">
    <meta name="description" content="😍韓国ドラマ😍" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>😍韓国ドラマ😍</title>
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
<livewire:styles />
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="font-sans bg-black text-white ">
    <nav class="md:block border-b border-gray-900">
        <div class="container mx-auto px-4 flex item-center justify-between  py-6">
            <ul class="flex flex-col md:flex-row ">
                <li class="md:mr-6 mt-3 md:mt-0">
                    <a href="{{ route('korean.index') }}" class="hover:text-gray-300">😍韓国ドラマ😍</a>
                </li>
            </ul>
            <livewire:search-dropdown>
        </div>
    </nav>

    @yield('content')
    <livewire:scripts />
    @yield('scripts')
    <script src="https://d.line-scdn.net/r/web/social-plugin/js/thirdparty/loader.min.js" async="async" defer="defer">
    </script>
</body>

</html>
