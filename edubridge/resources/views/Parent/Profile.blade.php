<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Profile &amp; Settings</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                        "foreground-light": "#111827",
                        "foreground-dark": "#f9fafb",
                        "subtle-light": "#6b7280",
                        "subtle-dark": "#9ca3af",
                        "surface-light": "#ffffff",
                        "surface-dark": "#1f2937",
                        "border-light": "#e5e7eb",
                        "border-dark": "#374151"
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
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
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-foreground-light dark:text-foreground-dark">
<div class="flex min-h-screen">
<aside class="w-64 bg-surface-light dark:bg-surface-dark flex flex-col border-r border-border-light dark:border-border-dark">
<div class="p-6 flex items-center gap-4">
<img alt="User Avatar" class="w-10 h-10 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxsqEvBYjg0eA3AtACY8qzaeTAtNd75D2DRsSGnk0rk7x26-JKNB1mQhEyFOaj6oAw_iRl3f3LYLpGxfs-JOTtjhHFgy0h-rK_bc1SCaTcH5UX4-214Qm2_BWIYdSnF5Et_ujQNfeDjrl5ahU5qUtKS4EOPZvRRaFkJJeLJvJtQBcKDwVnIuKatAXKcvYqwPcS56TLCMrCeMq8ChmgwuXddJBErg9NQRg9M6YzXc6lFh8JK7hY5lBywkmVueyiEJ6y129gvz8z_zM"/>
<div>
<h1 class="font-bold text-base">Sophia Clark</h1>
<p class="text-sm text-subtle-light dark:text-subtle-dark">Parent</p>
</div>
</div>
<nav class="flex-grow px-4">
<ul>
<li>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-subtle-light dark:text-subtle-dark hover:bg-primary/10 hover:text-primary" href="{{ route('parent.dashboard') }}">
<span class="material-symbols-outlined">dashboard</span>
<span>Dashboard</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg bg-primary/10 text-primary font-semibold" href="{{ route('parent.profile') }}">
<span class="material-symbols-outlined">group</span>
<span>Students</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-subtle-light dark:text-subtle-dark hover:bg-primary/10 hover:text-primary" href="{{ route('parent.tracker') }}">
<span class="material-symbols-outlined">calendar_today</span>
<span>Attendance</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-subtle-light dark:text-subtle-dark hover:bg-primary/10 hover:text-primary" href="{{ route('parent.messages') }}">
<span class="material-symbols-outlined">chat</span>
<span>Messages</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-subtle-light dark:text-subtle-dark hover:bg-primary/10 hover:text-primary" href="{{ route('parent.profile') }}">
<span class="material-symbols-outlined">payment</span>
<span>Payments</span>
</a>
</li>
</ul>
</nav>
<div class="p-4">
<a class="flex items-center gap-3 px-4 py-2 rounded-lg text-subtle-light dark:text-subtle-dark hover:bg-primary/10 hover:text-primary" href="{{ route('login') }}">
<span class="material-symbols-outlined">logout</span>
<span>Logout</span>
</a>
</div>
</aside>
<main class="flex-1 p-8">
<div class="max-w-4xl mx-auto">
<header class="mb-8">
<h1 class="text-3xl font-bold tracking-tight">Profile &amp; Settings</h1>
<p class="text-subtle-light dark:text-subtle-dark mt-1">Update your contact information and child details.</p>
</header>
<div class="bg-surface-light dark:bg-surface-dark p-8 rounded-xl shadow-sm border border-border-light dark:border-border-dark">
<div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
<div class="col-span-full">
<h2 class="text-lg font-semibold border-b border-border-light dark:border-border-dark pb-3 mb-6">Contact Information</h2>
</div>
<div>
<label class="block text-sm font-medium mb-2" for="fullName">Full Name</label>
<input class="w-full h-12 px-4 rounded-lg bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-primary focus:border-primary" id="fullName" type="text" value="Sophia Clark"/>
</div>
<div>
<label class="block text-sm font-medium mb-2" for="email">Email Address</label>
<input class="w-full h-12 px-4 rounded-lg bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-primary focus:border-primary" id="email" type="email" value="sophia.clark@example.com"/>
</div>
<div>
<label class="block text-sm font-medium mb-2" for="phoneNumber">Phone Number</label>
<input class="w-full h-12 px-4 rounded-lg bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-primary focus:border-primary" id="phoneNumber" type="tel" value="+1 (555) 123-4567"/>
</div>
<div>
<label class="block text-sm font-medium mb-2" for="whatsapp">WhatsApp Number</label>
<input class="w-full h-12 px-4 rounded-lg bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-primary focus:border-primary" id="whatsapp" type="tel" value="+1 (555) 123-4567"/>
</div>
<div class="col-span-full mt-8">
<h2 class="text-lg font-semibold border-b border-border-light dark:border-border-dark pb-3 mb-6">Child Details</h2>
</div>
<div>
<label class="block text-sm font-medium mb-2" for="childName">Child's Name</label>
<input class="w-full h-12 px-4 rounded-lg bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-primary focus:border-primary" id="childName" type="text" value="Liam Clark"/>
</div>
<div>
<label class="block text-sm font-medium mb-2" for="childGrade">Child's Grade</label>
<input class="w-full h-12 px-4 rounded-lg bg-background-light dark:bg-background-dark border border-border-light dark:border-border-dark focus:ring-primary focus:border-primary" id="childGrade" type="text" value="Grade 5"/>
</div>
</div>
<div class="mt-8 pt-6 border-t border-border-light dark:border-border-dark flex justify-end">
<button class="bg-primary text-white font-bold py-3 px-6 rounded-lg hover:bg-opacity-90 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-surface-light dark:focus:ring-offset-surface-dark">
                            Update Profile
                        </button>
</div>
</div>
</div>
</main>
</div>

</body></html>