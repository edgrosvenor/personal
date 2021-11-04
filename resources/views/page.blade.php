<x-app-layout>
    <div class="text-lg p-4 cursor-text">
        <div x-show="show === 'code'">{!! $code !!}</div>
        <div x-show="show === 'display'" class="prose max-w-7xl min-h-screen py-6">
            {!! $display !!}
        </div>
    </div>
    <x-slot name="breadcrumb">
        <i class="fa fa-folder"></i>
        gros.co {{ $breadcrumb }}
    </x-slot>
    @if ($display !== '')
        <span x-init="toggle = true"></span>
        <span x-init="show = 'display'"></span>
    @endif
</x-app-layout>
