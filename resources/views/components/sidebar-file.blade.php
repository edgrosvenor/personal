<a href="{{ data_get($file, 'url') }}" x-data="{ tooltip: '{{ data_get($file, 'tooltip') }}' }">
    <div x-tooltip="tooltip" class="hover:bg-gray-50 {{ $active ? 'bg-blue-50' : '' }}">
        <i class="fa fa-angle-right {{ $active ? 'text-blue-50' : 'text-white' }}"></i>
        <i class="{{ data_get($file, 'icon', 'fa fa-file') }}"></i>
        <span class="text-black">{{ Str::limit(data_get($file, 'name'), 12) }}</span>
    </div>
</a>
