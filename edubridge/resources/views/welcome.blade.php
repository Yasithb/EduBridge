<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>EduBridge - School Management System</title>
<link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "primary-dark": "#0a5fc7",
                        "secondary": "#f59e0b",
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
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'slide-down': 'slideDown 0.6s ease-out',
                        'bounce-slow': 'bounce 2s infinite',
                        'pulse-slow': 'pulse 3s infinite',
                        'float': 'float 3s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(50px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideDown: {
                            '0%': { opacity: '0', transform: 'translateY(-50px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(19, 127, 236, 0.3)' },
                            '100%': { boxShadow: '0 0 30px rgba(19, 127, 236, 0.6)' },
                        }
                    },
                },
            },
        }
    </script>
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<style>
    .gradient-text {
        background: linear-gradient(135deg, #137fec, #f59e0b);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .hero-gradient {
        background: linear-gradient(135deg, #137fec 0%, #0a5fc7 50%, #f59e0b 100%);
    }
    
    .card-hover {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }
    
    .parallax {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
    @keyframes typewriter {
        from { width: 0; }
        to { width: 100%; }
    }
    
    .typewriter {
        overflow: hidden;
        border-right: 3px solid #137fec;
        white-space: nowrap;
        animation: typewriter 3s steps(40, end), blink-caret 0.75s step-end infinite;
    }
    
    @keyframes blink-caret {
        from, to { border-color: transparent; }
        50% { border-color: #137fec; }
    }
</style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-gray-200 overflow-x-hidden">
<div class="flex flex-col min-h-screen">
<!-- Animated Header -->
<header class="sticky top-0 z-50 bg-background-light/90 dark:bg-background-dark/90 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 animate-slide-down">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-16">
<div class="flex items-center gap-4 animate-fade-in">
<div class="text-primary animate-float">
<svg class="h-8 w-8" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path clip-rule="evenodd" d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z" fill="currentColor" fill-rule="evenodd"></path>
</svg>
</div>
<h2 class="text-lg font-bold gradient-text">EduBridge</h2>
</div>
<nav class="hidden md:flex items-center gap-8">
<a class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-all duration-300 hover:scale-105 relative group" href="#">
    Home
    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
</a>
<a class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-all duration-300 hover:scale-105 relative group" href="#">
    Features
    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
</a>
<a class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-all duration-300 hover:scale-105 relative group" href="#">
    Pricing
    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
</a>
<a class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-all duration-300 hover:scale-105 relative group" href="#">
    Contact
    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all duration-300 group-hover:w-full"></span>
</a>
</nav>
<div class="flex items-center">
<button class="bg-primary text-white text-sm font-bold rounded-lg px-4 py-2 hover:bg-primary-dark transition-all duration-300 transform hover:scale-105 animate-glow">
    Get Started
</button>
</div>
</div>
</div>
</header>
<main class="flex-grow">
<!-- Hero Section with Enhanced Animations -->
<section class="relative h-[70vh] min-h-[600px] flex items-center justify-center text-center overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 hero-gradient opacity-90"></div>
    <div class="absolute inset-0 bg-black opacity-20"></div>
    
    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-white/10 rounded-full animate-float"></div>
    <div class="absolute top-40 right-20 w-16 h-16 bg-secondary/20 rounded-full animate-float" style="animation-delay: 1s;"></div>
    <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-primary/20 rounded-full animate-float" style="animation-delay: 2s;"></div>
    
    <div class="relative z-10 px-4 sm:px-6 lg:px-8 max-w-5xl">
        <div class="animate-fade-in">
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-black text-white leading-tight tracking-tight mb-6">
                Welcome to 
                <span class="block text-secondary typewriter">EduBridge</span>
            </h1>
        </div>
        <div class="animate-slide-up" style="animation-delay: 0.5s;">
            <p class="text-xl sm:text-2xl text-white/90 max-w-3xl mx-auto mb-8 leading-relaxed">
                Transform your educational institution with our cutting-edge school management platform. 
                Streamline operations, enhance communication, and boost productivity.
            </p>
        </div>
        <div class="animate-slide-up flex flex-col sm:flex-row gap-4 justify-center items-center" style="animation-delay: 1s;">
            <button class="bg-secondary text-black text-lg font-bold rounded-full px-8 py-4 hover:bg-secondary/90 transition-all duration-300 transform hover:scale-110 shadow-2xl">
                Start Free Trial
            </button>
            <button class="border-2 border-white text-white text-lg font-bold rounded-full px-8 py-4 hover:bg-white hover:text-gray-900 transition-all duration-300 transform hover:scale-110">
                Watch Demo
            </button>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce-slow">
        <div class="w-1 h-16 bg-white/50 rounded-full"></div>
        <div class="w-1 h-8 bg-white rounded-full animate-pulse-slow"></div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-white dark:bg-background-dark/50 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-primary/5 to-secondary/5"></div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div class="animate-fade-in" style="animation-delay: 0.2s;">
                <div class="text-4xl font-black text-primary mb-2">500+</div>
                <div class="text-gray-600 dark:text-gray-400">Schools</div>
            </div>
            <div class="animate-fade-in" style="animation-delay: 0.4s;">
                <div class="text-4xl font-black text-primary mb-2">50K+</div>
                <div class="text-gray-600 dark:text-gray-400">Students</div>
            </div>
            <div class="animate-fade-in" style="animation-delay: 0.6s;">
                <div class="text-4xl font-black text-primary mb-2">5K+</div>
                <div class="text-gray-600 dark:text-gray-400">Teachers</div>
            </div>
            <div class="animate-fade-in" style="animation-delay: 0.8s;">
                <div class="text-4xl font-black text-primary mb-2">98%</div>
                <div class="text-gray-600 dark:text-gray-400">Satisfaction</div>
            </div>
        </div>
    </div>
</section>
<!-- Enhanced Features Section -->
<section class="py-20 sm:py-32 relative">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center max-w-4xl mx-auto mb-16">
<div class="animate-fade-in">
    <span class="inline-block px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-4">
        ✨ Key Features
    </span>
    <h2 class="text-4xl sm:text-5xl font-black gradient-text tracking-tight mb-6">
        Everything You Need in One Platform
    </h2>
    <p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed">
        Discover powerful tools designed to revolutionize education management
    </p>
</div>
</div>

<div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
    <!-- Feature Card 1 -->
    <div class="card-hover group relative bg-white dark:bg-background-dark p-8 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-lg overflow-hidden animate-slide-up" style="animation-delay: 0.1s;">
        <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-center w-16 h-16 bg-primary/10 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                <span class="material-symbols-outlined text-primary text-3xl">groups</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Student Management</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                Comprehensive student profiles, attendance tracking, grade management, and progress monitoring in one intuitive dashboard.
            </p>
            <a href="#" class="inline-flex items-center text-primary font-semibold group-hover:translate-x-2 transition-transform duration-300">
                Learn More <span class="material-symbols-outlined ml-1">arrow_forward</span>
            </a>
        </div>
    </div>

    <!-- Feature Card 2 -->
    <div class="card-hover group relative bg-white dark:bg-background-dark p-8 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-lg overflow-hidden animate-slide-up" style="animation-delay: 0.2s;">
        <div class="absolute inset-0 bg-gradient-to-br from-secondary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-center w-16 h-16 bg-secondary/10 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                <span class="material-symbols-outlined text-secondary text-3xl">school</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Course Management</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                Create, organize, and manage courses with ease. Assign instructors, track curriculum progress, and generate reports.
            </p>
            <a href="#" class="inline-flex items-center text-secondary font-semibold group-hover:translate-x-2 transition-transform duration-300">
                Learn More <span class="material-symbols-outlined ml-1">arrow_forward</span>
            </a>
        </div>
    </div>

    <!-- Feature Card 3 -->
    <div class="card-hover group relative bg-white dark:bg-background-dark p-8 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-lg overflow-hidden animate-slide-up" style="animation-delay: 0.3s;">
        <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-center w-16 h-16 bg-primary/10 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                <span class="material-symbols-outlined text-primary text-3xl">event</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Smart Scheduling</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                AI-powered scheduling system for classes, exams, and events. Avoid conflicts and optimize resource allocation.
            </p>
            <a href="#" class="inline-flex items-center text-primary font-semibold group-hover:translate-x-2 transition-transform duration-300">
                Learn More <span class="material-symbols-outlined ml-1">arrow_forward</span>
            </a>
        </div>
    </div>

    <!-- Feature Card 4 -->
    <div class="card-hover group relative bg-white dark:bg-background-dark p-8 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-lg overflow-hidden animate-slide-up" style="animation-delay: 0.4s;">
        <div class="absolute inset-0 bg-gradient-to-br from-secondary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-center w-16 h-16 bg-secondary/10 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                <span class="material-symbols-outlined text-secondary text-3xl">analytics</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Analytics & Reports</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                Gain insights with comprehensive analytics, automated reports, and data visualization tools.
            </p>
            <a href="#" class="inline-flex items-center text-secondary font-semibold group-hover:translate-x-2 transition-transform duration-300">
                Learn More <span class="material-symbols-outlined ml-1">arrow_forward</span>
            </a>
        </div>
    </div>

    <!-- Feature Card 5 -->
    <div class="card-hover group relative bg-white dark:bg-background-dark p-8 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-lg overflow-hidden animate-slide-up" style="animation-delay: 0.5s;">
        <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-center w-16 h-16 bg-primary/10 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                <span class="material-symbols-outlined text-primary text-3xl">message</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Communication Hub</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                Seamless communication between teachers, students, and parents through integrated messaging and notifications.
            </p>
            <a href="#" class="inline-flex items-center text-primary font-semibold group-hover:translate-x-2 transition-transform duration-300">
                Learn More <span class="material-symbols-outlined ml-1">arrow_forward</span>
            </a>
        </div>
    </div>

    <!-- Feature Card 6 -->
    <div class="card-hover group relative bg-white dark:bg-background-dark p-8 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-lg overflow-hidden animate-slide-up" style="animation-delay: 0.6s;">
        <div class="absolute inset-0 bg-gradient-to-br from-secondary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div class="relative z-10">
            <div class="flex items-center justify-center w-16 h-16 bg-secondary/10 rounded-2xl mb-6 group-hover:scale-110 transition-transform duration-300">
                <span class="material-symbols-outlined text-secondary text-3xl">security</span>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">Security & Privacy</h3>
            <p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                Enterprise-grade security with role-based access control, data encryption, and compliance management.
            </p>
            <a href="#" class="inline-flex items-center text-secondary font-semibold group-hover:translate-x-2 transition-transform duration-300">
                Learn More <span class="material-symbols-outlined ml-1">arrow_forward</span>
            </a>
        </div>
    </div>
</div>
</div>
</section>
<!-- Call-to-Action Section with Enhanced Design -->
<section class="relative py-20 sm:py-32 overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0 hero-gradient"></div>
    <div class="absolute inset-0 bg-black/20"></div>
    
    <!-- Floating Elements -->
    <div class="absolute top-10 left-10 w-24 h-24 bg-white/10 rounded-full animate-float"></div>
    <div class="absolute bottom-10 right-10 w-32 h-32 bg-secondary/10 rounded-full animate-float" style="animation-delay: 1.5s;"></div>
    <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white/5 rounded-full animate-float" style="animation-delay: 0.8s;"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            <div class="animate-fade-in">
                <h2 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight mb-6">
                    Ready to Transform Your School?
                </h2>
                <p class="text-xl sm:text-2xl text-white/90 max-w-3xl mx-auto mb-10 leading-relaxed">
                    Join thousands of educational institutions worldwide who trust EduBridge to streamline their operations and enhance learning outcomes.
                </p>
            </div>
            
            <div class="animate-slide-up flex flex-col sm:flex-row gap-6 justify-center items-center mb-12" style="animation-delay: 0.3s;">
                <button class="bg-secondary text-black text-xl font-bold rounded-full px-10 py-5 hover:bg-secondary/90 transition-all duration-300 transform hover:scale-110 shadow-2xl animate-glow">
                    🚀 Start Your Free Trial
                </button>
                <button class="border-2 border-white text-white text-xl font-bold rounded-full px-10 py-5 hover:bg-white hover:text-gray-900 transition-all duration-300 transform hover:scale-110">
                    📞 Schedule Demo
                </button>
            </div>
            
            <div class="animate-fade-in grid grid-cols-1 sm:grid-cols-3 gap-8 text-white/80" style="animation-delay: 0.6s;">
                <div class="flex items-center justify-center gap-3">
                    <span class="material-symbols-outlined text-secondary text-2xl">check_circle</span>
                    <span class="text-lg">No Setup Fees</span>
                </div>
                <div class="flex items-center justify-center gap-3">
                    <span class="material-symbols-outlined text-secondary text-2xl">support_agent</span>
                    <span class="text-lg">24/7 Support</span>
                </div>
                <div class="flex items-center justify-center gap-3">
                    <span class="material-symbols-outlined text-secondary text-2xl">cancel</span>
                    <span class="text-lg">Cancel Anytime</span>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<!-- Enhanced Footer -->
<footer class="bg-gray-900 dark:bg-black text-white relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-primary/10 to-secondary/10"></div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 relative z-10">
        <!-- Footer Content -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <!-- Brand Section -->
            <div class="animate-fade-in">
                <div class="flex items-center gap-3 mb-4">
                    <div class="text-primary animate-float">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" d="M39.475 21.6262C40.358 21.4363 40.6863 21.5589 40.7581 21.5934C40.7876 21.655 40.8547 21.857 40.8082 22.3336C40.7408 23.0255 40.4502 24.0046 39.8572 25.2301C38.6799 27.6631 36.5085 30.6631 33.5858 33.5858C30.6631 36.5085 27.6632 38.6799 25.2301 39.8572C24.0046 40.4502 23.0255 40.7407 22.3336 40.8082C21.8571 40.8547 21.6551 40.7875 21.5934 40.7581C21.5589 40.6863 21.4363 40.358 21.6262 39.475C21.8562 38.4054 22.4689 36.9657 23.5038 35.2817C24.7575 33.2417 26.5497 30.9744 28.7621 28.762C30.9744 26.5497 33.2417 24.7574 35.2817 23.5037C36.9657 22.4689 38.4054 21.8562 39.475 21.6262ZM4.41189 29.2403L18.7597 43.5881C19.8813 44.7097 21.4027 44.9179 22.7217 44.7893C24.0585 44.659 25.5148 44.1631 26.9723 43.4579C29.9052 42.0387 33.2618 39.5667 36.4142 36.4142C39.5667 33.2618 42.0387 29.9052 43.4579 26.9723C44.1631 25.5148 44.659 24.0585 44.7893 22.7217C44.9179 21.4027 44.7097 19.8813 43.5881 18.7597L29.2403 4.41187C27.8527 3.02428 25.8765 3.02573 24.2861 3.36776C22.6081 3.72863 20.7334 4.58419 18.8396 5.74801C16.4978 7.18716 13.9881 9.18353 11.5858 11.5858C9.18354 13.988 7.18717 16.4978 5.74802 18.8396C4.58421 20.7334 3.72865 22.6081 3.36778 24.2861C3.02574 25.8765 3.02429 27.8527 4.41189 29.2403Z" fill="currentColor" fill-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold gradient-text">EduBridge</h3>
                </div>
                <p class="text-gray-300 mb-4 leading-relaxed">
                    Transforming education through innovative technology and seamless management solutions.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="animate-fade-in" style="animation-delay: 0.1s;">
                <h4 class="text-lg font-semibold mb-4 text-secondary">Quick Links</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-1 inline-block">Home</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-1 inline-block">Features</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-1 inline-block">Pricing</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-1 inline-block">About Us</a></li>
                </ul>
            </div>
            
            <!-- Support -->
            <div class="animate-fade-in" style="animation-delay: 0.2s;">
                <h4 class="text-lg font-semibold mb-4 text-secondary">Support</h4>
                <ul class="space-y-3">
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-1 inline-block">Help Center</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-1 inline-block">Documentation</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-1 inline-block">Contact Us</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white transition-colors duration-300 hover:translate-x-1 inline-block">Community</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div class="animate-fade-in" style="animation-delay: 0.3s;">
                <h4 class="text-lg font-semibold mb-4 text-secondary">Contact</h4>
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">email</span>
                        <span class="text-gray-300">hello@edubridge.com</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">phone</span>
                        <span class="text-gray-300">+1 (555) 123-4567</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">location_on</span>
                        <span class="text-gray-300">123 Education St, Tech City</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Section -->
        <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex flex-wrap justify-center gap-x-8 gap-y-2">
                <a class="text-sm text-gray-400 hover:text-primary transition-colors duration-300" href="#">Privacy Policy</a>
                <a class="text-sm text-gray-400 hover:text-primary transition-colors duration-300" href="#">Terms of Service</a>
                <a class="text-sm text-gray-400 hover:text-primary transition-colors duration-300" href="#">Cookie Policy</a>
                <a class="text-sm text-gray-400 hover:text-primary transition-colors duration-300" href="/login">Login</a>
            </div>
            <p class="text-sm text-gray-400">© 2025 EduBridge. All rights reserved. Made with ❤️ for education.</p>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button -->
<button id="scrollToTop" class="fixed bottom-8 right-8 bg-primary text-white p-3 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-primary-dark hover:scale-110 z-50">
    <span class="material-symbols-outlined">keyboard_arrow_up</span>
</button>

<!-- JavaScript for Animations and Interactions -->
<script>
    // Scroll to top functionality
    const scrollToTopBtn = document.getElementById('scrollToTop');
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.remove('opacity-0', 'invisible');
            scrollToTopBtn.classList.add('opacity-100', 'visible');
        } else {
            scrollToTopBtn.classList.add('opacity-0', 'invisible');
            scrollToTopBtn.classList.remove('opacity-100', 'visible');
        }
    });
    
    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, observerOptions);
    
    // Observe all elements with animation classes
    document.querySelectorAll('.card-hover, .animate-slide-up').forEach(el => {
        observer.observe(el);
    });
    
    // Add smooth scrolling to all anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
</div>

</body></html>