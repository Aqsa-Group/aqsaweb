<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AQSA SYSTEM')</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/aqsa.jpg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * { font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; }
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
        .mobile-nav-grid { display: grid; grid-template-columns: repeat(7, minmax(0, 1fr)); align-items: end; gap: 1px; }
        .mobile-nav-menu { position: relative; min-width: 0; }
        .mobile-nav-menu summary { list-style: none; }
        .mobile-nav-menu summary::-webkit-details-marker { display: none; }
        .mobile-nav-item { width: 100%; min-width: 0; height: 58px; display: inline-flex; flex-direction: column; align-items: center; justify-content: center; gap: 5px; border-radius: 13px; color: #dbeafe; font-size: 8px; line-height: 1; white-space: nowrap; overflow: hidden; cursor: pointer; }
        .mobile-nav-item span { max-width: 100%; overflow: hidden; text-overflow: ellipsis; }
        .mobile-nav-item i { font-size: 15px; color: #dbeafe; }
        .mobile-dashboard-item { width: 72px; height: 72px; justify-self: center; transform: translateY(-20px); border-radius: 24px; background: #2563eb; color: #ffffff; font-weight: 700; box-shadow: 0 12px 24px rgba(37, 99, 235, .36); }
        .mobile-dashboard-item i { color: #ffffff; font-size: 18px; }
        .mobile-nav-item.is-active { background: #2563eb; color: #ffffff; }
        .mobile-nav-item.is-active i { color: #ffffff; }
        .mobile-nav-dropdown { position: fixed; left: 8px; right: 8px; bottom: 72px; z-index: 60; display: grid; gap: 6px; border-radius: 18px; border: 1px solid rgba(255,255,255,.14); background: #0d2545; padding: 10px; box-shadow: 0 -10px 28px rgba(15, 23, 42, .25); }
        .mobile-nav-dropdown a { display: flex; align-items: center; justify-content: center; min-height: 36px; border-radius: 12px; background: rgba(255,255,255,.08); color: #ffffff; font-size: 12px; }
        .mobile-nav-dropdown a.is-active { background: #2563eb; }
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

        <div class="min-w-0">
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
                    <button class="text-xl text-gray-900" title="Theme"><i class="fa-regular fa-sun"></i></button>
                    <button class="text-xl text-gray-900" title="History"><i class="fa-solid fa-clock-rotate-left"></i></button>
                    <button class="text-xl text-gray-900" title="Notifications"><i class="fa-regular fa-bell"></i></button>
                </div>
            </header>

            <main class="px-6 py-8 lg:px-9">
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
                menus.forEach(function (menu) {
                    if (!menu.contains(event.target)) {
                        menu.open = false;
                    }
                });
            });
        });
    </script>
</body>

</html>
