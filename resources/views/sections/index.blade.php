<x-layout>
    <x-slot name="title">
        Sections
    </x-slot>
    <x-slot name="button">
        <x-add-button route="{{ route('sections.create') }}" />
    </x-slot>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">#</th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Number</th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Description
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @php
                                $page = request()->get('page');
                                $c = $page > 1 ? $page * $perPage - ($perPage - 1) : 1;
                            @endphp
                            @foreach ($sections as $section)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                        {{ $c }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        {{ $section->number }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">
                                        {{ Str::limit($section->description, 100, '...') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a href="{{ route('sections.edit', $section) }}"
                                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Edit</a>
                                    </td>
                                </tr>
                                @php
                                    $c++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                    {{ $sections->links() }}
                </div>
            </div>
        </div>
    </div>


</x-layout>

