<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->ua->siteDescription }}">

        <meta property="og:site_name" content="{{ $page->ua->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->ua->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->ua->siteDescription }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:image" content="{{ $page->baseUrl }}/assets/img/logo.png"/>
        <meta property="og:type" content="website"/>

        <meta name="twitter:image:alt" content="{{ $page->ua->siteName }}">
        <meta name="twitter:card" content="summary_large_image">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <meta name="generator" content="tighten_jigsaw_doc">
        @endif

        <title>{{ $page->ua->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        @endif
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
        <header class="flex items-center shadow bg-white border-b h-24 mb-8 py-4" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="{{ $page->baseUrl }}" title="{{ $page->ua->siteName }} home" class="inline-flex items-center">
                        <img class="h-8 md:h-10 mr-3" src="{{ $page->baseUrl }}/assets/img/logo.png" alt="{{ $page->ua->siteName }} logo" />

                        <h1 class="text-lg md:text-2xl text-blue-900 font-semibold hover:text-blue-600 my-0 pr-4">{{ $page->ua->siteName }}</h1>
                    </a>
                </div>

                <div class="flex flex-1 justify-end items-center text-right md:pl-10">
                    @if ($page->docsearchApiKey && $page->docsearchIndexName)
                        @include('_nav.search-input')
                    @endif
                    <a href="{{ $page->baseUrl }}" title="{{ $page->ua->siteName }} home" class="px-1 font-black">
                        ua
                    </a>
                    <a href="{{ $page->baseUrl }}/en" title="{{ $page->en->siteName }} home" class="px-1">
                        en
                    </a>
                    <a href="{{ $page->baseUrl }}/ru" title="{{ $page->ru->siteName }} home" class="px-1">
                        ru
                    </a>
                </div>
            </div>

            @yield('nav-toggle')
        </header>

        <main role="main" class="w-full flex-auto">
            @yield('body')
        </main>

        <script src="{{ $page->baseUrl }}{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')

        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center">
                <li class="md:mr-2">
                    &copy; {{ date('Y') }}
                </li>
            </ul>
        </footer>
    </body>
</html>
