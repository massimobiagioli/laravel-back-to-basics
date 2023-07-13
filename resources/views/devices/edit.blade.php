<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Device') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto border-b border-gray-200 bg-white dark:bg-gray-800 p-6">
                    <form action="{{ route('devices.update', $device) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="name" value="Name"/>
                            <x-text-input id="name" name="name" value="{{ old('name', $device->name) }}" type="text"
                                          class="block mt-1 w-full"/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                        </div>

                        <div>
                            <x-input-label for="address" value="Address"/>
                            <x-text-input id="address" name="address" value="{{ old('address', $device->address) }}" type="text"
                                          class="block mt-1 w-full"/>
                            <x-input-error :messages="$errors->get('address')" class="mt-2"/>
                        </div>

                        <div class="mt-4">
                            <x-primary-button>
                                Save
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
