<x-layout>

    <x-slot name="title">
        Edit Entity
    </x-slot>

    <form action="{{ route('entities.update', $entity) }}" method="post">
        @csrf
        @method('PUT')
        <div class="px-4 sm:px-0">
            <h3 class="text-base/7 font-semibold text-gray-900">Entity Information</h3>
            <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">All information about entity.</p>
        </div>
        <div class="border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="grid grid-cols-12 gap-20">
                    <div class="px-4 py-6 col-span-6 sm:gap-4 sm:px-0 flex justify-between">
                        <dd class="mt-1 text-sm/6 text-gray-700 col-span-6 sm:mt-0 w-full">
                            <div class="sm:col-span-2">
                                <label for="building_id" class="block text-sm font-medium text-gray-900">Building
                                    No</label>
                                <select id="building_id" name="building_id"
                                    class="py-2 px-4 pe-9 mt-2 block w-full bg-white border-gray-200 border-2 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                                    <option selected="" disabled>Building No</option>
                                    @foreach ($buildings as $building)
                                        <option value="{{ $building->id }}" @selected($building->id == $entity->building_id)>
                                            {{ $building->number }}</option>
                                    @endforeach
                                </select>
                                @error('building_id')
                                    <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </dd>
                    </div>
                    <div class="px-4 py-6 col-span-6 sm:gap-4 sm:px-0 flex justify-between">
                        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 w-full">
                            <div class="sm:col-span-2">
                                <label for="section_id" class="block text-sm font-medium text-gray-900">Section</label>
                                <select id="section_id" name="section_id"
                                    class="py-2 px-4 pe-9 mt-2 block w-full bg-white border-gray-200 border-2 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                                    <option selected="" disabled >Section</option>
                                    @foreach ($sections as $section)
                                        <option value="{{ $section->id }}" @selected($section->id == $entity->section_id)>
                                            {{ $section->number }}</option>
                                    @endforeach
                                </select>
                                @error('section_id')
                                    <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </dd>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-20">
                    <div class="px-4 py-6 col-span-6 sm:gap-4 sm:px-0 flex justify-between">
                        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 w-full">
                            <div class="sm:col-span-2">
                                <label for="entity_type_id" class="block text-sm font-medium text-gray-900">Type</label>
                                <select id="entity_type_id" name="entity_type_id"
                                    class="py-2 px-4 pe-9 mt-2 block w-full bg-white border-gray-200 border-2 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                                    <option selected="" disabled>Type</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}" @selected($type->id == $entity->entity_type_id)>
                                            {{ $type->name }}</option>
                                    @endforeach
                                </select>
                                @error('entity_type_id')
                                    <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </dd>
                    </div>
                    <div class="px-4 py-6 col-span-6 sm:gap-4 sm:px-0 flex justify-between">
                        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 w-full">
                            <div class="sm:col-span-4">
                                <label for="number" class="block text-sm/6 font-medium text-gray-900">Entity
                                    Number</label>
                                <div class="mt-2">
                                    <div
                                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                        <input type="text" name="number" id="number"
                                            value="{{ $entity->number }}"
                                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                            placeholder="Entity Number">
                                    </div>
                                    @error('number')
                                        <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </dd>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-20">
                    <div class="px-4 py-6 col-span-6 sm:gap-4 sm:px-0 flex justify-between">
                        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0 w-full">
                            <div class="sm:col-span-4">
                                <label for="keys_count" class="block text-sm/6 font-medium text-gray-900">Keys</label>
                                <div class="mt-2">
                                    <div
                                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                        <input type="number" name="keys_count" id="keys_count" min="0"
                                            value="{{ $entity->keys_count }}"
                                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                            placeholder="Keys">
                                    </div>
                                    @error('keys_count')
                                        <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </dd>
                    </div>
                    <div class="px-4 py-6 col-span-6 sm:gap-4 sm:px-0 flex justify-between" id="single">
                        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                            <label class="inline-flex items-center cursor-pointer mt-8">
                                <input type="checkbox" name="singularity" class="sr-only peer"
                                    @checked($entity->singularity)>
                                <span class="ms-3 text-sm font-medium text-gray-900 mx-3">Single</span>
                                <div
                                    class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600 dark:peer-checked:bg-blue-600">
                                </div>
                            </label>
                        </dd>
                    </div>
                </div>
                <div class="px-4 py-6 sm:grid sm:gap-4 sm:px-0">
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:mt-0 w-full">
                        <div class="col-span-full">
                            <label for="description"
                                class="block text-sm/6 font-medium text-gray-900">Description</label>
                            <div class="mt-2">
                                <textarea name="description" id="description" rows="3"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ $entity->description }}</textarea>
                            </div>
                            @error('description')
                                <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </dd>
                </div>
            </dl>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>

    <script>
        document.getElementById('entity_type_id').addEventListener('change', (e) => {
            if (e.target.value == 1) {
                document.getElementById('single').classList.remove('hidden');
                document.getElementById('single').classList.add('flex');
            } else {
                document.getElementById('single').classList.remove('flex');
                document.getElementById('single').classList.add('hidden');
            }
        })
    </script>

</x-layout>
