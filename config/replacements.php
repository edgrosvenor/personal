<?php

use App\Actions\CreateLink;

return [
    // Obscure my vapor id because it's none of your business.
    env('VAPOR_ID') => 'id: xxxxx',
    // Shameless plug for one of my little SaaS apps
    'vaporlog.co' => app(CreateLink::class)
        ->execute('VaporLog',
        'https://vaporlog.co',
        'An app I built and use to greatly improve my logging experience on Vapor-deployed sites'),
    // Share my vapor.yml file so that people can see how I set this silliness up
    'my vapor.yml file' => app(CreateLink::class)
        ->execute('my vapor.yml file',
        '/vapor.yml',
        'A redacted but useful copy of my current vapor.yml file'),
    // Shout out to Ryan Chandler for a super useful tooltip plugin
    "ryangjchandler/alpine-tooltip" => app(CreateLink::class)
        ->execute("Tooltip Package",
        'https://github.com/ryangjchandler/alpine-tooltip',
        'Alpine-powered tooltips',
        '_blank'),
];
