<x-layout>
    <x-slot name="title">
        Entities
    </x-slot>

    <x-slot name="button">
        <x-add-button route="{{ route('entities.create') }}" />
    </x-slot>

    <div class="flex flex-col">
        @livewire('show-entities')
    </div>

</x-layout>
