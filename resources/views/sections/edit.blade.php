<x-layout>
    <x-slot name="title">
        Edit Section
    </x-slot>

    <form action="{{ route('sections.update', $section) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="number" class="block text-sm/6 font-medium text-gray-900">Section Number</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <input type="text" name="number" id="number" value="{{ $section->number }}"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Entity Number">
                            </div>
                            @error('number')
                                <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="building_id" class="block text-sm font-medium text-gray-900">Label</label>
                        <select id="building_id"
                            name="building_id"
                            class="py-2 px-4 pe-9 mt-2 block w-full bg-white border-gray-200 border-2 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none ">
                            <option selected="">Building No</option>
                            @foreach ($buildings as $building)
                                <option value="{{ $building->id }}" @selected($section->building_id == $building->id)>{{ $building->number }}</option>
                            @endforeach
                        </select>
                        @error('building_id')
                            <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="col-span-full">
                        <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea name="description" id="description" rows="3"
                                class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ $section->description }}</textarea>
                        </div>
                        @error('description')
                            <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
                        @enderror
                        <p class="mt-3 text-sm/6 text-gray-600">Notes about the section.</p>
                    </div>


                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
</x-layout>
