<?php

namespace App\Http\Controllers;

use App\Actions\FormatAsHighlightedCode;
use Spatie\ShikiPhp\Shiki;

class WelcomeController extends Controller
{
    public function __invoke()
    {

        $code = Shiki::highlight(
            code: file_get_contents(base_path('routes/home.php')),
            language: 'php',
            theme: 'github-light',
        );

        $replacements = ['TALL Stack' => '<a style="text-decoration-style: wavy; text-decoration-color: green;" class="underline" href="https://tallstack.dev/">TALL Stack</a>'];

        return view('welcome',
            ['code' => app(FormatAsHighlightedCode::class)->execute($code, $replacements)]);


    }
}
