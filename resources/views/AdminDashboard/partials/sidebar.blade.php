<aside class="admin-sidebar desktop-sidebar hidden lg:flex min-h-screen flex-col px-4 py-5">
    <a href="{{ route('admin.dashboard') }}" class="mb-4 flex items-center gap-3 px-2">
        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-600 text-white">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.3334 10C18.3334 10 17.506 10.7423 15.8511 11.4042L13.5107 12.3404C11.8558 13.0024 11.0283 13.3333 10.0001 13.3333C8.97185 13.3333 8.1444 13.0024 6.4895 12.3404L4.14911 11.4042C2.4942 10.7423 1.66675 10 1.66675 10" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M1.66675 13.3334C1.66675 13.3334 2.4942 14.0756 4.14911 14.7376L6.4895 15.6738C8.1444 16.3357 8.97185 16.6667 10.0001 16.6667C10.795 16.6667 11.47 16.4689 12.5001 16.0732M15.8511 14.7376C17.506 14.0756 18.3334 13.3334 18.3334 13.3334" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M4.14911 5.26247C2.4942 5.92444 1.66675 6.25542 1.66675 6.66671C1.66675 7.078 2.4942 7.40898 4.14911 8.07094L6.4895 9.0071C8.1444 9.66906 8.97185 10 10.0001 10C11.0283 10 11.8558 9.66906 13.5107 9.0071L15.8511 8.07094C17.506 7.40898 18.3334 7.078 18.3334 6.66671C18.3334 6.25542 17.506 5.92444 15.8511 5.26247L13.5107 4.32632C11.8558 3.66436 11.0283 3.33337 10.0001 3.33337C9.20513 3.33337 8.53018 3.53121 7.50008 3.92689" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</svg>

        </span>
        <span>
            <span class="block text-lg font-semibold font-inter leading-5 text-white">AQSA SYSTEM</span>
            <span class="block text-xs uppercase tracking-wide text-[#7E8288]">Enterprise ERP</span>
        </span>
    </a>

    <div class="mb-5 border-t border-[#FFFFFF80]"></div>

    <nav class="flex-1 space-y-1">
        <a href="{{ route('admin.dashboard') }}"
            class="{{ request()->routeIs('admin.dashboard') ? 'sidebar-active' : 'hover:bg-white/10' }} flex  items-center gap-3 rounded-md px-3 py-2.5 text-sm ">
           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.12573 3.75004C2.17902 3.20833 2.29944 2.84369 2.5716 2.57153C3.05975 2.08337 3.84543 2.08337 5.41678 2.08337C6.98813 2.08337 7.7738 2.08337 8.26196 2.57153C8.75011 3.05968 8.75011 3.84536 8.75011 5.41671C8.75011 6.98806 8.75011 7.77373 8.26196 8.26189C7.7738 8.75004 6.98813 8.75004 5.41678 8.75004C3.84543 8.75004 3.05975 8.75004 2.5716 8.26189C2.31379 8.00408 2.19214 7.66328 2.13473 7.16759" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M17.8744 12.9167C17.8211 12.375 17.7007 12.0103 17.4285 11.7382C16.9404 11.25 16.1547 11.25 14.5833 11.25C13.012 11.25 12.2263 11.25 11.7382 11.7382C11.25 12.2263 11.25 13.012 11.25 14.5833C11.25 16.1547 11.25 16.9404 11.7382 17.4285C12.2263 17.9167 13.012 17.9167 14.5833 17.9167C16.1547 17.9167 16.9404 17.9167 17.4285 17.4285C17.7007 17.1564 17.8211 16.7917 17.8744 16.25" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M2.08325 14.5833C2.08325 13.012 2.08325 12.2263 2.57141 11.7382C3.05956 11.25 3.84524 11.25 5.41659 11.25C6.98793 11.25 7.77361 11.25 8.26176 11.7382C8.74992 12.2263 8.74992 13.012 8.74992 14.5833C8.74992 16.1547 8.74992 16.9404 8.26176 17.4285C7.77361 17.9167 6.98793 17.9167 5.41659 17.9167C3.84524 17.9167 3.05956 17.9167 2.57141 17.4285C2.08325 16.9404 2.08325 16.1547 2.08325 14.5833Z" stroke="white" stroke-width="1.5"/>
<path d="M11.25 5.41671C11.25 3.84536 11.25 3.05968 11.7382 2.57153C12.2263 2.08337 13.012 2.08337 14.5833 2.08337C16.1547 2.08337 16.9404 2.08337 17.4285 2.57153C17.9167 3.05968 17.9167 3.84536 17.9167 5.41671C17.9167 6.98806 17.9167 7.77373 17.4285 8.26189C16.9404 8.75004 16.1547 8.75004 14.5833 8.75004C13.012 8.75004 12.2263 8.75004 11.7382 8.26189C11.25 7.77373 11.25 6.98806 11.25 5.41671Z" stroke="white" stroke-width="1.5"/>
</svg>

            Dashboard
        </a>

      <details class="group">
    <summary class="flex cursor-pointer list-none items-center gap-3 rounded-md px-3 py-2.5 text-sm  hover:bg-white/10">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1969_1885)">
<path d="M3.33325 4.66667C3.33325 5.37391 3.6142 6.05219 4.1143 6.55229C4.6144 7.05238 5.29267 7.33333 5.99992 7.33333C6.70716 7.33333 7.38544 7.05238 7.88554 6.55229C8.38563 6.05219 8.66659 5.37391 8.66659 4.66667C8.66659 3.95942 8.38563 3.28115 7.88554 2.78105C7.38544 2.28095 6.70716 2 5.99992 2C5.29267 2 4.6144 2.28095 4.1143 2.78105C3.6142 3.28115 3.33325 3.95942 3.33325 4.66667Z" stroke="#FAFAFA" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2 14V12.6667C2 11.9594 2.28095 11.2811 2.78105 10.781C3.28115 10.281 3.95942 10 4.66667 10H7.33333C8.04058 10 8.71885 10.281 9.21895 10.781C9.71905 11.2811 10 11.9594 10 12.6667V14" stroke="#FAFAFA" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6667 2.08667C11.2404 2.23354 11.7488 2.56714 12.1118 3.03488C12.4749 3.50262 12.672 4.07789 12.672 4.67C12.672 5.26212 12.4749 5.83739 12.1118 6.30513C11.7488 6.77287 11.2404 7.10647 10.6667 7.25334" stroke="#FAFAFA" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14 14V12.6666C13.9966 12.0781 13.7986 11.5072 13.4368 11.0429C13.0751 10.5786 12.5699 10.2471 12 10.1" stroke="#FAFAFA" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_1969_1885">
<rect width="16" height="16" fill="white"/>
</clipPath>
</defs>
</svg>

        <span class="flex-1">HR Management</span>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8332 7.5L9.99984 12.5L8.5415 11.25M4.1665 7.5L6.11095 9.16667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

    </summary>
    <div class="ml-8 mt-1 space-y-1 pb-1">
        <a href="{{ route('admin.module', ['hr', 'staff-profiles']) }}" class="{{ request()->is('admin-dashboard/hr/staff-profiles') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Staff Profiles</a>
        <a href="{{ route('admin.module', ['hr', 'attendance-leave']) }}" class="{{ request()->is('admin-dashboard/hr/attendance-leave') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Attendance & Leave</a>
        <a href="{{ route('admin.module', ['hr', 'payroll']) }}" class="{{ request()->is('admin-dashboard/hr/payroll') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Payroll</a>
    </div>
</details>

<details class="group">
    <summary class="flex cursor-pointer list-none items-center gap-3 rounded-md px-3 py-2.5 text-sm  hover:bg-white/10">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.6814 5.83337H18.3332V10.4549M18.3332 5.83337L14.5832 9.58337M12.1835 11.9456C11.3521 12.7719 10.9364 13.1851 10.4208 13.185C9.90514 13.185 9.48954 12.7717 8.65834 11.9452L8.45888 11.7469C7.62695 10.9196 7.21099 10.506 6.69502 10.5062C6.17905 10.5064 5.76339 10.9203 4.93206 11.7481L1.6665 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>


        <span class="flex-1">Finance</span>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8332 7.5L9.99984 12.5L8.5415 11.25M4.1665 7.5L6.11095 9.16667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

    </summary>
    <div class="ml-8 mt-1 space-y-1 pb-1">
        <a href="{{ route('admin.module', ['finance', 'sales-invoices']) }}" class="{{ request()->is('admin-dashboard/finance/sales-invoices') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Sales Invoices</a>
        <a href="{{ route('admin.module', ['finance', 'purchase-invoices']) }}" class="{{ request()->is('admin-dashboard/finance/purchase-invoices') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Purchase Invoices</a>
        <a href="{{ route('admin.module', ['finance', 'expenses']) }}" class="{{ request()->is('admin-dashboard/finance/expenses') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Expenses</a>
        <a href="{{ route('admin.module', ['finance', 'payments']) }}" class="{{ request()->is('admin-dashboard/finance/payments') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Payments</a>
    </div>
</details>

<details class="group">
    <summary class="flex cursor-pointer list-none items-center gap-3 rounded-md px-3 py-2.5 text-sm  hover:bg-white/10">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.5 8.33333V11.6667C2.5 13.238 2.5 14.0237 2.98816 14.5118C3.47631 15 4.26198 15 5.83333 15H14.1667C15.738 15 16.5237 15 17.0118 14.5118C17.5 14.0237 17.5 13.238 17.5 11.6667V7.5C17.5 5.14298 17.5 3.96447 16.7678 3.23223C16.0355 2.5 14.857 2.5 12.5 2.5H7.5C5.14298 2.5 3.96447 2.5 3.23223 3.23223C2.82399 3.64047 2.64336 4.18743 2.56343 5" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M18.3332 17.5H13.3332M1.6665 17.5H9.99984" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12.5 12.5H7.5" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</svg>

        <span class="flex-1">ICT</span>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8332 7.5L9.99984 12.5L8.5415 11.25M4.1665 7.5L6.11095 9.16667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

    </summary>
    <div class="ml-8 mt-1 space-y-1 pb-1">
        <a href="{{ route('admin.module', ['ict', 'projects']) }}" class="{{ request()->is('admin-dashboard/ict/projects') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Projects</a>
        <a href="{{ route('admin.module', ['ict', 'tasks']) }}" class="{{ request()->is('admin-dashboard/ict/tasks') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Tasks</a>
        <a href="{{ route('admin.module', ['ict', 'time-tracking']) }}" class="{{ request()->is('admin-dashboard/ict/time-tracking') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Time Tracking</a>
        <a href="{{ route('admin.module', ['ict', 'infrastructure']) }}" class="{{ request()->is('admin-dashboard/ict/infrastructure') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Infrastructure</a>
    </div>
</details>


<details class="group">
    <summary class="flex cursor-pointer list-none items-center gap-3 rounded-md px-3 py-2.5 text-sm  hover:bg-white/10">
       <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1969_1324)">
<path d="M8.3335 1.67395C6.26719 1.70384 5.09571 1.85711 4.30981 2.64302C3.3335 3.61933 3.3335 5.19068 3.3335 8.33337V10C3.3335 13.1427 3.3335 14.7141 4.30981 15.6904C5.28612 16.6667 6.85747 16.6667 10.0002 16.6667C13.1429 16.6667 14.7142 16.6667 15.6905 15.6904C16.6668 14.7141 16.6668 13.1427 16.6668 10V8.33338C16.6668 5.19068 16.6668 3.61933 15.6905 2.64302C14.9046 1.85711 13.7331 1.70384 11.6668 1.67395" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M16.6665 10.8334H13.3332M3.33317 10.8334H9.99984" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12.9165 13.3334H14.1665" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.8335 13.3334H7.0835" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5 16.25V17.5C5 17.9602 5.3731 18.3333 5.83333 18.3333H7.08333C7.54357 18.3333 7.91667 17.9602 7.91667 17.5V16.6667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.0002 16.25V17.5C15.0002 17.9602 14.6271 18.3333 14.1668 18.3333H12.9168C12.4566 18.3333 12.0835 17.9602 12.0835 17.5V16.6667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16.6665 7.5H17.4998C17.9601 7.5 18.3332 7.8731 18.3332 8.33333V9.16667C18.3332 9.42896 18.2097 9.67595 17.9998 9.83333L16.6665 10.8333" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.33317 7.5H2.49984C2.0396 7.5 1.6665 7.8731 1.6665 8.33333V9.16667C1.6665 9.42896 1.79 9.67595 1.99984 9.83333L3.33317 10.8333" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.75 4.16663H6.875M16.25 4.16663H10" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</g>
<defs>
<clipPath id="clip0_1969_1324">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

        <span class="flex-1">Logistic</span>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8332 7.5L9.99984 12.5L8.5415 11.25M4.1665 7.5L6.11095 9.16667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

    </summary>
    <div class="ml-8 mt-1 space-y-1 pb-1">
        <a href="{{ route('admin.module', ['logistic', 'contracts']) }}" class="{{ request()->is('admin-dashboard/logistic/contracts') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Contracts</a>
        <a href="{{ route('admin.module', ['logistic', 'vehicles']) }}" class="{{ request()->is('admin-dashboard/logistic/vehicles') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Vehicles</a>
        <a href="{{ route('admin.module', ['logistic', 'fuel']) }}" class="{{ request()->is('admin-dashboard/logistic/fuel') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Fuel</a>
    </div>
</details>

<details class="group">
    <summary class="flex cursor-pointer list-none items-center gap-3 rounded-md px-3 py-2.5 text-sm  hover:bg-white/10">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1208_7989)">
<path d="M18.3334 18.3334L1.66675 18.3334" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.1666 18.3333V4.99996C14.1666 3.42861 14.1666 2.64294 13.6784 2.15478C13.1903 1.66663 12.4046 1.66663 10.8333 1.66663H9.16659C7.59524 1.66663 6.80956 1.66663 6.32141 2.15478C5.83325 2.64294 5.83325 3.42861 5.83325 4.99996V18.3333" stroke="white" stroke-width="1.5"/>
<path d="M16.7499 9.58329C16.7499 9.99751 17.0857 10.3333 17.4999 10.3333C17.9141 10.3333 18.2499 9.99751 18.2499 9.58329H17.4999H16.7499ZM16.7592 6.94751L16.3425 7.57111L16.3425 7.57111L16.7592 6.94751ZM17.219 7.40734L16.5954 7.82402L16.5954 7.82402L17.219 7.40734ZM18.2499 12.9166C18.2499 12.5024 17.9141 12.1666 17.4999 12.1666C17.0857 12.1666 16.7499 12.5024 16.7499 12.9166H17.4999H18.2499ZM14.5833 6.66663V7.41663C15.1841 7.41663 15.5782 7.41753 15.8766 7.44789C16.1624 7.47696 16.2761 7.52674 16.3425 7.57111L16.7592 6.94751L17.1759 6.32391C16.8219 6.0874 16.4328 5.99673 16.0284 5.95559C15.6365 5.91572 15.1528 5.91663 14.5833 5.91663V6.66663ZM17.4999 9.58329H18.2499C18.2499 9.01371 18.2508 8.53007 18.211 8.13816C18.1698 7.73371 18.0791 7.34462 17.8426 6.99066L17.219 7.40734L16.5954 7.82402C16.6398 7.89043 16.6896 8.00413 16.7187 8.28997C16.749 8.58834 16.7499 8.98249 16.7499 9.58329H17.4999ZM16.7592 6.94751L16.3425 7.57111C16.4426 7.63799 16.5286 7.72393 16.5954 7.82402L17.219 7.40734L17.8426 6.99066C17.6663 6.72679 17.4398 6.50022 17.1759 6.32391L16.7592 6.94751ZM17.4999 12.9166H16.7499V18.3333H17.4999H18.2499V12.9166H17.4999Z" fill="white"/>
<path d="M3.24072 6.94751L3.65739 7.57111L3.65739 7.57111L3.24072 6.94751ZM2.78088 7.40734L3.40449 7.82402L3.40449 7.82402L2.78088 7.40734ZM3.25 16.6666C3.25 16.2524 2.91421 15.9166 2.5 15.9166C2.08579 15.9166 1.75 16.2524 1.75 16.6666H2.5H3.25ZM1.75 13.3333C1.75 13.7475 2.08579 14.0833 2.5 14.0833C2.91421 14.0833 3.25 13.7475 3.25 13.3333H2.5H1.75ZM5.41667 6.66663V5.91663C4.84708 5.91663 4.36344 5.91572 3.97153 5.95559C3.56709 5.99673 3.178 6.0874 2.82404 6.32391L3.24072 6.94751L3.65739 7.57111C3.72381 7.52674 3.8375 7.47696 4.12334 7.44789C4.42172 7.41753 4.81586 7.41663 5.41667 7.41663V6.66663ZM2.5 9.58329H3.25C3.25 8.98249 3.25091 8.58834 3.28126 8.28997C3.31034 8.00413 3.36011 7.89043 3.40449 7.82402L2.78088 7.40734L2.15728 6.99066C1.92077 7.34462 1.8301 7.73371 1.78896 8.13816C1.74909 8.53007 1.75 9.01371 1.75 9.58329H2.5ZM3.24072 6.94751L2.82404 6.32391C2.56016 6.50022 2.3336 6.72679 2.15728 6.99066L2.78088 7.40734L3.40449 7.82402C3.47136 7.72393 3.5573 7.63799 3.65739 7.57111L3.24072 6.94751ZM2.5 16.6666H1.75V18.3333H2.5H3.25V16.6666H2.5ZM2.5 9.58329H1.75V13.3333H2.5H3.25V9.58329H2.5Z" fill="white"/>
<path d="M10 18.3334V15.8334" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M8.33325 4.16663H11.6666" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M8.33325 11.6666H8.74992M11.6666 11.6666H10.4166" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M11.6667 6.66663H11.2501M8.33341 6.66663H9.58341" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M8.33325 9.16663H11.6666" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</g>
<defs>
<clipPath id="clip0_1208_7989">
<rect width="20" height="20" rx="3" fill="white"/>
</clipPath>
</defs>
</svg>

        <span class="flex-1">Clients / NGO</span>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8332 7.5L9.99984 12.5L8.5415 11.25M4.1665 7.5L6.11095 9.16667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

    </summary>
    <div class="ml-8 mt-1 space-y-1 pb-1">
        <a href="{{ route('admin.module', ['clients', 'clients']) }}" class="{{ request()->is('admin-dashboard/clients/clients') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Clients</a>
        <a href="{{ route('admin.module', ['clients', 'ngo']) }}" class="{{ request()->is('admin-dashboard/clients/ngo') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">NGO</a>
        <a href="{{ route('admin.module', ['clients', 'government']) }}" class="{{ request()->is('admin-dashboard/clients/government') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Government</a>
        <a href="{{ route('admin.module', ['clients', 'private']) }}" class="{{ request()->is('admin-dashboard/clients/private') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Private</a>
    </div>
</details>



<details class="group">
    <summary class="flex cursor-pointer list-none items-center gap-3 rounded-md px-3 py-2.5 text-sm  hover:bg-white/10">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1969_1269)">
<path d="M12 5.854V20.9999" stroke="white" stroke-width="1.5"/>
<path d="M5 9L9 10" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M19 9L15 10" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5 13L9 14" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M19 13L15 14" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M20.082 3.01775L20.1081 3.76729V3.76729L20.082 3.01775ZM16.5 3.48744L16.2849 2.76895V2.76895L16.5 3.48744ZM13.6738 4.80275L13.2982 4.15363L13.2982 4.15363L13.6738 4.80275ZM3.9824 3.07489L3.93639 3.82348L3.9824 3.07489ZM7 3.48744L7.19136 2.76227V2.76227L7 3.48744ZM10.2823 4.87546L9.93167 5.53847V5.53847L10.2823 4.87546ZM13.6276 20.0692L13.9804 20.7311V20.7311L13.6276 20.0692ZM17 18.6334L16.8086 17.9082H16.8086L17 18.6334ZM19.9851 18.2228L20.032 18.9714V18.9714L19.9851 18.2228ZM10.3724 20.0692L10.0196 20.7311H10.0196L10.3724 20.0692ZM7 18.6334L7.19136 17.9082H7.19136L7 18.6334ZM4.01486 18.2228L3.96804 18.9714H3.96804L4.01486 18.2228ZM22.75 10.5384C22.75 10.1242 22.4142 9.78839 22 9.78839C21.5858 9.78839 21.25 10.1242 21.25 10.5384H22H22.75ZM21.25 7C21.25 7.41421 21.5858 7.75 22 7.75C22.4142 7.75 22.75 7.41421 22.75 7H22H21.25ZM1.25 10.5707C1.25 10.9849 1.58579 11.3207 2 11.3207C2.41421 11.3207 2.75 10.9849 2.75 10.5707H2H1.25ZM2.75 14C2.75 13.5858 2.41421 13.25 2 13.25C1.58579 13.25 1.25 13.5858 1.25 14H2H2.75ZM20.082 3.01775L20.0559 2.2682C18.9175 2.30785 17.4296 2.42627 16.2849 2.76895L16.5 3.48744L16.7151 4.20594C17.6643 3.92179 18.9892 3.80627 20.1081 3.76729L20.082 3.01775ZM16.5 3.48744L16.2849 2.76895C15.2899 3.06684 14.1706 3.64868 13.2982 4.15363L13.6738 4.80275L14.0495 5.45188C14.9 4.95969 15.8949 4.45149 16.7151 4.20594L16.5 3.48744ZM3.9824 3.07489L3.93639 3.82348C4.90238 3.88285 5.99643 3.99829 6.80864 4.21262L7 3.48744L7.19136 2.76227C6.23055 2.50873 5.01517 2.38695 4.02841 2.3263L3.9824 3.07489ZM7 3.48744L6.80864 4.21262C7.77076 4.46651 8.95486 5.02196 9.93167 5.53847L10.2823 4.87546L10.6328 4.21244C9.63736 3.68606 8.32766 3.06211 7.19136 2.76227L7 3.48744ZM13.6276 20.0692L13.9804 20.7311C14.9714 20.2028 16.1988 19.6205 17.1914 19.3585L17 18.6334L16.8086 17.9082C15.6383 18.217 14.2827 18.8701 13.2748 19.4074L13.6276 20.0692ZM17 18.6334L17.1914 19.3585C17.9943 19.1466 19.0732 19.0313 20.032 18.9714L19.9851 18.2228L19.9383 17.4743C18.9582 17.5356 17.7591 17.6574 16.8086 17.9082L17 18.6334ZM10.3724 20.0692L10.7252 19.4074C9.71727 18.8701 8.3617 18.217 7.19136 17.9082L7 18.6334L6.80864 19.3585C7.8012 19.6205 9.0286 20.2028 10.0196 20.7311L10.3724 20.0692ZM7 18.6334L7.19136 17.9082C6.24092 17.6574 5.04176 17.5356 4.06168 17.4743L4.01486 18.2228L3.96804 18.9714C4.9268 19.0313 6.00566 19.1466 6.80864 19.3585L7 18.6334ZM22 16.1436H21.25C21.25 16.8293 20.6817 17.4278 19.9383 17.4743L19.9851 18.2228L20.032 18.9714C21.5062 18.8791 22.75 17.6798 22.75 16.1436H22ZM22 4.93319H22.75C22.75 3.46989 21.5847 2.21495 20.0559 2.2682L20.082 3.01775L20.1081 3.76729C20.7229 3.74588 21.25 4.25161 21.25 4.93319H22ZM2 16.1436H1.25C1.25 17.6798 2.49378 18.8791 3.96804 18.9714L4.01486 18.2228L4.06168 17.4743C3.31831 17.4278 2.75 16.8293 2.75 16.1436H2ZM13.6276 20.0692L13.2748 19.4074C12.4825 19.8297 11.5175 19.8297 10.7252 19.4074L10.3724 20.0692L10.0196 20.7311C11.2529 21.3885 12.7471 21.3885 13.9804 20.7311L13.6276 20.0692ZM13.6738 4.80275L13.2982 4.15363C12.4801 4.62709 11.4617 4.6507 10.6328 4.21244L10.2823 4.87546L9.93167 5.53847C11.2239 6.22177 12.791 6.18025 14.0495 5.45188L13.6738 4.80275ZM2 4.9978H2.75C2.75 4.30062 3.30243 3.78451 3.93639 3.82348L3.9824 3.07489L4.02841 2.3263C2.47017 2.23053 1.25 3.49864 1.25 4.9978H2ZM22 16.1436H22.75V10.5384H22H21.25V16.1436H22ZM22 7H22.75V4.93319H22H21.25V7H22ZM2 10.5707H2.75V4.9978H2H1.25V10.5707H2ZM2 16.1436H2.75V14H2H1.25V16.1436H2Z" fill="white"/>
</g>
<defs>
<clipPath id="clip0_1969_1269">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

        <span class="flex-1">Accounting</span>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8332 7.5L9.99984 12.5L8.5415 11.25M4.1665 7.5L6.11095 9.16667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

    </summary>
    <div class="ml-8 mt-1 space-y-1 pb-1">
        <a href="{{ route('admin.module', ['accounting', 'journal-entries']) }}" class="{{ request()->is('admin-dashboard/accounting/journal-entries') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Journal Entries</a>
        <a href="{{ route('admin.module', ['accounting', 'general-ledger']) }}" class="{{ request()->is('admin-dashboard/accounting/general-ledger') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">General Ledger</a>
    </div>
</details>



<details class="group">
    <summary class="flex cursor-pointer list-none items-center gap-3 rounded-md px-3 py-2.5 text-sm  hover:bg-white/10">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="8.33333" cy="4.99996" r="3.33333" stroke="white" stroke-width="1.5"/>
<path d="M15.8335 1.66663C15.8335 1.66663 17.5002 2.66663 17.5002 4.99996C17.5002 7.33329 15.8335 8.33329 15.8335 8.33329" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.1665 3.33337C14.1665 3.33337 14.9998 3.83337 14.9998 5.00004C14.9998 6.16671 14.1665 6.66671 14.1665 6.66671" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9977 15C14.9998 14.8632 14.9998 14.7242 14.9998 14.5834C14.9998 12.5123 12.0151 10.8334 8.33317 10.8334C4.65127 10.8334 1.6665 12.5123 1.6665 14.5834C1.6665 16.6544 1.6665 18.3334 8.33317 18.3334C10.1923 18.3334 11.533 18.2028 12.4998 17.9696" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</svg>

        <span class="flex-1">CRM</span>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15.8332 7.5L9.99984 12.5L8.5415 11.25M4.1665 7.5L6.11095 9.16667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

    </summary>
    <div class="ml-8 mt-1 space-y-1 pb-1">
        <a href="{{ route('admin.module', ['crm', 'contacts']) }}" class="{{ request()->is('admin-dashboard/crm/contacts') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Contacts</a>
        <a href="{{ route('admin.module', ['crm', 'vendors']) }}" class="{{ request()->is('admin-dashboard/crm/vendors') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Vendors</a>
        <a href="{{ route('admin.module', ['crm', 'customer-interaction']) }}" class="{{ request()->is('admin-dashboard/crm/customer-interaction') ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">Customer Interaction</a>
    </div>
</details>

<details class="group">
    <summary class="flex cursor-pointer list-none items-center gap-3 rounded-md px-3 py-2.5 text-sm  hover:bg-white/10">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1397_9083)">
<path d="M5.8335 15L5.8335 12.5" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M10 15V10" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.1665 15V7.5" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M18.3332 9.99996C18.3332 13.9283 18.3332 15.8925 17.1128 17.1129C15.8924 18.3333 13.9282 18.3333 9.99984 18.3333C6.07147 18.3333 4.10728 18.3333 2.88689 17.1129C1.6665 15.8925 1.6665 13.9283 1.6665 9.99996C1.6665 6.07159 1.6665 4.1074 2.88689 2.88701C4.10728 1.66663 6.07147 1.66663 9.99984 1.66663C13.9282 1.66663 15.8924 1.66663 17.1128 2.88701C17.9242 3.69846 18.1961 4.83875 18.2873 6.66663" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</g>
<defs>
<clipPath id="clip0_1397_9083">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

        <span class="flex-1">Reports</span>

    </summary>
</details>

<details class="group">
    <summary class="flex cursor-pointer list-none items-center gap-3 rounded-md px-3 py-2.5 text-sm  hover:bg-white/10">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="10" cy="10" r="2.5" stroke="white" stroke-width="1.5"/>
<path d="M3.05094 8.86593C3.44472 9.11335 3.6981 9.53485 3.6981 9.99991C3.6981 10.465 3.44472 10.8865 3.05094 11.1339C2.78297 11.3022 2.61032 11.4368 2.48748 11.5969C2.21839 11.9476 2.09964 12.3908 2.15733 12.829C2.2006 13.1577 2.39475 13.494 2.78303 14.1665C3.17132 14.8391 3.36546 15.1753 3.62847 15.3771C3.97916 15.6462 4.42237 15.765 4.86062 15.7073C5.06065 15.681 5.26349 15.5987 5.54322 15.4509C5.95445 15.2336 6.44624 15.2249 6.84905 15.4575C7.25181 15.69 7.49014 16.1202 7.50752 16.585C7.51935 16.9012 7.54957 17.118 7.62679 17.3044C7.79594 17.7128 8.1204 18.0373 8.52878 18.2064C8.83506 18.3333 9.22335 18.3333 9.99992 18.3333C10.7765 18.3333 11.1648 18.3333 11.4711 18.2064C11.8794 18.0373 12.2039 17.7128 12.3731 17.3044C12.4503 17.118 12.4805 16.9012 12.4923 16.585C12.5097 16.1202 12.748 15.69 13.1508 15.4575C13.5536 15.2249 14.0453 15.2336 14.4565 15.451C14.7363 15.5988 14.9392 15.6811 15.1392 15.7074C15.5775 15.7651 16.0207 15.6463 16.3714 15.3772C16.6344 15.1754 16.8285 14.8392 17.2168 14.1666C17.3897 13.8672 17.524 13.6344 17.6238 13.4393M16.9489 11.134C16.5551 10.8866 16.3017 10.4651 16.3017 10C16.3017 9.53492 16.5551 9.11338 16.9489 8.86594C17.2168 8.69759 17.3894 8.56303 17.5123 8.40296C17.7813 8.05227 17.9001 7.60906 17.8424 7.17081C17.7991 6.84213 17.605 6.50586 17.2167 5.83333C16.8284 5.1608 16.6343 4.82454 16.3713 4.62272C16.0206 4.35363 15.5774 4.23488 15.1391 4.29257C14.9391 4.31891 14.7362 4.40113 14.4565 4.54899C14.0453 4.76632 13.5535 4.775 13.1507 4.54242C12.748 4.30988 12.5097 3.87971 12.4923 3.41498C12.4805 3.09872 12.4503 2.88192 12.3731 2.69549C12.2039 2.28711 11.8794 1.96265 11.4711 1.79349C11.1648 1.66663 10.7765 1.66663 9.99992 1.66663C9.22335 1.66663 8.83506 1.66663 8.52878 1.79349C8.1204 1.96265 7.79594 2.28711 7.62678 2.69549C7.54957 2.8819 7.51935 3.09869 7.50752 3.41491C7.49014 3.87968 7.25179 4.30988 6.84901 4.54243C6.44623 4.77497 5.95449 4.76629 5.54329 4.54896C5.26353 4.40109 5.06067 4.31887 4.86063 4.29253C4.42238 4.23483 3.97916 4.35359 3.62848 4.62268C3.36547 4.8245 3.17132 5.16076 2.78304 5.83329C2.61018 6.1327 2.47579 6.36545 2.37607 6.56057" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</svg>

        <span class="flex-1">Setting</span>

    </summary>
</details>
    </nav>

    <div class="mt-5 flex items-center gap-3  pt-4">
        <img src="https://ui-avatars.com/api/?name={{ urlencode($currentUser->name ?? 'Admin Panel') }}&background=1d4ed8&color=fff"
            alt="{{ $currentUser->name ?? 'Admin' }}" class="h-9 w-9 rounded-md">
        <div class="min-w-0 flex-1">
            <p class="truncate text-sm font-semibold text-white">{{ $currentUser->name ?? 'Admin Panel' }}</p>
            <p class="truncate text-xs text-blue-100">{{ $currentUser->email ?? 'Admin@gmail.com' }}</p>
        </div>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="text-blue-100 hover:text-white" title="Logout">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>
        </form>
    </div>
</aside>
{{-- Mobile / Tablet Top Bar --}}
<header class="mobile-admin-topbar lg:hidden fixed top-0 left-0 right-0 z-50 px-4 py-3">
    <div class="mx-auto flex max-w-[430px] items-center justify-between gap-3">
        <a href="{{ route('admin.dashboard') }}" class="flex min-w-0 items-center gap-2">
            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.3334 10C18.3334 10 17.506 10.7423 15.8511 11.4042L13.5107 12.3404C11.8558 13.0024 11.0283 13.3333 10.0001 13.3333C8.97185 13.3333 8.1444 13.0024 6.4895 12.3404L4.14911 11.4042C2.4942 10.7423 1.66675 10 1.66675 10" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M1.66675 13.3334C1.66675 13.3334 2.4942 14.0756 4.14911 14.7376L6.4895 15.6738C8.1444 16.3357 8.97185 16.6667 10.0001 16.6667C10.795 16.6667 11.47 16.4689 12.5001 16.0732M15.8511 14.7376C17.506 14.0756 18.3334 13.3334 18.3334 13.3334" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M4.14911 5.26247C2.4942 5.92444 1.66675 6.25542 1.66675 6.66671C1.66675 7.078 2.4942 7.40898 4.14911 8.07094L6.4895 9.0071C8.1444 9.66906 8.97185 10 10.0001 10C11.0283 10 11.8558 9.66906 13.5107 9.0071L15.8511 8.07094C17.506 7.40898 18.3334 7.078 18.3334 6.66671C18.3334 6.25542 17.506 5.92444 15.8511 5.26247L13.5107 4.32632C11.8558 3.66436 11.0283 3.33337 10.0001 3.33337C9.20513 3.33337 8.53018 3.53121 7.50008 3.92689" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</svg>
            </span>
            <span class="min-w-0">
                <span class="mobile-brand-title block truncate text-sm font-semibold leading-4">AQSA SYSTEM</span>
                <span class="mobile-brand-subtitle block truncate text-[10px] uppercase leading-3">Enterprise ERP</span>
            </span>
        </a>

        <div class="flex shrink-0 items-center gap-3">
            <a href="{{ route('admin.module', ['setting', 'audit-log']) }}" class="relative flex h-10 w-10 items-center justify-center rounded-full text-white">
                <i class="fa-regular fa-bell text-xl"></i>
                <span class="absolute -right-1 -top-1 flex h-5 w-5 items-center justify-center rounded-full bg-orange-500 text-[10px] text-white">3</span>
            </a>

            <details class="mobile-profile-menu">
                <summary class="block">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($currentUser->name ?? 'Admin') }}&background=1d4ed8&color=fff"
                         alt="Admin profile" class="h-9 w-9 rounded-full">
                </summary>
                <div class="mobile-profile-dropdown">
                    <a href="{{ route('admin.module', ['clients', 'clients']) }}" class="{{ request()->is('admin-dashboard/clients/*') ? 'is-active' : '' }}">
                        <i class="fa-solid fa-building"></i>
                        Clients / NGO
                    </a>
                    <a href="{{ route('admin.module', ['reports', 'finance']) }}" class="{{ request()->is('admin-dashboard/reports/*') ? 'is-active' : '' }}">
                         <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1397_9083)">
<path d="M5.8335 15L5.8335 12.5" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M10 15V10" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.1665 15V7.5" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M18.3332 9.99996C18.3332 13.9283 18.3332 15.8925 17.1128 17.1129C15.8924 18.3333 13.9282 18.3333 9.99984 18.3333C6.07147 18.3333 4.10728 18.3333 2.88689 17.1129C1.6665 15.8925 1.6665 13.9283 1.6665 9.99996C1.6665 6.07159 1.6665 4.1074 2.88689 2.88701C4.10728 1.66663 6.07147 1.66663 9.99984 1.66663C13.9282 1.66663 15.8924 1.66663 17.1128 2.88701C17.9242 3.69846 18.1961 4.83875 18.2873 6.66663" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</g>
<defs>
<clipPath id="clip0_1397_9083">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>
                        Reports
                    </a>
                    <a href="{{ route('admin.module', ['setting', 'roles-permissions']) }}" class="{{ request()->is('admin-dashboard/setting/*') ? 'is-active' : '' }}">
                       <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="10" cy="10" r="2.5" stroke="white" stroke-width="1.5"/>
<path d="M3.05094 8.86593C3.44472 9.11335 3.6981 9.53485 3.6981 9.99991C3.6981 10.465 3.44472 10.8865 3.05094 11.1339C2.78297 11.3022 2.61032 11.4368 2.48748 11.5969C2.21839 11.9476 2.09964 12.3908 2.15733 12.829C2.2006 13.1577 2.39475 13.494 2.78303 14.1665C3.17132 14.8391 3.36546 15.1753 3.62847 15.3771C3.97916 15.6462 4.42237 15.765 4.86062 15.7073C5.06065 15.681 5.26349 15.5987 5.54322 15.4509C5.95445 15.2336 6.44624 15.2249 6.84905 15.4575C7.25181 15.69 7.49014 16.1202 7.50752 16.585C7.51935 16.9012 7.54957 17.118 7.62679 17.3044C7.79594 17.7128 8.1204 18.0373 8.52878 18.2064C8.83506 18.3333 9.22335 18.3333 9.99992 18.3333C10.7765 18.3333 11.1648 18.3333 11.4711 18.2064C11.8794 18.0373 12.2039 17.7128 12.3731 17.3044C12.4503 17.118 12.4805 16.9012 12.4923 16.585C12.5097 16.1202 12.748 15.69 13.1508 15.4575C13.5536 15.2249 14.0453 15.2336 14.4565 15.451C14.7363 15.5988 14.9392 15.6811 15.1392 15.7074C15.5775 15.7651 16.0207 15.6463 16.3714 15.3772C16.6344 15.1754 16.8285 14.8392 17.2168 14.1666C17.3897 13.8672 17.524 13.6344 17.6238 13.4393M16.9489 11.134C16.5551 10.8866 16.3017 10.4651 16.3017 10C16.3017 9.53492 16.5551 9.11338 16.9489 8.86594C17.2168 8.69759 17.3894 8.56303 17.5123 8.40296C17.7813 8.05227 17.9001 7.60906 17.8424 7.17081C17.7991 6.84213 17.605 6.50586 17.2167 5.83333C16.8284 5.1608 16.6343 4.82454 16.3713 4.62272C16.0206 4.35363 15.5774 4.23488 15.1391 4.29257C14.9391 4.31891 14.7362 4.40113 14.4565 4.54899C14.0453 4.76632 13.5535 4.775 13.1507 4.54242C12.748 4.30988 12.5097 3.87971 12.4923 3.41498C12.4805 3.09872 12.4503 2.88192 12.3731 2.69549C12.2039 2.28711 11.8794 1.96265 11.4711 1.79349C11.1648 1.66663 10.7765 1.66663 9.99992 1.66663C9.22335 1.66663 8.83506 1.66663 8.52878 1.79349C8.1204 1.96265 7.79594 2.28711 7.62678 2.69549C7.54957 2.8819 7.51935 3.09869 7.50752 3.41491C7.49014 3.87968 7.25179 4.30988 6.84901 4.54243C6.44623 4.77497 5.95449 4.76629 5.54329 4.54896C5.26353 4.40109 5.06067 4.31887 4.86063 4.29253C4.42238 4.23483 3.97916 4.35359 3.62848 4.62268C3.36547 4.8245 3.17132 5.16076 2.78304 5.83329C2.61018 6.1327 2.47579 6.36545 2.37607 6.56057" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</svg>
                        Profile Settings
                    </a>
                </div>
            </details>
        </div>
    </div>
</header>

{{-- Mobile / Tablet Bottom Navigation --}}
<nav class="lg:hidden fixed bottom-0 left-0 right-0 z-50">
    <div class="mobile-admin-bottom h-[72px] w-full rounded-t-[22px] px-1 pb-1 pt-2">
        <div class="mobile-nav-grid">
            <details class="mobile-nav-menu">
                <summary class="mobile-nav-item {{ request()->is('admin-dashboard/hr/*') ? 'is-active' : '' }}">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1969_1885)">
<path d="M3.33325 4.66667C3.33325 5.37391 3.6142 6.05219 4.1143 6.55229C4.6144 7.05238 5.29267 7.33333 5.99992 7.33333C6.70716 7.33333 7.38544 7.05238 7.88554 6.55229C8.38563 6.05219 8.66659 5.37391 8.66659 4.66667C8.66659 3.95942 8.38563 3.28115 7.88554 2.78105C7.38544 2.28095 6.70716 2 5.99992 2C5.29267 2 4.6144 2.28095 4.1143 2.78105C3.6142 3.28115 3.33325 3.95942 3.33325 4.66667Z" stroke="#FAFAFA" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2 14V12.6667C2 11.9594 2.28095 11.2811 2.78105 10.781C3.28115 10.281 3.95942 10 4.66667 10H7.33333C8.04058 10 8.71885 10.281 9.21895 10.781C9.71905 11.2811 10 11.9594 10 12.6667V14" stroke="#FAFAFA" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6667 2.08667C11.2404 2.23354 11.7488 2.56714 12.1118 3.03488C12.4749 3.50262 12.672 4.07789 12.672 4.67C12.672 5.26212 12.4749 5.83739 12.1118 6.30513C11.7488 6.77287 11.2404 7.10647 10.6667 7.25334" stroke="#FAFAFA" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14 14V12.6666C13.9966 12.0781 13.7986 11.5072 13.4368 11.0429C13.0751 10.5786 12.5699 10.2471 12 10.1" stroke="#FAFAFA" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_1969_1885">
<rect width="16" height="16" fill="white"/>
</clipPath>
</defs>
</svg>
                    <span>HR</span>
                </summary>
                <div class="mobile-nav-dropdown">
                    <a href="{{ route('admin.module', ['hr', 'staff-profiles']) }}" class="{{ request()->is('admin-dashboard/hr/staff-profiles') ? 'is-active' : '' }}">Staff Profiles</a>
                    <a href="{{ route('admin.module', ['hr', 'attendance-leave']) }}" class="{{ request()->is('admin-dashboard/hr/attendance-leave') ? 'is-active' : '' }}">Attendance & Leave</a>
                    <a href="{{ route('admin.module', ['hr', 'payroll']) }}" class="{{ request()->is('admin-dashboard/hr/payroll') ? 'is-active' : '' }}">Payroll</a>
                </div>
            </details>

            <details class="mobile-nav-menu">
                <summary class="mobile-nav-item {{ request()->is('admin-dashboard/finance/*') ? 'is-active' : '' }}">
                   <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.6814 5.83337H18.3332V10.4549M18.3332 5.83337L14.5832 9.58337M12.1835 11.9456C11.3521 12.7719 10.9364 13.1851 10.4208 13.185C9.90514 13.185 9.48954 12.7717 8.65834 11.9452L8.45888 11.7469C7.62695 10.9196 7.21099 10.506 6.69502 10.5062C6.17905 10.5064 5.76339 10.9203 4.93206 11.7481L1.6665 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                    <span>Finance</span>
                </summary>
                <div class="mobile-nav-dropdown">
                    <a href="{{ route('admin.module', ['finance', 'sales-invoices']) }}" class="{{ request()->is('admin-dashboard/finance/sales-invoices') ? 'is-active' : '' }}">Sales Invoices</a>
                    <a href="{{ route('admin.module', ['finance', 'purchase-invoices']) }}" class="{{ request()->is('admin-dashboard/finance/purchase-invoices') ? 'is-active' : '' }}">Purchase Invoices</a>
                    <a href="{{ route('admin.module', ['finance', 'expenses']) }}" class="{{ request()->is('admin-dashboard/finance/expenses') ? 'is-active' : '' }}">Expenses</a>
                    <a href="{{ route('admin.module', ['finance', 'payments']) }}" class="{{ request()->is('admin-dashboard/finance/payments') ? 'is-active' : '' }}">Payments</a>
                </div>
            </details>

            <details class="mobile-nav-menu">
                <summary class="mobile-nav-item {{ request()->is('admin-dashboard/ict/*') ? 'is-active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.5 8.33333V11.6667C2.5 13.238 2.5 14.0237 2.98816 14.5118C3.47631 15 4.26198 15 5.83333 15H14.1667C15.738 15 16.5237 15 17.0118 14.5118C17.5 14.0237 17.5 13.238 17.5 11.6667V7.5C17.5 5.14298 17.5 3.96447 16.7678 3.23223C16.0355 2.5 14.857 2.5 12.5 2.5H7.5C5.14298 2.5 3.96447 2.5 3.23223 3.23223C2.82399 3.64047 2.64336 4.18743 2.56343 5" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M18.3332 17.5H13.3332M1.6665 17.5H9.99984" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12.5 12.5H7.5" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</svg>
                    <span>ICT</span>
                </summary>
                <div class="mobile-nav-dropdown">
                    <a href="{{ route('admin.module', ['ict', 'projects']) }}" class="{{ request()->is('admin-dashboard/ict/projects') ? 'is-active' : '' }}">Projects</a>
                    <a href="{{ route('admin.module', ['ict', 'tasks']) }}" class="{{ request()->is('admin-dashboard/ict/tasks') ? 'is-active' : '' }}">Tasks</a>
                    <a href="{{ route('admin.module', ['ict', 'time-tracking']) }}" class="{{ request()->is('admin-dashboard/ict/time-tracking') ? 'is-active' : '' }}">Time Tracking</a>
                    <a href="{{ route('admin.module', ['ict', 'infrastructure']) }}" class="{{ request()->is('admin-dashboard/ict/infrastructure') ? 'is-active' : '' }}">Infrastructure</a>
                </div>
            </details>

            <a href="{{ route('admin.dashboard') }}" class="mobile-nav-item mobile-dashboard-item {{ request()->routeIs('admin.dashboard') ? 'is-active' : '' }}">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.12573 3.75004C2.17902 3.20833 2.29944 2.84369 2.5716 2.57153C3.05975 2.08337 3.84543 2.08337 5.41678 2.08337C6.98813 2.08337 7.7738 2.08337 8.26196 2.57153C8.75011 3.05968 8.75011 3.84536 8.75011 5.41671C8.75011 6.98806 8.75011 7.77373 8.26196 8.26189C7.7738 8.75004 6.98813 8.75004 5.41678 8.75004C3.84543 8.75004 3.05975 8.75004 2.5716 8.26189C2.31379 8.00408 2.19214 7.66328 2.13473 7.16759" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M17.8744 12.9167C17.8211 12.375 17.7007 12.0103 17.4285 11.7382C16.9404 11.25 16.1547 11.25 14.5833 11.25C13.012 11.25 12.2263 11.25 11.7382 11.7382C11.25 12.2263 11.25 13.012 11.25 14.5833C11.25 16.1547 11.25 16.9404 11.7382 17.4285C12.2263 17.9167 13.012 17.9167 14.5833 17.9167C16.1547 17.9167 16.9404 17.9167 17.4285 17.4285C17.7007 17.1564 17.8211 16.7917 17.8744 16.25" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M2.08325 14.5833C2.08325 13.012 2.08325 12.2263 2.57141 11.7382C3.05956 11.25 3.84524 11.25 5.41659 11.25C6.98793 11.25 7.77361 11.25 8.26176 11.7382C8.74992 12.2263 8.74992 13.012 8.74992 14.5833C8.74992 16.1547 8.74992 16.9404 8.26176 17.4285C7.77361 17.9167 6.98793 17.9167 5.41659 17.9167C3.84524 17.9167 3.05956 17.9167 2.57141 17.4285C2.08325 16.9404 2.08325 16.1547 2.08325 14.5833Z" stroke="white" stroke-width="1.5"/>
<path d="M11.25 5.41671C11.25 3.84536 11.25 3.05968 11.7382 2.57153C12.2263 2.08337 13.012 2.08337 14.5833 2.08337C16.1547 2.08337 16.9404 2.08337 17.4285 2.57153C17.9167 3.05968 17.9167 3.84536 17.9167 5.41671C17.9167 6.98806 17.9167 7.77373 17.4285 8.26189C16.9404 8.75004 16.1547 8.75004 14.5833 8.75004C13.012 8.75004 12.2263 8.75004 11.7382 8.26189C11.25 7.77373 11.25 6.98806 11.25 5.41671Z" stroke="white" stroke-width="1.5"/>
</svg>
                <span>Dashboard</span>
            </a>

            <details class="mobile-nav-menu">
                <summary class="mobile-nav-item {{ request()->is('admin-dashboard/logistic/*') ? 'is-active' : '' }}">
                     <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1969_1324)">
<path d="M8.3335 1.67395C6.26719 1.70384 5.09571 1.85711 4.30981 2.64302C3.3335 3.61933 3.3335 5.19068 3.3335 8.33337V10C3.3335 13.1427 3.3335 14.7141 4.30981 15.6904C5.28612 16.6667 6.85747 16.6667 10.0002 16.6667C13.1429 16.6667 14.7142 16.6667 15.6905 15.6904C16.6668 14.7141 16.6668 13.1427 16.6668 10V8.33338C16.6668 5.19068 16.6668 3.61933 15.6905 2.64302C14.9046 1.85711 13.7331 1.70384 11.6668 1.67395" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M16.6665 10.8334H13.3332M3.33317 10.8334H9.99984" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12.9165 13.3334H14.1665" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.8335 13.3334H7.0835" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5 16.25V17.5C5 17.9602 5.3731 18.3333 5.83333 18.3333H7.08333C7.54357 18.3333 7.91667 17.9602 7.91667 17.5V16.6667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.0002 16.25V17.5C15.0002 17.9602 14.6271 18.3333 14.1668 18.3333H12.9168C12.4566 18.3333 12.0835 17.9602 12.0835 17.5V16.6667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16.6665 7.5H17.4998C17.9601 7.5 18.3332 7.8731 18.3332 8.33333V9.16667C18.3332 9.42896 18.2097 9.67595 17.9998 9.83333L16.6665 10.8333" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.33317 7.5H2.49984C2.0396 7.5 1.6665 7.8731 1.6665 8.33333V9.16667C1.6665 9.42896 1.79 9.67595 1.99984 9.83333L3.33317 10.8333" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.75 4.16663H6.875M16.25 4.16663H10" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</g>
<defs>
<clipPath id="clip0_1969_1324">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>
<span>Logistic</span>
                </summary>
                <div class="mobile-nav-dropdown">
                    <a href="{{ route('admin.module', ['logistic', 'contracts']) }}" class="{{ request()->is('admin-dashboard/logistic/contracts') ? 'is-active' : '' }}">Contracts</a>
                    <a href="{{ route('admin.module', ['logistic', 'vehicles']) }}" class="{{ request()->is('admin-dashboard/logistic/vehicles') ? 'is-active' : '' }}">Vehicles</a>
                    <a href="{{ route('admin.module', ['logistic', 'fuel']) }}" class="{{ request()->is('admin-dashboard/logistic/fuel') ? 'is-active' : '' }}">Fuel</a>
                </div>
            </details>

            <details class="mobile-nav-menu">
                <summary class="mobile-nav-item {{ request()->is('admin-dashboard/accounting/*') ? 'is-active' : '' }}">
                          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1969_1269)">
<path d="M12 5.854V20.9999" stroke="white" stroke-width="1.5"/>
<path d="M5 9L9 10" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M19 9L15 10" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5 13L9 14" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M19 13L15 14" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M20.082 3.01775L20.1081 3.76729V3.76729L20.082 3.01775ZM16.5 3.48744L16.2849 2.76895V2.76895L16.5 3.48744ZM13.6738 4.80275L13.2982 4.15363L13.2982 4.15363L13.6738 4.80275ZM3.9824 3.07489L3.93639 3.82348L3.9824 3.07489ZM7 3.48744L7.19136 2.76227V2.76227L7 3.48744ZM10.2823 4.87546L9.93167 5.53847V5.53847L10.2823 4.87546ZM13.6276 20.0692L13.9804 20.7311V20.7311L13.6276 20.0692ZM17 18.6334L16.8086 17.9082H16.8086L17 18.6334ZM19.9851 18.2228L20.032 18.9714V18.9714L19.9851 18.2228ZM10.3724 20.0692L10.0196 20.7311H10.0196L10.3724 20.0692ZM7 18.6334L7.19136 17.9082H7.19136L7 18.6334ZM4.01486 18.2228L3.96804 18.9714H3.96804L4.01486 18.2228ZM22.75 10.5384C22.75 10.1242 22.4142 9.78839 22 9.78839C21.5858 9.78839 21.25 10.1242 21.25 10.5384H22H22.75ZM21.25 7C21.25 7.41421 21.5858 7.75 22 7.75C22.4142 7.75 22.75 7.41421 22.75 7H22H21.25ZM1.25 10.5707C1.25 10.9849 1.58579 11.3207 2 11.3207C2.41421 11.3207 2.75 10.9849 2.75 10.5707H2H1.25ZM2.75 14C2.75 13.5858 2.41421 13.25 2 13.25C1.58579 13.25 1.25 13.5858 1.25 14H2H2.75ZM20.082 3.01775L20.0559 2.2682C18.9175 2.30785 17.4296 2.42627 16.2849 2.76895L16.5 3.48744L16.7151 4.20594C17.6643 3.92179 18.9892 3.80627 20.1081 3.76729L20.082 3.01775ZM16.5 3.48744L16.2849 2.76895C15.2899 3.06684 14.1706 3.64868 13.2982 4.15363L13.6738 4.80275L14.0495 5.45188C14.9 4.95969 15.8949 4.45149 16.7151 4.20594L16.5 3.48744ZM3.9824 3.07489L3.93639 3.82348C4.90238 3.88285 5.99643 3.99829 6.80864 4.21262L7 3.48744L7.19136 2.76227C6.23055 2.50873 5.01517 2.38695 4.02841 2.3263L3.9824 3.07489ZM7 3.48744L6.80864 4.21262C7.77076 4.46651 8.95486 5.02196 9.93167 5.53847L10.2823 4.87546L10.6328 4.21244C9.63736 3.68606 8.32766 3.06211 7.19136 2.76227L7 3.48744ZM13.6276 20.0692L13.9804 20.7311C14.9714 20.2028 16.1988 19.6205 17.1914 19.3585L17 18.6334L16.8086 17.9082C15.6383 18.217 14.2827 18.8701 13.2748 19.4074L13.6276 20.0692ZM17 18.6334L17.1914 19.3585C17.9943 19.1466 19.0732 19.0313 20.032 18.9714L19.9851 18.2228L19.9383 17.4743C18.9582 17.5356 17.7591 17.6574 16.8086 17.9082L17 18.6334ZM10.3724 20.0692L10.7252 19.4074C9.71727 18.8701 8.3617 18.217 7.19136 17.9082L7 18.6334L6.80864 19.3585C7.8012 19.6205 9.0286 20.2028 10.0196 20.7311L10.3724 20.0692ZM7 18.6334L7.19136 17.9082C6.24092 17.6574 5.04176 17.5356 4.06168 17.4743L4.01486 18.2228L3.96804 18.9714C4.9268 19.0313 6.00566 19.1466 6.80864 19.3585L7 18.6334ZM22 16.1436H21.25C21.25 16.8293 20.6817 17.4278 19.9383 17.4743L19.9851 18.2228L20.032 18.9714C21.5062 18.8791 22.75 17.6798 22.75 16.1436H22ZM22 4.93319H22.75C22.75 3.46989 21.5847 2.21495 20.0559 2.2682L20.082 3.01775L20.1081 3.76729C20.7229 3.74588 21.25 4.25161 21.25 4.93319H22ZM2 16.1436H1.25C1.25 17.6798 2.49378 18.8791 3.96804 18.9714L4.01486 18.2228L4.06168 17.4743C3.31831 17.4278 2.75 16.8293 2.75 16.1436H2ZM13.6276 20.0692L13.2748 19.4074C12.4825 19.8297 11.5175 19.8297 10.7252 19.4074L10.3724 20.0692L10.0196 20.7311C11.2529 21.3885 12.7471 21.3885 13.9804 20.7311L13.6276 20.0692ZM13.6738 4.80275L13.2982 4.15363C12.4801 4.62709 11.4617 4.6507 10.6328 4.21244L10.2823 4.87546L9.93167 5.53847C11.2239 6.22177 12.791 6.18025 14.0495 5.45188L13.6738 4.80275ZM2 4.9978H2.75C2.75 4.30062 3.30243 3.78451 3.93639 3.82348L3.9824 3.07489L4.02841 2.3263C2.47017 2.23053 1.25 3.49864 1.25 4.9978H2ZM22 16.1436H22.75V10.5384H22H21.25V16.1436H22ZM22 7H22.75V4.93319H22H21.25V7H22ZM2 10.5707H2.75V4.9978H2H1.25V10.5707H2ZM2 16.1436H2.75V14H2H1.25V16.1436H2Z" fill="white"/>
</g>
<defs>
<clipPath id="clip0_1969_1269">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>
                    <span>Accounting</span>
                </summary>
                <div class="mobile-nav-dropdown">
                    <a href="{{ route('admin.module', ['accounting', 'journal-entries']) }}" class="{{ request()->is('admin-dashboard/accounting/journal-entries') ? 'is-active' : '' }}">Journal Entries</a>
                    <a href="{{ route('admin.module', ['accounting', 'general-ledger']) }}" class="{{ request()->is('admin-dashboard/accounting/general-ledger') ? 'is-active' : '' }}">General Ledger</a>
                </div>
            </details>

            <details class="mobile-nav-menu">
                <summary class="mobile-nav-item {{ request()->is('admin-dashboard/crm/*') ? 'is-active' : '' }}">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="8.33333" cy="4.99996" r="3.33333" stroke="white" stroke-width="1.5"/>
<path d="M15.8335 1.66663C15.8335 1.66663 17.5002 2.66663 17.5002 4.99996C17.5002 7.33329 15.8335 8.33329 15.8335 8.33329" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.1665 3.33337C14.1665 3.33337 14.9998 3.83337 14.9998 5.00004C14.9998 6.16671 14.1665 6.66671 14.1665 6.66671" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9977 15C14.9998 14.8632 14.9998 14.7242 14.9998 14.5834C14.9998 12.5123 12.0151 10.8334 8.33317 10.8334C4.65127 10.8334 1.6665 12.5123 1.6665 14.5834C1.6665 16.6544 1.6665 18.3334 8.33317 18.3334C10.1923 18.3334 11.533 18.2028 12.4998 17.9696" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</svg>
<span>CRM</span>
                </summary>
                <div class="mobile-nav-dropdown">
                    <a href="{{ route('admin.module', ['crm', 'contacts']) }}" class="{{ request()->is('admin-dashboard/crm/contacts') ? 'is-active' : '' }}">Contacts</a>
                    <a href="{{ route('admin.module', ['crm', 'vendors']) }}" class="{{ request()->is('admin-dashboard/crm/vendors') ? 'is-active' : '' }}">Vendors</a>
                    <a href="{{ route('admin.module', ['crm', 'tickets']) }}" class="{{ request()->is('admin-dashboard/crm/tickets') ? 'is-active' : '' }}">Tickets</a>
                    <a href="{{ route('admin.module', ['crm', 'customer-interaction']) }}" class="{{ request()->is('admin-dashboard/crm/customer-interaction') ? 'is-active' : '' }}">Customer Interaction</a>
                </div>
            </details>

        </div>
    </div>
</nav>
