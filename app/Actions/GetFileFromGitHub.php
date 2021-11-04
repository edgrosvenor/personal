<?php

namespace App\Actions;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GetFileFromGitHub
{
    public function execute(string $string): null | string
    {

        if ((config('app.env') === 'local') && file_exists(base_path($string))) {

            return file_get_contents(base_path($string));
        }
        [$status, $body] = Cache::remember(md5($string), 86400, function() use ($string) {
            $page = Http::get('https://raw.githubusercontent.com/edgrosvenor/personal/main/' . $string);

            return [$page->status(), $page->body()];
        });

        return $status < 299 ? $body : null;


    }
}
