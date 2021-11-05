<?php

return [
    'app' => [
        'icon' => 'fa fa-folder text-blue-400',
        'contents' => json_decode(file_get_contents(__DIR__.'/.folders/app.json'))
    ],
    'bootstrap' => [
        'icon' => 'fa fa-folder',
        'contents' => json_decode(file_get_contents(__DIR__.'/.folders/bootstrap.json'))
    ],
    'config' => [
        'icon' => 'fa fa-folder',
        'contents' => json_decode(file_get_contents(__DIR__.'/.folders/config.json'))
    ],
    'resources' => [
        'icon' => 'fa fa-folder',
        'contents' => json_decode(file_get_contents(__DIR__.'/.folders/resources.json'))
    ],
    'routes' => [
        'icon' => 'fa fa-folder',
        'contents' => json_decode(file_get_contents(__DIR__.'/.folders/routes.json'))
    ],
    'tests' => [
        'icon' => 'fa fa-folder text-green-500',
        'contents' => json_decode(file_get_contents(__DIR__.'/.folders/tests.json'))
    ],

];
