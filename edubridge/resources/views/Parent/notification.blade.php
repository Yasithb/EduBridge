<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Stitch Design</title>
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
<link as="style" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900" onload="this.rel='stylesheet'" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        .icon-muted { color: #64748b; }
        .dark .icon-muted { color: #94a3b8; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-800 dark:text-slate-200">
<div class="flex min-h-screen">
<aside class="w-64 bg-white dark:bg-background-dark p-6 flex flex-col justify-between border-r border-slate-200 dark:border-slate-800">
<div>
<div class="mb-8">
<h1 class="text-xl font-bold text-slate-900 dark:text-white">Acme School</h1>
</div>
<nav class="flex flex-col space-y-2">
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-primary/10" href="{{ route('parent.dashboard') }}">
<svg class="icon-muted" fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"></path></svg>
<span class="font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-primary/10" href="{{ route('parent.dashboard') }}">
<svg class="icon-muted" fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
<span class="font-medium">Students</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-primary/10" href="{{ route('parent.messages') }}">
<svg class="icon-muted" fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z"></path></svg>
<span class="font-medium">Teachers</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-primary/10" href="{{ route('parent.dashboard') }}">
<svg class="icon-muted" fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M216,40H136V24a8,8,0,0,0-16,0V40H40A16,16,0,0,0,24,56V176a16,16,0,0,0,16,16H79.36L57.75,219a8,8,0,0,0,12.5,10l29.59-37h56.32l29.59,37a8,8,0,1,0,12.5-10l-21.61-27H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,136H40V56H216V176Z"></path></svg>
<span class="font-medium">Classes</span>
</a>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg bg-primary/10 dark:bg-primary/20 text-primary" href="{{ route('parent.notifications') }}">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216Z"></path></svg>
<span class="font-bold">Notifications</span>
</a>
</nav>
</div>
</aside>
<main class="flex-1">
<div class="max-w-4xl mx-auto p-8">
<header class="mb-8">
<h1 class="text-4xl font-bold text-slate-900 dark:text-white">Notifications</h1>
<p class="text-slate-500 dark:text-slate-400 mt-1">A log of all alerts and updates for parents.</p>
</header>
<div class="bg-white dark:bg-background-dark rounded-xl shadow-sm">
<div class="divide-y divide-slate-100 dark:divide-slate-800">
<div class="flex items-start gap-4 p-5 hover:bg-primary/5 dark:hover:bg-primary/10 cursor-pointer">
<div class="flex items-center justify-center rounded-full bg-primary/10 dark:bg-primary/20 shrink-0 size-12">
<svg class="text-primary" fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"></path></svg>
</div>
<div class="flex-1">
<p class="font-medium text-slate-800 dark:text-slate-200">Fee reminder sent</p>
<p class="text-sm text-slate-500 dark:text-slate-400 mt-1">10:30 AM</p>
</div>
<div class="size-2.5 rounded-full bg-primary mt-2"></div>
</div>
<div class="flex items-start gap-4 p-5 hover:bg-primary/5 dark:hover:bg-primary/10 cursor-pointer">
<div class="flex items-center justify-center rounded-full bg-primary/10 dark:bg-primary/20 shrink-0 size-12">
<svg class="text-primary" fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"></path></svg>
</div>
<div class="flex-1">
<p class="font-medium text-slate-800 dark:text-slate-200">New exam added</p>
<p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Yesterday</p>
</div>
</div>
<div class="flex items-start gap-4 p-5 hover:bg-primary/5 dark:hover:bg-primary/10 cursor-pointer">
<div class="flex items-center justify-center rounded-full bg-primary/10 dark:bg-primary/20 shrink-0 size-12">
<svg class="text-primary" fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"></path></svg>
</div>
<div class="flex-1">
<p class="font-medium text-slate-800 dark:text-slate-200">Attendance marked</p>
<p class="text-sm text-slate-500 dark:text-slate-400 mt-1">2 days ago</p>
</div>
</div>
<div class="flex items-start gap-4 p-5 hover:bg-primary/5 dark:hover:bg-primary/10 cursor-pointer">
<div class="flex items-center justify-center rounded-full bg-primary/10 dark:bg-primary/20 shrink-0 size-12">
<svg class="text-primary" fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"></path></svg>
</div>
<div class="flex-1">
<p class="font-medium text-slate-800 dark:text-slate-200">New assignment added</p>
<p class="text-sm text-slate-500 dark:text-slate-400 mt-1">3 days ago</p>
</div>
</div>
<div class="flex items-start gap-4 p-5 hover:bg-primary/5 dark:hover:bg-primary/10 cursor-pointer">
<div class="flex items-center justify-center rounded-full bg-primary/10 dark:bg-primary/20 shrink-0 size-12">
<svg class="text-primary" fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"></path></svg>
</div>
<div class="flex-1">
<p class="font-medium text-slate-800 dark:text-slate-200">Fee reminder sent</p>
<p class="text-sm text-slate-500 dark:text-slate-400 mt-1">4 days ago</p>
</div>
</div>
<div class="flex items-start gap-4 p-5 hover:bg-primary/5 dark:hover:bg-primary/10 cursor-pointer">
<div class="flex items-center justify-center rounded-full bg-primary/10 dark:bg-primary/20 shrink-0 size-12">
<svg class="text-primary" fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"></path></svg>
</div>
<div class="flex-1">
<p class="font-medium text-slate-800 dark:text-slate-200">New exam added</p>
<p class="text-sm text-slate-500 dark:text-slate-400 mt-1">5 days ago</p>
</div>
</div>
</div>
</div>
</div>
</main>
</div>

</body></html>