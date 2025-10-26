<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>AcademicsPro - Class Management</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script id="tailwind-config">
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
<div class="flex h-screen">
<aside class="w-64 bg-white dark:bg-gray-900/50 flex flex-col border-r border-gray-200 dark:border-gray-800">
<div class="flex items-center gap-3 p-6 border-b border-gray-200 dark:border-gray-800">
<div class="p-2 bg-primary rounded-lg">
<svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
<path d="M2 17L12 22L22 17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
<path d="M2 12L12 17L22 12" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</div>
<h1 class="text-xl font-bold text-gray-900 dark:text-white">AcademicsPro</h1>
</div>
<nav class="flex-1 p-4 space-y-2">
<a class="flex items-center gap-3 px-4 py-2 text-gray-600 dark:text-gray-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
                    Dashboard
                </a>
<a class="flex items-center gap-3 px-4 py-2 bg-primary/10 text-primary rounded-lg transition-colors font-semibold" href="#">
<span class="material-symbols-outlined">class</span>
                    Classes
                </a>
<a class="flex items-center gap-3 px-4 py-2 text-gray-600 dark:text-gray-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">groups</span>
                    Students
                </a>
<a class="flex items-center gap-3 px-4 py-2 text-gray-600 dark:text-gray-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">assignment</span>
                    Assignments
                </a>
<a class="flex items-center gap-3 px-4 py-2 text-gray-600 dark:text-gray-400 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors" href="#">
<span class="material-symbols-outlined">grade</span>
                    Grades
                </a>
</nav>
<div class="p-4 border-t border-gray-200 dark:border-gray-800">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBcOMdpX1HYSh7PQbZ0e0j1323oVRT9RUZNlE0DapJ7IoEE7MfbT9NRAdO8SU8I69b3jHeBpeSiaCpNhQYR0Pnq4DuxdY9cBu039E0YKtBQ6UTYkqOKzRkMc2Bg_gfMu22OdVjm6NgfBNj97w-04XL4sLUYr_4Fc-A69PuZ719-73VToRJN3gwFUI-IIG_7VJXKTVwmcZ_LuNHjZBNJvtTBdpelSKEc9n3PkmZgYQaZTfNH4hUcEN3mPE2Hr-pDcCjGbWOdGNVegEQ");'></div>
<div>
<p class="font-semibold text-gray-900 dark:text-white">John Doe</p>
<p class="text-sm text-gray-500 dark:text-gray-400">Teacher</p>
</div>
<button class="ml-auto text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200">
<span class="material-symbols-outlined">logout</span>
</button>
</div>
</div>
</aside>
<main class="flex-1 flex flex-col">
<header class="flex items-center justify-between whitespace-nowrap border-b border-gray-200 dark:border-gray-800 p-6">
<div>
<h2 class="text-2xl font-bold text-gray-900 dark:text-white">My Classes</h2>
<p class="text-gray-500 dark:text-gray-400 mt-1">Manage your classes and view student details.</p>
</div>
<button class="bg-primary text-white font-semibold py-2 px-4 rounded-lg flex items-center gap-2 hover:bg-primary/90 transition-colors">
<span class="material-symbols-outlined">add</span>
                    Create New Class
                </button>
</header>
<div class="flex-1 p-6 overflow-y-auto">
<div class="bg-white dark:bg-background-dark rounded-xl shadow-sm">
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="border-b border-gray-200 dark:border-gray-800">
<tr>
<th class="px-6 py-4 font-semibold text-gray-600 dark:text-gray-300">Class Name</th>
<th class="px-6 py-4 font-semibold text-gray-600 dark:text-gray-300">Subject</th>
<th class="px-6 py-4 font-semibold text-gray-600 dark:text-gray-300">Grade Level</th>
<th class="px-6 py-4 font-semibold text-gray-600 dark:text-gray-300 text-center">Students</th>
<th class="px-6 py-4"></th>
</tr>
</thead>
<tbody class="divide-y divide-gray-200 dark:divide-gray-800">
<tr class="hover:bg-background-light dark:hover:bg-gray-900/50 transition-colors">
<td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900 dark:text-white">Mathematics 101</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Algebra</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">10th Grade</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400 text-center">28</td>
<td class="px-6 py-4 whitespace-nowrap text-right">
<a class="text-primary font-semibold hover:underline" href="#">View Students</a>
</td>
</tr>
<tr class="hover:bg-background-light dark:hover:bg-gray-900/50 transition-colors">
<td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900 dark:text-white">English Literature</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Classic Novels</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">11th Grade</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400 text-center">25</td>
<td class="px-6 py-4 whitespace-nowrap text-right">
<a class="text-primary font-semibold hover:underline" href="#">View Students</a>
</td>
</tr>
<tr class="hover:bg-background-light dark:hover:bg-gray-900/50 transition-colors">
<td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900 dark:text-white">Science Fundamentals</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Biology</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">9th Grade</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400 text-center">32</td>
<td class="px-6 py-4 whitespace-nowrap text-right">
<a class="text-primary font-semibold hover:underline" href="#">View Students</a>
</td>
</tr>
<tr class="hover:bg-background-light dark:hover:bg-gray-900/50 transition-colors">
<td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900 dark:text-white">History of Civilization</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">World History</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">10th Grade</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400 text-center">30</td>
<td class="px-6 py-4 whitespace-nowrap text-right">
<a class="text-primary font-semibold hover:underline" href="#">View Students</a>
</td>
</tr>
<tr class="hover:bg-background-light dark:hover:bg-gray-900/50 transition-colors">
<td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900 dark:text-white">Computer Science Basics</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">Programming</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400">12th Grade</td>
<td class="px-6 py-4 whitespace-nowrap text-gray-500 dark:text-gray-400 text-center">22</td>
<td class="px-6 py-4 whitespace-nowrap text-right">
<a class="text-primary font-semibold hover:underline" href="#">View Students</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</main>
</div>

</body></html>