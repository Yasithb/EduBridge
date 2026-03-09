<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Attendance Tracker</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        .status-present {
            --status-bg: #e0f2f1;
            --status-text: #00796b;
        }
        .dark .status-present {
            --status-bg: #004d40;
            --status-text: #a7ffeb;
        }
        .status-absent {
            --status-bg: #ffebee;
            --status-text: #d32f2f;
        }
        .dark .status-absent {
            --status-bg: #880e4f;
            --status-text: #ffcdd2;
        }
        .status-late {
            --status-bg: #fffde7;
            --status-text: #fbc02d;
        }
        .dark .status-late {
            --status-bg: #f57f17;
            --status-text: #fff9c4;
        }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark">
<div class="flex flex-col min-h-screen">
<header class="bg-white dark:bg-background-dark/50 border-b border-background-light dark:border-background-dark/50 shadow-sm sticky top-0 backdrop-blur-sm z-10">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<div class="flex items-center gap-4">
<div class="flex-shrink-0">
<svg class="h-8 w-8 text-primary" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M24 4L4 12V36L24 44L44 36V12L24 4Z" stroke="currentColor" stroke-linejoin="round" stroke-width="4"></path>
<path d="M4 12L24 20L44 12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path>
<path d="M24 44V20" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path>
</svg>
</div>
<h1 class="text-xl font-bold text-gray-900 dark:text-white">SchoolMate</h1>
</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors" href="{{ route('parent.dashboard') }}">Dashboard</a>
<a class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors" href="{{ route('parent.dashboard') }}">Classes</a>
<a class="text-sm font-medium text-primary dark:text-primary" href="{{ route('parent.tracker') }}">Attendance</a>
<a class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors" href="{{ route('parent.reports') }}">Reports</a>
<a class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors" href="{{ route('parent.profile') }}">Settings</a>
</nav>
<div class="flex items-center gap-4">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCfqxX4PssM8fOogcoH3uqBs6y2a1JYQ3NY2U2ATXWN44gagBSur_cS4hpN2ph-zPrKiVl9wHALuLhCchwQyZSlQkHXV7YCHcFw26OMhPHfsdFBcmbqQAvmpdi_ymdvey3M8fDwAVN6wKjt_xtEQ4ilcYa6jD4hROIunEKnaf3C3yepb3uNK6U_4lc3BBOWFclCXYjmTpfm06cT_JiVp5tk528h7_WrdgihulPifOVvHGNkEzVb-LLFPzVTBGlEn6wX5_tQvtyJz-k");'></div>
</div>
</div>
</div>
</header>
<main class="flex-grow">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
<div class="mb-8">
<h2 class="text-3xl font-bold text-gray-900 dark:text-white">Attendance Tracker</h2>
<p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Track your child's daily attendance history for the current month.</p>
</div>
<div class="bg-white dark:bg-background-dark/50 rounded-xl shadow-md overflow-hidden">
<div class="p-6">
<h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Student: Emily Carter</h3>
<div class="overflow-x-auto">
<table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
<thead class="bg-background-light dark:bg-background-dark">
<tr>
<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider" scope="col">Date</th>
<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider" scope="col">Status</th>
</tr>
</thead>
<tbody class="bg-white dark:bg-background-dark/50 divide-y divide-gray-200 dark:divide-gray-700">
<tr>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-200">Monday, July 22, 2024</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Present</span>
</td>
</tr>
<tr>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-200">Tuesday, July 23, 2024</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Present</span>
</td>
</tr>
<tr>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-200">Wednesday, July 24, 2024</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">Absent</span>
</td>
</tr>
<tr>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-200">Thursday, July 25, 2024</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Present</span>
</td>
</tr>
<tr>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-200">Friday, July 26, 2024</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Present</span>
</td>
</tr>
<tr>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-200">Monday, July 29, 2024</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Present</span>
</td>
</tr>
<tr>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-200">Tuesday, July 30, 2024</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">Late</span>
</td>
</tr>
<tr>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-200">Wednesday, July 31, 2024</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Present</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</main>
</div>

</body></html>