<section>
    <div class="bg-white ">
        <div class="max-w-7xl py-6 px-4 sm:px-6 lg:px-8 grid grid-cols-12">
            <div class="col-span-2">
                <label for="building_id" class="block text-sm font-medium text-gray-900">Building</label>
                <select id="building_id" wire:model.live="building"
                    class="py-2 px-4 pe-9 mt-2 block bg-white border-gray-200 border-2 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                    <option selected="" value="">Building No</option>
                    @foreach ($this->buildings as $building)
                        <option value="{{ $building->id }}">{{ $building->number }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-2 ml-9">
                <label for="section_id" class="block text-sm font-medium text-gray-900">Section</label>
                <select id="section_id" wire:model.live="section"
                    class="py-2 px-4 pe-9 mt-2 block bg-white border-gray-200 border-2 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                    <option selected="" value="">Section</option>
                    @foreach ($this->sections as $section)
                        <option value="{{ $section->id }}">{{ $section->number }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-2">
                <label for="type_id" class="block text-sm font-medium text-gray-900">Type</label>
                <select id="type_id" wire:model.live="type"
                    class="py-2 px-4 pe-9 mt-2 block bg-white border-gray-200 border-2 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                    <option selected="" value="">Entity Type</option>
                    @foreach ($this->types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
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
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase flex flex-col">
                                    Building
                                </th>
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
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Employees
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @php
                                $c =  1;
                            @endphp
                            @foreach ($entities as $entity)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                        {{ $c }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        {{ $entity->building->number }}</td>
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
                                    <td class="px-6 py-4 text-sm text-gray-800">
                                        {{ $entity->users_count }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium flex justify-center gap-4">
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
</section>
