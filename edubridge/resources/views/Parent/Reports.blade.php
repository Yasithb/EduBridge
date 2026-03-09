<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Academix - Grades &amp; Reports</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
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
        .material-symbols-outlined {
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 24
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-gray-200">
<div class="flex flex-col min-h-screen">
<header class="bg-white dark:bg-background-dark shadow-sm border-b border-gray-200 dark:border-gray-700">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<div class="flex items-center gap-4">
<div class="text-primary size-7">
<svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M24 4C25.7818 14.2173 33.7827 22.2182 44 24C33.7827 25.7818 25.7818 33.7827 24 44C22.2182 33.7827 14.2173 25.7818 4 24C14.2173 22.2182 22.2182 14.2173 24 4Z" fill="currentColor"></path>
</svg>
</div>
<h1 class="text-xl font-bold text-gray-900 dark:text-white">Academix</h1>
</div>
<nav class="hidden md:flex items-center gap-2">
<a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary px-3 py-2 rounded-md text-sm font-medium" href="{{ route('parent.dashboard') }}">Dashboard</a>
<a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary px-3 py-2 rounded-md text-sm font-medium" href="{{ route('parent.tracker') }}">Attendance</a>
<a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary px-3 py-2 rounded-md text-sm font-medium" href="{{ route('parent.homework') }}">Assignments</a>
<a class="bg-primary/10 text-primary px-3 py-2 rounded-md text-sm font-medium" href="{{ route('parent.reports') }}">Grades</a>
<a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary px-3 py-2 rounded-md text-sm font-medium" href="{{ route('parent.dashboard') }}">Calendar</a>
<a class="text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-primary px-3 py-2 rounded-md text-sm font-medium" href="{{ route('parent.messages') }}">Messages</a>
</nav>
<div class="flex items-center">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD--ZmGVZ55gyzbO9ax6AJtDGNv5g1ljKdvuNlV03W-BGpsVZHz55sHURkQzi4ZD8BF8D8p7pkhUiuQR0Kh2Y1ztMjAUNwrP-IwvN4UgTN7DrdiClgyoGA9CcNkso4n609vbO__Dk2m5NERSvwxaDB9bF0nQFG8m_9RZDA7mLuZWLSuKEdjAWeLYzLjtVzjBfWPo8B3NWWxXC9NjZjVnqUkrr2fgNAPRz-tHir2-kLK1MdzDodxhVe3TDigMHFEHPZ4W5nJlg9WSq4");'></div>
</div>
</div>
</div>
</header>
<main class="flex-grow">
<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
<div class="mb-8">
<h2 class="text-3xl font-bold text-gray-900 dark:text-white">Grades &amp; Reports</h2>
<p class="mt-2 text-sm text-gray-500 dark:text-gray-400">View your child's academic performance and download progress reports.</p>
</div>
<div class="flex flex-col gap-12">
<div>
<h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Subject Grades</h3>
<div class="bg-white dark:bg-background-dark/50 rounded-lg shadow-sm overflow-hidden">
<div class="overflow-x-auto">
<table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
<thead class="bg-gray-50 dark:bg-gray-800/60">
<tr>
<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider" scope="col">Subject</th>
<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider" scope="col">Grade</th>
<th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider" scope="col">Teacher</th>
<th class="relative px-6 py-3" scope="col">
<span class="sr-only">Actions</span>
</th>
</tr>
</thead>
<tbody class="bg-white dark:bg-transparent divide-y divide-gray-200 dark:divide-gray-700">
<tr>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">Mathematics</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">A</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Ms. Johnson</td>
<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
<a class="text-primary hover:text-primary/80" href="#">View Details</a>
</td>
</tr>
<tr>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">Science</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">B+</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Mr. Davis</td>
<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
<a class="text-primary hover:text-primary/80" href="#">View Details</a>
</td>
</tr>
<tr>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">English</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">A-</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Dr. Smith</td>
<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
<a class="text-primary hover:text-primary/80" href="#">View Details</a>
</td>
</tr>
<tr>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">History</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">B</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Mr. Brown</td>
<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
<a class="text-primary hover:text-primary/80" href="#">View Details</a>
</td>
</tr>
<tr>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">Physical Education</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">A+</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Coach Williams</td>
<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
<a class="text-primary hover:text-primary/80" href="#">View Details</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div>
<h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Progress Reports</h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="bg-white dark:bg-background-dark/50 rounded-lg shadow-sm p-4 flex items-center justify-between">
<div class="flex items-center gap-4">
<div class="flex items-center justify-center size-12 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined">picture_as_pdf</span>
</div>
<div>
<p class="font-medium text-gray-900 dark:text-white">Progress Report</p>
<p class="text-sm text-gray-500 dark:text-gray-400">Semester 1, 2023</p>
</div>
</div>
<button class="flex items-center justify-center h-10 px-4 bg-primary text-white rounded-lg text-sm font-medium hover:bg-primary/90 transition-colors">
<span class="material-symbols-outlined text-base mr-2">download</span>
                                    Download
                                </button>
</div>
<div class="bg-white dark:bg-background-dark/50 rounded-lg shadow-sm p-4 flex items-center justify-between">
<div class="flex items-center gap-4">
<div class="flex items-center justify-center size-12 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined">picture_as_pdf</span>
</div>
<div>
<p class="font-medium text-gray-900 dark:text-white">Progress Report</p>
<p class="text-sm text-gray-500 dark:text-gray-400">Semester 2, 2023</p>
</div>
</div>
<button class="flex items-center justify-center h-10 px-4 bg-primary text-white rounded-lg text-sm font-medium hover:bg-primary/90 transition-colors">
<span class="material-symbols-outlined text-base mr-2">download</span>
                                    Download
                                </button>
</div>
</div>
</div>
</div>
</div>
</main>
</div>

</body></html>