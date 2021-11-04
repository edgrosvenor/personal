<?php

namespace App\Actions;

use Illuminate\Support\Str;

class SanitizeOutput
{
    public function execute(string $string): string
    {
        $string = str_replace('  ', '&nbsp;&nbsp;', $string);

        foreach (config('replacements') as $k => $v) {
            $string = Str::replace($k, $v, $string);
        }

        return $string;
    }

}
