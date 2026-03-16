<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Overview - EduBridge</title>
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
                
                <!-- Classes -->
                <div class="space-y-1">
                    <a href="/teacher/classes" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined">school</span>
                        <span class="font-medium">Classes</span>
                    </a>
                    <a href="/teacher/classes/students" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <span class="material-symbols-outlined text-sm">groups</span>
                        <span>View Students</span>
                    </a>
                </div>
                
                <!-- Attendance (Active) -->
                <div class="space-y-1">
                    <a href="/teacher/attendance" class="nav-link active flex items-center gap-3 px-4 py-3 rounded-lg">
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
                                <span class="material-symbols-outlined text-primary text-2xl">how_to_reg</span>
                            </div>
                            <div>
                                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Attendance Overview</h1>
                                <p class="text-gray-600 dark:text-gray-400">Monitor and track student attendance across all classes</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <button class="px-4 py-2 text-sm font-semibold text-white bg-primary rounded-lg hover:bg-primary-dark transition-colors flex items-center space-x-2">
                                <span class="material-symbols-outlined text-sm">check_circle</span>
                                <span>Submit Attendance</span>
                            </button>
                            <button class="px-4 py-2 text-sm font-semibold text-white bg-success rounded-lg hover:bg-success/90 transition-colors flex items-center space-x-2">
                                <span class="material-symbols-outlined text-sm">sms</span>
                                <span>WhatsApp Alerts</span>
                            </button>
                        </div>
                    </div>
                </header>
                <!-- Quick Stats -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 animate-slide-up">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Total Students</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">28</p>
                            </div>
                            <div class="bg-primary/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-primary">group</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Present Today</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">24</p>
                            </div>
                            <div class="bg-success/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-success">check_circle</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Absent Today</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">4</p>
                            </div>
                            <div class="bg-danger/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-danger">cancel</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Attendance Rate</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">85.7%</p>
                            </div>
                            <div class="bg-warning/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-warning">trending_up</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Class Selection and Date -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6 mb-6 animate-fade-in">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Class 10A - Science</h2>
                            <p class="text-gray-600 dark:text-gray-400">Date: October 31, 2025</p>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <select class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary">
                                <option value="10a-science">Class 10A - Science</option>
                                <option value="10b-science">Class 10B - Science</option>
                                <option value="11a-science">Class 11A - Science</option>
                            </select>
                            <input type="date" value="2025-10-31" class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        </div>
                    </div>
                </div>

                <!-- Attendance Table -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden animate-fade-in">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-gray-50 dark:bg-gray-700/50">
                                <tr>
                                    <th class="px-6 py-4 text-sm font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Student Name</th>
                                    <th class="px-6 py-4 text-sm font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider">Roll Number</th>
                                    <th class="px-6 py-4 text-sm font-medium text-gray-700 dark:text-gray-300 uppercase tracking-wider text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-white">Liam Harper</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">101</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex justify-center gap-2">
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg bg-success text-white">Present</button>
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg text-gray-600 dark:text-gray-400 hover:bg-danger hover:text-white transition-colors">Absent</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-white">Olivia Bennett</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">102</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex justify-center gap-2">
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg bg-success text-white">Present</button>
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg text-gray-600 dark:text-gray-400 hover:bg-danger hover:text-white transition-colors">Absent</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-white">Noah Carter</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">103</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex justify-center gap-2">
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg text-gray-600 dark:text-gray-400 hover:bg-success hover:text-white transition-colors">Present</button>
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg bg-danger text-white">Absent</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-white">Emma Davis</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">104</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex justify-center gap-2">
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg bg-success text-white">Present</button>
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg text-gray-600 dark:text-gray-400 hover:bg-danger hover:text-white transition-colors">Absent</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-white">Jackson Evans</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">105</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex justify-center gap-2">
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg bg-success text-white">Present</button>
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg text-gray-600 dark:text-gray-400 hover:bg-danger hover:text-white transition-colors">Absent</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-white">Ava Foster</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">106</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex justify-center gap-2">
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg text-gray-600 dark:text-gray-400 hover:bg-success hover:text-white transition-colors">Present</button>
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg bg-danger text-white">Absent</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-white">Lucas Green</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-gray-600 dark:text-gray-400">107</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex justify-center gap-2">
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg bg-success text-white">Present</button>
                                            <button class="px-4 py-2 text-sm font-medium rounded-lg text-gray-600 dark:text-gray-400 hover:bg-danger hover:text-white transition-colors">Absent</button>
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