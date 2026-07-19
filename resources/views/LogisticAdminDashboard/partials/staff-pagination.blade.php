@props([
    'id' => 'rows-per-page',
    'value' => '10',
    'pages' => 'Page 1 of 7',
    'options' => ['10', '25', '50'],
])

<label for="{{ $id }}" class="font-medium text-gray-700">Rows per page</label>
<details id="{{ $id }}" class="staff-select relative">
    <summary class="flex h-10 min-w-[72px] cursor-pointer list-none items-center justify-between gap-3 rounded-xl border border-gray-200 bg-white px-4 text-sm font-semibold text-gray-800 shadow-sm outline-none hover:bg-gray-50">
        <span class="staff-select-value">{{ $value }}</span>
        <i class="fa-solid fa-chevron-down text-[10px] text-gray-500"></i>
    </summary>
    <div class="staff-select-menu absolute bottom-11 right-0 z-50 w-24 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
        @foreach ($options as $option)
            <button type="button" data-staff-select-option="{{ $option }}" class="flex w-full items-center rounded-lg px-3 py-2 text-sm font-medium {{ (string) $option === (string) $value ? 'staff-select-option-active text-white' : 'text-gray-800 hover:bg-gray-50' }}">
                {{ $option }}
            </button>
        @endforeach
    </div>
</details>

<span class="font-medium text-gray-700">{{ $pages }}</span>
<div class="flex items-center gap-1">
    <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-md border border-gray-200 text-gray-400 hover:bg-gray-50">
        <i class="fa-solid fa-angles-left text-[10px]"></i>
    </button>
    <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-md border border-gray-200 text-gray-400 hover:bg-gray-50">
        <i class="fa-solid fa-chevron-left text-[10px]"></i>
    </button>
    <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-md border border-gray-200 text-gray-700 hover:bg-gray-50">
        <i class="fa-solid fa-chevron-right text-[10px]"></i>
    </button>
    <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-md border border-gray-200 text-gray-700 hover:bg-gray-50">
        <i class="fa-solid fa-angles-right text-[10px]"></i>
    </button>
</div>
