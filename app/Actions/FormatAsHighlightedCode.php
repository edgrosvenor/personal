<?php

namespace App\Actions;

use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

class FormatAsHighlightedCode
{
    public function execute(string $contents): string
    {

        $crawler = new Crawler($contents);

        $i = 0;

        $results = $crawler->filter('.line')
            ->each(function($block, $i) {

                return '<div class="line mt-2">
                    <span class="inline-block w-12 text-gray-200 w-auto mr-4">' . ++$i .'</span>' .
                    app(SanitizeOutput::class)->execute($block->html()) .
                '</div>';
            });

        return implode("\n", $results);
    }


}
