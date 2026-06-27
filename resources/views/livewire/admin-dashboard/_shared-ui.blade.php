@once
    <style>
        .staff-action-menu button:hover,
        .staff-action-menu button:focus-visible {
            background: #0d2545 !important;
            color: #ffffff !important;
        }

        .staff-action-menu button:hover i,
        .staff-action-menu button:focus-visible i,
        .staff-action-menu button:hover svg,
        .staff-action-menu button:focus-visible svg {
            color: #ffffff !important;
        }

        .staff-action-menu button:hover svg *,
        .staff-action-menu button:focus-visible svg * {
            stroke: currentColor !important;
        }

        .staff-action-menu button:hover svg [fill]:not([fill="none"]),
        .staff-action-menu button:focus-visible svg [fill]:not([fill="none"]) {
            fill: currentColor !important;
        }

        .staff-select-menu [data-staff-select-option] {
            border-radius: .5rem;
        }

        .staff-select-menu [data-staff-select-option]:hover,
        .staff-select-menu [data-staff-select-option]:focus-visible,
        .staff-select-menu [data-staff-select-option].is-active,
        .staff-select-menu [data-staff-select-option].staff-select-option-active,
        .staff-select-menu [data-staff-select-option].bg-gray-900 {
            background: #0d2545 !important;
            color: #ffffff !important;
        }

        select,
        input[type="date"] {
            min-height: 2.75rem;
            border-radius: .75rem !important;
            background-color: #ffffff;
            box-shadow: 0 1px 2px rgba(15, 23, 42, .04);
        }

        select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg width='12' height='8' viewBox='0 0 12 8' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1.5L6 6.5L11 1.5' stroke='%236B7280' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            background-position: right .85rem center;
            background-repeat: no-repeat;
            background-size: .75rem;
            padding-right: 2.35rem !important;
        }

        input[type="date"] {
            padding-right: .75rem;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            opacity: .58;
        }
    </style>
@endonce
