<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Parent Dashboard</title>
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
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-800 dark:text-slate-200">
<div class="flex flex-col min-h-screen">
<header class="bg-white/70 dark:bg-background-dark/50 backdrop-blur-sm sticky top-0 z-10">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<div class="flex items-center gap-4">
<div class="text-primary size-8">
<svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M36.7273 44C33.9891 44 31.6043 39.8386 30.3636 33.69C29.123 39.8386 26.7382 44 24 44C21.2618 44 18.877 39.8386 17.6364 33.69C16.3957 39.8386 14.0109 44 11.2727 44C7.25611 44 4 35.0457 4 24C4 12.9543 7.25611 4 11.2727 4C14.0109 4 16.3957 8.16144 17.6364 14.31C18.877 8.16144 21.2618 4 24 4C26.7382 4 29.123 8.16144 30.3636 14.31C31.6043 8.16144 33.9891 4 36.7273 4C40.7439 4 44 12.9543 44 24C44 35.0457 40.7439 44 36.7273 44Z" fill="currentColor"></path>
</svg>
</div>
<h1 class="text-xl font-bold text-slate-900 dark:text-white">SchoolConnect</h1>
</div>
<nav class="hidden md:flex items-center gap-2">
<a class="px-3 py-2 rounded-lg text-sm font-medium bg-primary/10 text-primary dark:bg-primary/20" href="#">Dashboard</a>
<a class="px-3 py-2 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary transition-colors" href="#">Attendance</a>
<a class="px-3 py-2 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary transition-colors" href="#">Grades</a>
<a class="px-3 py-2 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary transition-colors" href="#">Messages</a>
<a class="px-3 py-2 rounded-lg text-sm font-medium text-slate-600 dark:text-slate-300 hover:bg-primary/10 dark:hover:bg-primary/20 hover:text-primary transition-colors" href="#">Notifications</a>
</nav>
<div class="flex items-center gap-4">
<button class="relative rounded-full p-2 text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-slate-600 dark:hover:text-slate-300">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-1 right-1 flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQdC-Q2SYgcsJWisxcs8iQF5gFcIUj-nCXQsSFcTlOuLYGXmgmwY-9MDG5_K67HBbTRWP4HcJe5NYT08qEgtCByrs7tZiTKr4aB6GeM658D4nRL_NBedBo8s0qpNQWbxjcWFJYYO4zk2CGSRrKXm7TFyp3_6dID2UphhT8tYyYElzlUI2Yo6JwIqb-QPCUe8EdskMhDcnHiD1pqNJmZv898gS9rQulo3AHgawDYwjrW1HQH3ZdU2gVWhzXxX4kEiqsVWlA-VE9cWU");'></div>
</div>
</div>
</div>
</header>
<main class="flex-1">
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
<div class="mb-8">
<h1 class="text-3xl font-bold text-slate-900 dark:text-white">Parent Dashboard</h1>
<p class="mt-1 text-slate-600 dark:text-slate-400">Welcome back, Sarah! Here's a summary of your child's progress.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white dark:bg-slate-800/50 p-6 rounded-xl border border-slate-200 dark:border-slate-700">
<div class="flex items-center justify-between">
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Attendance Rate</p>
<span class="material-symbols-outlined text-green-500">trending_up</span>
</div>
<p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">95%</p>
</div>
<div class="bg-white dark:bg-slate-800/50 p-6 rounded-xl border border-slate-200 dark:border-slate-700">
<div class="flex items-center justify-between">
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Absences</p>
<span class="material-symbols-outlined text-red-500">trending_down</span>
</div>
<p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">3</p>
</div>
<div class="bg-white dark:bg-slate-800/50 p-6 rounded-xl border border-slate-200 dark:border-slate-700">
<div class="flex items-center justify-between">
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Average Grade</p>
<span class="material-symbols-outlined text-blue-500">school</span>
</div>
<p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">B+</p>
</div>
<div class="bg-white dark:bg-slate-800/50 p-6 rounded-xl border border-slate-200 dark:border-slate-700">
<div class="flex items-center justify-between">
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Highest Grade</p>
<span class="material-symbols-outlined text-amber-500">workspace_premium</span>
</div>
<p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">A</p>
</div>
</div>
<div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
<div class="bg-white dark:bg-slate-800/50 p-6 rounded-xl border border-slate-200 dark:border-slate-700">
<h2 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">Latest Messages</h2>
<ul class="space-y-4">
<li class="flex items-start gap-4 p-4 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
<div class="bg-primary/10 dark:bg-primary/20 text-primary p-3 rounded-full">
<span class="material-symbols-outlined">email</span>
</div>
<div>
<p class="font-medium text-slate-800 dark:text-slate-100">Upcoming Exam Reminder</p>
<p class="text-sm text-slate-500 dark:text-slate-400">From: Math Teacher</p>
</div>
</li>
<li class="flex items-start gap-4 p-4 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
<div class="bg-primary/10 dark:bg-primary/20 text-primary p-3 rounded-full">
<span class="material-symbols-outlined">campaign</span>
</div>
<div>
<p class="font-medium text-slate-800 dark:text-slate-100">School Event Announcement</p>
<p class="text-sm text-slate-500 dark:text-slate-400">From: Principal</p>
</div>
</li>
</ul>
</div>
<div class="bg-white dark:bg-slate-800/50 p-6 rounded-xl border border-slate-200 dark:border-slate-700">
<h2 class="text-lg font-semibold text-slate-900 dark:text-white mb-4">Notifications</h2>
<ul class="space-y-4">
<li class="flex items-start gap-4 p-4 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
<div class="bg-primary/10 dark:bg-primary/20 text-primary p-3 rounded-full">
<span class="material-symbols-outlined">grade</span>
</div>
<div>
<p class="font-medium text-slate-800 dark:text-slate-100">New Grade: <span class="font-bold">Math - B+</span></p>
<p class="text-sm text-slate-500 dark:text-slate-400">Gradebook updated</p>
</div>
</li>
<li class="flex items-start gap-4 p-4 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors">
<div class="bg-primary/10 dark:bg-primary/20 text-primary p-3 rounded-full">
<span class="material-symbols-outlined">event_busy</span>
</div>
<div>
<p class="font-medium text-slate-800 dark:text-slate-100">Absence Recorded</p>
<p class="text-sm text-slate-500 dark:text-slate-400">Attendance updated</p>
</div>
</li>
</ul>
</div>
</div>
</div>
</main>
</div>

</body></html>