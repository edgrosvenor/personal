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
            <div class="pl-4">
                <div>
                    <i class="fa fa-angle-right"></i>
                    <i class="fa fa-folder text-blue-400"></i>
                    <span class="text-black">app</span>
                </div>
                <div>
                    <i class="fa fa-angle-right"></i>
                    <i class="fa fa-folder"></i>
                    <span class="text-black">bootstrap</span>
                </div>
                <div>
                    <i class="fa fa-angle-right"></i>
                    <i class="fa fa-folder"></i>
                    <span class="text-black">config</span>
                </div>
                <div>
                    <i class="fa fa-angle-right"></i>
                    <i class="fa fa-folder"></i>
                    <span class="text-black">database</span>
                </div>
                <div>
                    <i class="fa fa-angle-right"></i>
                    <i class="fa fa-folder"></i>
                    <span class="text-black">node_modules</span>
                    <span class="text-xs">library root</span>
                </div>
                <div>
                    <i class="fa fa-angle-right"></i>
                    <i class="fa fa-folder"></i>
                    <span class="text-black">public</span>
                </div>
                <div>
                    <i class="fa fa-angle-right"></i>
                    <i class="fa fa-folder"></i>
                    <span class="text-black">resources</span>
                </div>
                <div>
                    <i class="fa fa-angle-right"></i>
                    <i class="fa fa-folder"></i>
                    <span class="text-black">routes</span>
                </div>
                <div>
                    <i class="fa fa-angle-right"></i>
                    <i class="fa fa-folder text-yellow-500"></i>
                    <span class="text-black">storage</span>
                </div>
                <div>
                    <i class="fa fa-angle-right"></i>
                    <i class="fa fa-folder text-green-500"></i>
                    <span class="text-black">tests</span>
                </div>
                <div>
                    <i class="fa fa-angle-right"></i>
                    <i class="fa fa-folder"></i>
                    <span class="text-black">vendor</span>
                </div>
                @foreach ($files as $key => $file)
                <x-sidebar-file :file="$file" :active="$file['url'] === $page"/>
                @endforeach
            </div>
        </div>

    </div>
</div>
