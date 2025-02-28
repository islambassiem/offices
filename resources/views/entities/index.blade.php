<x-layout>
    <x-slot name="title">
        Entities
    </x-slot>

    <x-slot name="button">
        <x-add-button route="{{ route('entities.create') }}" />
    </x-slot>

    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">#</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                        Building</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Section
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Type
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Number
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Single
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Keys
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                @php
                                    $page = request()->get('page');
                                    $c = $page > 1 ? $page * $perPage - ($perPage - 1) : 1;
                                @endphp
                                @foreach ($entities as $entity)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $c }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $entity->section->building->number }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-800">
                                            {{ $entity->section->number }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-800">
                                            {{ $entity->entityType->name }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-800">
                                            {{ $entity->number }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-800">
                                            @if ($entity->singularity)
                                                <x-check />
                                            @else
                                                <x-cross />
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-800">
                                            {{ $entity->keys_count }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium flex justify-center gap-4">
                                            <a href="{{ route('entities.show', $entity) }}"
                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Show</a>
                                            <a href="{{ route('entities.edit', $entity) }}"
                                                class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Edit</a>
                                        </td>
                                    </tr>
                                    @php
                                        $c++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                        {{ $entities->links() }}
                    </div>
                </div>
            </div>
        </div>

</x-layout>
