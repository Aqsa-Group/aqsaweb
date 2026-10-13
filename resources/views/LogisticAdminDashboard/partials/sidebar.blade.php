@php
    $logisticSidebarGroups = [
        [
            'label' => 'Finance',
            'icon' => 'fa-chart-line',
            'icon_svg' => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.6809 5.83337H18.3327V10.4549M18.3327 5.83337L14.5827 9.58337M12.183 11.9456C11.3516 12.7719 10.9359 13.1851 10.4203 13.185C9.90465 13.185 9.48905 12.7717 8.65785 11.9452L8.45839 11.7469C7.62646 10.9196 7.2105 10.506 6.69453 10.5062C6.17857 10.5064 5.7629 10.9203 4.93157 11.7481L1.66602 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
',
            'section' => 'finance',
            'items' => [
                ['label' => 'Sales Invoices', 'params' => ['finance', 'sales-invoices']],
                ['label' => 'Purchase Invoices', 'params' => ['finance', 'purchase-invoices']],
                ['label' => 'Expenses', 'params' => ['finance', 'expenses']],
                ['label' => 'Payments', 'params' => ['finance', 'payments']],
            ],
        ],
        [
            'label' => 'Logistic',
            'icon' => 'fa-truck-fast',
            'icon_svg' => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2347_9471)">
<path d="M8.33398 1.67395C6.26768 1.70384 5.0962 1.85711 4.3103 2.64302C3.33398 3.61933 3.33398 5.19068 3.33398 8.33337V10C3.33398 13.1427 3.33398 14.7141 4.3103 15.6904C5.28661 16.6667 6.85795 16.6667 10.0007 16.6667C13.1433 16.6667 14.7147 16.6667 15.691 15.6904C16.6673 14.7141 16.6673 13.1427 16.6673 10V8.33338C16.6673 5.19068 16.6673 3.61933 15.691 2.64302C14.9051 1.85711 13.7336 1.70384 11.6673 1.67395" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M16.666 10.8334H13.3327M3.33268 10.8334H9.99935" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12.916 13.3334H14.166" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.83398 13.3334H7.08398" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5 16.25V17.5C5 17.9602 5.3731 18.3333 5.83333 18.3333H7.08333C7.54357 18.3333 7.91667 17.9602 7.91667 17.5V16.6667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.0007 16.25V17.5C15.0007 17.9602 14.6276 18.3333 14.1673 18.3333H12.9173C12.4571 18.3333 12.084 17.9602 12.084 17.5V16.6667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16.666 7.5H17.4993C17.9596 7.5 18.3327 7.8731 18.3327 8.33333V9.16667C18.3327 9.42896 18.2092 9.67595 17.9993 9.83333L16.666 10.8333" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.33268 7.5H2.49935C2.03911 7.5 1.66602 7.8731 1.66602 8.33333V9.16667C1.66602 9.42896 1.78951 9.67595 1.99935 9.83333L3.33268 10.8333" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.75 4.16663H6.875M16.25 4.16663H10" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</g>
<defs>
<clipPath id="clip0_2347_9471">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>
',
            'section' => 'logistic',
            'items' => [
                ['label' => 'Contracts', 'params' => ['logistic', 'contracts']],
            ],
        ],
        [
            'label' => 'Accounting',
            'icon' => 'fa-book-open',
            'icon_svg' => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10 4.8783V17.4999" stroke="white" stroke-width="1.5"/>
<path d="M4.16602 7.5L7.49935 8.33333" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.834 7.5L12.5007 8.33333" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M4.16602 10.8334L7.49935 11.6667" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.834 10.8334L12.5007 11.6667" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M16.7343 2.51475L16.7604 3.26429V3.26429L16.7343 2.51475ZM13.7493 2.90616L13.5343 2.18767V2.18767L13.7493 2.90616ZM11.3942 4.00225L11.0185 3.35313V3.35313L11.3942 4.00225ZM3.31802 2.56237L3.27201 3.31095L3.31802 2.56237ZM5.83268 2.90616L6.02404 2.18099V2.18099L5.83268 2.90616ZM8.56789 4.06284L8.21731 4.72586V4.72586L8.56789 4.06284ZM11.3557 16.7243L11.7085 17.3862H11.7085L11.3557 16.7243ZM14.166 15.5278L13.9747 14.8026V14.8026L14.166 15.5278ZM16.6536 15.1856L16.7005 15.9342V15.9342L16.6536 15.1856ZM8.64303 16.7243L8.29023 17.3862H8.29023L8.64303 16.7243ZM5.83268 15.5278L6.02404 14.8026H6.02404L5.83268 15.5278ZM3.34506 15.1856L3.29825 15.9342H3.29825L3.34506 15.1856ZM19.0827 8.78195C19.0827 8.36774 18.7469 8.03195 18.3327 8.03195C17.9185 8.03195 17.5827 8.36774 17.5827 8.78195H18.3327H19.0827ZM17.5827 5.83329C17.5827 6.24751 17.9185 6.58329 18.3327 6.58329C18.7469 6.58329 19.0827 6.24751 19.0827 5.83329H18.3327H17.5827ZM0.916016 8.80887C0.916016 9.22308 1.2518 9.55887 1.66602 9.55887C2.08023 9.55887 2.41602 9.22308 2.41602 8.80887H1.66602H0.916016ZM2.41602 11.6666C2.41602 11.2524 2.08023 10.9166 1.66602 10.9166C1.2518 10.9166 0.916016 11.2524 0.916016 11.6666H1.66602H2.41602ZM16.7343 2.51475L16.7082 1.7652C15.758 1.7983 14.5044 1.89722 13.5343 2.18767L13.7493 2.90616L13.9644 3.62466C14.7391 3.39274 15.8297 3.29671 16.7604 3.26429L16.7343 2.51475ZM13.7493 2.90616L13.5343 2.18767C12.6905 2.44027 11.7474 2.93128 11.0185 3.35313L11.3942 4.00225L11.7699 4.65138C12.4768 4.24228 13.2955 3.82492 13.9644 3.62466L13.7493 2.90616ZM3.31802 2.56237L3.27201 3.31095C4.07526 3.36032 4.97686 3.456 5.64132 3.63134L5.83268 2.90616L6.02404 2.18099C5.21098 1.96643 4.18806 1.86442 3.36403 1.81378L3.31802 2.56237ZM5.83268 2.90616L5.64132 3.63134C6.42857 3.83908 7.40486 4.29625 8.21731 4.72586L8.56789 4.06284L8.91848 3.39983C8.08736 2.96035 6.98547 2.43469 6.02404 2.18099L5.83268 2.90616ZM11.3557 16.7243L11.7085 17.3862C12.5329 16.9467 13.5451 16.4673 14.3574 16.2529L14.166 15.5278L13.9747 14.8026C12.9846 15.0639 11.8442 15.614 11.0029 16.0625L11.3557 16.7243ZM14.166 15.5278L14.3574 16.2529C15.0142 16.0796 15.9033 15.984 16.7005 15.9342L16.6536 15.1856L16.6068 14.4371C15.7883 14.4883 14.779 14.5903 13.9747 14.8026L14.166 15.5278ZM8.64303 16.7243L8.99583 16.0625C8.15446 15.614 7.01414 15.0639 6.02404 14.8026L5.83268 15.5278L5.64132 16.2529C6.45364 16.4673 7.4658 16.9467 8.29023 17.3862L8.64303 16.7243ZM5.83268 15.5278L6.02404 14.8026C5.21972 14.5903 4.2104 14.4883 3.39188 14.4371L3.34506 15.1856L3.29825 15.9342C4.09544 15.984 4.98446 16.0796 5.64132 16.2529L5.83268 15.5278ZM18.3327 13.4529H17.5827C17.5827 13.9535 17.1654 14.4022 16.6068 14.4371L16.6536 15.1856L16.7005 15.9342C17.9899 15.8535 19.0827 14.804 19.0827 13.4529H18.3327ZM18.3327 4.11095H19.0827C19.0827 2.82639 18.0584 1.71817 16.7082 1.7652L16.7343 2.51475L16.7604 3.26429C17.1966 3.2491 17.5827 3.60811 17.5827 4.11095H18.3327ZM1.66602 13.4529H0.916016C0.916016 14.804 2.00879 15.8535 3.29825 15.9342L3.34506 15.1856L3.39188 14.4371C2.83332 14.4022 2.41602 13.9535 2.41602 13.4529H1.66602ZM11.3557 16.7243L11.0029 16.0625C10.3794 16.3948 9.61931 16.3948 8.99583 16.0625L8.64303 16.7243L8.29023 17.3862C9.35474 17.9536 10.644 17.9536 11.7085 17.3862L11.3557 16.7243ZM11.3942 4.00225L11.0185 3.35313C10.3735 3.72644 9.57054 3.74462 8.91848 3.39983L8.56789 4.06284L8.21731 4.72586C9.33278 5.31569 10.6844 5.27959 11.7699 4.65138L11.3942 4.00225ZM1.66602 4.16479H2.41602C2.41602 3.65064 2.82073 3.28322 3.27201 3.31095L3.31802 2.56237L3.36403 1.81378C1.98847 1.72924 0.916016 2.84867 0.916016 4.16479H1.66602ZM18.3327 13.4529H19.0827V8.78195H18.3327H17.5827V13.4529H18.3327ZM18.3327 5.83329H19.0827V4.11095H18.3327H17.5827V5.83329H18.3327ZM1.66602 8.80887H2.41602V4.16479H1.66602H0.916016V8.80887H1.66602ZM1.66602 13.4529H2.41602V11.6666H1.66602H0.916016V13.4529H1.66602Z" fill="white"/>
</svg>
',
            'section' => 'accounting',
            'items' => [
                ['label' => 'Journal Entries', 'params' => ['accounting', 'journal-entries']],
                ['label' => 'General Ledger', 'params' => ['accounting', 'general-ledger']],
            ],
        ],
        [
            'label' => 'CRM',
            'icon' => 'fa-users',
            'icon_svg' => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="8.33333" cy="4.99996" r="3.33333" stroke="white" stroke-width="1.5"/>
<path d="M15.834 1.66663C15.834 1.66663 17.5007 2.66663 17.5007 4.99996C17.5007 7.33329 15.834 8.33329 15.834 8.33329" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.166 3.33337C14.166 3.33337 14.9993 3.83337 14.9993 5.00004C14.9993 6.16671 14.166 6.66671 14.166 6.66671" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9973 15C14.9993 14.8632 14.9993 14.7242 14.9993 14.5834C14.9993 12.5123 12.0146 10.8334 8.33268 10.8334C4.65078 10.8334 1.66602 12.5123 1.66602 14.5834C1.66602 16.6544 1.66602 18.3334 8.33268 18.3334C10.1919 18.3334 11.5325 18.2028 12.4993 17.9696" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</svg>
',
            'section' => 'crm',
            'items' => [
                ['label' => 'Crm Dashboard', 'params' => ['crm', 'contacts']],
                ['label' => 'Tickets', 'params' => ['crm', 'tickets']],
            ],
        ],
        [
            'label' => 'Clients /NGO',
            'icon' => 'fa-building-user',
            'icon_svg' => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2161_26185)">
<path d="M18.3327 18.3334L1.66602 18.3334" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.1673 18.3333V4.99996C14.1673 3.42861 14.1673 2.64294 13.6792 2.15478C13.191 1.66663 12.4053 1.66663 10.834 1.66663H9.16732C7.59597 1.66663 6.8103 1.66663 6.32214 2.15478C5.83398 2.64294 5.83398 3.42861 5.83398 4.99996V18.3333" stroke="white" stroke-width="1.5"/>
<path d="M16.7507 9.58329C16.7507 9.99751 17.0864 10.3333 17.5007 10.3333C17.9149 10.3333 18.2507 9.99751 18.2507 9.58329H17.5007H16.7507ZM16.7599 6.94751L16.3433 7.57111L16.3433 7.57111L16.7599 6.94751ZM17.2198 7.40734L16.5962 7.82402L16.5962 7.82402L17.2198 7.40734ZM18.2507 12.9166C18.2507 12.5024 17.9149 12.1666 17.5007 12.1666C17.0864 12.1666 16.7507 12.5024 16.7507 12.9166H17.5007H18.2507ZM14.584 6.66663V7.41663C15.1848 7.41663 15.5789 7.41753 15.8773 7.44789C16.1632 7.47696 16.2768 7.52674 16.3433 7.57111L16.7599 6.94751L17.1766 6.32391C16.8227 6.0874 16.4336 5.99673 16.0291 5.95559C15.6372 5.91572 15.1536 5.91663 14.584 5.91663V6.66663ZM17.5007 9.58329H18.2507C18.2507 9.01371 18.2516 8.53007 18.2117 8.13816C18.1705 7.73371 18.0799 7.34462 17.8434 6.99066L17.2198 7.40734L16.5962 7.82402C16.6405 7.89043 16.6903 8.00413 16.7194 8.28997C16.7497 8.58834 16.7507 8.98249 16.7507 9.58329H17.5007ZM16.7599 6.94751L16.3433 7.57111C16.4433 7.63799 16.5293 7.72393 16.5962 7.82402L17.2198 7.40734L17.8434 6.99066C17.6671 6.72679 17.4405 6.50022 17.1766 6.32391L16.7599 6.94751ZM17.5007 12.9166H16.7507V18.3333H17.5007H18.2507V12.9166H17.5007Z" fill="white"/>
<path d="M3.24072 6.94751L3.65739 7.57111L3.65739 7.57111L3.24072 6.94751ZM2.78088 7.40734L3.40449 7.82402L3.40449 7.82402L2.78088 7.40734ZM3.25 16.6666C3.25 16.2524 2.91421 15.9166 2.5 15.9166C2.08579 15.9166 1.75 16.2524 1.75 16.6666H2.5H3.25ZM1.75 13.3333C1.75 13.7475 2.08579 14.0833 2.5 14.0833C2.91421 14.0833 3.25 13.7475 3.25 13.3333H2.5H1.75ZM5.41667 6.66663V5.91663C4.84708 5.91663 4.36344 5.91572 3.97153 5.95559C3.56709 5.99673 3.178 6.0874 2.82404 6.32391L3.24072 6.94751L3.65739 7.57111C3.72381 7.52674 3.8375 7.47696 4.12334 7.44789C4.42172 7.41753 4.81586 7.41663 5.41667 7.41663V6.66663ZM2.5 9.58329H3.25C3.25 8.98249 3.25091 8.58834 3.28126 8.28997C3.31034 8.00413 3.36011 7.89043 3.40449 7.82402L2.78088 7.40734L2.15728 6.99066C1.92077 7.34462 1.8301 7.73371 1.78896 8.13816C1.74909 8.53007 1.75 9.01371 1.75 9.58329H2.5ZM3.24072 6.94751L2.82404 6.32391C2.56016 6.50022 2.3336 6.72679 2.15728 6.99066L2.78088 7.40734L3.40449 7.82402C3.47136 7.72393 3.5573 7.63799 3.65739 7.57111L3.24072 6.94751ZM2.5 16.6666H1.75V18.3333H2.5H3.25V16.6666H2.5ZM2.5 9.58329H1.75V13.3333H2.5H3.25V9.58329H2.5Z" fill="white"/>
<path d="M10 18.3334V15.8334" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M8.33398 4.16663H11.6673" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M8.33398 11.6666H8.75065M11.6673 11.6666H10.4173" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M11.666 6.66663H11.2493M8.33268 6.66663H9.58268" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M8.33398 9.16663H11.6673" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
</g>
<defs>
<clipPath id="clip0_2161_26185">
<rect width="20" height="20" rx="3" fill="white"/>
</clipPath>
</defs>
</svg>
',
            'section' => 'clients',
            'items' => [
                ['label' => 'Clients /NGO', 'params' => ['clients', 'clients']],
                ['label' => 'Client Interaction', 'params' => ['clients', 'client-interaction']],
            ],
        ],

    ];

    $primarySidebarGroups = $logisticSidebarGroups;
    $secondarySidebarGroups = [];
    $mobileSidebarGroups = array_slice($logisticSidebarGroups, 0, 5);
@endphp

<aside class="admin-sidebar desktop-sidebar hidden min-h-screen flex-col px-4 py-5 lg:flex">
    <a href="{{ route('logistic.dashboard') }}" class="mb-4 flex items-center gap-3 px-2">
        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-600 text-white">
            <i class="fa-solid fa-layer-group"></i>
        </span>
        <span>
            <span class="block text-lg font-semibold leading-5 text-white">AQSA SYSTEM</span>
            <span class="block text-xs uppercase tracking-wide text-[#7E8288]">Enterprise ERP</span>
        </span>
    </a>

    <div class="mb-5 border-t border-[#FFFFFF80]"></div>

    <nav class="flex-1 space-y-1">
        <a href="{{ route('logistic.dashboard') }}"
            class="{{ request()->routeIs('logistic.dashboard') ? 'sidebar-active' : 'hover:bg-white/10' }} flex items-center gap-3 rounded-md px-3 py-2.5 text-sm">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.12573 3.74998C2.17902 3.20827 2.29944 2.84363 2.5716 2.57147C3.05975 2.08331 3.84543 2.08331 5.41678 2.08331C6.98813 2.08331 7.7738 2.08331 8.26196 2.57147C8.75011 3.05962 8.75011 3.8453 8.75011 5.41665C8.75011 6.98799 8.75011 7.77367 8.26196 8.26182C7.7738 8.74998 6.98813 8.74998 5.41678 8.74998C3.84543 8.74998 3.05975 8.74998 2.5716 8.26182C2.31379 8.00401 2.19214 7.66322 2.13473 7.16753" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M17.8744 12.9167C17.8211 12.375 17.7007 12.0103 17.4285 11.7382C16.9404 11.25 16.1547 11.25 14.5833 11.25C13.012 11.25 12.2263 11.25 11.7382 11.7382C11.25 12.2263 11.25 13.012 11.25 14.5833C11.25 16.1547 11.25 16.9404 11.7382 17.4285C12.2263 17.9167 13.012 17.9167 14.5833 17.9167C16.1547 17.9167 16.9404 17.9167 17.4285 17.4285C17.7007 17.1564 17.8211 16.7917 17.8744 16.25" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M2.08325 14.5833C2.08325 13.012 2.08325 12.2263 2.57141 11.7382C3.05956 11.25 3.84524 11.25 5.41659 11.25C6.98793 11.25 7.77361 11.25 8.26176 11.7382C8.74992 12.2263 8.74992 13.012 8.74992 14.5833C8.74992 16.1547 8.74992 16.9404 8.26176 17.4285C7.77361 17.9167 6.98793 17.9167 5.41659 17.9167C3.84524 17.9167 3.05956 17.9167 2.57141 17.4285C2.08325 16.9404 2.08325 16.1547 2.08325 14.5833Z" stroke="white" stroke-width="1.5"/>
<path d="M11.25 5.41665C11.25 3.8453 11.25 3.05962 11.7382 2.57147C12.2263 2.08331 13.012 2.08331 14.5833 2.08331C16.1547 2.08331 16.9404 2.08331 17.4285 2.57147C17.9167 3.05962 17.9167 3.8453 17.9167 5.41665C17.9167 6.98799 17.9167 7.77367 17.4285 8.26182C16.9404 8.74998 16.1547 8.74998 14.5833 8.74998C13.012 8.74998 12.2263 8.74998 11.7382 8.26182C11.25 7.77367 11.25 6.98799 11.25 5.41665Z" stroke="white" stroke-width="1.5"/>
</svg>

            Dashboard
        </a>

        @foreach ($primarySidebarGroups as $group)
            <details class="group" {{ request()->is('logistic-dashboard/'.$group['section'].'/*') ? 'open' : '' }}>
                <summary class="{{ request()->is('logistic-dashboard/'.$group['section'].'/*') ? 'sidebar-active' : 'hover:bg-white/10' }} flex cursor-pointer list-none items-center gap-3 rounded-md px-3 py-2.5 text-sm">
                    @if (! empty($group['icon_svg']))
                        <span class="flex w-5 items-center justify-center text-white">{!! $group['icon_svg'] !!}</span>
                    @else
                        <i class="fa-solid {{ $group['icon'] }} w-5 text-center"></i>
                    @endif
                    <span class="flex-1">{{ $group['label'] }}</span>
                    <i class="fa-solid fa-chevron-down text-xs transition group-open:rotate-180"></i>
                </summary>
                <div class="ml-8 mt-1 space-y-1 pb-1">
                    @foreach ($group['items'] as $item)
                        @php
                            $itemPath = 'logistic-dashboard/'.$item['params'][0].'/'.$item['params'][1];
                        @endphp
                        <a href="{{ route('logistic.module', $item['params']) }}"
                            class="{{ request()->is($itemPath) ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </div>
            </details>
        @endforeach

        @foreach ($secondarySidebarGroups as $group)
            <details class="group" {{ request()->is('logistic-dashboard/'.$group['section'].'/*') ? 'open' : '' }}>
                <summary class="{{ request()->is('logistic-dashboard/'.$group['section'].'/*') ? 'sidebar-active' : 'hover:bg-white/10' }} flex cursor-pointer list-none items-center gap-3 rounded-md px-3 py-2.5 text-sm">
                    @if (! empty($group['icon_svg']))
                        <span class="flex w-5 items-center justify-center text-white">{!! $group['icon_svg'] !!}</span>
                    @else
                        <i class="fa-solid {{ $group['icon'] }} w-5 text-center"></i>
                    @endif
                    <span class="flex-1">{{ $group['label'] }}</span>
                    <i class="fa-solid fa-chevron-down text-xs transition group-open:rotate-180"></i>
                </summary>
                <div class="ml-8 mt-1 space-y-1 pb-1">
                    @foreach ($group['items'] as $item)
                        @php
                            $itemPath = 'logistic-dashboard/'.$item['params'][0].'/'.$item['params'][1];
                        @endphp
                        <a href="{{ route('logistic.module', $item['params']) }}"
                            class="{{ request()->is($itemPath) ? 'bg-blue-600 text-white' : 'text-blue-100 hover:bg-white/10 hover:text-white' }} block rounded-md px-3 py-2 text-xs">
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </div>
            </details>
        @endforeach
    </nav>

    <div class="mt-5 flex items-center gap-3 pt-4">
        <img src="https://ui-avatars.com/api/?name={{ urlencode($currentUser->name ?? 'Logistic Panel') }}&background=1d4ed8&color=fff"
            alt="{{ $currentUser->name ?? 'Logistic Panel' }}" class="h-9 w-9 rounded-md">
        <div class="min-w-0 flex-1">
            <p class="truncate text-sm font-semibold text-white">{{ $currentUser->name ?? 'Logistic Panel' }}</p>
            <p class="truncate text-xs text-blue-100">{{ $currentUser->email ?? 'Logistic@gmail.com' }}</p>
        </div>
        <form method="POST" action="{{ route('logistic.logout') }}">
            @csrf
            <button class="text-blue-100 hover:text-white" title="Logout">
                <i class="fa-solid fa-ellipsis-vertical"></i>
            </button>
        </form>
    </div>
</aside>

<header class="mobile-admin-topbar fixed left-0 right-0 top-0 z-50 px-4 py-3 lg:hidden">
    <div class="mx-auto flex max-w-[430px] items-center justify-between gap-3">
        <a href="{{ route('logistic.dashboard') }}" class="flex min-w-0 items-center gap-2">
            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">
                <i class="fa-solid fa-layer-group"></i>
            </span>
            <span class="min-w-0">
                <span class="mobile-brand-title block truncate text-sm font-semibold leading-4">AQSA SYSTEM</span>
                <span class="mobile-brand-subtitle block truncate text-[10px] uppercase leading-3">Enterprise ERP</span>
            </span>
        </a>

        <div class="flex items-center gap-1">
            <a href="{{ route('logistic.module', ['setting', 'audit-log']) }}" class="relative flex h-10 w-10 items-center justify-center rounded-full text-white">
                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.08" d="M20.2501 19H7.75015C7.64076 18.9993 7.53345 18.97 7.43896 18.9149C7.34448 18.8597 7.26611 18.7808 7.2117 18.6859C7.15729 18.591 7.12874 18.4835 7.12891 18.3741C7.12907 18.2647 7.15795 18.1572 7.21265 18.0625C7.72749 17.1719 8.37515 14.9227 8.37515 12.125C8.37515 10.6332 8.96778 9.20242 10.0227 8.14752C11.0776 7.09263 12.5083 6.5 14.0001 6.5C15.492 6.5 16.9227 7.09263 17.9776 8.14752C19.0325 9.20242 19.6251 10.6332 19.6251 12.125C19.6251 14.9234 20.2736 17.1719 20.7892 18.0625C20.844 18.1574 20.8728 18.2649 20.8729 18.3745C20.873 18.484 20.8444 18.5916 20.7898 18.6865C20.7352 18.7815 20.6566 18.8604 20.5619 18.9154C20.4672 18.9705 20.3597 18.9996 20.2501 19Z" fill="white"/>
<path d="M21.3282 17.7453C20.8946 16.9984 20.2501 14.8852 20.2501 12.125C20.2501 10.4674 19.5916 8.87769 18.4195 7.70558C17.2474 6.53348 15.6577 5.875 14.0001 5.875C12.3425 5.875 10.7528 6.53348 9.58065 7.70558C8.40855 8.87769 7.75007 10.4674 7.75007 12.125C7.75007 14.8859 7.10476 16.9984 6.67116 17.7453C6.56044 17.9352 6.50174 18.1509 6.50098 18.3707C6.50023 18.5905 6.55745 18.8066 6.66687 18.9973C6.77629 19.1879 6.93404 19.3463 7.12422 19.4565C7.31439 19.5667 7.53027 19.6248 7.75007 19.625H10.9384C11.0825 20.3306 11.466 20.9647 12.0239 21.4201C12.5818 21.8756 13.2799 22.1243 14.0001 22.1243C14.7202 22.1243 15.4183 21.8756 15.9762 21.4201C16.5341 20.9647 16.9176 20.3306 17.0618 19.625H20.2501C20.4698 19.6247 20.6856 19.5665 20.8757 19.4562C21.0657 19.346 21.2234 19.1875 21.3327 18.9969C21.442 18.8063 21.4992 18.5903 21.4984 18.3705C21.4976 18.1508 21.4389 17.9351 21.3282 17.7453ZM14.0001 20.875C13.6124 20.8749 13.2344 20.7546 12.9179 20.5308C12.6014 20.3069 12.3621 19.9905 12.2329 19.625H15.7673C15.638 19.9905 15.3987 20.3069 15.0823 20.5308C14.7658 20.7546 14.3877 20.8749 14.0001 20.875ZM7.75007 18.375C8.35163 17.3406 9.00007 14.9438 9.00007 12.125C9.00007 10.7989 9.52686 9.52715 10.4645 8.58947C11.4022 7.65178 12.674 7.125 14.0001 7.125C15.3262 7.125 16.5979 7.65178 17.5356 8.58947C18.4733 9.52715 19.0001 10.7989 19.0001 12.125C19.0001 14.9414 19.6469 17.3383 20.2501 18.375H7.75007Z" fill="white"/>
</svg>
                <span class="absolute -right-1 -top-1 flex h-5 w-5 items-center justify-center rounded-full bg-orange-500 text-[10px] text-white">3</span>
            </a>
            <details class="mobile-profile-menu">
                <summary class="flex h-10 w-10 items-center justify-center rounded-full">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($currentUser->name ?? 'Logistic') }}&background=1d4ed8&color=fff"
                        alt="Logistic profile" class="h-9 w-9 rounded-full">
                </summary>
                <div class="mobile-profile-dropdown">
                    <a href="{{ route('logistic.module', ['support', 'support-tickets']) }}" class="{{ request()->is('logistic-dashboard/support/*') ? 'is-active' : '' }}">
                        <i class="fa-solid fa-headset"></i>
                        Support
                    </a>
                    <a href="{{ route('logistic.module', ['setting', 'roles-permissions']) }}" class="{{ request()->is('logistic-dashboard/setting/*') ? 'is-active' : '' }}">
                        <i class="fa-solid fa-gear"></i>
                        Profile Settings
                    </a>
                </div>
            </details>
        </div>
    </div>
</header>

<nav class="fixed bottom-0 left-0 right-0 z-50 lg:hidden">
    <div class="mobile-admin-bottom h-[66px] w-full rounded-t-[20px] px-1 pb-1 pt-1.5">
        <div class="mobile-nav-grid">
            @foreach ($mobileSidebarGroups as $group)
                <details class="mobile-nav-menu">
                    <summary class="mobile-nav-item {{ request()->is('logistic-dashboard/'.$group['section'].'/*') ? 'is-active' : '' }}">
                        @if (! empty($group['icon_svg']))
                            <span class="flex h-5 w-5 items-center justify-center">{!! $group['icon_svg'] !!}</span>
                        @else
                            <i class="fa-solid {{ $group['icon'] }}"></i>
                        @endif
                        <span>{{ $group['label'] }}</span>
                    </summary>
                    <div class="mobile-nav-dropdown">
                        @foreach ($group['items'] as $item)
                            @php
                                $itemPath = 'logistic-dashboard/'.$item['params'][0].'/'.$item['params'][1];
                            @endphp
                            <a href="{{ route('logistic.module', $item['params']) }}" class="{{ request()->is($itemPath) ? 'is-active' : '' }}">
                                {{ $item['label'] }}
                            </a>
                        @endforeach
                    </div>
                </details>
            @endforeach

            <a href="{{ route('logistic.dashboard') }}" class="mobile-nav-item mobile-dashboard-item {{ request()->routeIs('logistic.dashboard') ? 'is-active' : '' }}">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.12573 3.74998C2.17902 3.20827 2.29944 2.84363 2.5716 2.57147C3.05975 2.08331 3.84543 2.08331 5.41678 2.08331C6.98813 2.08331 7.7738 2.08331 8.26196 2.57147C8.75011 3.05962 8.75011 3.8453 8.75011 5.41665C8.75011 6.98799 8.75011 7.77367 8.26196 8.26182C7.7738 8.74998 6.98813 8.74998 5.41678 8.74998C3.84543 8.74998 3.05975 8.74998 2.5716 8.26182C2.31379 8.00401 2.19214 7.66322 2.13473 7.16753" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M17.8744 12.9167C17.8211 12.375 17.7007 12.0103 17.4285 11.7382C16.9404 11.25 16.1547 11.25 14.5833 11.25C13.012 11.25 12.2263 11.25 11.7382 11.7382C11.25 12.2263 11.25 13.012 11.25 14.5833C11.25 16.1547 11.25 16.9404 11.7382 17.4285C12.2263 17.9167 13.012 17.9167 14.5833 17.9167C16.1547 17.9167 16.9404 17.9167 17.4285 17.4285C17.7007 17.1564 17.8211 16.7917 17.8744 16.25" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
<path d="M2.08325 14.5833C2.08325 13.012 2.08325 12.2263 2.57141 11.7382C3.05956 11.25 3.84524 11.25 5.41659 11.25C6.98793 11.25 7.77361 11.25 8.26176 11.7382C8.74992 12.2263 8.74992 13.012 8.74992 14.5833C8.74992 16.1547 8.74992 16.9404 8.26176 17.4285C7.77361 17.9167 6.98793 17.9167 5.41659 17.9167C3.84524 17.9167 3.05956 17.9167 2.57141 17.4285C2.08325 16.9404 2.08325 16.1547 2.08325 14.5833Z" stroke="white" stroke-width="1.5"/>
<path d="M11.25 5.41665C11.25 3.8453 11.25 3.05962 11.7382 2.57147C12.2263 2.08331 13.012 2.08331 14.5833 2.08331C16.1547 2.08331 16.9404 2.08331 17.4285 2.57147C17.9167 3.05962 17.9167 3.8453 17.9167 5.41665C17.9167 6.98799 17.9167 7.77367 17.4285 8.26182C16.9404 8.74998 16.1547 8.74998 14.5833 8.74998C13.012 8.74998 12.2263 8.74998 11.7382 8.26182C11.25 7.77367 11.25 6.98799 11.25 5.41665Z" stroke="white" stroke-width="1.5"/>
</svg>
                <span>Dashboard</span>
            </a>
        </div>
    </div>
</nav>
