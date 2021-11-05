<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class SidebarFolder extends Component
{
    public array $folder;
    public string $label;
    public bool $open = false;
    public array $folders = [];
    public array $files = [];
    public null | string $path = null;

    public function mount(Request $request)
    {
        if (str_contains($request->getRequestUri(), $this->label)) {
            $this->open = true;
        }
        foreach (data_get($this->folder, 'contents') as $key => $item) {
            if (data_get($item, 'url')) {
                $this->files[$key] = $item;
            }
            else {
                $this->folders[$key] = $item;
            }
        }
    }

    public function toggle()
    {
        $this->open = ! $this->open;
    }

    public function render()
    {
        return view('livewire.sidebar-folder');
    }
}
