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
        .mobile-nav-grid { display: grid; width: 100%; grid-template-columns: repeat(7, minmax(0, 1fr)); align-items: end; gap: 1px; }
        .mobile-nav-menu { position: relative; min-width: 0; }
        .mobile-nav-menu summary { list-style: none; }
        .mobile-nav-menu summary::-webkit-details-marker { display: none; }
        .mobile-nav-item { width: 100%; min-width: 0; height: 58px; display: inline-flex; flex-direction: column; align-items: center; justify-content: center; gap: 5px; border-radius: 13px; color: #dbeafe; font-size: 8px; line-height: 1; white-space: nowrap; overflow: hidden; cursor: pointer; }
        .mobile-nav-item span { max-width: 100%; overflow: hidden; text-overflow: ellipsis; }
        .mobile-nav-item i { font-size: 15px; color: currentColor; }
        .mobile-nav-item svg { width: 20px; height: 20px; flex: 0 0 auto; color: currentColor; }
        .mobile-nav-item svg * { stroke: currentColor !important; }
        .mobile-nav-item svg [fill]:not([fill="none"]) { fill: currentColor !important; }
        .mobile-dashboard-item { width: min(64px, 100%); height: 64px; justify-self: center; transform: translateY(-16px); border-radius: 22px; background: #2563eb; color: #ffffff; font-weight: 700; box-shadow: 0 12px 24px rgba(37, 99, 235, .36); }
        .mobile-dashboard-item i { color: #ffffff; font-size: 18px; }
        .mobile-nav-item.is-active { background: #2563eb; color: #ffffff; }
        .mobile-nav-item.is-active i,
        .mobile-nav-item.is-active svg { color: #ffffff; }
        .mobile-nav-dropdown { position: fixed; left: 8px; right: 8px; bottom: 72px; z-index: 60; display: grid; gap: 6px; border-radius: 18px; border: 1px solid rgba(255,255,255,.14); background: #0d2545; padding: 10px; box-shadow: 0 -10px 28px rgba(15, 23, 42, .25); }
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
        @include('AdminDashboard.partials.sidebar')

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
                    <button class="text-xl text-gray-900" title="Theme">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.08" d="M18.375 14C18.375 14.8653 18.1184 15.7112 17.6377 16.4306C17.157 17.1501 16.4737 17.7108 15.6742 18.042C14.8748 18.3731 13.9951 18.4597 13.1465 18.2909C12.2978 18.1221 11.5183 17.7054 10.9064 17.0936C10.2946 16.4817 9.87788 15.7022 9.70907 14.8535C9.54026 14.0049 9.6269 13.1252 9.95803 12.3258C10.2892 11.5263 10.8499 10.8431 11.5694 10.3623C12.2888 9.88159 13.1347 9.625 14 9.625C15.1603 9.625 16.2731 10.0859 17.0936 10.9064C17.9141 11.7269 18.375 12.8397 18.375 14Z" fill="black"/>
<path d="M13.375 7.125V5.25C13.375 5.08424 13.4408 4.92527 13.5581 4.80806C13.6753 4.69085 13.8342 4.625 14 4.625C14.1658 4.625 14.3247 4.69085 14.4419 4.80806C14.5592 4.92527 14.625 5.08424 14.625 5.25V7.125C14.625 7.29076 14.5592 7.44973 14.4419 7.56694C14.3247 7.68415 14.1658 7.75 14 7.75C13.8342 7.75 13.6753 7.68415 13.5581 7.56694C13.4408 7.44973 13.375 7.29076 13.375 7.125ZM19 14C19 14.9889 18.7068 15.9556 18.1573 16.7779C17.6079 17.6001 16.827 18.241 15.9134 18.6194C14.9998 18.9978 13.9945 19.0969 13.0245 18.9039C12.0546 18.711 11.1637 18.2348 10.4645 17.5355C9.7652 16.8363 9.289 15.9454 9.09607 14.9755C8.90315 14.0055 9.00216 13.0002 9.3806 12.0866C9.75904 11.173 10.3999 10.3921 11.2221 9.84265C12.0444 9.29324 13.0111 9 14 9C15.3256 9.00145 16.5966 9.5287 17.5339 10.4661C18.4713 11.4034 18.9986 12.6744 19 14ZM17.75 14C17.75 13.2583 17.5301 12.5333 17.118 11.9166C16.706 11.2999 16.1203 10.8193 15.4351 10.5355C14.7498 10.2516 13.9958 10.1774 13.2684 10.3221C12.541 10.4668 11.8728 10.8239 11.3483 11.3483C10.8239 11.8728 10.4668 12.541 10.3221 13.2684C10.1774 13.9958 10.2516 14.7498 10.5355 15.4351C10.8193 16.1203 11.2999 16.706 11.9166 17.118C12.5333 17.5301 13.2583 17.75 14 17.75C14.9942 17.749 15.9475 17.3535 16.6505 16.6505C17.3535 15.9475 17.749 14.9942 17.75 14ZM8.55781 9.44219C8.67509 9.55946 8.83415 9.62535 9 9.62535C9.16585 9.62535 9.32491 9.55946 9.44219 9.44219C9.55946 9.32491 9.62535 9.16585 9.62535 9C9.62535 8.83415 9.55946 8.67509 9.44219 8.55781L8.19219 7.30781C8.07491 7.19054 7.91585 7.12465 7.75 7.12465C7.58415 7.12465 7.42509 7.19054 7.30781 7.30781C7.19054 7.42509 7.12465 7.58415 7.12465 7.75C7.12465 7.91585 7.19054 8.07491 7.30781 8.19219L8.55781 9.44219ZM8.55781 18.5578L7.30781 19.8078C7.19054 19.9251 7.12465 20.0841 7.12465 20.25C7.12465 20.4159 7.19054 20.5749 7.30781 20.6922C7.42509 20.8095 7.58415 20.8753 7.75 20.8753C7.91585 20.8753 8.07491 20.8095 8.19219 20.6922L9.44219 19.4422C9.50026 19.3841 9.54632 19.3152 9.57775 19.2393C9.60917 19.1634 9.62535 19.0821 9.62535 19C9.62535 18.9179 9.60917 18.8366 9.57775 18.7607C9.54632 18.6848 9.50026 18.6159 9.44219 18.5578C9.38412 18.4997 9.31518 18.4537 9.23931 18.4223C9.16344 18.3908 9.08212 18.3747 9 18.3747C8.91788 18.3747 8.83656 18.3908 8.76069 18.4223C8.68482 18.4537 8.61588 18.4997 8.55781 18.5578ZM19 9.625C19.0821 9.62506 19.1634 9.60895 19.2393 9.57759C19.3152 9.54622 19.3841 9.50021 19.4422 9.44219L20.6922 8.19219C20.8095 8.07491 20.8753 7.91585 20.8753 7.75C20.8753 7.58415 20.8095 7.42509 20.6922 7.30781C20.5749 7.19054 20.4159 7.12465 20.25 7.12465C20.0841 7.12465 19.9251 7.19054 19.8078 7.30781L18.5578 8.55781C18.4703 8.64522 18.4107 8.75663 18.3865 8.87793C18.3624 8.99924 18.3748 9.12498 18.4221 9.23924C18.4695 9.35351 18.5496 9.45116 18.6525 9.51983C18.7554 9.58849 18.8763 9.6251 19 9.625ZM19.4422 18.5578C19.3249 18.4405 19.1659 18.3747 19 18.3747C18.8341 18.3747 18.6751 18.4405 18.5578 18.5578C18.4405 18.6751 18.3747 18.8341 18.3747 19C18.3747 19.1659 18.4405 19.3249 18.5578 19.4422L19.8078 20.6922C19.8659 20.7503 19.9348 20.7963 20.0107 20.8277C20.0866 20.8592 20.1679 20.8753 20.25 20.8753C20.3321 20.8753 20.4134 20.8592 20.4893 20.8277C20.5652 20.7963 20.6341 20.7503 20.6922 20.6922C20.7503 20.6341 20.7963 20.5652 20.8277 20.4893C20.8592 20.4134 20.8753 20.3321 20.8753 20.25C20.8753 20.1679 20.8592 20.0866 20.8277 20.0107C20.7963 19.9348 20.7503 19.8659 20.6922 19.8078L19.4422 18.5578ZM7.75 14C7.75 13.8342 7.68415 13.6753 7.56694 13.5581C7.44973 13.4408 7.29076 13.375 7.125 13.375H5.25C5.08424 13.375 4.92527 13.4408 4.80806 13.5581C4.69085 13.6753 4.625 13.8342 4.625 14C4.625 14.1658 4.69085 14.3247 4.80806 14.4419C4.92527 14.5592 5.08424 14.625 5.25 14.625H7.125C7.29076 14.625 7.44973 14.5592 7.56694 14.4419C7.68415 14.3247 7.75 14.1658 7.75 14ZM14 20.25C13.8342 20.25 13.6753 20.3158 13.5581 20.4331C13.4408 20.5503 13.375 20.7092 13.375 20.875V22.75C13.375 22.9158 13.4408 23.0747 13.5581 23.1919C13.6753 23.3092 13.8342 23.375 14 23.375C14.1658 23.375 14.3247 23.3092 14.4419 23.1919C14.5592 23.0747 14.625 22.9158 14.625 22.75V20.875C14.625 20.7092 14.5592 20.5503 14.4419 20.4331C14.3247 20.3158 14.1658 20.25 14 20.25ZM22.75 13.375H20.875C20.7092 13.375 20.5503 13.4408 20.4331 13.5581C20.3158 13.6753 20.25 13.8342 20.25 14C20.25 14.1658 20.3158 14.3247 20.4331 14.4419C20.5503 14.5592 20.7092 14.625 20.875 14.625H22.75C22.9158 14.625 23.0747 14.5592 23.1919 14.4419C23.3092 14.3247 23.375 14.1658 23.375 14C23.375 13.8342 23.3092 13.6753 23.1919 13.5581C23.0747 13.4408 22.9158 13.375 22.75 13.375Z" fill="black"/>
</svg>
</i></button>
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
