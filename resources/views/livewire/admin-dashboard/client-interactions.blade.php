<div class="space-y-8">
    @include('livewire.admin-dashboard._shared-ui')
    <div class="flex items-start justify-between gap-4">
        <div>
            <h2 class="text-lg font-semibold text-gray-950">Client Interactions</h2>
            <p class="mt-1 text-sm text-gray-500">Centralized communication history per client</p>
        </div>

        <button wire:click="toggleForm" type="button"
            class="inline-flex h-9 items-center justify-center gap-2 rounded-md bg-[#2059D4] px-4 text-sm font-medium text-white shadow-sm hover:bg-blue-800">
            <i class="fa-solid {{ $showForm ? 'fa-xmark' : 'fa-plus' }} text-xs"></i>
            {{ $showForm ? 'Close' : 'Log Interaction' }}
        </button>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        @foreach ([['fa-regular fa-envelope','Email'], ['fa-solid fa-phone-volume','Call'], ['fa-regular fa-calendar-days','Meeting'], ['fa-brands fa-whatsapp','WhatsApp']] as $card)
            <div class="flex h-[76px] flex-col items-center justify-center rounded-md bg-[#A8D1FF] text-center">
                <i class="{{ $card[0] }} text-lg text-gray-950"></i>
                <p class="mt-2 text-xs font-semibold text-gray-950">{{ $card[1] }}</p>
            </div>
        @endforeach
    </div>

    @if ($showForm)
        <div class="space-y-5">
            <h3 class="text-sm font-semibold text-gray-950">Log Interaction</h3>

            <div class="grid gap-x-8 gap-y-5 md:grid-cols-2">
                <div>
                    <label class="mb-2 block text-sm font-medium">Client Name *</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Subject</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Company</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>Logistic</option>
                        <option>ICT</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Date</label>
                    <input type="date" class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Channel</label>
                    <select class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                        <option>Email</option>
                        <option>Call</option>
                        <option>Meeting</option>
                        <option>WhatsApp</option>
                    </select>
                </div>

                <div>
                    <label class="mb-2 block text-sm font-medium">Related Projects</label>
                    <input class="h-11 w-full rounded-md border border-gray-200 px-3 text-sm outline-none focus:border-blue-600">
                </div>

                <div class="md:col-span-2">
                    <label class="mb-2 block text-sm font-medium">Notes</label>
                    <textarea placeholder="Notes..."
                        class="h-24 w-full resize-none rounded-md border border-gray-200 px-3 py-2 text-sm outline-none focus:border-blue-600"></textarea>
                </div>
            </div>

            <div class="flex justify-end gap-3">
                <button wire:click="cancelForm" type="button"
                    class="h-10 rounded-md border border-blue-700 px-7 text-sm font-medium text-blue-700">
                    Cancel
                </button>

                <button type="button" class="h-10 rounded-md bg-blue-700 px-8 text-sm font-medium text-white">
                    Save
                </button>
            </div>
        </div>
    @endif

    <div class="rounded-xl bg-white">
        <div class="mb-4">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <input class="h-10 w-full rounded-md border border-gray-200 px-3 text-sm outline-none placeholder:text-gray-400 focus:border-blue-500 sm:w-[280px]"
                        placeholder="Search...">

                    <button type="button"
                        class="inline-flex h-10 items-center gap-2 rounded-md border border-gray-200 bg-white px-3 text-sm font-medium hover:bg-gray-50">
                        <i class="fa-solid fa-arrow-up-wide-short text-xs"></i>
                        Filter
                    </button>
                </div>
            </div>
        </div>

        <div class="hidden overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
            <table class="w-full table-fixed text-left text-xs">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-3 py-3"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Client</th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Subject</th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Company</th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Channel</th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Project</th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Date</th>
                        <th class="px-3 py-3 font-semibold text-gray-950">Status</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($interactions as $interaction)
                        <tr class="border-t border-gray-100">
                            <td class="px-3 py-4"><input type="checkbox" class="h-4 w-4 rounded border-gray-300"></td>
                            <td class="px-3 py-4 font-medium text-gray-900">{{ $interaction['client'] }}</td>
                            <td class="px-3 py-4">{{ $interaction['subject'] }}</td>
                            <td class="px-3 py-4">{{ $interaction['company'] }}</td>
                            <td class="px-3 py-4">
                                <span class="rounded-md border border-blue-500 bg-blue-50 px-2 py-0.5 text-[11px] text-blue-700">
                                    {{ $interaction['channel'] }}
                                </span>
                            </td>
                            <td class="px-3 py-4">{{ $interaction['project'] }}</td>
                            <td class="px-3 py-4">
                                <span class="rounded-md border border-gray-200 px-2 py-0.5 text-[11px]">
                                    {{ $interaction['date'] }}
                                </span>
                            </td>
                            <td class="px-3 py-4">
                                <span class="rounded-md border border-green-500 bg-green-50 px-2 py-0.5 text-[11px] text-green-700">
                                    {{ $interaction['status'] }}
                                </span>
                            </td>
                            <td class="relative px-3 py-4 text-right">
                                @include('AdminDashboard.partials.staff-action-menu')
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="9" class="h-[180px]"></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
            <span>0 of 68 row(s) selected.</span>

            <div class="flex flex-wrap items-center gap-3">
                @include('AdminDashboard.partials.staff-pagination', ['id' => 'client-interactions-rows-per-page'])
            </div>
        </div>
    </div>
</div>
