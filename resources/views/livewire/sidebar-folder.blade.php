<div id="{{ md5($label) }}">
    <div>
        <button type="button" role="button" wire:click="toggle()">
            <i class="fa fa-angle-{{ $open ? 'down' : 'right' }}"></i>
            <i class="{{ data_get($folder, 'icon', 'fa fa-folder') }}"></i>
            <span class="text-black">{{ $label }}</span>
        </button>
    </div>
    <div class="pl-4 {{ $open ? '' : ' hidden' }}">
        @foreach ($folders ?? [] as $key => $item)
            <livewire:sidebar-folder :wire:key="md5($label . $key)" :label="$key" :folder="(array) $item"/>
        @endforeach
        @foreach ($files ?? [] as $key => $item)
            <x-sidebar-file :file="$item" :active="data_get($item, 'url') === request()->getRequestUri()"/>
        @endforeach
    </div>
</div>
