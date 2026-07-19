<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AQSA SYSTEM')</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/aqsa.jpg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * { font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
        html, body { max-width: 100%; overflow-x: hidden; }
        body { background: #ffffff; color: #111827; }
        .admin-shell { min-height: 100vh; display: grid; grid-template-columns: 252px minmax(0, 1fr); }
        .admin-sidebar { background: #0d2545; color: #FAFAFA; }
        .admin-sidebar a, .admin-sidebar button { transition: background .18s ease, color .18s ease; }
        .sidebar-active { background: #365b89; color: #ffffff; }
        .erp-card { border: 1px solid #e5e7eb; border-radius: 8px; background: #f7f7f7; }
        .metric-card { border-radius: 8px; box-shadow: 0 4px 12px rgba(15, 23, 42, .14); }
        .bar-grid { background-image: linear-gradient(#e5e7eb 1px, transparent 1px), linear-gradient(90deg, #e5e7eb 1px, transparent 1px); background-size: 25% 25%; }
        .mobile-admin-topbar { background: #0d2545; border-bottom: 1px solid rgba(255,255,255,.12); }
        .mobile-admin-topbar a, .mobile-admin-topbar summary { color: #ffffff; }
        .mobile-admin-topbar .mobile-brand-title { color: #ffffff; }
        .mobile-admin-topbar .mobile-brand-subtitle { color: #bfdbfe; }
        .mobile-admin-bottom { background: #0d2545; box-shadow: 0 -10px 28px rgba(15, 23, 42, .22); }
        .mobile-profile-menu { position: relative; }
        .mobile-profile-menu summary { list-style: none; cursor: pointer; }
        .mobile-profile-menu summary::-webkit-details-marker { display: none; }
        .mobile-profile-dropdown { position: absolute; right: 0; top: 48px; z-index: 70; display: grid; min-width: 190px; gap: 6px; border-radius: 16px; border: 1px solid #e5e7eb; background: #ffffff; padding: 8px; box-shadow: 0 16px 32px rgba(15, 23, 42, .16); }
        .mobile-profile-dropdown a { display: flex; align-items: center; gap: 8px; min-height: 38px; border-radius: 12px; padding: 0 10px; color: #344054; font-size: 12px; }
        .mobile-profile-dropdown a.is-active { background: #2563eb; color: #ffffff; }
        .mobile-profile-dropdown svg { width: 18px; height: 18px; flex: 0 0 auto; color: currentColor; }
        .mobile-profile-dropdown svg * { stroke: currentColor !important; }
        .mobile-profile-dropdown svg [fill]:not([fill="none"]) { fill: currentColor !important; }
        .mobile-nav-grid { display: grid; width: 100%; grid-template-columns: repeat(6, minmax(0, 1fr)); align-items: end; gap: 0; }
        .mobile-nav-menu { position: relative; min-width: 0; }
        .mobile-nav-menu summary { list-style: none; }
        .mobile-nav-menu summary::-webkit-details-marker { display: none; }
        .mobile-nav-item { width: 100%; min-width: 0; height: 54px; display: inline-flex; flex-direction: column; align-items: center; justify-content: center; gap: 4px; border-radius: 12px; color: #dbeafe; font-size: 8px; line-height: 1; white-space: nowrap; overflow: hidden; cursor: pointer; padding: 0 2px; }
        .mobile-nav-item span { max-width: 100%; overflow: hidden; text-overflow: ellipsis; }
        .mobile-nav-item i { font-size: 15px; color: currentColor; }
        .mobile-nav-item svg { width: 18px; height: 18px; flex: 0 0 auto; color: currentColor; }
        .mobile-nav-item svg * { stroke: currentColor !important; }
        .mobile-nav-item svg [fill]:not([fill="none"]) { fill: currentColor !important; }
        .mobile-dashboard-item { width: 100%; height: 54px; justify-self: stretch; transform: none; border-radius: 12px; background: #2563eb; color: #ffffff; font-weight: 700; box-shadow: none; }
        .mobile-dashboard-item i { color: #ffffff; font-size: 17px; }
        .mobile-nav-item.is-active { background: #2563eb; color: #ffffff; }
        .mobile-nav-item.is-active i,
        .mobile-nav-item.is-active svg { color: #ffffff; }
        .mobile-nav-dropdown { position: fixed; left: 8px; right: 8px; bottom: 66px; z-index: 60; display: grid; gap: 6px; border-radius: 18px; border: 1px solid rgba(255,255,255,.14); background: #0d2545; padding: 10px; box-shadow: 0 -10px 28px rgba(15, 23, 42, .25); }
        .mobile-nav-dropdown a { display: flex; align-items: center; justify-content: center; min-height: 36px; border-radius: 12px; background: rgba(255,255,255,.08); color: #ffffff; font-size: 12px; }
        .mobile-nav-dropdown a.is-active { background: #2563eb; }
        .staff-select summary { list-style: none; }
        .staff-select summary::-webkit-details-marker { display: none; }
        .staff-action-menu.staff-action-menu-up {
            top: auto !important;
            bottom: 3rem;
        }
        .staff-select-option-active {
            background: #0d2545 !important;
            color: #ffffff !important;
        }
        .staff-select-option-active:hover {
            background: #0d2545 !important;
        }
        main select {
            appearance: none;
            background-color: #ffffff;
            background-image: url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1.5L6 6.5L11 1.5' stroke='%236B7280' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            background-position: right .85rem center;
            background-repeat: no-repeat;
            background-size: .75rem;
            border-radius: .75rem !important;
            padding-right: 2.35rem !important;
            box-shadow: 0 1px 2px rgba(15, 23, 42, .04);
        }
        main select.no-select-arrow {
    background-image: none !important;
    background-size: 0 !important;
    background-position: unset !important;
    background-repeat: no-repeat !important;
}
        @media (max-width: 1024px) {
            .admin-shell { grid-template-columns: 1fr; }
            .admin-sidebar { position: sticky; top: 0; z-index: 40; }
            .desktop-sidebar { display: none; }
            main { padding-top: 104px !important; padding-bottom: 96px !important; }
        }
    </style>
</head>

@php
    $currentUser = null;
@endphp

<body>
    <div class="admin-shell">
        @include('LogisticAdminDashboard.partials.sidebar')

        <div class="min-w-0 overflow-x-hidden">
            <header class="hidden h-[68px] border-b border-gray-200 bg-white px-6 lg:px-9 lg:flex items-center justify-between">
                <div class="flex items-center gap-3 text-sm">
                    <span class="text-gray-400">@yield('breadcrumb_parent', 'Dashboards')</span>
                    <span class="text-gray-300">/</span>
                    <span class="font-medium text-gray-900">@yield('breadcrumb_current', 'Default')</span>
                </div>

                <div class="hidden md:flex items-center gap-5">
                    <label class="relative">
                        <i class="fa-solid fa-magnifying-glass absolute left-3 top-1/2 -translate-y-1/2 text-gray-300"></i>
                        <input class="w-52 rounded-lg border border-gray-100 bg-gray-50 py-2 pl-9 pr-3 text-sm outline-none focus:border-blue-400" placeholder="Search">
                    </label>

                    <button class="text-xl text-gray-900" title="History"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.08" d="M20.875 14C20.875 15.3597 20.4718 16.689 19.7164 17.8195C18.9609 18.9501 17.8872 19.8313 16.631 20.3517C15.3747 20.872 13.9924 21.0082 12.6588 20.7429C11.3251 20.4776 10.1001 19.8228 9.13864 18.8614C8.17716 17.8999 7.52238 16.6749 7.2571 15.3412C6.99183 14.0076 7.12798 12.6253 7.64833 11.3691C8.16868 10.1128 9.04987 9.03908 10.1805 8.28365C11.311 7.52821 12.6403 7.125 14 7.125C15.8234 7.125 17.5721 7.84933 18.8614 9.13864C20.1507 10.428 20.875 12.1766 20.875 14Z" fill="black"/>
<path d="M14.625 10.25V13.6461L17.4469 15.3391C17.589 15.4245 17.6914 15.5628 17.7316 15.7237C17.7717 15.8845 17.7463 16.0548 17.6609 16.1969C17.5756 16.339 17.4372 16.4414 17.2764 16.4816C17.1155 16.5217 16.9453 16.4963 16.8031 16.411L13.6781 14.536C13.5856 14.4804 13.5091 14.4018 13.456 14.3079C13.4029 14.214 13.375 14.1079 13.375 14V10.25C13.375 10.0843 13.4408 9.92529 13.5581 9.80808C13.6753 9.69087 13.8342 9.62502 14 9.62502C14.1658 9.62502 14.3247 9.69087 14.4419 9.80808C14.5592 9.92529 14.625 10.0843 14.625 10.25ZM14 6.50002C13.0141 6.49757 12.0374 6.69067 11.1266 7.06817C10.2158 7.44566 9.38889 8.00005 8.69375 8.69924C8.12578 9.27424 7.62109 9.82737 7.125 10.4063V9.00002C7.125 8.83426 7.05915 8.67529 6.94194 8.55808C6.82473 8.44087 6.66576 8.37502 6.5 8.37502C6.33424 8.37502 6.17527 8.44087 6.05806 8.55808C5.94085 8.67529 5.875 8.83426 5.875 9.00002V12.125C5.875 12.2908 5.94085 12.4498 6.05806 12.567C6.17527 12.6842 6.33424 12.75 6.5 12.75H9.625C9.79076 12.75 9.94973 12.6842 10.0669 12.567C10.1842 12.4498 10.25 12.2908 10.25 12.125C10.25 11.9593 10.1842 11.8003 10.0669 11.6831C9.94973 11.5659 9.79076 11.5 9.625 11.5H7.82812C8.38672 10.8422 8.94297 10.2227 9.57734 9.58049C10.446 8.71186 11.5513 8.11847 12.7553 7.87446C13.9592 7.63045 15.2084 7.74665 16.3467 8.20853C17.485 8.67041 18.4619 9.45749 19.1555 10.4714C19.849 11.4854 20.2283 12.6812 20.2461 13.9095C20.2639 15.1378 19.9193 16.3441 19.2554 17.3777C18.5915 18.4113 17.6377 19.2263 16.5132 19.7209C15.3888 20.2155 14.1435 20.3678 12.933 20.1587C11.7225 19.9496 10.6004 19.3885 9.70703 18.5453C9.64732 18.4889 9.57708 18.4448 9.50032 18.4155C9.42356 18.3862 9.34179 18.3724 9.25967 18.3747C9.17754 18.377 9.09668 18.3955 9.0217 18.429C8.94672 18.4626 8.87908 18.5106 8.82266 18.5703C8.76623 18.63 8.72212 18.7003 8.69283 18.777C8.66355 18.8538 8.64967 18.9356 8.652 19.0177C8.65432 19.0998 8.67279 19.1807 8.70636 19.2557C8.73993 19.3306 8.78795 19.3983 8.84766 19.4547C9.73785 20.2948 10.8201 20.9042 12 21.2298C13.1799 21.5554 14.4215 21.5873 15.6166 21.3226C16.8116 21.058 17.9237 20.505 18.8559 19.7117C19.788 18.9184 20.5118 17.9091 20.9642 16.7718C21.4165 15.6344 21.5836 14.4037 21.4509 13.1869C21.3182 11.9701 20.8897 10.8043 20.2029 9.79122C19.516 8.77813 18.5916 7.94854 17.5104 7.37485C16.4292 6.80117 15.224 6.50082 14 6.50002Z" fill="black"/>
</svg>
</i></button>
                    <button class="text-xl text-gray-900" title="Notifications"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.08" d="M20.2501 19H7.75015C7.64076 18.9993 7.53345 18.97 7.43896 18.9149C7.34448 18.8597 7.26611 18.7808 7.2117 18.6859C7.15729 18.591 7.12874 18.4835 7.12891 18.3741C7.12907 18.2647 7.15795 18.1572 7.21265 18.0625C7.72749 17.1719 8.37515 14.9227 8.37515 12.125C8.37515 10.6332 8.96778 9.20242 10.0227 8.14752C11.0776 7.09263 12.5083 6.5 14.0001 6.5C15.492 6.5 16.9227 7.09263 17.9776 8.14752C19.0325 9.20242 19.6251 10.6332 19.6251 12.125C19.6251 14.9234 20.2736 17.1719 20.7892 18.0625C20.844 18.1574 20.8728 18.2649 20.8729 18.3745C20.873 18.484 20.8444 18.5916 20.7898 18.6865C20.7352 18.7815 20.6566 18.8604 20.5619 18.9154C20.4672 18.9705 20.3597 18.9996 20.2501 19Z" fill="black"/>
<path d="M21.3282 17.7453C20.8946 16.9984 20.2501 14.8852 20.2501 12.125C20.2501 10.4674 19.5916 8.87769 18.4195 7.70558C17.2474 6.53348 15.6577 5.875 14.0001 5.875C12.3425 5.875 10.7528 6.53348 9.58065 7.70558C8.40855 8.87769 7.75007 10.4674 7.75007 12.125C7.75007 14.8859 7.10476 16.9984 6.67116 17.7453C6.56044 17.9352 6.50174 18.1509 6.50098 18.3707C6.50023 18.5905 6.55745 18.8066 6.66687 18.9973C6.77629 19.1879 6.93404 19.3463 7.12422 19.4565C7.31439 19.5667 7.53027 19.6248 7.75007 19.625H10.9384C11.0825 20.3306 11.466 20.9647 12.0239 21.4201C12.5818 21.8756 13.2799 22.1243 14.0001 22.1243C14.7202 22.1243 15.4183 21.8756 15.9762 21.4201C16.5341 20.9647 16.9176 20.3306 17.0618 19.625H20.2501C20.4698 19.6247 20.6856 19.5665 20.8757 19.4562C21.0657 19.346 21.2234 19.1875 21.3327 18.9969C21.442 18.8063 21.4992 18.5903 21.4984 18.3705C21.4976 18.1508 21.4389 17.9351 21.3282 17.7453ZM14.0001 20.875C13.6124 20.8749 13.2344 20.7546 12.9179 20.5308C12.6014 20.3069 12.3621 19.9905 12.2329 19.625H15.7673C15.638 19.9905 15.3987 20.3069 15.0823 20.5308C14.7658 20.7546 14.3877 20.8749 14.0001 20.875ZM7.75007 18.375C8.35163 17.3406 9.00007 14.9438 9.00007 12.125C9.00007 10.7989 9.52686 9.52715 10.4645 8.58947C11.4022 7.65178 12.674 7.125 14.0001 7.125C15.3262 7.125 16.5979 7.65178 17.5356 8.58947C18.4733 9.52715 19.0001 10.7989 19.0001 12.125C19.0001 14.9414 19.6469 17.3383 20.2501 18.375H7.75007Z" fill="black"/>
</svg>
</button>
                </div>
            </header>

            <main class="min-w-0 overflow-x-hidden px-4 py-8 sm:px-6 lg:px-9">
                @yield('content')
            </main>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menus = document.querySelectorAll('.mobile-nav-menu, .mobile-profile-menu');
            const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

            function padDatePart(value) {
                return String(value).padStart(2, '0');
            }

            function formatPickerDate(date) {
                return `${padDatePart(date.getMonth() + 1)}/${padDatePart(date.getDate())}/${date.getFullYear()}`;
            }

            function getDatePickerGrid(picker) {
                let grid = picker.querySelector('[data-date-grid]');

                if (grid) {
                    return grid;
                }

                const grids = picker.querySelectorAll('.grid.grid-cols-7');
                grid = grids[grids.length - 1] || null;

                if (grid) {
                    grid.dataset.dateGrid = '';
                }

                return grid;
            }

            function getDatePickerMonthLabel(picker) {
                let label = picker.querySelector('[data-date-month-label]');

                if (label) {
                    return label;
                }

                label = picker.querySelector('.mb-3 button');

                if (label) {
                    label.dataset.dateMonthLabel = '';
                }

                return label;
            }

            function syncDatePickerControls(picker) {
                const previous = picker.querySelector('[data-date-prev], [aria-label="Previous month"]');
                const next = picker.querySelector('[data-date-next], [aria-label="Next month"]');
                const today = Array.from(picker.querySelectorAll('button')).find(function (button) {
                    return button.dataset.dateToday !== undefined || button.textContent.trim() === 'Today';
                });

                previous?.setAttribute('data-date-prev', '');
                next?.setAttribute('data-date-next', '');
                today?.setAttribute('data-date-today', '');
            }

            function readDatePickerView(picker) {
                const label = getDatePickerMonthLabel(picker);
                const labelParts = label?.textContent.trim().split(/\s+/) || [];
                const labelMonth = monthNames.indexOf(labelParts[0]);
                const labelYear = Number(labelParts[1]);
                const today = new Date();

                return {
                    month: Number.isFinite(Number(picker.dataset.viewMonth)) ? Number(picker.dataset.viewMonth) : (labelMonth >= 0 ? labelMonth : today.getMonth()),
                    year: Number.isFinite(Number(picker.dataset.viewYear)) ? Number(picker.dataset.viewYear) : (Number.isFinite(labelYear) && labelYear > 0 ? labelYear : today.getFullYear()),
                };
            }

            function renderDatePicker(picker) {
                const grid = getDatePickerGrid(picker);
                const label = getDatePickerMonthLabel(picker);

                if (!grid || !label) {
                    return;
                }

                syncDatePickerControls(picker);

                const view = readDatePickerView(picker);
                const selectedDate = picker.dataset.selectedDate || '';
                const firstDay = new Date(view.year, view.month, 1);
                const startDate = new Date(view.year, view.month, 1 - firstDay.getDay());

                picker.dataset.viewMonth = String(view.month);
                picker.dataset.viewYear = String(view.year);
                label.textContent = `${monthNames[view.month]} ${view.year}`;
                grid.innerHTML = '';

                for (let index = 0; index < 42; index += 1) {
                    const day = new Date(startDate);
                    day.setDate(startDate.getDate() + index);

                    const value = formatPickerDate(day);
                    const isCurrentMonth = day.getMonth() === view.month;
                    const isSelected = value === selectedDate;
                    const button = document.createElement('button');

                    button.type = 'button';
                    button.dataset.staffDate = value;
                    button.textContent = day.getDate();
                    button.className = [
                        'inline-flex h-8 items-center justify-center rounded-lg',
                        isSelected ? 'staff-select-option-active text-white' : '',
                        !isSelected && isCurrentMonth ? 'text-gray-800 hover:bg-gray-50' : '',
                        !isSelected && !isCurrentMonth ? 'text-gray-300 hover:bg-gray-50' : '',
                    ].filter(Boolean).join(' ');

                    grid.appendChild(button);
                }
            }

            function setDatePickerValue(picker, selectedDate) {
                const value = picker.querySelector('.staff-date-value');

                picker.dataset.selectedDate = selectedDate;

                if (value) {
                    value.textContent = selectedDate || 'mm/dd/yyyy';
                    value.classList.toggle('text-gray-500', !selectedDate);
                    value.classList.toggle('text-gray-800', Boolean(selectedDate));
                }
            }

            menus.forEach(function (menu) {
                menu.addEventListener('toggle', function () {
                    if (!menu.open) {
                        return;
                    }

                    menus.forEach(function (otherMenu) {
                        if (otherMenu !== menu) {
                            otherMenu.open = false;
                        }
                    });
                });
            });

            document.addEventListener('click', function (event) {
                const actionToggle = event.target.closest('.staff-action-toggle');
                const selectOption = event.target.closest('[data-staff-select-option]');
                const datePicker = event.target.closest('.staff-date-picker');
                const dateOption = event.target.closest('[data-staff-date]');
                const dateClear = event.target.closest('[data-staff-date-clear]');
                const datePrevious = event.target.closest('[data-date-prev], [aria-label="Previous month"]');
                const dateNext = event.target.closest('[data-date-next], [aria-label="Next month"]');
                const dateTodayButton = event.target.closest('[data-date-today]') || event.target.closest('button');
                const dateToday = dateTodayButton?.textContent.trim() === 'Today' || dateTodayButton?.dataset.dateToday !== undefined ? dateTodayButton : null;

                document.querySelectorAll('.staff-action-menu').forEach(function (menu) {
                    if (!actionToggle || !actionToggle.parentElement.contains(menu)) {
                        menu.classList.add('hidden');
                    }
                });

                document.querySelectorAll('.staff-select[open]').forEach(function (select) {
                    if (!select.contains(event.target)) {
                        select.removeAttribute('open');
                    }
                });

                document.querySelectorAll('.staff-date-picker[open]').forEach(function (picker) {
                    if (!picker.contains(event.target)) {
                        picker.removeAttribute('open');
                    }
                });

                if (datePicker) {
                    renderDatePicker(datePicker);

                    if (datePrevious || dateNext) {
                        event.preventDefault();
                        event.stopPropagation();

                        const view = readDatePickerView(datePicker);
                        let month = view.month + (dateNext ? 1 : -1);
                        let year = view.year;

                        if (month < 0) {
                            month = 11;
                            year -= 1;
                        }

                        if (month > 11) {
                            month = 0;
                            year += 1;
                        }

                        datePicker.dataset.viewMonth = String(month);
                        datePicker.dataset.viewYear = String(year);
                        renderDatePicker(datePicker);
                        return;
                    }

                    if (dateToday) {
                        event.preventDefault();
                        event.stopPropagation();

                        const today = new Date();
                        const selectedDate = formatPickerDate(today);

                        datePicker.dataset.viewMonth = String(today.getMonth());
                        datePicker.dataset.viewYear = String(today.getFullYear());
                        setDatePickerValue(datePicker, selectedDate);
                        renderDatePicker(datePicker);
                        datePicker.removeAttribute('open');
                        return;
                    }

                    if (dateClear) {
                        event.preventDefault();
                        event.stopPropagation();

                        setDatePickerValue(datePicker, '');
                        renderDatePicker(datePicker);
                        datePicker.removeAttribute('open');
                        return;
                    }

                    if (dateOption) {
                        event.preventDefault();
                        event.stopPropagation();

                        setDatePickerValue(datePicker, dateOption.dataset.staffDate);
                        renderDatePicker(datePicker);
                        datePicker.removeAttribute('open');
                        return;
                    }
                }

                if (selectOption) {
                    const select = selectOption.closest('.staff-select');
                    const value = select?.querySelector('.staff-select-value');

                    if (value) {
                        value.textContent = selectOption.dataset.staffSelectOption;
                    }

                    select?.querySelectorAll('[data-staff-select-option]').forEach(function (option) {
                        const isActive = option === selectOption;

                        option.classList.toggle('staff-select-option-active', isActive);
                        option.classList.toggle('bg-gray-900', false);
                        option.classList.toggle('text-white', isActive);
                        option.classList.toggle('hover:bg-gray-800', false);
                        option.classList.toggle('text-gray-800', !isActive);
                        option.classList.toggle('hover:bg-gray-50', !isActive);
                    });

                    select?.removeAttribute('open');
                    return;
                }

                if (actionToggle) {
                    const menu = actionToggle.parentElement.querySelector('.staff-action-menu');
                    if (!menu) {
                        return;
                    }

                    const isHidden = menu.classList.contains('hidden');
                    menu.classList.toggle('hidden');

                    if (isHidden) {
                        menu.classList.remove('staff-action-menu-up');

                        requestAnimationFrame(function () {
                            const menuRect = menu.getBoundingClientRect();
                            const availableBottomSpace = window.innerHeight - actionToggle.getBoundingClientRect().bottom;

                            if (availableBottomSpace < menuRect.height + 16) {
                                menu.classList.add('staff-action-menu-up');
                            }
                        });
                    }

                    return;
                }

                menus.forEach(function (menu) {
                    if (!menu.contains(event.target)) {
                        menu.open = false;
                    }
                });
            });
        });
    </script>
    @livewireScripts
</body>

</html>
