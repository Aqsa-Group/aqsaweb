<div class="space-y-8">
    @include('livewire.logistic-admin-dashboard._shared-ui')

    <style>
        .crm-ticket-stat,
        .crm-panel {
            transition: border-color .18s ease, box-shadow .18s ease, transform .18s ease;
        }

        .crm-ticket-stat:hover,
        .crm-panel:hover {
            border-color: #bfdbfe;
            box-shadow: 0 14px 28px rgba(15, 23, 42, .12);
            transform: translateY(-2px);
        }

        .crm-trend-line {
            transition: stroke-width .18s ease, opacity .18s ease;
        }

        .crm-chart {
            cursor: crosshair;
        }

        .crm-chart:hover .crm-trend-line {
            stroke-width: 4;
        }

        .crm-chart:hover .crm-chart-dot,
        .crm-chart:hover .crm-chart-tip {
            opacity: 1;
        }

        .crm-chart-hotspot {
            cursor: pointer;
            pointer-events: all;
        }

        .crm-chart-hotspot > circle:first-child {
            pointer-events: all;
        }

        .crm-chart-hotspot .crm-chart-dot,
        .crm-chart-hotspot .crm-chart-tip {
            opacity: 0;
            transition: opacity .16s ease;
        }

        .crm-chart-hotspot:hover .crm-chart-dot,
        .crm-chart-hotspot:hover .crm-chart-tip {
            opacity: 1;
        }
    </style>

    @php
        $crmStats = $crmStats ?? [
            [
                'title' => 'Open Tickets',
                'value' => '24',
                'trend' => '12% vs 7 last days',
                'link' => 'View all tickets',
                'icon' => 'tickets',
            ],
            [
                'title' => 'Urgent Tickets',
                'value' => '45',
                'trend' => '12% vs 7 last days',
                'link' => 'View all tickets',
                'icon' => 'urgent',
            ],
            [
                'title' => 'SLA compliance',
                'value' => '94%',
                'trend' => '12% vs 7 last days',
                'link' => 'View all tickets',
                'icon' => 'sla',
            ],
            [
                'title' => 'Active Clients',
                'value' => '100',
                'trend' => '12% vs 7 last days',
                'link' => 'View all clients',
                'icon' => 'clients',
            ],
        ];

        $satisfactionRows = $satisfactionRows ?? [
            ['label' => '5 Stars', 'percent' => 72],
            ['label' => '5 Stars', 'percent' => 40],
            ['label' => '4 Stars', 'percent' => 72],
            ['label' => '3 Stars', 'percent' => 23],
            ['label' => '2 Stars', 'percent' => 35],
        ];

        $urgentTickets = $urgentTickets ?? [
            [
                'id' => 'CRM-2435',
                'client' => 'UNDP Afghanistan',
                'subject' => 'Delivery delay in kabul',
                'status' => 'Overdue',
                'assigned_to' => 'Ahmad Azizi',
                'priority' => 'High',
                'due_time' => '2hr 45sec',
            ],
            [
                'id' => 'CRM-2435',
                'client' => 'UNDP Afghanistan',
                'subject' => 'Delivery delay in kabul',
                'status' => 'In Progress',
                'assigned_to' => 'Ahmad Azizi',
                'priority' => 'Urgent',
                'due_time' => '2hr 45sec',
            ],
            [
                'id' => 'CRM-2435',
                'client' => 'UNDP Afghanistan',
                'subject' => 'Delivery delay in kabul',
                'status' => 'Waiting Client',
                'assigned_to' => 'Ahmad Azizi',
                'priority' => 'High',
                'due_time' => '2hr 45sec',
            ],
            [
                'id' => 'CRM-2435',
                'client' => 'UNDP Afghanistan',
                'subject' => 'Delivery delay in kabul',
                'status' => 'Open',
                'assigned_to' => 'Ahmad Azizi',
                'priority' => 'Medium',
                'due_time' => '2hr 45sec',
            ],
        ];
    @endphp

    <section class="rounded-xl bg-white">
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-950">CRM Dashboard</h2>
        </div>

        <div class="grid grid-cols-2 gap-3 sm:gap-5 xl:grid-cols-4">
            @foreach ($crmStats as $stat)
                @php
                    $statTone = [
                        'tickets' => 'border-[#BFD8F2] bg-[#D7E8FA]',
                        'urgent' => 'border-[#F9BDBD] bg-[#FFD2D2]',
                        'sla' => 'border-[#A6EBC2] bg-[#BAF3D2]',
                        'clients' => 'border-[#C4CAD8] bg-[#D5D9E5]',
                    ][$stat['icon']] ?? 'border-gray-200 bg-[#F8FAFC]';
                @endphp
                <article class="crm-ticket-stat rounded-xl border border-gray-200 bg-white px-2.5 py-3 shadow-md shadow-gray-300/60 sm:px-4">
                    <div class="flex items-start justify-between gap-3">
                        <div class="flex min-w-0 items-start gap-2 sm:gap-3">
                            <span class="inline-flex h-7 w-7 shrink-0 items-center justify-center rounded-lg border {{ $statTone }} text-[#2059D4] sm:h-8 sm:w-8">
                                @if ($stat['icon'] === 'tickets')
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14 11C14 10.4477 14.4477 10 15 10C15.5523 10 16 10.4477 16 11V13C16 13.5523 15.5523 14 15 14C14.4477 14 14 13.5523 14 13V11Z" stroke="#165DAE" stroke-width="1.5"/>
<path d="M14.0079 19.0029L13.2579 19.0007V19.0007L14.0079 19.0029ZM14.0137 17L14.7637 17.0022V17H14.0137ZM3.14958 18.8284L2.61991 19.3594H2.61991L3.14958 18.8284ZM3.14958 5.17157L2.61991 4.64058L2.61991 4.64058L3.14958 5.17157ZM2.95308 10.2537L2.58741 10.9085H2.58741L2.95308 10.2537ZM2.01058 8.98947L1.26124 8.95797V8.95797L2.01058 8.98947ZM2.95308 13.7463L2.58741 13.0915L2.58741 13.0915L2.95308 13.7463ZM2.01058 15.0105L2.75992 14.979V14.979L2.01058 15.0105ZM21.0469 10.2537L21.4126 10.9085V10.9085L21.0469 10.2537ZM21.9894 8.98947L22.7388 8.95797V8.95797L21.9894 8.98947ZM20.8504 5.17157L21.3801 4.64058L21.3801 4.64058L20.8504 5.17157ZM21.0469 13.7463L20.6812 14.4012V14.4012L21.0469 13.7463ZM21.9894 15.0105L22.7388 15.042V15.042L21.9894 15.0105ZM20.8504 18.8284L21.3801 19.3594L21.3801 19.3594L20.8504 18.8284ZM21.9437 14.332L22.5981 13.9656L22.5981 13.9656L21.9437 14.332ZM21.9437 9.66803L22.5981 10.0344L22.5981 10.0344L21.9437 9.66803ZM2.05634 14.332L1.4019 13.9656L1.4019 13.9656L2.05634 14.332ZM2.05634 9.66802L2.71079 9.30168L2.71078 9.30168L2.05634 9.66802ZM14.0137 7H14.7637L14.7637 6.99782L14.0137 7ZM14.0064 4.49855L13.2564 4.50073V4.50073L14.0064 4.49855ZM16.5278 4.0189L16.5471 3.26915V3.26915L16.5278 4.0189ZM17.0336 19.9642L17.0653 20.7135H17.0653L17.0336 19.9642ZM13.8595 19.8541L13.3299 19.323L13.3299 19.323L13.8595 19.8541ZM14.0079 19.0029L14.7579 19.0051L14.7637 17.0022L14.0137 17L13.2637 16.9978L13.2579 19.0007L14.0079 19.0029ZM15.0162 16V16.75C15.1574 16.75 15.2687 16.8637 15.2687 17H16.0187H16.7687C16.7687 16.0317 15.9823 15.25 15.0162 15.25V16ZM15.0162 16V15.25C14.0501 15.25 13.2637 16.0317 13.2637 17H14.0137H14.7637C14.7637 16.8637 14.875 16.75 15.0162 16.75V16ZM9.99502 4V4.75H13.5052V4V3.25H9.99502V4ZM13.0079 20V19.25H9.99502V20V20.75H13.0079V20ZM9.99502 20V19.25C8.08355 19.25 6.72521 19.2484 5.69469 19.1102C4.68554 18.9749 4.10384 18.721 3.67925 18.2974L3.14958 18.8284L2.61991 19.3594C3.3698 20.1074 4.32051 20.4393 5.4953 20.5969C6.64871 20.7516 8.12585 20.75 9.99502 20.75V20ZM9.99502 4V3.25C8.12585 3.25 6.64871 3.24841 5.4953 3.4031C4.32051 3.56066 3.3698 3.89255 2.61991 4.64058L3.14958 5.17157L3.67925 5.70256C4.10384 5.27902 4.68554 5.02513 5.69469 4.88979C6.72521 4.75159 8.08355 4.75 9.99502 4.75V4ZM2.95308 10.2537L2.58741 10.9085C2.97311 11.1239 3.23007 11.533 3.23007 12H3.98007H4.73007C4.73007 10.9664 4.1586 10.0678 3.31876 9.59884L2.95308 10.2537ZM2.01058 8.98947L2.75992 9.02097C2.83795 7.16494 3.09146 6.28889 3.67925 5.70256L3.14958 5.17157L2.61991 4.64058C1.59036 5.66758 1.34012 7.08185 1.26124 8.95797L2.01058 8.98947ZM3.98007 12H3.23007C3.23007 12.467 2.97311 12.8761 2.58741 13.0915L2.95308 13.7463L3.31876 14.4012C4.1586 13.9322 4.73007 13.0336 4.73007 12H3.98007ZM2.01058 15.0105L1.26124 15.042C1.34012 16.9182 1.59036 18.3324 2.61991 19.3594L3.14958 18.8284L3.67925 18.2974C3.09146 17.7111 2.83795 16.8351 2.75992 14.979L2.01058 15.0105ZM20.0199 12H20.7699C20.7699 11.533 21.0269 11.1239 21.4126 10.9085L21.0469 10.2537L20.6812 9.59884C19.8414 10.0678 19.2699 10.9664 19.2699 12H20.0199ZM21.9894 8.98947L22.7388 8.95797C22.6599 7.08185 22.4096 5.66758 21.3801 4.64058L20.8504 5.17157L20.3207 5.70256C20.9085 6.28889 21.1621 7.16494 21.2401 9.02097L21.9894 8.98947ZM21.0469 13.7463L21.4126 13.0915C21.0269 12.8761 20.7699 12.467 20.7699 12H20.0199H19.2699C19.2699 13.0336 19.8414 13.9322 20.6812 14.4012L21.0469 13.7463ZM21.9894 15.0105L21.2401 14.979C21.1621 16.8351 20.9085 17.7111 20.3207 18.2974L20.8504 18.8284L21.3801 19.3594C22.4096 18.3324 22.6599 16.9182 22.7388 15.042L21.9894 15.0105ZM21.0469 13.7463L20.6812 14.4012C20.9652 14.5597 21.1507 14.6636 21.2761 14.7427C21.3379 14.7817 21.3653 14.8024 21.3735 14.8093C21.388 14.8213 21.3375 14.7846 21.2892 14.6983L21.9437 14.332L22.5981 13.9656C22.5153 13.8177 22.4043 13.7154 22.3304 13.6542C22.2503 13.5878 22.1613 13.5276 22.0764 13.4741C21.9087 13.3683 21.6804 13.2411 21.4126 13.0915L21.0469 13.7463ZM21.9894 15.0105L22.7388 15.042C22.746 14.8706 22.7541 14.6937 22.7476 14.5458C22.741 14.3959 22.7178 14.1795 22.5981 13.9656L21.9437 14.332L21.2892 14.6983C21.2386 14.6079 21.2461 14.5457 21.249 14.6117C21.2503 14.6404 21.2505 14.6822 21.2488 14.7464C21.2472 14.8104 21.244 14.8847 21.2401 14.979L21.9894 15.0105ZM21.0469 10.2537L21.4126 10.9085C21.6804 10.7589 21.9087 10.6317 22.0764 10.5259C22.1613 10.4724 22.2503 10.4122 22.3304 10.3458C22.4043 10.2846 22.5153 10.1823 22.5981 10.0344L21.9437 9.66803L21.2892 9.30168C21.3375 9.21543 21.388 9.17871 21.3735 9.19072C21.3653 9.19756 21.3379 9.21832 21.2761 9.25725C21.1507 9.33637 20.9652 9.44028 20.6812 9.59884L21.0469 10.2537ZM21.9894 8.98947L21.2401 9.02097C21.244 9.11528 21.2472 9.18961 21.2488 9.25357C21.2505 9.31779 21.2503 9.35964 21.249 9.38827C21.2461 9.45428 21.2386 9.39206 21.2892 9.30169L21.9437 9.66803L22.5981 10.0344C22.7178 9.82054 22.741 9.60408 22.7476 9.45419C22.7541 9.30634 22.746 9.12945 22.7388 8.95797L21.9894 8.98947ZM2.95308 13.7463L2.58741 13.0915C2.31959 13.2411 2.0913 13.3683 1.92358 13.4741C1.83872 13.5276 1.74971 13.5878 1.66957 13.6542C1.59566 13.7154 1.48474 13.8177 1.4019 13.9656L2.05634 14.332L2.71078 14.6983C2.6625 14.7846 2.61198 14.8213 2.62648 14.8093C2.63474 14.8024 2.66215 14.7817 2.72387 14.7427C2.84929 14.6636 3.03482 14.5597 3.31876 14.4012L2.95308 13.7463ZM2.01058 15.0105L2.75992 14.979C2.75595 14.8847 2.75285 14.8104 2.7512 14.7464C2.74954 14.6822 2.74973 14.6404 2.75099 14.6117C2.75389 14.5457 2.76137 14.6079 2.71078 14.6983L2.05634 14.332L1.4019 13.9656C1.28221 14.1795 1.25903 14.3959 1.25244 14.5458C1.24593 14.6937 1.25403 14.8706 1.26124 15.042L2.01058 15.0105ZM2.95308 10.2537L3.31876 9.59884C3.03482 9.44028 2.84929 9.33637 2.72386 9.25725C2.66214 9.21832 2.63474 9.19756 2.62648 9.19072C2.61198 9.17871 2.66251 9.21543 2.71079 9.30168L2.05634 9.66802L1.4019 10.0344C1.48473 10.1823 1.59565 10.2846 1.66956 10.3458C1.74971 10.4122 1.83872 10.4724 1.92357 10.5259C2.0913 10.6317 2.31959 10.7589 2.58741 10.9085L2.95308 10.2537ZM2.01058 8.98947L1.26124 8.95797C1.25403 9.12945 1.24593 9.30634 1.25244 9.45419C1.25903 9.60408 1.28221 9.82054 1.4019 10.0344L2.05634 9.66802L2.71078 9.30168C2.76137 9.39206 2.75389 9.45428 2.75099 9.38827C2.74973 9.35964 2.74954 9.31779 2.7512 9.25357C2.75285 9.18961 2.75595 9.11528 2.75992 9.02097L2.01058 8.98947ZM14.0137 7L14.7637 6.99782L14.7564 4.49637L14.0064 4.49855L13.2564 4.50073L13.2637 7.00218L14.0137 7ZM15.0162 8V7.25C14.875 7.25 14.7637 7.13631 14.7637 7H14.0137H13.2637C13.2637 7.96826 14.0501 8.75 15.0162 8.75V8ZM16.0187 7H15.2687C15.2687 7.13631 15.1574 7.25 15.0162 7.25V8V8.75C15.9823 8.75 16.7687 7.96826 16.7687 7H16.0187ZM16.0187 4.51618H15.2687V7H16.0187H16.7687V4.51618H16.0187ZM16.5278 4.0189L16.5084 4.76865C18.6966 4.82509 19.6778 5.06124 20.3208 5.70256L20.8504 5.17157L21.3801 4.64058C20.2676 3.53084 18.6939 3.32452 16.5471 3.26915L16.5278 4.0189ZM16.0187 4.51618H16.7687C16.7687 4.656 16.6534 4.77239 16.5084 4.76865L16.5278 4.0189L16.5471 3.26915C15.8429 3.25099 15.2687 3.81835 15.2687 4.51618H16.0187ZM13.5052 4V4.75C13.3698 4.75 13.2568 4.64027 13.2564 4.50073L14.0064 4.49855L14.7564 4.49637C14.7544 3.80569 14.1931 3.25 13.5052 3.25V4ZM17.0336 19.9642L17.0653 20.7135C18.9399 20.6343 20.353 20.384 21.3801 19.3594L20.8504 18.8284L20.3208 18.2974C19.7336 18.8831 18.8563 19.1365 17.002 19.2148L17.0336 19.9642ZM16.0187 17H15.2687V18.9765H16.0187H16.7687V17H16.0187ZM14.0079 19.0029L13.2579 19.0007C13.2575 19.121 13.2572 19.2136 13.255 19.2926C13.2528 19.3721 13.249 19.4192 13.245 19.4481C13.2411 19.4764 13.2396 19.4669 13.2513 19.4387C13.2654 19.4045 13.2911 19.3617 13.3299 19.323L13.8595 19.8541L14.389 20.3852C14.6246 20.1502 14.701 19.8709 14.7311 19.6521C14.7582 19.4548 14.7573 19.219 14.7579 19.0051L14.0079 19.0029ZM13.0079 20V20.75C13.2218 20.75 13.4576 20.7516 13.6549 20.7251C13.8739 20.6957 14.1534 20.6201 14.389 20.3852L13.8595 19.8541L13.3299 19.323C13.3687 19.2843 13.4116 19.2587 13.4458 19.2447C13.4741 19.2331 13.4836 19.2346 13.4553 19.2384C13.4264 19.2423 13.3792 19.246 13.2998 19.248C13.2208 19.25 13.1282 19.25 13.0079 19.25V20ZM17.0336 19.9642L17.002 19.2148C16.8812 19.2199 16.7889 19.2238 16.7101 19.225C16.631 19.2262 16.5849 19.2244 16.5575 19.2217C16.5309 19.2191 16.5426 19.2175 16.5734 19.2292C16.6103 19.2433 16.6536 19.2685 16.6917 19.305L16.1727 19.8464L15.6536 20.3878C15.8978 20.6219 16.183 20.6921 16.4108 20.7145C16.6127 20.7344 16.8518 20.7225 17.0653 20.7135L17.0336 19.9642ZM16.0187 18.9765H15.2687C15.2687 19.1953 15.267 19.4374 15.295 19.6397C15.3263 19.8655 15.407 20.1514 15.6536 20.3878L16.1727 19.8464L16.6917 19.305C16.7313 19.343 16.7584 19.3863 16.7737 19.4221C16.7863 19.4516 16.7848 19.4622 16.7808 19.4337C16.7768 19.4046 16.7729 19.3566 16.7708 19.2753C16.7687 19.1945 16.7687 19.0997 16.7687 18.9765H16.0187Z" fill="#165DAE"/>
</svg>

                                @elseif ($stat['icon'] === 'urgent')
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6.30928 9C8.59494 5 9.96832 3 12 3C14.3107 3 15.7699 5.58716 18.6883 10.7615L19.0519 11.4063C21.4771 15.7061 22.6897 17.856 21.5937 19.428C20.4978 21 17.7864 21 12.3637 21H11.6363C6.21356 21 3.50217 21 2.40626 19.428C1.45498 18.0635 2.24306 16.2635 4.05373 13" stroke="#E21F1F" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12 8V13" stroke="#E21F1F" stroke-width="1.5" stroke-linecap="round"/>
<circle cx="12" cy="16" r="1" fill="#E21F1F"/>
</svg>

                                @elseif ($stat['icon'] === 'sla')
                                    <<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_2161_25476)">
<path d="M18.581 2.14073L12.316 0.0517291C12.1109 -0.016592 11.8891 -0.016592 11.684 0.0517291L5.419 2.14073C4.42291 2.47161 3.55642 3.10799 2.94265 3.95944C2.32887 4.81089 1.99904 5.83412 2 6.88373V12.0007C2 19.5637 11.2 23.7407 11.594 23.9147C11.7218 23.9715 11.8601 24.0009 12 24.0009C12.1399 24.0009 12.2782 23.9715 12.406 23.9147C12.8 23.7407 22 19.5637 22 12.0007V6.88373C22.001 5.83412 21.6711 4.81089 21.0574 3.95944C20.4436 3.10799 19.5771 2.47161 18.581 2.14073ZM20 12.0007C20 17.4557 13.681 21.0337 12 21.8897C10.317 21.0367 4 17.4697 4 12.0007V6.88373C4.00006 6.25401 4.19828 5.64027 4.56657 5.12947C4.93486 4.61868 5.45455 4.23672 6.052 4.03773L12 2.05473L17.948 4.03773C18.5455 4.23672 19.0651 4.61868 19.4334 5.12947C19.8017 5.64027 19.9999 6.25401 20 6.88373V12.0007Z" fill="#22C55E"/>
<path d="M15.3008 8.30032L11.1128 12.5003L8.86877 10.1603C8.77871 10.0619 8.66986 9.98242 8.54863 9.92667C8.4274 9.87092 8.29623 9.84001 8.16287 9.83573C8.0295 9.83146 7.89663 9.85393 7.77207 9.9018C7.64752 9.94968 7.53381 10.022 7.43764 10.1145C7.34147 10.207 7.26478 10.3178 7.2121 10.4404C7.15942 10.563 7.1318 10.6949 7.13088 10.8283C7.12996 10.9618 7.15576 11.094 7.20675 11.2173C7.25773 11.3407 7.33288 11.4525 7.42777 11.5463L9.73377 13.9463C9.90574 14.1321 10.1136 14.281 10.3448 14.3842C10.576 14.4873 10.8257 14.5425 11.0788 14.5463H11.1118C11.3598 14.5472 11.6056 14.4987 11.8347 14.4038C12.0639 14.3088 12.272 14.1693 12.4468 13.9933L16.7188 9.72132C16.8121 9.62822 16.8861 9.51764 16.9367 9.39592C16.9873 9.27419 17.0134 9.14369 17.0135 9.01188C17.0136 8.88007 16.9878 8.74952 16.9375 8.62769C16.8872 8.50585 16.8134 8.39512 16.7203 8.30182C16.6272 8.20852 16.5166 8.13446 16.3949 8.08389C16.2731 8.03332 16.1426 8.00722 16.0108 8.00708C15.879 8.00694 15.7485 8.03277 15.6266 8.08308C15.5048 8.13339 15.3941 8.20721 15.3008 8.30032Z" fill="#22C55E"/>
</g>
<defs>
<clipPath id="clip0_2161_25476">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>

                                @else
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="9" cy="6" r="4" stroke="#1C274C" stroke-width="1.5"/>
<path d="M15 9C16.6569 9 18 7.65685 18 6C18 4.34315 16.6569 3 15 3" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.88915 20.5843C6.82627 20.8504 7.88256 21 9 21C12.866 21 16 19.2091 16 17C16 14.7909 12.866 13 9 13C5.13401 13 2 14.7909 2 17C2 17.3453 2.07657 17.6804 2.22053 18" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M18 14C19.7542 14.3847 21 15.3589 21 16.5C21 17.5293 19.9863 18.4229 18.5 18.8704" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>

                                @endif
                            </span>

                            <div>
                                <p class="truncate text-[9px] font-medium text-gray-400 sm:text-[11px]">{{ $stat['title'] }}</p>
                                <p class="mt-0.5 text-[22px] font-semibold leading-none text-gray-950 sm:text-[28px]">{{ $stat['value'] }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 flex items-center gap-1 text-[9px] text-emerald-500 sm:text-[11px]">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 8L4.25 5.75L6 7.5L9.5 4" stroke="#22C55E" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.5 4H9.5V6" stroke="#22C55E" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>{{ $stat['trend'] }}</span>
                    </div>

                    <div class="mt-3 flex items-center justify-between border-t border-gray-100 pt-2">
                        <a href="#" class="truncate text-[9px] font-medium text-[#2059D4] hover:text-blue-800 sm:text-[11px]">
                            {{ $stat['link'] }}
                        </a>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M5.25 2.917L9.333 7L5.25 11.083" stroke="#2059D4" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-5 grid gap-4 xl:grid-cols-[1.6fr_1fr]">
            <article class="crm-panel rounded-xl border border-gray-200 bg-[#F7F7F7] p-5">
                <h3 class="mb-4 text-sm font-semibold text-gray-950">Ticket Trends</h3>

                <div class="crm-chart relative h-[260px] overflow-hidden rounded-lg">
                    <svg viewBox="0 0 640 260" class="h-full w-full" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <defs>
                            <pattern id="crmGrid" width="96" height="48" patternUnits="userSpaceOnUse">
                                <path d="M 96 0 L 0 0 0 48" fill="none" stroke="#E5EDF7" stroke-width="1"/>
                            </pattern>
                        </defs>

                        <rect x="44" y="10" width="560" height="192" fill="url(#crmGrid)"/>

                        <g fill="#9CA3AF" font-size="11" font-family="sans-serif">
                            <text x="8" y="202">0</text>
                            <text x="4" y="154">10k</text>
                            <text x="4" y="106">20k</text>
                            <text x="4" y="58">30k</text>
                            <text x="4" y="20">40k</text>
                        </g>

                        <g fill="#9CA3AF" font-size="11" font-family="sans-serif">
                            <text x="66" y="232">Jan</text>
                            <text x="162" y="232">Feb</text>
                            <text x="258" y="232">Mar</text>
                            <text x="354" y="232">Apr</text>
                            <text x="450" y="232">May</text>
                            <text x="546" y="232">Jun</text>
                        </g>

                        <path
                            d="M60 40 C80 70, 85 110, 106 116
                               C125 121, 146 68, 170 73
                               C194 78, 201 132, 224 140
                               C246 148, 264 110, 286 106
                               C308 102, 326 119, 348 112
                               C370 104, 392 31, 414 56
                               C436 81, 454 175, 476 171
                               C498 167, 522 116, 544 82"
                            fill="none"
                            class="crm-trend-line"
                            stroke="#9CC2FF"
                            stroke-width="3"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />
                        <path
                            d="M60 44 C82 82, 98 133, 119 116
                               C140 99, 163 49, 184 90
                               C206 131, 228 145, 249 126
                               C271 107, 293 79, 315 93
                               C337 107, 360 118, 382 86
                               C404 54, 424 24, 446 58
                               C468 92, 489 182, 512 170
                               C534 158, 553 102, 572 66"
                            fill="none"
                            class="crm-trend-line"
                            stroke="#2563EB"
                            stroke-width="3"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />

                        <g class="crm-chart-hotspot">
                            <circle cx="184" cy="90" r="28" fill="transparent" pointer-events="all"/>
                            <circle class="crm-chart-dot" cx="184" cy="90" r="5" fill="#2563EB" stroke="white" stroke-width="2"/>
                            <g class="crm-chart-tip">
                                <rect x="137" y="48" width="96" height="34" rx="7" fill="white" stroke="#DBEAFE"/>
                                <text x="149" y="62" fill="#111827" font-size="10" font-weight="700">Feb</text>
                                <text x="149" y="74" fill="#2563EB" font-size="10">Created 23k</text>
                            </g>
                        </g>
                        <g class="crm-chart-hotspot">
                            <circle cx="414" cy="56" r="28" fill="transparent" pointer-events="all"/>
                            <circle class="crm-chart-dot" cx="414" cy="56" r="5" fill="#9CC2FF" stroke="white" stroke-width="2"/>
                            <g class="crm-chart-tip">
                                <rect x="371" y="16" width="102" height="34" rx="7" fill="white" stroke="#DBEAFE"/>
                                <text x="383" y="30" fill="#111827" font-size="10" font-weight="700">Apr</text>
                                <text x="383" y="42" fill="#60A5FA" font-size="10">Resolved 31k</text>
                            </g>
                        </g>
                        <g class="crm-chart-hotspot">
                            <circle cx="446" cy="58" r="28" fill="transparent" pointer-events="all"/>
                            <circle class="crm-chart-dot" cx="446" cy="58" r="5" fill="#2563EB" stroke="white" stroke-width="2"/>
                            <g class="crm-chart-tip">
                                <rect x="458" y="24" width="98" height="34" rx="7" fill="white" stroke="#DBEAFE"/>
                                <text x="470" y="38" fill="#111827" font-size="10" font-weight="700">May</text>
                                <text x="470" y="50" fill="#2563EB" font-size="10">Created 33k</text>
                            </g>
                        </g>
                    </svg>

                    <div class="absolute bottom-0 left-0 right-0 flex items-center justify-center gap-6 pb-2 text-[11px] text-gray-500">
                        <span class="inline-flex items-center gap-2">
                            <span class="h-2.5 w-2.5 rounded-sm bg-[#2563EB]"></span>
                            Created
                        </span>
                        <span class="inline-flex items-center gap-2">
                            <span class="h-2.5 w-2.5 rounded-sm bg-[#9CC2FF]"></span>
                            Resolved
                        </span>
                    </div>
                </div>
            </article>

            <article class="crm-panel rounded-xl border border-gray-200 bg-[#F7F7F7] p-5">
                <h3 class="mb-5 text-sm font-semibold text-gray-950">Customer Satisfaction</h3>

                <div class="space-y-3">
                    @foreach ($satisfactionRows as $row)
                        <div class="grid grid-cols-[48px_1fr_38px] items-center gap-3 text-xs text-gray-700">
                            <span>{{ $row['label'] }}</span>

                            <div class="h-1.5 rounded-full bg-gray-200">
                                <div
                                    class="h-1.5 rounded-full bg-[#2563EB]"
                                    style="width: {{ $row['percent'] }}%;"
                                ></div>
                            </div>

                            <span class="text-right text-gray-600">{{ $row['percent'] }}%</span>
                        </div>
                    @endforeach
                </div>

                <div class="mt-8 text-center">
                    <p class="text-[44px] font-semibold leading-none text-gray-950">6.2</p>

                    <div class="mt-3 flex items-center justify-center gap-1 text-[#2059D4]">
                        @for ($i = 0; $i < 5; $i++)
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M9.9998 1.66666L12.5756 6.88773L18.3331 7.72438L14.1665 11.7853L15.1498 17.5L9.9998 14.7917L4.8498 17.5L5.83314 11.7853L1.66647 7.72438L7.42399 6.88773L9.9998 1.66666Z"/>
                            </svg>
                        @endfor
                    </div>

                    <p class="mt-3 text-sm text-gray-400">out of 5</p>
                </div>
            </article>
        </div>

        <div class="mt-7">
            <div class="mb-4 flex items-center justify-between gap-3">
                <h3 class="text-base font-semibold text-gray-950">Urgent &amp; Overdue Tickets</h3>
                <a href="#" class="text-sm font-medium text-[#2059D4] hover:text-blue-800">View all</a>
            </div>

            <div class="hidden min-h-[380px] overflow-visible rounded-lg border border-gray-200 bg-white lg:block">
                <table class="w-full table-fixed text-left text-xs">
                    <colgroup>
                        <col class="w-[4%]">
                        <col class="w-[4%]">
                        <col class="w-[12%]">
                        <col class="w-[17%]">
                        <col class="w-[22%]">
                        <col class="w-[10%]">
                        <col class="w-[15%]">
                        <col class="w-[8%]">
                        <col class="w-[5%]">
                        <col class="w-[3%]">
                    </colgroup>

                    <thead class="bg-gray-50 text-gray-950">
                        <tr>
                            <th class="bg-gray-50 px-2 py-3"></th>
                            <th class="bg-gray-50 px-2 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-gray-300" aria-label="Select all tickets">
                            </th>
                            <th class="whitespace-nowrap bg-gray-50 px-2 py-3 font-semibold">Ticket ID</th>
                            <th class="whitespace-nowrap bg-gray-50 px-2 py-3 font-semibold">Client</th>
                            <th class="whitespace-nowrap bg-gray-50 px-2 py-3 font-semibold">Subject</th>
                            <th class="whitespace-nowrap bg-gray-50 px-2 py-3 font-semibold">Status</th>
                            <th class="whitespace-nowrap bg-gray-50 px-2 py-3 font-semibold">Assigned To</th>
                            <th class="whitespace-nowrap bg-gray-50 px-2 py-3 font-semibold">Priority</th>
                            <th class="whitespace-nowrap bg-gray-50 px-2 py-3 font-semibold">Due Time</th>
                            <th class="whitespace-nowrap bg-gray-50 px-2 py-3 font-semibold"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($urgentTickets as $ticket)
                            @php
                                $statusClasses = $ticket['status'] === 'Overdue'
                                    ? 'border-red-300 bg-red-50 text-red-500'
                                    : ($ticket['status'] === 'In Progress'
                                        ? 'border-blue-300 bg-blue-50 text-blue-500'
                                        : ($ticket['status'] === 'Waiting Client'
                                            ? 'border-orange-300 bg-orange-50 text-orange-500'
                                            : 'border-emerald-300 bg-emerald-50 text-emerald-500'));

                                $priorityClasses = $ticket['priority'] === 'Urgent'
                                    ? 'border-orange-300 bg-orange-50 text-orange-500'
                                    : ($ticket['priority'] === 'High'
                                        ? 'border-red-300 bg-red-50 text-red-500'
                                        : 'border-blue-300 bg-blue-50 text-blue-500');
                            @endphp

                            <tr class="border-t border-gray-100 align-middle">
                                <td class="px-2 py-4 text-center text-gray-400">
                                    <i class="fa-solid fa-grip-vertical text-[10px]"></i>
                                </td>

                                <td class="px-2 py-4">
                                    <input type="checkbox" class="h-4 w-4 rounded border-gray-300" aria-label="Select {{ $ticket['id'] }}">
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 font-medium text-gray-900">{{ $ticket['id'] }}</td>
                                <td class="truncate whitespace-nowrap px-2 py-4 text-gray-800">{{ $ticket['client'] }}</td>
                                <td class="truncate whitespace-nowrap px-2 py-4 text-gray-800">{{ $ticket['subject'] }}</td>

                                <td class="px-2 py-4">
                                    <span class="inline-flex whitespace-nowrap rounded-md border px-2 py-0.5 text-[11px] font-medium {{ $statusClasses }}">
                                        {{ $ticket['status'] }}
                                    </span>
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 text-gray-800">{{ $ticket['assigned_to'] }}</td>

                                <td class="px-2 py-4">
                                    <span class="inline-flex whitespace-nowrap rounded-md border px-2 py-0.5 text-[11px] font-medium {{ $priorityClasses }}">
                                        {{ $ticket['priority'] }}
                                    </span>
                                </td>

                                <td class="truncate whitespace-nowrap px-2 py-4 text-gray-800">{{ $ticket['due_time'] }}</td>

                                <td class="relative px-2 py-4 text-center">
                                    <button
                                        type="button"
                                        class="staff-action-toggle rounded-md p-2 text-gray-700 transition hover:bg-gray-100"
                                        aria-label="Actions"
                                    >
                                        <i class="fa-solid fa-ellipsis-vertical"></i>
                                    </button>

                                    <div class="staff-action-menu absolute right-2 top-12 z-40 hidden w-44 rounded-xl border border-gray-200 bg-white p-1.5 text-left shadow-xl shadow-gray-200/70">
                                        <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33320)">
<path d="M18.3333 10C18.3333 12.357 18.3333 13.5355 17.6011 14.2678C17.0666 14.8022 16.2945 14.9466 15 14.9856M4.99996 14.9856C3.70542 14.9466 2.93328 14.8022 2.39886 14.2678C1.66663 13.5355 1.66663 12.357 1.66663 10C1.66663 7.64298 1.66663 6.46447 2.39886 5.73223C3.13109 5 4.3096 5 6.66663 5H13.3333C15.6903 5 16.8688 5 17.6011 5.73223C17.8509 5.98206 18.0155 6.28385 18.1239 6.66667" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.5 8.3335H5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M15.8334 12.5L4.16671 12.5" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M14.9856 4.99984C14.9466 3.7053 14.8022 2.93316 14.2678 2.39874C13.5355 1.6665 12.357 1.6665 10 1.6665C7.64298 1.6665 6.46447 1.6665 5.73223 2.39874C5.19781 2.93316 5.05344 3.7053 5.01444 4.99984M15 12.4998V13.3332C15 15.6902 15 16.8687 14.2678 17.6009C13.7334 18.1354 12.9612 18.2797 11.6667 18.3187M5 12.4998V13.3332C5 15.6902 5 16.8687 5.73223 17.6009C6.26665 18.1354 7.03879 18.2797 8.33333 18.3187" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<circle cx="14.1667" cy="8.33333" r="0.833333" fill="#1C274C"/>
</g>
<defs>
<clipPath id="clip0_1202_33320">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

                                            <span>Print</span>
                                        </button>

                                        <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1202_33313)">
<path d="M11.9667 3.39872L12.7391 2.62632C14.0188 1.34657 16.0937 1.34657 17.3735 2.62632C18.6532 3.90607 18.6532 5.98096 17.3735 7.26072L16.6011 8.03312M11.9667 3.39872C11.9667 3.39872 12.0632 5.04007 13.5115 6.48832C14.9597 7.93657 16.6011 8.03312 16.6011 8.03312M11.9667 3.39872L9.99996 5.36544M7.08329 8.28211L4.86565 10.4998C4.38468 10.9807 4.14419 11.2212 3.93737 11.4864C3.6934 11.7992 3.48424 12.1376 3.31358 12.4957C3.1689 12.7993 3.06136 13.1219 2.84626 13.7672L1.9348 16.5016L1.712 17.17C1.60615 17.4875 1.6888 17.8376 1.92549 18.0743C2.16217 18.311 2.51228 18.3936 2.82983 18.2878L3.49823 18.065L6.23261 17.1535C6.87789 16.9384 7.20054 16.8309 7.50411 16.6862C7.8622 16.5156 8.20064 16.3064 8.51343 16.0624C8.77859 15.8556 9.01907 15.6151 9.50004 15.1341L9.63436 14.9998L12.2172 12.417L16.6011 8.03312M3.49823 18.065L1.9348 16.5016" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</g>
<defs>
<clipPath id="clip0_1202_33313">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

                                            <span>Edit</span>
                                        </button>

                                        <button type="button" class="flex w-full items-center gap-2 rounded-lg px-3 py-2 text-sm font-medium text-gray-800 hover:bg-gray-50">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.0834 5H2.91663" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M7.91663 9.1665L8.33329 13.3332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M12.0833 9.1665L11.6666 13.3332" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5.41663 5C5.46319 5 5.48648 5 5.50758 4.99947C6.19379 4.98208 6.79915 4.54576 7.03264 3.90027C7.03982 3.88041 7.04719 3.85832 7.06191 3.81415L7.14282 3.57143C7.21188 3.36423 7.24642 3.26063 7.29222 3.17267C7.47497 2.82173 7.81308 2.57803 8.2038 2.51564C8.30173 2.5 8.41094 2.5 8.62934 2.5H11.3706C11.589 2.5 11.6982 2.5 11.7961 2.51564C12.1868 2.57803 12.525 2.82173 12.7077 3.17267C12.7535 3.26063 12.788 3.36423 12.8571 3.57143L12.938 3.81415C12.9527 3.85826 12.9601 3.88042 12.9673 3.90027C13.2008 4.54576 13.8061 4.98208 14.4923 4.99947C14.5134 5 14.5367 5 14.5833 5" stroke="#1C274C" stroke-width="1.5"/>
<path d="M15.3113 12.8328C15.1638 15.0452 15.09 16.1514 14.3692 16.8258C13.6483 17.5002 12.5397 17.5002 10.3223 17.5002H9.67787C7.46054 17.5002 6.35187 17.5002 5.63103 16.8258C4.91019 16.1514 4.83644 15.0452 4.68895 12.8328L4.30566 7.0835M15.6946 7.0835L15.5279 9.5835" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"/>
</svg>

                                            <span>Delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td colspan="10" class="h-[150px]"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="space-y-4 lg:hidden">
                @foreach ($urgentTickets as $ticket)
                    @php
                        $statusClasses = $ticket['status'] === 'Overdue'
                            ? 'border-red-300 bg-red-50 text-red-500'
                            : ($ticket['status'] === 'In Progress'
                                ? 'border-blue-300 bg-blue-50 text-blue-500'
                                : ($ticket['status'] === 'Waiting Client'
                                    ? 'border-orange-300 bg-orange-50 text-orange-500'
                                    : 'border-emerald-300 bg-emerald-50 text-emerald-500'));

                        $priorityClasses = $ticket['priority'] === 'Urgent'
                            ? 'border-orange-300 bg-orange-50 text-orange-500'
                            : ($ticket['priority'] === 'High'
                                ? 'border-red-300 bg-red-50 text-red-500'
                                : 'border-blue-300 bg-blue-50 text-blue-500');
                    @endphp

                    <article class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                        <div class="mb-3 flex items-start justify-between gap-3">
                            <div class="min-w-0">
                                <p class="truncate text-sm font-semibold text-gray-950">{{ $ticket['id'] }}</p>
                                <p class="mt-1 truncate text-sm text-gray-500">{{ $ticket['client'] }}</p>
                            </div>

                            <button type="button" class="rounded-md border border-gray-200 p-2 text-[#1C274C]" aria-label="Ticket actions">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </button>
                        </div>

                        <p class="mb-3 text-sm text-gray-800">{{ $ticket['subject'] }}</p>

                        <div class="mb-3 flex flex-wrap gap-2">
                            <span class="rounded-md border px-2 py-1 text-xs {{ $statusClasses }}">{{ $ticket['status'] }}</span>
                            <span class="rounded-md border px-2 py-1 text-xs {{ $priorityClasses }}">{{ $ticket['priority'] }}</span>
                        </div>

                        <div class="grid grid-cols-2 gap-3 text-sm">
                            <div>
                                <p class="text-gray-400">Assigned To</p>
                                <p class="truncate font-medium text-gray-900">{{ $ticket['assigned_to'] }}</p>
                            </div>

                            <div>
                                <p class="text-gray-400">Due Time</p>
                                <p class="truncate font-medium text-gray-900">{{ $ticket['due_time'] }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-5 flex flex-col gap-3 text-sm text-gray-500 lg:flex-row lg:items-center lg:justify-between">
                <span>0 of 68 row(s) selected.</span>

                <div class="flex flex-wrap items-center gap-3">
                    @include('LogisticAdminDashboard.partials.staff-pagination', ['id' => 'crm-dashboard-rows-per-page'])
                </div>
            </div>
        </div>
    </section>
</div>
