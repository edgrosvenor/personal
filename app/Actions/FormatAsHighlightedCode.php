<?php

namespace App\Actions;

use Symfony\Component\DomCrawler\Crawler;

class FormatAsHighlightedCode
{
    public function execute(string $contents): string
    {

        $crawler = new Crawler($contents);

        $results = $crawler->filter('.line')
            ->each(function($block, $i) {

                return '<div class="line mt-2">
                    <span class="hidden md:inline-block w-12 text-gray-200 w-auto mr-4">' . ++$i .'</span>' .
                    app(SanitizeOutput::class)->execute($block->html()) .
                '</div>';
            });

        return implode("\n", $results);
    }


}
