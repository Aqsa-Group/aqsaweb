<?php

namespace App\Http\Controllers;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('AdminDashboard.pages.dashboard', [
            'sidebarGroups' => $this->sidebarGroups(),
        ]);
    }

    public function module(string $section, string $page)
    {
        $modules = $this->modules();
        $key = $section.'.'.$page;

        abort_unless(isset($modules[$key]), 404);

        return view('AdminDashboard.pages.module', [
            'module' => $modules[$key],
            'sidebarGroups' => $this->sidebarGroups(),
        ]);
    }

    private function sidebarGroups(): array
    {
        return [
            [
                'label' => 'HR Management',
                'icon' => 'fa-users',
                'items' => [
                    ['label' => 'Staff Profiles', 'route' => route('admin.module', ['hr', 'staff-profiles'])],
                    ['label' => 'Attendance & Leave', 'route' => route('admin.module', ['hr', 'attendance-leave'])],
                    ['label' => 'Payroll', 'route' => route('admin.module', ['hr', 'payroll'])],
                ],
            ],
            [
                'label' => 'Clients / NGO',
                'icon' => 'fa-handshake',
                'items' => [
                    ['label' => 'Clients', 'route' => route('admin.module', ['clients', 'clients'])],
                    ['label' => 'NGO', 'route' => route('admin.module', ['clients', 'ngo'])],
                    ['label' => 'Government', 'route' => route('admin.module', ['clients', 'government'])],
                    ['label' => 'Private', 'route' => route('admin.module', ['clients', 'private'])],
                ],
            ],
            [
                'label' => 'Finance',
                'icon' => 'fa-chart-line',
                'items' => [
                    ['label' => 'Sales Invoices', 'route' => route('admin.module', ['finance', 'sales-invoices'])],
                    ['label' => 'Purchase Invoices', 'route' => route('admin.module', ['finance', 'purchase-invoices'])],
                    ['label' => 'Expenses', 'route' => route('admin.module', ['finance', 'expenses'])],
                    ['label' => 'Payments', 'route' => route('admin.module', ['finance', 'payments'])],
                ],
            ],
            [
                'label' => 'Accounting',
                'icon' => 'fa-calculator',
                'items' => [
                    ['label' => 'Journal Entries', 'route' => route('admin.module', ['accounting', 'journal-entries'])],
                    ['label' => 'General Ledger', 'route' => route('admin.module', ['accounting', 'general-ledger'])],
                ],
            ],
            [
                'label' => 'ICT',
                'icon' => 'fa-desktop',
                'items' => [
                    ['label' => 'Projects', 'route' => route('admin.module', ['ict', 'projects'])],
                    ['label' => 'Tasks', 'route' => route('admin.module', ['ict', 'tasks'])],
                    ['label' => 'Time Tracking', 'route' => route('admin.module', ['ict', 'time-tracking'])],
                    ['label' => 'Infrastructure', 'route' => route('admin.module', ['ict', 'infrastructure'])],
                ],
            ],
            [
                'label' => 'Logistic',
                'icon' => 'fa-truck-fast',
                'items' => [
                    ['label' => 'Contracts', 'route' => route('admin.module', ['logistic', 'contracts'])],
                    ['label' => 'Vehicles', 'route' => route('admin.module', ['logistic', 'vehicles'])],
                    ['label' => 'Fuel', 'route' => route('admin.module', ['logistic', 'fuel'])],
                ],
            ],
            [
                'label' => 'CRM',
                'icon' => 'fa-headset',
                'items' => [
                    ['label' => 'Contacts', 'route' => route('admin.module', ['crm', 'contacts'])],
                    ['label' => 'Vendors', 'route' => route('admin.module', ['crm', 'vendors'])],
                    ['label' => 'Tickets', 'route' => route('admin.module', ['crm', 'tickets'])],
                    ['label' => 'Customer Interaction', 'route' => route('admin.module', ['crm', 'customer-interaction'])],
                ],
            ],
            [
                'label' => 'Reports',
                'icon' => 'fa-file-lines',
                'items' => [
                    ['label' => 'Finance Reports', 'route' => route('admin.module', ['reports', 'finance'])],
                    ['label' => 'HR Reports', 'route' => route('admin.module', ['reports', 'hr'])],
                    ['label' => 'Audit Reports', 'route' => route('admin.module', ['reports', 'audit'])],
                ],
            ],
            [
                'label' => 'Setting',
                'icon' => 'fa-gear',
                'items' => [
                    ['label' => 'Roles & Permissions', 'route' => route('admin.module', ['setting', 'roles-permissions'])],
                    ['label' => 'Audit Log', 'route' => route('admin.module', ['setting', 'audit-log'])],
                    ['label' => 'System Colors', 'route' => route('admin.module', ['setting', 'system-colors'])],
                ],
            ],
        ];
    }

    private function modules(): array
    {
        $modules = [];

        foreach ($this->sidebarGroups() as $group) {
            foreach ($group['items'] as $item) {
                $path = parse_url($item['route'], PHP_URL_PATH) ?: '';
                $segments = array_values(array_filter(explode('/', trim($path, '/'))));

                if (($segments[0] ?? null) === 'admin-dashboard') {
                    array_shift($segments);
                }

                if (count($segments) < 2) {
                    continue;
                }

                $modules[$segments[0].'.'.$segments[1]] = [
                    'title' => $item['label'],
                    'section' => $group['label'],
                    'icon' => $group['icon'],
                    'filters' => $this->filtersFor($item['label']),
                    'rows' => $this->rowsFor($item['label']),
                ];
            }
        }

        return $modules;
    }

    private function filtersFor(string $label): array
    {
        return match ($label) {
            'Staff Profiles', 'Attendance & Leave', 'Payroll' => ['Logistic Manager', 'HR Manager', 'Finance Manager', 'Auditor'],
            'Clients', 'NGO', 'Government', 'Private' => ['NGO', 'Government', 'Private'],
            'Sales Invoices', 'Purchase Invoices', 'Expenses', 'Payments' => ['Payment', 'Expense', 'Invoice'],
            'Journal Entries', 'General Ledger' => ['Cash', 'Bank', 'Mobile Money'],
            'Projects', 'Tasks', 'Time Tracking', 'Infrastructure' => ['Logistic', 'ICT', 'Both'],
            'Contracts', 'Vehicles', 'Fuel' => ['Official Rent', 'Fuel', 'Internet', 'Urgent'],
            'Contacts', 'Vendors', 'Tickets', 'Customer Interaction' => ['Draft', 'Under review', 'Approved', 'Active', 'Closed'],
            'Finance Reports', 'HR Reports', 'Audit Reports' => ['Paid', 'Pending'],
            'Roles & Permissions', 'Audit Log', 'System Colors' => ['Inclusive', 'Exclusive'],
            default => ['Active', 'Pending', 'Closed'],
        };
    }

    private function rowsFor(string $label): array
    {
        return [
            [$label.' Q1', 'Active', 'UNHCR Afghanistan', '1200$'],
            [$label.' Supply Chain', 'Active', 'WFP Afghanistan', '200$'],
            [$label.' Setup', 'Under Review', 'UNACF Afghanistan', '9000$'],
            [$label.' Support', 'Approved', 'WHO Afghanistan', '88,000$'],
        ];
    }
}
