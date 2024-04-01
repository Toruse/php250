@extends('_layouts.master.en')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1>{{ $page->en->siteName }}</h1>

            <h2 class="font-light mt-4">{{ $page->en->siteDescription }}</h2>

            <p class="text-lg">
                Here is a list of questions that developers are asked during PHP technical interviews.<br class="hidden sm:block">
                Of course, it is not exhaustive, but it has the advantage: it was formed by specialists<br class="hidden sm:block">
                who conduct interviews in different IT companies.
            </p>

            <div class="flex my-10">
                <a href="{{ $page->baseUrl }}/en/junior/general" title="{{ $page->en->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Start</a>

                <a href="https://dou.ua/lenta/articles/interview-questions-php-developer/" title="Джерело" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">Source</a>
            </div>
        </div>

        <img src="{{ $page->baseUrl }}/assets/img/logo-large.svg" alt="{{ $page->ua->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 ">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="{{ $page->baseUrl }}/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">

            <h3 class="text-2xl text-blue-900 mb-0">Junior</h3>

            <nav class="mt-4">
                @include('_nav.menu', ['items' => $page->en->navigation->Junior->children, 'level' => 0, 'baseUrl' => $page->baseUrl])
            </nav>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="{{ $page->baseUrl }}/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">

            <h3 class="text-2xl text-blue-900 mb-0">Middle</h3>

            <nav class="mt-4">
{{--                @include('_nav.menu', ['items' => $page->ru->navigation->Middle->children, 'level' => 0])--}}
            </nav>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="{{ $page->baseUrl }}/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">

            <h3 class="text-2xl text-blue-900 mb-0">Senior</h3>

            <nav class="mt-4">
{{--                @include('_nav.menu', ['items' => $page->ru->navigation->Senior->children, 'level' => 0])--}}
            </nav>
        </div>
    </div>
</section>
@endsection
