<div>
    <div>

        <input type="hidden" id="patient-id-field" wire:model="patientId" />

        <h4 class="text-xl mb-4 font-bold dark:text-white">Social History</h4>
        <div class="grid ml-6 gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="smoking" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                    Smoking (Cigarrates, Vape, E-Cigar)?
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio :default="$smoking" title="Yes" id="smoke-yes" value="Yes" name="smoking" />
                    <livewire:radio :default="$smoking" title="No" id="smoke-no" value="No" name="smoking" />
                    <livewire:radio :default="$smoking" title="Quitted" id="smoke-quitted" value="Quitted"
                        name="smoking" />
                </div>
                @if ($smoking === 'Yes')
                    <div class="flex gap-6 mt-4">
                        <div class="flex-1">
                            <label for="smoking-details-packs"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pack/day</label>
                            <input type="number" id="smoking-details-packs" wire:model="packPerDay"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required />
                        </div>
                        <div class="flex-1">
                            <label for="smoking-details-years"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Years</label>
                            <input type="number" id="smoking-details-years" wire:model="packInYears"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required />
                        </div>
                    </div>
                @endif
            </div>

            <div>
                <label for="alcohol" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                    Drinking Alcohol (Beer, Rhum, Gin)?
                </label>

                <div class="flex ml-4 gap-6">
                    <livewire:radio :default="$alcohol" title="Yes" id="alcohol-yes" value="Yes" name="alcohol" />
                    <livewire:radio :default="$alcohol" title="No" id="alcohol-no" value="No" name="alcohol" />
                    <livewire:radio :default="$alcohol" title="Quitted" id="alcohol-quitted" value="Quitted"
                        name="alcohol" />
                </div>
                @if ($alcohol === 'Yes')
                    <div class="flex gap-6 mt-4">
                        <div class="flex-1">
                            <label for="beer-type"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Beer Type</label>
                            <div class="flex ml-4 gap-6">
                                <livewire:radio :default="$alcoholType" title="Beer/Rhum" id="beer-alcohol" value="Beer/Rhum"
                                    name="alcohol-type" />
                                <livewire:radio :default="$alcoholType" title="Others" id="others-alcohol" value="others"
                                    name="alcohol-type" />
                            </div>
                        </div>
                        <div class="flex-1">
                            <div>
                                <label for="bottles-per-session"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bottles/Session</label>
                                <input type="number" id="bottles-per-session" wire:model="bottlesPerSession"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="" required />
                            </div>
                            <div>
                                <label for="bottles-per-session"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Frequency</label>
                                <div class="flex ml-4 gap-6">
                                    <livewire:radio :default="$alcoholFrequency" title="Occasionally" id="occasionally-frequency"
                                        value="ocassionally" name="alcohol-frequency" />
                                    <livewire:radio :default="$alcoholFrequency" title="Monthly" id="monthly-frequency"
                                        value="monthly" name="alcohol-frequency" />
                                </div>
                            </div>

                        </div>
                    </div>
                @endif
            </div>
            <div>
                <label for="drugs" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you using
                    Illegal Drugs/Subtance?
                </label>
                <div class="flex ml-4 gap-6">
                    <livewire:radio :default="$drug" title="Yes" id="drug-yes" value="Yes" name="drug" />
                    <livewire:radio :default="$drug" title="No" id="drug-no" value="No" name="drug" />
                    <livewire:radio :default="$drug" title="Quitted" id="drug-quitted" value="Quitted"
                        name="drug" />
                </div>
                @if ($drug === 'Yes')
                    <div class="flex gap-6 mt-4">
                        <div class="flex-1">
                            <label for="smoking-details-packs"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">What Kind?</label>
                            <input type="text" id="drug-details" wire:model="drugType"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required />
                        </div>
                    </div>
                @endif
            </div>
            <div>
                <label for="smoking" class="block mb-3 font-medium text-gray-900 dark:text-white">Are you
                    Sexually Active?
                </label>

                <div class="flex ml-4 gap-6">
                    <livewire:radio :default="$sex" title="Yes" id="sex-yes" value="Yes"
                        name="sex" />
                    <livewire:radio :default="$sex" title="No" id="sex-no" value="No"
                        name="sex" />
                    <livewire:radio :default="$sex" title="Quitted" id="sex-quitted" value="Quitted"
                        name="sex" />

                </div>
                @if ($sex === 'Yes')
                    <div class="flex flex-col gap-6 mt-4">
                        <div class="flex-1">
                            <label for="smoking-details-packs"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">How many sexual
                                partners within this year?</label>
                            <input type="number" id="sex-details" wire:model="partnerCount"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="" required />
                        </div>
                        <div class="flex-1">
                            <label for="smoking-details-packs"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Partner
                                Type</label>
                            <div class="flex gap-2">
                                <livewire:radio title="Male" id="sex-male" value="Male" name="partner-type" />
                                <livewire:radio title="Female" id="sex-female" value="Female" name="partner-type" />
                                <livewire:radio title="Both" id="sex-both" value="Both" name="partner-type" />
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <button type="button" wire:click="saveToSession"
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


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const patientId = localStorage.getItem('patientID');
        console.log("Social", patientId);

        if (patientId) {

            // Find the hidden input and update it with the retrieved patientId
            document.getElementById('patient-id-field').value = patientId;
            // Trigger Livewire to update the property
            @this.set('patientId', patientId);
        }
    });
</script>
