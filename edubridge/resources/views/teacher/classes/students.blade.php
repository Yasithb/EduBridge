<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Students - EduBridge</title>
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
                        "success": "#10b981",
                        "warning": "#f59e0b",
                        "danger": "#ef4444",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.6s ease-in-out',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'bounce-slow': 'bounce 2s infinite',
                        'pulse-slow': 'pulse 3s infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    },
                },
            },
        }
    </script>
    <link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #137fec 0%, #0a5fc7 100%);
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .student-card {
            background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid #e2e8f0;
        }
        
        .dark .student-card {
            background: linear-gradient(145deg, #1e293b 0%, #334155 100%);
            border: 1px solid #475569;
        }
        
        .status-present { @apply bg-green-100 text-green-800 border-green-200; }
        .status-absent { @apply bg-red-100 text-red-800 border-red-200; }
        .status-late { @apply bg-yellow-100 text-yellow-800 border-yellow-200; }
        
        .dark .status-present { @apply bg-green-900 text-green-200 border-green-700; }
        .dark .status-absent { @apply bg-red-900 text-red-200 border-red-700; }
        .dark .status-late { @apply bg-yellow-900 text-yellow-200 border-yellow-700; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-gray-200 min-h-screen">
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header class="gradient-bg shadow-lg border-b border-primary-dark/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center space-x-4">
                        <button onclick="history.back()" class="text-white hover:text-gray-200 transition-colors duration-200">
                            <span class="material-symbols-outlined text-2xl">arrow_back</span>
                        </button>
                        <div>
                            <h1 class="text-xl font-bold text-white">Class Students</h1>
                            <p class="text-sm text-blue-100">Mathematics - Grade 10A</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-lg hover:bg-white/20 transition-all duration-200 flex items-center space-x-2">
                            <span class="material-symbols-outlined">download</span>
                            <span class="hidden sm:inline">Export</span>
                        </button>
                        <button class="bg-secondary text-white px-4 py-2 rounded-lg hover:bg-secondary/90 transition-all duration-200 flex items-center space-x-2">
                            <span class="material-symbols-outlined">person_add</span>
                            <span class="hidden sm:inline">Add Student</span>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8 animate-fade-in">
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Students</p>
                            <p class="text-3xl font-bold text-gray-900 dark:text-white">28</p>
                        </div>
                        <div class="bg-primary/10 p-3 rounded-lg">
                            <span class="material-symbols-outlined text-primary text-2xl">groups</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Present Today</p>
                            <p class="text-3xl font-bold text-green-600">25</p>
                        </div>
                        <div class="bg-green-100 dark:bg-green-900 p-3 rounded-lg">
                            <span class="material-symbols-outlined text-green-600 text-2xl">check_circle</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Absent Today</p>
                            <p class="text-3xl font-bold text-red-600">2</p>
                        </div>
                        <div class="bg-red-100 dark:bg-red-900 p-3 rounded-lg">
                            <span class="material-symbols-outlined text-red-600 text-2xl">cancel</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-600 dark:text-gray-400">Late Today</p>
                            <p class="text-3xl font-bold text-yellow-600">1</p>
                        </div>
                        <div class="bg-yellow-100 dark:bg-yellow-900 p-3 rounded-lg">
                            <span class="material-symbols-outlined text-yellow-600 text-2xl">schedule</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search and Filter Bar -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6 mb-8 animate-slide-up">
                <div class="flex flex-col sm:flex-row gap-4 items-center justify-between">
                    <div class="flex flex-col sm:flex-row gap-4 flex-1">
                        <div class="relative flex-1 max-w-md">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 text-xl">search</span>
                            <input type="text" placeholder="Search students..." class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                        <select class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                            <option>All Students</option>
                            <option>Present</option>
                            <option>Absent</option>
                            <option>Late</option>
                        </select>
                    </div>
                    <div class="flex items-center space-x-2">
                        <button class="p-2 text-gray-500 hover:text-primary transition-colors rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                            <span class="material-symbols-outlined">view_list</span>
                        </button>
                        <button class="p-2 text-primary bg-primary/10 rounded-lg">
                            <span class="material-symbols-outlined">grid_view</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Students Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 animate-slide-up" style="animation-delay: 0.2s;">
                <!-- Student Card 1 -->
                <div class="student-card card-hover rounded-xl p-6 shadow-sm">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=64&h=64&fit=crop&crop=face" alt="Student" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600">
                            <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 dark:text-white">Emma Johnson</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">ID: 2024001</p>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Attendance</span>
                            <span class="status-present px-2 py-1 rounded-full text-xs font-medium border">Present</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Grade Average</span>
                            <span class="text-sm font-semibold text-green-600">92%</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Assignments</span>
                            <span class="text-sm text-gray-900 dark:text-white font-medium">8/10</span>
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-600">
                        <div class="flex items-center justify-between">
                            <button class="flex items-center space-x-1 text-primary hover:text-primary-dark transition-colors">
                                <span class="material-symbols-outlined text-sm">visibility</span>
                                <span class="text-sm font-medium">View Profile</span>
                            </button>
                            <div class="flex items-center space-x-1">
                                <button class="p-1 text-gray-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-sm">edit</span>
                                </button>
                                <button class="p-1 text-gray-400 hover:text-green-600 transition-colors">
                                    <span class="material-symbols-outlined text-sm">message</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student Card 2 -->
                <div class="student-card card-hover rounded-xl p-6 shadow-sm">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=64&h=64&fit=crop&crop=face" alt="Student" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600">
                            <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-green-500 border-2 border-white dark:border-gray-800 rounded-full"></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 dark:text-white">Michael Chen</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">ID: 2024002</p>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Attendance</span>
                            <span class="status-present px-2 py-1 rounded-full text-xs font-medium border">Present</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Grade Average</span>
                            <span class="text-sm font-semibold text-green-600">88%</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Assignments</span>
                            <span class="text-sm text-gray-900 dark:text-white font-medium">7/10</span>
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-600">
                        <div class="flex items-center justify-between">
                            <button class="flex items-center space-x-1 text-primary hover:text-primary-dark transition-colors">
                                <span class="material-symbols-outlined text-sm">visibility</span>
                                <span class="text-sm font-medium">View Profile</span>
                            </button>
                            <div class="flex items-center space-x-1">
                                <button class="p-1 text-gray-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-sm">edit</span>
                                </button>
                                <button class="p-1 text-gray-400 hover:text-green-600 transition-colors">
                                    <span class="material-symbols-outlined text-sm">message</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student Card 3 -->
                <div class="student-card card-hover rounded-xl p-6 shadow-sm">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=64&h=64&fit=crop&crop=face" alt="Student" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600">
                            <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-red-500 border-2 border-white dark:border-gray-800 rounded-full"></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 dark:text-white">Sarah Davis</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">ID: 2024003</p>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Attendance</span>
                            <span class="status-absent px-2 py-1 rounded-full text-xs font-medium border">Absent</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Grade Average</span>
                            <span class="text-sm font-semibold text-yellow-600">76%</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Assignments</span>
                            <span class="text-sm text-gray-900 dark:text-white font-medium">6/10</span>
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-600">
                        <div class="flex items-center justify-between">
                            <button class="flex items-center space-x-1 text-primary hover:text-primary-dark transition-colors">
                                <span class="material-symbols-outlined text-sm">visibility</span>
                                <span class="text-sm font-medium">View Profile</span>
                            </button>
                            <div class="flex items-center space-x-1">
                                <button class="p-1 text-gray-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-sm">edit</span>
                                </button>
                                <button class="p-1 text-gray-400 hover:text-green-600 transition-colors">
                                    <span class="material-symbols-outlined text-sm">message</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student Card 4 -->
                <div class="student-card card-hover rounded-xl p-6 shadow-sm">
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=64&h=64&fit=crop&crop=face" alt="Student" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200 dark:border-gray-600">
                            <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-yellow-500 border-2 border-white dark:border-gray-800 rounded-full"></div>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-900 dark:text-white">David Wilson</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">ID: 2024004</p>
                        </div>
                    </div>
                    
                    <div class="space-y-3">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Attendance</span>
                            <span class="status-late px-2 py-1 rounded-full text-xs font-medium border">Late</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Grade Average</span>
                            <span class="text-sm font-semibold text-green-600">85%</span>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-600 dark:text-gray-400">Assignments</span>
                            <span class="text-sm text-gray-900 dark:text-white font-medium">9/10</span>
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-4 border-t border-gray-200 dark:border-gray-600">
                        <div class="flex items-center justify-between">
                            <button class="flex items-center space-x-1 text-primary hover:text-primary-dark transition-colors">
                                <span class="material-symbols-outlined text-sm">visibility</span>
                                <span class="text-sm font-medium">View Profile</span>
                            </button>
                            <div class="flex items-center space-x-1">
                                <button class="p-1 text-gray-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-sm">edit</span>
                                </button>
                                <button class="p-1 text-gray-400 hover:text-green-600 transition-colors">
                                    <span class="material-symbols-outlined text-sm">message</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="col-span-full flex justify-center mt-8">
                    <button class="bg-primary text-white px-8 py-3 rounded-lg hover:bg-primary-dark transition-all duration-200 flex items-center space-x-2 shadow-sm">
                        <span class="material-symbols-outlined">expand_more</span>
                        <span>Load More Students</span>
                    </button>
                </div>
            </div>
        </main>
    </div>

    <!-- JavaScript for Interactivity -->
    <script>
        // Search functionality
        const searchInput = document.querySelector('input[placeholder="Search students..."]');
        const filterSelect = document.querySelector('select');
        
        searchInput.addEventListener('input', function() {
            // Add search logic here
            console.log('Searching for:', this.value);
        });
        
        filterSelect.addEventListener('change', function() {
            // Add filter logic here
            console.log('Filter changed to:', this.value);
        });
        
        // View toggle functionality
        const listViewBtn = document.querySelector('[data-view="list"]');
        const gridViewBtn = document.querySelector('[data-view="grid"]');
        
        // Add smooth animations on scroll
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
        
        // Observe all student cards
        document.querySelectorAll('.student-card').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>