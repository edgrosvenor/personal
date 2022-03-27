<?php

namespace App\Actions;

use Illuminate\View\ComponentAttributeBag;

class MergeTailwindClasses
{
    public function __invoke(?string $base, ComponentAttributeBag | string $override): string
    {

        $override = $override instanceof ComponentAttributeBag
            ? $override->get('class') : $override;

        $patterns = [
            'text-[a-z]+-[\d]00',
            'bg-[a-z]+-[\d]00',
            // ...
        ];
        $search = [];
        $replace = [];

        foreach ($patterns as $pattern) {
            preg_match("/$pattern/", $base, $removals);
            preg_match("/$pattern/", $override, $additions);
            if (data_get($removals, 0)) {
                $search[] = data_get($removals, 0);
                $replace[] = data_get($additions, 0, data_get($removals, 0));
            }
            $override = preg_replace("/$pattern/", '', $override);
        }

        return str_replace($search, $replace, $base) . " $override";
    }
}
