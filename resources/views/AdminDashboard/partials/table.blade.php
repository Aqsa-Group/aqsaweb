<div class="overflow-hidden rounded-lg border border-gray-200 bg-white">
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
                    <td class="px-4 py-4 text-right"><i class="fa-solid fa-ellipsis-vertical"></i></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="flex flex-col gap-3 border-t border-gray-200 px-4 py-4 text-sm text-gray-500 sm:flex-row sm:items-center sm:justify-between">
        <span>0 of 68 row(s) selected.</span>
        <span>Rows per page <b class="mx-2 rounded border border-gray-200 px-3 py-2 text-gray-900">10</b> Page 1 of 7</span>
    </div>
</div>
