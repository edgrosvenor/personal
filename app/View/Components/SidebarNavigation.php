<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarNavigation extends Component
{
    public null | string $page;
    public array $folders;
    public array $files;

    public function __construct()
    {
        $this->page = ltrim(request()?->getRequestUri(), '/');

        $this->folders = [];
        $this->files = config('files');

        ksort($this->files);
    }
    public function render(): View|Factory|Htmlable|\Closure|string|Application
    {
        return view('components.sidebar-navigation');
    }
}
