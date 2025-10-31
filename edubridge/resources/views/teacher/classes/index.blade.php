<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes Overview - EduBridge</title>
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
        
        .nav-link {
            transition: all 0.2s ease;
        }
        
        .nav-link:hover {
            transform: translateX(4px);
        }
        
        .nav-link.active {
            background: linear-gradient(135deg, #137fec 0%, #0a5fc7 100%);
            color: white;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-gray-200 min-h-screen">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-gray-800 shadow-lg border-r border-gray-200 dark:border-gray-700 hidden lg:flex flex-col">
            <div class="gradient-bg h-16 flex items-center px-6">
                <h1 class="text-xl font-bold text-white">EduBridge Teacher</h1>
            </div>
            
            <nav class="flex-1 px-4 py-6 space-y-2">
                <!-- Dashboard -->
                <a href="/teacher/dashboard" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="font-medium">Dashboard</span>
                </a>
                
                <!-- Classes (Active) -->
                <div class="space-y-1">
                    <a href="/teacher/classes" class="nav-link active flex items-center gap-3 px-4 py-3 rounded-lg">
                        <span class="material-symbols-outlined">school</span>
                        <span class="font-medium">Classes</span>
                    </a>
                    <a href="/teacher/classes/students" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined text-sm">groups</span>
                        <span>View Students</span>
                    </a>
                </div>
                
                <!-- Attendance -->
                <div class="space-y-1">
                    <a href="/teacher/attendance" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined">how_to_reg</span>
                        <span class="font-medium">Attendance</span>
                    </a>
                    <a href="/teacher/attendance/mark" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined text-sm">check_circle</span>
                        <span>Mark Attendance</span>
                    </a>
                </div>
                
                <!-- Grades -->
                <div class="space-y-1">
                    <a href="/teacher/grades" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined">grade</span>
                        <span class="font-medium">Grades</span>
                    </a>
                    <a href="/teacher/grades/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined text-sm">add_circle</span>
                        <span>Create/Edit Grades</span>
                    </a>
                </div>
                
                <!-- Homework -->
                <div class="space-y-1">
                    <a href="/teacher/homework" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined">assignment</span>
                        <span class="font-medium">Homework</span>
                    </a>
                    <a href="/teacher/homework/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined text-sm">add_task</span>
                        <span>Create Assignment</span>
                    </a>
                </div>
                
                <!-- Messages -->
                <div class="space-y-1">
                    <a href="/teacher/messages" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined">message</span>
                        <span class="font-medium">Messages</span>
                    </a>
                    <a href="/teacher/messages/chat" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined text-sm">chat</span>
                        <span>Chat</span>
                    </a>
                </div>
                
                <!-- Reports -->
                <div class="space-y-1">
                    <a href="/teacher/reports" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined">analytics</span>
                        <span class="font-medium">Reports</span>
                    </a>
                    <a href="/teacher/reports/generate" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined text-sm">bar_chart</span>
                        <span>Generate Report</span>
                    </a>
                </div>
                
                <!-- Announcements -->
                <div class="space-y-1">
                    <a href="/teacher/announcements" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined">campaign</span>
                        <span class="font-medium">Announcements</span>
                    </a>
                    <a href="/teacher/announcements/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined text-sm">add_box</span>
                        <span>Create Announcement</span>
                    </a>
                </div>
                
                <!-- Settings -->
                <a href="/teacher/settings" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                    <span class="material-symbols-outlined">settings</span>
                    <span class="font-medium">Settings</span>
                </a>
            </nav>
            
            <!-- User Profile Section -->
            <div class="p-4 border-t border-gray-200 dark:border-gray-700">
                <div class="flex items-center space-x-3">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=40&h=40&fit=crop&crop=face" alt="Teacher" class="w-10 h-10 rounded-full object-cover">
                    <div>
                        <p class="text-sm font-medium text-gray-900 dark:text-white">John Doe</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Mathematics Teacher</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 sm:p-8 md:p-10">
            <div class="max-w-6xl mx-auto">
                <!-- Header -->
                <header class="mb-8 animate-fade-in">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-4">
                            <div class="bg-primary/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-primary text-2xl">school</span>
                            </div>
                            <div>
                                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">My Classes</h1>
                                <p class="text-gray-600 dark:text-gray-400">Manage your classes and view student details</p>
                            </div>
                        </div>
                        <button class="px-6 py-2 text-sm font-semibold text-white bg-primary rounded-lg hover:bg-primary-dark transition-colors flex items-center space-x-2">
                            <span class="material-symbols-outlined">add</span>
                            <span>Create New Class</span>
                        </button>
                    </div>
                </header>
                <!-- Quick Stats -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 animate-slide-up">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Total Classes</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">5</p>
                            </div>
                            <div class="bg-primary/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-primary">school</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Total Students</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">137</p>
                            </div>
                            <div class="bg-success/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-success">groups</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Active Assignments</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">12</p>
                            </div>
                            <div class="bg-warning/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-warning">assignment</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Avg Attendance</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">89%</p>
                            </div>
                            <div class="bg-danger/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-danger">trending_up</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Classes Table -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden animate-fade-in">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-gray-50 dark:bg-gray-700/50">
                                <tr>
                                    <th class="px-6 py-4 text-sm font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Class Name</th>
                                    <th class="px-6 py-4 text-sm font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Subject</th>
                                    <th class="px-6 py-4 text-sm font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Grade Level</th>
                                    <th class="px-6 py-4 text-sm font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider text-center">Students</th>
                                    <th class="px-6 py-4 text-sm font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <div class="h-10 w-10 rounded-lg bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center">
                                                    <span class="material-symbols-outlined text-blue-600 dark:text-blue-400">calculate</span>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">Mathematics 101</div>
                                                <div class="text-sm text-gray-500 dark:text-gray-400">Room 204</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">Algebra</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">10th Grade</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/50 dark:text-green-300">
                                            28 students
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <div class="flex items-center justify-center space-x-2">
                                            <a href="/teacher/classes/students" class="text-primary hover:text-primary-dark text-sm font-medium">View Students</a>
                                            <span class="text-gray-300">|</span>
                                            <button class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                                <span class="material-symbols-outlined text-sm">more_vert</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <div class="h-10 w-10 rounded-lg bg-purple-100 dark:bg-purple-900/50 flex items-center justify-center">
                                                    <span class="material-symbols-outlined text-purple-600 dark:text-purple-400">book</span>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">English Literature</div>
                                                <div class="text-sm text-gray-500 dark:text-gray-400">Room 301</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">Classic Novels</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">11th Grade</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/50 dark:text-green-300">
                                            25 students
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <div class="flex items-center justify-center space-x-2">
                                            <a href="/teacher/classes/students" class="text-primary hover:text-primary-dark text-sm font-medium">View Students</a>
                                            <span class="text-gray-300">|</span>
                                            <button class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                                <span class="material-symbols-outlined text-sm">more_vert</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <div class="h-10 w-10 rounded-lg bg-green-100 dark:bg-green-900/50 flex items-center justify-center">
                                                    <span class="material-symbols-outlined text-green-600 dark:text-green-400">science</span>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">Science Fundamentals</div>
                                                <div class="text-sm text-gray-500 dark:text-gray-400">Lab 102</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">Biology</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">9th Grade</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/50 dark:text-green-300">
                                            32 students
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <div class="flex items-center justify-center space-x-2">
                                            <a href="/teacher/classes/students" class="text-primary hover:text-primary-dark text-sm font-medium">View Students</a>
                                            <span class="text-gray-300">|</span>
                                            <button class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                                <span class="material-symbols-outlined text-sm">more_vert</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <div class="h-10 w-10 rounded-lg bg-yellow-100 dark:bg-yellow-900/50 flex items-center justify-center">
                                                    <span class="material-symbols-outlined text-yellow-600 dark:text-yellow-400">history_edu</span>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">History of Civilization</div>
                                                <div class="text-sm text-gray-500 dark:text-gray-400">Room 105</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">World History</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">10th Grade</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/50 dark:text-green-300">
                                            30 students
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <div class="flex items-center justify-center space-x-2">
                                            <a href="/teacher/classes/students" class="text-primary hover:text-primary-dark text-sm font-medium">View Students</a>
                                            <span class="text-gray-300">|</span>
                                            <button class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                                <span class="material-symbols-outlined text-sm">more_vert</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <div class="h-10 w-10 rounded-lg bg-red-100 dark:bg-red-900/50 flex items-center justify-center">
                                                    <span class="material-symbols-outlined text-red-600 dark:text-red-400">computer</span>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900 dark:text-white">Computer Science Basics</div>
                                                <div class="text-sm text-gray-500 dark:text-gray-400">Computer Lab</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">Programming</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">12th Grade</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900/50 dark:text-green-300">
                                            22 students
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <div class="flex items-center justify-center space-x-2">
                                            <a href="/teacher/classes/students" class="text-primary hover:text-primary-dark text-sm font-medium">View Students</a>
                                            <span class="text-gray-300">|</span>
                                            <button class="text-gray-400 hover:text-gray-600 dark:hover:text-gray-300">
                                                <span class="material-symbols-outlined text-sm">more_vert</span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>