<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Devices') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto border-b border-gray-200 bg-white dark:bg-gray-800 p-6">

                    <a href="{{ route('devices.create') }}"
                       class="mb-4 inline-flex items-center rounded-md border border-gray-300 bg-white dark:bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 dark:text-gray-200 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25">
                        Create
                    </a>

                    <div class="min-w-full align-middle">
                        <table class="min-w-full border divide-y divide-gray-200">
                            <thead>
                            <tr>
                                <th class="bg-gray-50 px-6 py-3 text-left">
                                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500 dark:text-gray-200" >Name</span>
                                </th>
                                <th class="bg-gray-50 px-6 py-3 text-left">
                                    <span class="text-xs font-medium uppercase leading-4 tracking-wider text-gray-500 dark:text-gray-200">Address</span>
                                </th>
                                <th class="w-56 bg-gray-50 px-6 py-3 text-left">
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 divide-solid">
                            @foreach($devices as $device)
                                <tr class="bg-white dark:bg-gray-800">
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 dark:text-gray-200 whitespace-no-wrap">
                                        {{ $device->name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 dark:text-gray-200 whitespace-no-wrap">
                                        {{ $device->address }}
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-gray-900 dark:text-gray-200 whitespace-no-wrap">
                                        <a href="{{ route('devices.edit', $device) }}"
                                           class="inline-flex items-center rounded-md border border-gray-300 bg-white dark:bg-gray-800 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 dark:text-gray-200 shadow-sm transition duration-150 ease-in-out hover:bg-gray-50 hover:dark:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25">
                                            Edit
                                        </a>
                                        <form action="{{ route('devices.destroy', $device) }}" method="POST"
                                              onsubmit="return confirm('Are you sure?')" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button>
                                                Delete
                                            </x-danger-button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
