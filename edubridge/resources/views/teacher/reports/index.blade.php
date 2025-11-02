<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - EduBridge Teacher Portal</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#137fec',
                        'primary-dark': '#0a5fc7',
                    }
                }
            }
        }
    </script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #137fec 0%, #0a5fc7 100%);
        }
        
        .sidebar {
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
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
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        
        .report-card {
            background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid #e2e8f0;
        }

        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Mobile Menu Button -->
    <div class="md:hidden bg-white p-4 border-b">
        <button id="mobile-menu-btn" class="text-gray-600 hover:text-primary">
            <i class="material-icons text-2xl">menu</i>
        </button>
    </div>

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar fixed md:relative z-30 w-64 bg-white h-full overflow-y-auto">
            <div class="gradient-bg h-16 flex items-center px-6">
                <h1 class="text-xl font-bold text-white">EduBridge Teacher</h1>
            </div>
            
            <nav class="p-4 space-y-2">
                <!-- Dashboard -->
                <a href="/teacher/dashboard" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                    <i class="material-icons text-xl">dashboard</i>
                    <span>Dashboard</span>
                </a>

                <!-- Classes -->
                <div>
                    <a href="/teacher/classes" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <i class="material-icons text-xl">class</i>
                        <span>Classes</span>
                    </a>
                    <a href="/teacher/classes/students" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <i class="material-icons text-lg">people</i>
                        <span>Students</span>
                    </a>
                </div>

                <!-- Attendance -->
                <div>
                    <a href="/teacher/attendance" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <i class="material-icons text-xl">fact_check</i>
                        <span>Attendance</span>
                    </a>
                    <a href="/teacher/attendance/mark" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <i class="material-icons text-lg">edit</i>
                        <span>Mark Attendance</span>
                    </a>
                </div>

                <!-- Grades -->
                <div>
                    <a href="/teacher/grades" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <i class="material-icons text-xl">grade</i>
                        <span>Grades</span>
                    </a>
                    <a href="/teacher/grades/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <i class="material-icons text-lg">add</i>
                        <span>Create Grades</span>
                    </a>
                </div>

                <!-- Homework -->
                <div>
                    <a href="/teacher/homework" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <i class="material-icons text-xl">assignment</i>
                        <span>Homework</span>
                    </a>
                    <a href="/teacher/homework/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <i class="material-icons text-lg">add</i>
                        <span>Create Homework</span>
                    </a>
                </div>

                <!-- Messages -->
                <div>
                    <a href="/teacher/messages" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <i class="material-icons text-xl">message</i>
                        <span>Messages</span>
                    </a>
                    <a href="/teacher/messages/chat" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <i class="material-icons text-lg">chat</i>
                        <span>Chat</span>
                    </a>
                </div>

                <!-- Reports -->
                <div>
                    <a href="/teacher/reports" class="nav-link active flex items-center gap-3 px-4 py-3 rounded-lg">
                        <i class="material-icons text-xl">assessment</i>
                        <span>Reports</span>
                    </a>
                    <a href="/teacher/reports/generate" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <i class="material-icons text-lg">description</i>
                        <span>Generate Reports</span>
                    </a>
                </div>

                <!-- Announcements -->
                <div>
                    <a href="/teacher/announcements" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <i class="material-icons text-xl">campaign</i>
                        <span>Announcements</span>
                    </a>
                    <a href="/teacher/announcements/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20">
                        <i class="material-icons text-lg">add</i>
                        <span>Create Announcement</span>
                    </a>
                </div>

                <!-- Settings -->
                <a href="/teacher/settings" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
                    <i class="material-icons text-xl">settings</i>
                    <span>Settings</span>
                </a>
            </nav>

            <!-- User Profile -->
            <div class="absolute bottom-4 left-4 right-4">
                <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-lg">
                    <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center">
                        <span class="text-white text-sm font-bold">JD</span>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate">John Doe</p>
                        <p class="text-xs text-gray-500 truncate">Mathematics Teacher</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 sm:p-8 md:p-10">
            <div class="max-w-7xl mx-auto">
                <!-- Header -->
                <header class="mb-8 animate-fade-in">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-4">
                            <div class="bg-primary/10 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-primary text-2xl">analytics</span>
                            </div>
                            <div>
                                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Reports & Analytics</h1>
                                <p class="text-gray-600 dark:text-gray-400">Track student performance and class analytics</p>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <button class="bg-white dark:bg-gray-800 text-gray-700 dark:text-gray-300 px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors flex items-center gap-2">
                                <span class="material-symbols-outlined">file_download</span>
                                Export
                            </button>
                            <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition-colors flex items-center gap-2">
                                <span class="material-symbols-outlined">add_chart</span>
                                Generate Report
                            </button>
                        </div>
                    </div>
                </header>

                <!-- Quick Stats -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 animate-slide-up">
                    <div class="report-card card-hover rounded-xl p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-blue-600 text-xl">groups</span>
                            </div>
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">125</span>
                        </div>
                        <h3 class="text-sm font-medium text-gray-600 dark:text-gray-400">Total Students</h3>
                        <p class="text-xs text-green-600 mt-1">+5% from last month</p>
                    </div>

                    <div class="report-card card-hover rounded-xl p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="bg-green-100 dark:bg-green-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-green-600 text-xl">trending_up</span>
                            </div>
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">87%</span>
                        </div>
                        <h3 class="text-sm font-medium text-gray-600 dark:text-gray-400">Average Grade</h3>
                        <p class="text-xs text-green-600 mt-1">+2% from last month</p>
                    </div>

                    <div class="report-card card-hover rounded-xl p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="bg-orange-100 dark:bg-orange-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-orange-600 text-xl">how_to_reg</span>
                            </div>
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">92%</span>
                        </div>
                        <h3 class="text-sm font-medium text-gray-600 dark:text-gray-400">Attendance Rate</h3>
                        <p class="text-xs text-red-600 mt-1">-1% from last month</p>
                    </div>

                    <div class="report-card card-hover rounded-xl p-6 shadow-sm">
                        <div class="flex items-center justify-between mb-4">
                            <div class="bg-purple-100 dark:bg-purple-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-purple-600 text-xl">assignment_turned_in</span>
                            </div>
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">78%</span>
                        </div>
                        <h3 class="text-sm font-medium text-gray-600 dark:text-gray-400">Assignment Completion</h3>
                        <p class="text-xs text-green-600 mt-1">+3% from last month</p>
                    </div>
                </div>

                <!-- Report Types Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                    <!-- Performance Chart -->
                    <div class="report-card rounded-xl p-6 shadow-sm animate-slide-up" style="animation-delay: 0.1s;">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Class Performance Trends</h3>
                        <div class="h-64">
                            <canvas id="performanceChart"></canvas>
                        </div>
                    </div>

                    <!-- Attendance Chart -->
                    <div class="report-card rounded-xl p-6 shadow-sm animate-slide-up" style="animation-delay: 0.2s;">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Monthly Attendance</h3>
                        <div class="h-64">
                            <canvas id="attendanceChart"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Report Generation Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Student Progress Report -->
                    <div class="report-card card-hover rounded-xl p-6 shadow-sm animate-slide-up" style="animation-delay: 0.3s;">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-blue-600 text-xl">person_search</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Student Progress</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">Generate detailed progress reports for individual students</p>
                        <div class="space-y-3 mb-4">
                            <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm">
                                <option>Select Student</option>
                                <option>Emma Johnson</option>
                                <option>Michael Chen</option>
                                <option>Sarah Davis</option>
                                <option>Alex Rodriguez</option>
                            </select>
                            <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm">
                                <option>Select Period</option>
                                <option>This Month</option>
                                <option>Last Month</option>
                                <option>This Semester</option>
                                <option>This Year</option>
                            </select>
                        </div>
                        <a href="/teacher/reports/student-progress" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors block text-center">
                            Generate Report
                        </a>
                    </div>

                    <!-- Class Performance Report -->
                    <div class="report-card card-hover rounded-xl p-6 shadow-sm animate-slide-up" style="animation-delay: 0.4s;">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-green-100 dark:bg-green-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-green-600 text-xl">bar_chart</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Class Performance</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">Analyze overall class performance and identify trends</p>
                        <div class="space-y-3 mb-4">
                            <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm">
                                <option>Select Class</option>
                                <option>Grade 10A - Mathematics</option>
                                <option>Grade 10B - Mathematics</option>
                                <option>Grade 11A - Physics</option>
                                <option>Grade 12C - Chemistry</option>
                            </select>
                            <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm">
                                <option>Report Type</option>
                                <option>Grade Distribution</option>
                                <option>Assignment Performance</option>
                                <option>Attendance Overview</option>
                                <option>Comprehensive Report</option>
                            </select>
                        </div>
                        <a href="/teacher/reports/class-performance" class="w-full bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition-colors block text-center">
                            Generate Report
                        </a>
                    </div>

                    <!-- Attendance Report -->
                    <div class="report-card card-hover rounded-xl p-6 shadow-sm animate-slide-up" style="animation-delay: 0.5s;">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-orange-100 dark:bg-orange-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-orange-600 text-xl">event_available</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Attendance Report</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">Track attendance patterns and identify concerning trends</p>
                        <div class="space-y-3 mb-4">
                            <input type="date" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm">
                            <input type="date" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm">
                        </div>
                        <a href="/teacher/attendance/report" class="w-full bg-orange-600 text-white py-2 px-4 rounded-lg hover:bg-orange-700 transition-colors block text-center">
                            Generate Report
                        </a>
                    </div>

                    <!-- Assignment Analytics -->
                    <div class="report-card card-hover rounded-xl p-6 shadow-sm animate-slide-up" style="animation-delay: 0.6s;">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-purple-100 dark:bg-purple-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-purple-600 text-xl">assignment_turned_in</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Assignment Analytics</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">Analyze homework submission rates and performance</p>
                        <div class="space-y-3 mb-4">
                            <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm">
                                <option>Select Assignment</option>
                                <option>Quadratic Equations - Chapter 3</option>
                                <option>Physics Lab Report #1</option>
                                <option>Chemistry Problem Set 4</option>
                                <option>All Assignments</option>
                            </select>
                        </div>
                        <button class="w-full bg-purple-600 text-white py-2 px-4 rounded-lg hover:bg-purple-700 transition-colors">
                            View Analytics
                        </button>
                    </div>

                    <!-- Parent Communication Log -->
                    <div class="report-card card-hover rounded-xl p-6 shadow-sm animate-slide-up" style="animation-delay: 0.7s;">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-red-100 dark:bg-red-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-red-600 text-xl">connect_without_contact</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Communication Log</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">Track parent-teacher communication and meeting records</p>
                        <div class="space-y-3 mb-4">
                            <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm">
                                <option>Communication Type</option>
                                <option>Messages</option>
                                <option>Phone Calls</option>
                                <option>Meetings</option>
                                <option>All Communications</option>
                            </select>
                        </div>
                        <button class="w-full bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700 transition-colors">
                            Generate Log
                        </button>
                    </div>

                    <!-- Custom Report Builder -->
                    <div class="report-card card-hover rounded-xl p-6 shadow-sm animate-slide-up" style="animation-delay: 0.8s;">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-gray-100 dark:bg-gray-700 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-gray-600 dark:text-gray-400 text-xl">build</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Custom Report</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">Build custom reports with specific criteria and data points</p>
                        <div class="space-y-3 mb-4">
                            <div class="grid grid-cols-2 gap-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 text-primary focus:ring-primary">
                                    <span class="text-xs">Grades</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 text-primary focus:ring-primary">
                                    <span class="text-xs">Attendance</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 text-primary focus:ring-primary">
                                    <span class="text-xs">Homework</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="mr-2 text-primary focus:ring-primary">
                                    <span class="text-xs">Behavior</span>
                                </label>
                            </div>
                        </div>
                        <button class="w-full bg-gray-600 text-white py-2 px-4 rounded-lg hover:bg-gray-700 transition-colors">
                            Build Report
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- JavaScript -->
    <script>
        // Performance Chart
        const performanceCtx = document.getElementById('performanceChart').getContext('2d');
        const performanceChart = new Chart(performanceCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Class Average',
                    data: [82, 85, 80, 87, 89, 91],
                    borderColor: '#137fec',
                    backgroundColor: 'rgba(19, 127, 236, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 70,
                        max: 100
                    }
                }
            }
        });

        // Attendance Chart
        const attendanceCtx = document.getElementById('attendanceChart').getContext('2d');
        const attendanceChart = new Chart(attendanceCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Attendance Rate',
                    data: [94, 92, 89, 95, 93, 96],
                    backgroundColor: '#10b981',
                    borderRadius: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 80,
                        max: 100
                    }
                }
            }
        });

        // Report generation functions
        function generateStudentReport() {
            const student = document.querySelector('select').value;
            console.log('Generating student report for:', student);
            alert('Student progress report generated!');
        }

        function generateClassReport() {
            console.log('Generating class performance report...');
            alert('Class performance report generated!');
        }

        function generateAttendanceReport() {
            console.log('Generating attendance report...');
            alert('Attendance report generated!');
        }

        function generateCustomReport() {
            const selectedCriteria = [];
            document.querySelectorAll('input[type="checkbox"]:checked').forEach(checkbox => {
                selectedCriteria.push(checkbox.nextElementSibling.textContent);
            });
            console.log('Custom report criteria:', selectedCriteria);
            alert('Custom report generated with criteria: ' + selectedCriteria.join(', '));
        }
    </script>
</body>
</html>
