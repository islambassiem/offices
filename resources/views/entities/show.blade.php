<x-layout>

    <x-slot name="title">
        Show Entity
    </x-slot>

    <div>
        <div class="px-4 sm:px-0">
            <h3 class="text-base/7 font-semibold text-gray-900">Entity Information</h3>
            <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">All information about entity.</p>
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="grid grid-cols-12 gap-20">
                    <div class="px-4 py-6 col-span-6 sm:gap-4 sm:px-0 flex justify-between">
                        <dt class="text-sm/6 font-medium text-gray-900">Building Number</dt>
                        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                            {{ $entity->building_id }}</dd>
                    </div>
                    <div class="px-4 py-6 col-span-6 sm:gap-4 sm:px-0 flex justify-between">
                        <dt class="text-sm/6 font-medium text-gray-900">Section</dt>
                        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $entity->section->number }}
                        </dd>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-20">
                    <div class="px-4 py-6 col-span-6 sm:gap-4 sm:px-0 flex justify-between">
                        <dt class="text-sm/6 font-medium text-gray-900">Type</dt>
                        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $entity->entityType->name }}</dd>
                    </div>
                    <div class="px-4 py-6 col-span-6 sm:gap-4 sm:px-0 flex justify-between">
                        <dt class="text-sm/6 font-medium text-gray-900">Number</dt>
                        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $entity->number }}</dd>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-20">
                    <div class="px-4 py-6 col-span-6 sm:gap-4 sm:px-0 flex justify-between">
                        <dt class="text-sm/6 font-medium text-gray-900">Keys</dt>
                        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $entity->keys_count }}</dd>
                    </div>
                    @if ($entity->entity_type_id == 1)
                        <div class="px-4 py-6 col-span-6 sm:gap-4 sm:px-0 flex justify-between">
                            <dt class="text-sm/6 font-medium text-gray-900">Single</dt>
                            <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                                @if ($entity->singularity)
                                    <x-check />
                                @else
                                    <x-cross />
                                @endif
                            </dd>
                        </div>
                    @endif
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm/6 font-medium text-gray-900">Description</dt>
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $entity->description }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm/6 font-medium text-gray-900">Employees</dt>
                    <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                        <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                            @if ($entity->users->count() > 0)
                                @foreach ($entity->users as $user)
                                    <li class="flex items-center justify-between py-4 pl-4 text-sm/6">
                                        <div class="flex w-0 flex-1 items-center">
                                            <div class="ml-4 flex min-w-0 flex-1">
                                                <div class="w-8">{{ $user->id }}</div>
                                                <span>|</span>
                                                <div class="truncate font-medium ml-2">{{ $user->name }}</div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <div class="p-3">
                                    <span>There are no employees</span>
                                </div>
                            @endif
                        </ul>
                    </dd>
                </div>
            </dl>
        </div>
    </div>


</x-layout>
