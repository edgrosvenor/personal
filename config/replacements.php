<?php

use App\Actions\CreateLink;

return [
    env('VAPOR_ID') => 'id: xxxxx',
    'my vapor.yml file' => app(CreateLink::class)
        ->execute('my vapor.yml file',
        '/vapor.yml',
        'A redacted but useful copy of my current vapor.yml file'),
    'Tall Stack' => '',
    "ryangjchandler/alpine-tooltip" => app(CreateLink::class)
        ->execute("Tooltip Package",
        'https://github.com/ryangjchandler/alpine-tooltip',
        'Alpine-powered tooltips',
        '_blank'),
];
