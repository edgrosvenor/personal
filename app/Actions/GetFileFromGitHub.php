<?php

namespace App\Actions;

use Illuminate\Support\Facades\Cache;

class GetFileFromGitHub
{
    public function execute(string $string): string
    {
        return Cache::remember(md5($string), 86400, fn() => file_get_contents(
            'https://raw.githubusercontent.com/edgrosvenor/personal/main/' . $string
        ));
    }
}
