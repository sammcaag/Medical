<div class="space-y-6 w-full" x-data="{ isModalOpen: @entangle('isModalOpen') }">
    {{-- table --}}
    <div class="flex flex-col">
        <div class="overflow-x-auto rounded-lg">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                @foreach ($headers as $header)
                                    <th scope="col"
                                        class="p-3 border text-gray-900 font-bold text-sm dark:border-gray-700 text-left uppercase dark:text-gray-400">
                                        {{ $header }}
                                    </th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @forelse ($datas as $data)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700" wire:key="{{ $data->id }}">
                                    <td class="flex items-center p-4 space-x-6 whitespace-nowrap">
                                        <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                            <div class="text-base text-gray-900 dark:text-white">
                                                {{ $data->patient_id }}
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->patient->full_name }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->patient->age }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->patient->gender }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->patient->year_level ?? '3rd year' }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->patient->department ?? 'CITC' }}
                                    </td>
                                    <td
                                        class="p-4 border dark:border-gray-700 text-base font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        {{ $data->primary_diagnosis }}
                                    </td>
                                    <td class="p-4 border whitespace-nowrap dark:text-white">
                                        <span
                                            class="p-4 space-x-2 text-sm text-gray-500 whitespace-nowrap dark:text-white">
                                            {{ $data->status }}
                                        </span>
                                    </td>
                                    <td class="p-4 space-x-2 text-sm text-gray-500 whitespace-nowrap dark:text-white">
                                        <button @click="isModalOpen = true"
                                            wire:click="openModal({{ $data->patient_id }})"
                                            class="hover:bg-blue-800 text-white bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Confirm Profiles
                                        </button>

                                        <a href="/health-profile/create-form/{{ $data->patient_id }}/summary"
                                            wire:click="setSession({{ $data->patient_id }})"
                                            class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            View Form
                                        </a>

                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" rowspan="10" class="text-center py-40 text-xl font-semibold">
                                        No patient with that matching ID available
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div
        class="sticky bottom-0 right-0 items-center justify-between w-full p-4 bg-white border-t border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        {{ $datas->links() }}
    </div>

    <!-- Modal -->
    <div x-show="isModalOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
        x-transition>
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow-lg dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-3 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    @click="isModalOpen = false" wire:click="closeModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path fill="currentColor"
                            d="M10 2a8 8 0 1 1 0 16 8 8 0 0 1 0-16zm0 14a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                    </svg>
                    <h3 class="mb-4 text-lg font-normal text-gray-500 dark:text-gray-400">Confirm this patient's health
                        profile?</h3>
                    <div class="space-x-2">
                        <button type="button"
                            class="px-6 py-2.5 text-sm text-white bg-green-600 rounded-lg focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800"
                            wire:click="confirmProfile">Yes</button>
                        <button type="button"
                            class="px-6 py-2.5 text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-500 dark:focus:ring-gray-600"
                            @click="isModalOpen = false">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
