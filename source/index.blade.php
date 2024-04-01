@extends('_layouts.master.ua')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1>{{ $page->ua->siteName }}</h1>

            <h2 class="font-light mt-4">{{ $page->ua->siteDescription }}</h2>

            <p class="text-lg">
                Пропонуємо список питань, які ставлять українським розробникам <br class="hidden sm:block">на технічних співбесідах з PHP.
                Звісно, він не є вичерпним, проте має перевагу:  <br class="hidden sm:block">його формували спеціалісти, які проводять інтерв’ю в різних
                ІТ-компаніях.
            </p>

            <div class="flex my-10">
                <a href="{{ $page->baseUrl }}/junior/general" title="{{ $page->ua->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Почати</a>

                <a href="https://dou.ua/lenta/articles/interview-questions-php-developer/" title="Джерело" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">Джерело</a>
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
                @include('_nav.menu', ['items' => $page->ua->navigation->Junior->children, 'level' => 0, 'baseUrl' => $page->baseUrl])
            </nav>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="{{ $page->baseUrl }}/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">

            <h3 class="text-2xl text-blue-900 mb-0">Middle</h3>

            <nav class="mt-4">
                @include('_nav.menu', ['items' => $page->ua->navigation->Middle->children, 'level' => 0, 'baseUrl' => $page->baseUrl])
            </nav>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="{{ $page->baseUrl }}/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">

            <h3 class="text-2xl text-blue-900 mb-0">Senior</h3>

            <nav class="mt-4">
                @include('_nav.menu', ['items' => $page->ua->navigation->Senior->children, 'level' => 0, 'baseUrl' => $page->baseUrl])
            </nav>
        </div>
    </div>
</section>
@endsection
