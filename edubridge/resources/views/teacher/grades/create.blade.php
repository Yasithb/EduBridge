<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create/Edit Grades - EduBridge</title>
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
                
                <!-- Grades (Active) -->
                <div class="space-y-1">
                    <a href="/teacher/grades" class="nav-link active flex items-center gap-3 px-4 py-3 rounded-lg">
                        <span class="material-symbols-outlined">grade</span>
                        <span class="font-medium">Grades</span>
                    </a>
                    <a href="/teacher/grades/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-blue-100 bg-primary/20">
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
                                <span class="material-symbols-outlined text-primary text-2xl">grade</span>
                            </div>
                            <div>
                                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Student Performance</h1>
                                <p class="text-gray-600 dark:text-gray-400">Manage and update student marks for various subjects and exams</p>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Quick Stats -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 animate-slide-up">
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Total Students</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">124</p>
                            </div>
                            <div class="bg-primary/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-primary">group</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Grades Updated</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">89</p>
                            </div>
                            <div class="bg-success/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-success">task_alt</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Average Score</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">87.5%</p>
                            </div>
                            <div class="bg-warning/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-warning">trending_up</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 dark:text-gray-400 text-sm">Pending Reviews</p>
                                <p class="text-2xl font-bold text-gray-900 dark:text-white">12</p>
                            </div>
                            <div class="bg-danger/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-danger">pending</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grade Entry Form -->
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 p-6 animate-fade-in">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-6">Grade Entry</h2>
                    
                    <!-- Student Selection -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="student-select" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Student Name</label>
                            <select id="student-select" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary">
                                <option value="">Select a student...</option>
                                <option value="john-doe">John Doe</option>
                                <option value="jane-smith">Jane Smith</option>
                                <option value="samuel-green">Samuel Green</option>
                                <option value="emma-wilson">Emma Wilson</option>
                                <option value="michael-brown">Michael Brown</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="course-select" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Course</label>
                            <select id="course-select" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary">
                                <option value="">Select a course...</option>
                                <option value="mathematics">Mathematics</option>
                                <option value="science">Science</option>
                                <option value="english">English</option>
                                <option value="history">History</option>
                                <option value="art">Art</option>
                            </select>
                        </div>
                    </div>

                    <!-- Grades Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 dark:text-gray-300 uppercase bg-gray-50 dark:bg-gray-700/50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Subject</th>
                                    <th scope="col" class="px-6 py-3 text-center">Assignment 1</th>
                                    <th scope="col" class="px-6 py-3 text-center">Assignment 2</th>
                                    <th scope="col" class="px-6 py-3 text-center">Midterm</th>
                                    <th scope="col" class="px-6 py-3 text-center">Final Exam</th>
                                    <th scope="col" class="px-6 py-3 text-center">Total</th>
                                    <th scope="col" class="px-6 py-3 text-center">Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white dark:bg-gray-800 border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">Mathematics</th>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="85">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="90">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="88">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="92">
                                    </td>
                                    <td class="px-6 py-4 text-center font-semibold text-gray-800 dark:text-gray-200">355</td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="bg-success text-white px-2 py-1 rounded-full text-xs font-bold">A</span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800 border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">Science</th>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="78">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="82">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="80">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="85">
                                    </td>
                                    <td class="px-6 py-4 text-center font-semibold text-gray-800 dark:text-gray-200">325</td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="bg-warning text-white px-2 py-1 rounded-full text-xs font-bold">B+</span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800 border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">English</th>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="92">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="95">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="94">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="98">
                                    </td>
                                    <td class="px-6 py-4 text-center font-semibold text-gray-800 dark:text-gray-200">379</td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="bg-success text-white px-2 py-1 rounded-full text-xs font-bold">A+</span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800 border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">History</th>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="88">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="90">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="87">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="92">
                                    </td>
                                    <td class="px-6 py-4 text-center font-semibold text-gray-800 dark:text-gray-200">357</td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="bg-success text-white px-2 py-1 rounded-full text-xs font-bold">A</span>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">Art</th>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="90">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="92">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="91">
                                    </td>
                                    <td class="px-6 py-4">
                                        <input type="number" min="0" max="100" class="w-20 text-center px-2 py-1 border border-gray-300 dark:border-gray-600 rounded bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary/20 focus:border-primary" value="95">
                                    </td>
                                    <td class="px-6 py-4 text-center font-semibold text-gray-800 dark:text-gray-200">368</td>
                                    <td class="px-6 py-4 text-center">
                                        <span class="bg-success text-white px-2 py-1 rounded-full text-xs font-bold">A+</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-end gap-4 mt-6">
                        <button class="px-6 py-2 text-sm font-semibold text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors">
                            Cancel
                        </button>
                        <button class="px-6 py-2 text-sm font-semibold text-white bg-primary rounded-lg hover:bg-primary-dark transition-colors">
                            Save Grades
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>