<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,

    'build' => [
        'destination' => 'docs',
    ],

    // Algolia DocSearch credentials
    'docsearchApiKey' => env('DOCSEARCH_KEY'),
    'docsearchIndexName' => env('DOCSEARCH_INDEX'),

    'ua' => [
        'siteName' => 'Співбесіда: Запитання по PHP',
        'siteDescription' => 'Запитань для Junior, Middle та Senior',
        // navigation menu
        'navigation' => require_once('navigation.ua.php'),
    ],

    'en' => [
        'siteName' => 'Interview: PHP Questions',
        'siteDescription' => 'Questions for Junior, Middle and Senior',
        // navigation menu
        'navigation' => require_once('navigation.en.php'),
    ],

    'ru' => [
        'siteName' => 'Собеседование: Вопросы по PHP',
        'siteDescription' => 'Вопросы для Junior, Middle и Senior',
        // navigation menu
        'navigation' => require_once('navigation.ru.php'),
    ],

    // helpers
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'isActiveParent' => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url' => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
];
