<?php

namespace App\Http\Controllers;

use App\Actions\FormatAsHighlightedCode;
use App\Actions\GetFile;
use App\Actions\SanitizeOutput;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Spatie\ShikiPhp\Shiki;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class PageController
{
    /**
     * @throws Throwable
     */
    public function __invoke(Request $request): Factory|View|Application
    {
        $page = ltrim($request->getRequestUri(), '/.');


        if ($page === '') {
            $page = 'README.md';
        }

        $contents = app(GetFile::class)->execute($page);

        throw_if($contents === null, NotFoundHttpException::class);

        $code = \Cache::remember(md5($page), 600, function() use ($contents, $page) {
            try {
                $code = Shiki::highlight(
                    code: $contents,
                    language: last(explode('.', $page)),
                    theme: 'github-light',
                );
            } catch(Throwable $exception) {
                $code = '';
                foreach (explode("\n", $contents) as $line) {
                    $code .= '<div class="line">' . $line . '</div>' . "\n";
                }
            }
            return $code;
        });

        $display = Str::endsWith($page, '.md')
            ? app(MarkdownRenderer::class)->toHtml($contents)
            : '';

        foreach (json_decode(file_get_contents(base_path('config/.files'))) as $k => $v) {
            $search = '<span style="color: #0550AE">' . $k . '</span>';
            $replace = '<span style="color: #0550AE">' . $v . '</span>';
            $code = str_replace($search, $replace, $code);
        }


        return view('page', [
            'code' => app(FormatAsHighlightedCode::class)->execute($code),
            'display' => app(SanitizeOutput::class)->execute($display),
            'breadcrumb' => ' > ' . implode(' > ', explode('/', $page)),
        ]);
    }
}
