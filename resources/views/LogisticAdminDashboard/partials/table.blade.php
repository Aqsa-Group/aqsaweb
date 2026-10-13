<div class="overflow-visible rounded-lg border border-gray-200 bg-white">
    <table class="min-w-full text-left text-sm">
        <thead class="bg-gray-100 text-gray-800">
            <tr>
                <th class="w-10 px-4 py-3"><input type="checkbox" class="rounded border-gray-300"></th>
                <th class="px-4 py-3 font-medium">Contract</th>
                <th class="px-4 py-3 font-medium">Status</th>
                <th class="px-4 py-3 font-medium">Organization</th>
                <th class="px-4 py-3 font-medium">Amount</th>
                <th class="w-10 px-4 py-3"></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @foreach ($rows as $row)
                @php
                    $statusClass = match ($row[1]) {
                        'Active' => 'bg-green-50 text-green-600 ring-green-200',
                        'Approved' => 'bg-blue-50 text-blue-600 ring-blue-200',
                        'Under Review' => 'bg-orange-50 text-orange-600 ring-orange-200',
                        default => 'bg-gray-50 text-gray-600 ring-gray-200',
                    };
                @endphp
                <tr>
                    <td class="px-4 py-4"><input type="checkbox" class="rounded border-gray-300"></td>
                    <td class="px-4 py-4 font-medium text-gray-900">{{ $row[0] }}</td>
                    <td class="px-4 py-4"><span class="rounded px-2 py-1 text-xs ring-1 {{ $statusClass }}">{{ $row[1] }}</span></td>
                    <td class="px-4 py-4">{{ $row[2] }}</td>
                    <td class="px-4 py-4">{{ $row[3] }}</td>
                    <td class="relative px-4 py-4 text-right">
                        @include('LogisticAdminDashboard.partials.staff-action-menu')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="flex flex-col gap-3 border-t border-gray-200 px-4 py-4 text-sm text-gray-500 sm:flex-row sm:items-center sm:justify-between">
        <span>0 of 68 row(s) selected.</span>
        <div class="flex flex-wrap items-center gap-3">
            @include('LogisticAdminDashboard.partials.staff-pagination', ['id' => 'shared-table-rows-per-page'])
        </div>
    </div>
</div>
