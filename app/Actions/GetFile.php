<?php

namespace App\Actions;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GetFile
{
    public function execute(string $string): null | string
    {

        if (! config('settings.serve-from-github')) {
            return file_get_contents(base_path($string));
        }

        [$status, $body] = Cache::remember(md5($string), 86400, function() use ($string) {
            $page = Http::get('https://raw.githubusercontent.com/edgrosvenor/personal/main/' . $string);

            return [$page->status(), $page->body()];
        });

        return $status < 299 ? $body : null;


    }
}
