@extends('_layouts.master.ru')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1>{{ $page->ru->siteName }}</h1>

            <h2 class="font-light mt-4">{{ $page->ru->siteDescription }}</h2>

            <p class="text-lg">
                Предлагаем список вопросов, которые задают разработчикам <br class="hidden sm:block">на технических собеседованиях по PHP.
                Конечно, он не является исчерпывающим,<br class="hidden sm:block"> однако имеет преимущество: его формировали специалисты, которые проводят<br class="hidden sm:block"> интервью в разных
                ИТ-компаниях.
            </p>

            <div class="flex my-10">
                <a href="{{ $page->baseUrl }}/ru/junior/general" title="{{ $page->ru->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Начать</a>

                <a href="https://dou.ua/lenta/articles/interview-questions-php-developer/" title="Джерело" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">Источник</a>
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
                @include('_nav.menu', ['items' => $page->ru->navigation->Junior->children, 'level' => 0, 'baseUrl' => $page->baseUrl])
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
