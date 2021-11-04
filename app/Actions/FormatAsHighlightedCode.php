<?php

namespace App\Actions;

use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;

class FormatAsHighlightedCode
{
    public function execute(string $contents, array $replacements = []): string
    {

        $crawler = new Crawler($contents);

        $i = 0;
        $results = $crawler->filter('.line')
            ->each(function($block, $i) use ($replacements) {

                return '<div class="line mt-2">
                    <span class="inline-block w-12 text-gray-200 w-auto mr-4">' . ++$i .'</span>' .

                    $this->clean($block->html(), $replacements) .
                '</div>';
            });

        return join("\n", $results);
    }

    private function clean(string $string, array $replacements): string
    {
        $string = str_replace('  ', '&nbsp;&nbsp;', $string);

        foreach ($replacements as $k => $v) {
            $string = Str::replace($k, $v, $string);
        }

        return $string;
    }

}
