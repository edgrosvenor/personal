<div>
    <div>
        <div class="bg-gray-50 px-4 py-1 text-gray-600 border-b-2 border-gray-400">
            <i class="fa fa-window"></i> Project &#9660;
        </div>
        <div class="pl-2 pt-1 text-gray-400">
            <div>
                <i class="fa fa-angle-down"></i>
                <i class="fa fa-folder"></i>
                <span class="font-bold text-black">gros.co</span>
                <span class="text-xs">~/projects/sites/gros.co</span>
            </div>
            <div class="pl-4 overflow-y-scroll">
                @foreach (config('folders') as $label => $folder)
                    <livewire:sidebar-folder :folder="$folder" :label="$label"/>
                @endforeach
                @foreach ($files as $key => $file)
                <x-sidebar-file :file="$file" :active="$file['url'] === $page"/>
                @endforeach
            </div>
        </div>

    </div>
</div>
