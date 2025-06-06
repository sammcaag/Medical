<div class="">
    <h4 class="text-xl mb-4 font-bold dark:text-white">Student Classification</h4>
    <ul class="flex flex-col w-full gap-6">
        <li>
            <input type="radio" wire:click="typeSelect('A')" @checked($default === 'A') id="type-a"
                name="classification" value="type-a" class="hidden peer" required />
            <label for="type-a"
                class="inline-flex items-center justify-between w-full p-5 text-gray-700 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                    <div class="w-full text-lg font-semibold">Type A</div>
                    <div class="w-full">Medically, physically, and mentally FIT for ANY WORK or STUDY</div>
                </div>
                <svg class="w-5 h-5 min-w-fit ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </label>
        </li>
        <li>
            <input type="radio" wire:click="typeSelect('B')" @checked($default === 'B') id="type-b"
                name="classification" value="type-b" class="hidden peer">
            <label for="type-b"
                class="inline-flex items-center justify-between w-full p-5 text-gray-700 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                    <div class="w-full text-lg font-semibold">Type B</div>
                    <div class="w-full">Physically under-developed or with corrective defects (i.e. error of refraction,
                        dental carries, defective hearing), but otherwise FIT TO WORK or STUDY</div>
                </div>
                <svg class="w-5 h-5 min-w-fit ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </label>
        </li>
        <li>
            <input type="radio" wire:click="typeSelect('C')" @checked($default === 'C') id="type-c"
                name="classification" value="type-c" class="hidden peer" required />
            <label for="type-c"
                class="inline-flex items-center justify-between w-full p-5 text-gray-700 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="block">
                    <div class="w-full text-lg font-semibold">Type C</div>
                    <div class="w-full">Can study but owing to certain impairments or condition (heart disease, HPN,
                        anatomical defects,
                        Diabetes Mellitus) requiring special placement or limited duty in specified assignments</div>
                </div>
                <svg class="w-5 h-5 min-w-fit ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />
                </svg>
            </label>
        </li>
    </ul>
    <button type="button" wire:click="saveToDatabase"
        class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">
        Save
    </button>
    <!-- Flash Messages -->
    @if (session()->has('message'))
        <div class="text-green-600 font-medium">{{ session('message') }}</div>
    @endif
    @if (session()->has('error'))
        <div class="text-red-600 font-medium">{{ session('error') }}</div>
    @endif
</div>
