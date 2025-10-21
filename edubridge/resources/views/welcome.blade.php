<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>School Management System</title>
<link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
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
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-gray-200">
<div class="flex flex-col min-h-screen">
<header class="sticky top-0 z-50 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-sm border-b border-gray-200 dark:border-gray-800">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<div class="flex items-center gap-4">
<div class="text-primary">
<svg class="h-8 w-8" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-lg font-bold text-gray-900 dark:text-white">EduBridge</h2>
</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors" href="#">Home</a>
<a class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors" href="#">Features</a>
<a class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors" href="#">Pricing</a>
<a class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors" href="#">Contact</a>
</nav>
<div class="flex items-center">
<button class="bg-primary text-white text-sm font-bold rounded-lg px-4 py-2 hover:bg-primary/90 transition-colors">
                            Get Started
                        </button>
</div>
</div>
</div>
</header>
<main class="flex-grow">
<section class="relative h-[60vh] min-h-[480px] flex items-center justify-center text-center bg-cover bg-center" style='background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.6) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAe4ID8RSQUZY5X9iekpL6NzM7Z6UJKsK0caK2LK-UftKoNOxRMx4DyTlglkbHnCnIpvKiFgimgFZ6F5VofvRZIl-CoHJs3RVYVtcmLmXd2Im2T3gvb1vVTOc7hNsCVosV9_slsHl_87SnAEQLYozNNCx-GcaUR_PcEsCefHZKl2FiCflsiocX1SbvM5rR68jec6iUhT3pqqUCrpWWK69HS7s9tkDw7GGlufP1e1ehkbVu4lh-aPjkxhuit4hrAzNu05EyOAdeqRnQ");'>
<div class="px-4 sm:px-6 lg:px-8 max-w-4xl">
<h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-tight tracking-tight">
                        Welcome to Our School Management System
                    </h1>
<p class="mt-4 text-lg sm:text-xl text-white/90 max-w-2xl mx-auto">
                        Streamline your school's operations with our comprehensive management platform. Manage students, courses, and staff efficiently.
                    </p>
<button class="mt-8 bg-primary text-white text-base sm:text-lg font-bold rounded-lg px-6 py-3 hover:bg-primary/90 transition-transform transform hover:scale-105">
                        Get Started
                    </button>
</div>
</section>
<section class="py-16 sm:py-24">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center max-w-3xl mx-auto">
<h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white tracking-tight">Key Features</h2>
<p class="mt-4 text-lg text-gray-600 dark:text-gray-400">Our system offers a range of features to simplify school management.</p>
</div>
<div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
<div class="flex flex-col gap-4 bg-white dark:bg-background-dark p-6 rounded-xl border border-gray-200 dark:border-gray-800 hover:shadow-lg hover:border-primary/50 dark:hover:border-primary/50 transition-all">
<div class="flex-shrink-0">
<span class="material-symbols-outlined text-primary text-4xl">groups</span>
</div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">Student Management</h3>
<p class="text-gray-600 dark:text-gray-400">Easily manage student records, attendance, and performance.</p>
</div>
<div class="flex flex-col gap-4 bg-white dark:bg-background-dark p-6 rounded-xl border border-gray-200 dark:border-gray-800 hover:shadow-lg hover:border-primary/50 dark:hover:border-primary/50 transition-all">
<div class="flex-shrink-0">
<span class="material-symbols-outlined text-primary text-4xl">school</span>
</div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">Course Management</h3>
<p class="text-gray-600 dark:text-gray-400">Create and manage courses, assign instructors, and track progress.</p>
</div>
<div class="flex flex-col gap-4 bg-white dark:bg-background-dark p-6 rounded-xl border border-gray-200 dark:border-gray-800 hover:shadow-lg hover:border-primary/50 dark:hover:border-primary/50 transition-all">
<div class="flex-shrink-0">
<span class="material-symbols-outlined text-primary text-4xl">event</span>
</div>
<h3 class="text-xl font-bold text-gray-900 dark:text-white">Scheduling</h3>
<p class="text-gray-600 dark:text-gray-400">Schedule classes, exams, and events with our integrated calendar.</p>
</div>
</div>
</div>
</section>
<section class="bg-white dark:bg-background-dark/50">
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 text-center">
<h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white tracking-tight">Ready to Get Started?</h2>
<p class="mt-4 text-lg text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Sign up today and experience the benefits of our school management system.</p>
<div class="mt-8">
<button class="bg-primary text-white text-base sm:text-lg font-bold rounded-lg px-8 py-3 hover:bg-primary/90 transition-transform transform hover:scale-105">
                            Get Started
                        </button>
</div>
</div>
</section>
</main>
<footer class="bg-background-light dark:bg-background-dark border-t border-gray-200 dark:border-gray-800">
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
<div class="flex flex-col md:flex-row items-center justify-between gap-6">
<div class="flex flex-wrap justify-center gap-x-6 gap-y-2">
<a class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary dark:hover:text-primary transition-colors" href="#">Privacy Policy</a>
<a class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary dark:hover:text-primary transition-colors" href="#">Terms of Service</a>
<a class="text-sm text-gray-600 dark:text-gray-400 hover:text-primary dark:hover:text-primary transition-colors" href="#">Contact Us</a>
</div>
<p class="text-sm text-gray-600 dark:text-gray-400">© 2024 School Management System. All rights reserved.</p>
</div>
</div>
</footer>
</div>

</body></html>