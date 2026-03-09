<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Stitch Design</title>
<link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
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
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display">
<div class="flex min-h-screen">
<aside class="w-64 bg-white dark:bg-background-dark flex flex-col p-4 border-r border-gray-200 dark:border-gray-800">
<div class="flex items-center gap-3 mb-8 p-2">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBnEYGlxeb0vyI5xNu-SkWX1pTJQiyUleija674F2tThZACejsGJAlR5PbgHlbMfSSpGGIfQWaRO18-yHW0NP3UKkR-u1NfimMuXPRwbnFeApGnP25LUdMtfcwM22eXtjAnRvsCIMjICrWmj3-tyLsd9YsDrto79qy1TNbVK80dWDzw66pls1_kO_bXs0eevVtcM-NPky8qibSYM5PzS_yw2zIU1rR0P2xAh_XVU8KXZpYuVHyQR1UsLedHji-pMeakcgMogGmSba4");'></div>
<h1 class="text-gray-800 dark:text-white text-base font-medium">Emily Carter</h1>
</div>
<nav class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary dark:hover:text-primary rounded-lg" href="{{ route('parent.dashboard') }}">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary dark:hover:text-primary rounded-lg" href="{{ route('parent.dashboard') }}">
<span class="material-symbols-outlined">class</span>
<span class="text-sm font-medium">Classes</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 bg-primary/10 dark:bg-primary/20 text-primary rounded-lg" href="{{ route('parent.homework') }}">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">description</span>
<span class="text-sm font-medium">Homework</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary dark:hover:text-primary rounded-lg" href="{{ route('parent.homework') }}">
<span class="material-symbols-outlined">science</span>
<span class="text-sm font-medium">Exams</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary dark:hover:text-primary rounded-lg" href="{{ route('parent.tracker') }}">
<span class="material-symbols-outlined">calendar_today</span>
<span class="text-sm font-medium">Attendance</span>
</a>
</nav>
</aside>
<main class="flex-1 p-8">
<h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">Homework &amp; Exams</h1>
<div class="bg-white dark:bg-background-dark/50 p-6 rounded-xl shadow-sm mb-8">
<h2 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Upcoming Homework</h2>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="border-b border-gray-200 dark:border-gray-700">
<th class="p-4 text-sm font-semibold text-gray-500 dark:text-gray-400">Subject</th>
<th class="p-4 text-sm font-semibold text-gray-500 dark:text-gray-400">Assignment</th>
<th class="p-4 text-sm font-semibold text-gray-500 dark:text-gray-400">Due Date</th>
<th class="p-4 text-sm font-semibold text-gray-500 dark:text-gray-400">Status</th>
</tr>
</thead>
<tbody>
<tr class="border-b border-gray-200 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-background-dark">
<td class="p-4 text-sm text-gray-800 dark:text-white font-medium">Math</td>
<td class="p-4 text-sm text-gray-600 dark:text-gray-300">Complete exercises 1-10 in chapter 3</td>
<td class="p-4 text-sm text-gray-600 dark:text-gray-300">2024-03-15</td>
<td class="p-4 text-sm">
<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900/50 dark:text-yellow-300">In Progress</span>
</td>
</tr>
<tr class="border-b border-gray-200 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-background-dark">
<td class="p-4 text-sm text-gray-800 dark:text-white font-medium">Science</td>
<td class="p-4 text-sm text-gray-600 dark:text-gray-300">Prepare a presentation on the solar system</td>
<td class="p-4 text-sm text-gray-600 dark:text-gray-300">2024-03-18</td>
<td class="p-4 text-sm">
<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200">Not Started</span>
</td>
</tr>
<tr class="hover:bg-gray-50 dark:hover:bg-background-dark">
<td class="p-4 text-sm text-gray-800 dark:text-white font-medium">History</td>
<td class="p-4 text-sm text-gray-600 dark:text-gray-300">Write an essay on the American Revolution</td>
<td class="p-4 text-sm text-gray-600 dark:text-gray-300">2024-03-20</td>
<td class="p-4 text-sm">
<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-200">Not Started</span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="bg-white dark:bg-background-dark/50 p-6 rounded-xl shadow-sm">
<h2 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Exam Schedule</h2>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="border-b border-gray-200 dark:border-gray-700">
<th class="p-4 text-sm font-semibold text-gray-500 dark:text-gray-400">Subject</th>
<th class="p-4 text-sm font-semibold text-gray-500 dark:text-gray-400">Exam Date</th>
<th class="p-4 text-sm font-semibold text-gray-500 dark:text-gray-400">Time</th>
<th class="p-4 text-sm font-semibold text-gray-500 dark:text-gray-400">Location</th>
</tr>
</thead>
<tbody>
<tr class="border-b border-gray-200 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-background-dark">
<td class="p-4 text-sm text-gray-800 dark:text-white font-medium">Math</td>
<td class="p-4 text-sm text-gray-600 dark:text-gray-300">2024-04-05</td>
<td class="p-4 text-sm text-gray-600 dark:text-gray-300">10:00 AM</td>
<td class="p-4 text-sm text-gray-600 dark:text-gray-300">Room 201</td>
</tr>
<tr class="hover:bg-gray-50 dark:hover:bg-background-dark">
<td class="p-4 text-sm text-gray-800 dark:text-white font-medium">Science</td>
<td class="p-4 text-sm text-gray-600 dark:text-gray-300">2024-04-08</td>
<td class="p-4 text-sm text-gray-600 dark:text-gray-300">1:00 PM</td>
<td class="p-4 text-sm text-gray-600 dark:text-gray-300">Room 203</td>
</tr>
</tbody>
</table>
</div>
</div>
</main>
</div>

</body></html>