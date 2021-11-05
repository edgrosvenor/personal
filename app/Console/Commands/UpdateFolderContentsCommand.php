<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class UpdateFolderContentsCommand extends Command
{
    protected $signature = 'folders';
    private array $files = [];

    public function handle()
    {
        $folders = ['app', 'bootstrap', 'config', 'resources', 'routes', 'tests'];
        foreach ($folders as $folder) {
            $contents = $this->dirToArray(base_path($folder));
            $contents = $this->addUrlsToFiles($folder, $contents);

            \File::put(base_path('config/.folders/') . $folder . '.json', json_encode($contents));
        }
        \File::put(base_path('config/.files'), json_encode($this->files));
    }

    private function dirToArray($dir): array
    {

        $result = [];

        foreach (scandir($dir) as $key => $value)
        {
            if (!in_array($value,array(".","..")))
            {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
                {
                    $result[$value] = ['contents' => $this->dirToArray($dir . DIRECTORY_SEPARATOR . $value)];
                }
                else
                {
                    $result[$value] = ['name' => $value, 'url' => $value, 'tooltip' => $value];
                }
            }
        }

        return $result;
    }

    private function addUrlsToFiles(string $directory, array $contents): array
    {
        $results = [];
        foreach ($contents as $key => $item) {
            if (str_contains($key, '.')) {
                if (str_starts_with($key, '.')) {
                    continue;
                }
                $item['url'] = Str::replace('/contents/', '/', '/' . $directory . '/' . $key);
                if (str_ends_with($key, '.php') && strlen($key) > 6 && preg_match('~^\p{Lu}~u', $key)) {
                    $this->files[str_replace('.php', '', $key)] = '<a href="' . Str::replace('/contents/', '/', '/'
                            . $directory .
                            '/' .
                            $key) . '">' . str_replace('.php', '', $key) . '</a>';
                }

                $results[$key] = $item;
            }
            else {
                $results[$key] = $this->addUrlsToFiles($directory . '/' . $key, $item);
            }
        }
        return $results;
    }

}
