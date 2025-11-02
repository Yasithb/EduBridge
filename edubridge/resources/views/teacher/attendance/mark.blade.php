<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Attendance - EduBridge Teacher Portal</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
        
        .student-row {
            transition: all 0.3s ease;
        }
        
        .student-row:hover {
            background-color: #f8fafc;
            transform: translateX(4px);
        }
        
        .attendance-btn {
            transition: all 0.2s ease;
            position: relative;
            overflow: hidden;
        }
        
        .attendance-btn:before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.3s, height 0.3s;
        }
        
        .attendance-btn:hover:before {
            width: 200px;
            height: 200px;
        }
        
        .attendance-btn.present {
            background-color: #10b981;
            color: white;
            border-color: #10b981;
        }
        
        .attendance-btn.absent {
            background-color: #ef4444;
            color: white;
            border-color: #ef4444;
        }
        
        .attendance-btn.late {
            background-color: #f59e0b;
            color: white;
            border-color: #f59e0b;
        }
        
        .attendance-btn.excused {
            background-color: #3b82f6;
            color: white;
            border-color: #3b82f6;
        }
        
        .attendance-btn:not(.present):not(.absent):not(.late):not(.excused) {
            background-color: #f3f4f6;
            color: #374151;
            border-color: #d1d5db;
        }
        
        .attendance-btn:not(.present):not(.absent):not(.late):not(.excused):hover {
            background-color: #e5e7eb;
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
                <a href="/teacher/dashboard" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-primary/10">
                    <i class="material-icons text-xl">dashboard</i>
                    <span>Dashboard</span>
                </a>

                <!-- Classes -->
                <div>
                    <a href="/teacher/classes" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-primary/10">
                        <i class="material-icons text-xl">class</i>
                        <span>Classes</span>
                    </a>
                    <a href="/teacher/classes/students" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 hover:bg-primary/10">
                        <i class="material-icons text-lg">people</i>
                        <span>Students</span>
                    </a>
                </div>

                <!-- Attendance -->
                <div>
                    <a href="/teacher/attendance" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-primary/10">
                        <i class="material-icons text-xl">fact_check</i>
                        <span>Attendance</span>
                    </a>
                    <a href="/teacher/attendance/mark" class="nav-link active flex items-center gap-3 px-8 py-2 rounded-lg text-sm">
                        <i class="material-icons text-lg">edit</i>
                        <span>Mark Attendance</span>
                    </a>
                </div>

                <!-- Grades -->
                <div>
                    <a href="/teacher/grades" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-primary/10">
                        <i class="material-icons text-xl">grade</i>
                        <span>Grades</span>
                    </a>
                    <a href="/teacher/grades/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 hover:bg-primary/10">
                        <i class="material-icons text-lg">add</i>
                        <span>Create Grades</span>
                    </a>
                </div>

                <!-- Homework -->
                <div>
                    <a href="/teacher/homework" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-primary/10">
                        <i class="material-icons text-xl">assignment</i>
                        <span>Homework</span>
                    </a>
                    <a href="/teacher/homework/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 hover:bg-primary/10">
                        <i class="material-icons text-lg">add</i>
                        <span>Create Homework</span>
                    </a>
                </div>

                <!-- Messages -->
                <div>
                    <a href="/teacher/messages" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-primary/10">
                        <i class="material-icons text-xl">message</i>
                        <span>Messages</span>
                    </a>
                    <a href="/teacher/messages/chat" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 hover:bg-primary/10">
                        <i class="material-icons text-lg">chat</i>
                        <span>Chat</span>
                    </a>
                </div>

                <!-- Reports -->
                <div>
                    <a href="/teacher/reports" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-primary/10">
                        <i class="material-icons text-xl">assessment</i>
                        <span>Reports</span>
                    </a>
                    <a href="/teacher/reports/generate" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 hover:bg-primary/10">
                        <i class="material-icons text-lg">description</i>
                        <span>Generate Reports</span>
                    </a>
                </div>

                <!-- Announcements -->
                <div>
                    <a href="/teacher/announcements" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-primary/10">
                        <i class="material-icons text-xl">campaign</i>
                        <span>Announcements</span>
                    </a>
                    <a href="/teacher/announcements/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-gray-600 hover:bg-primary/10">
                        <i class="material-icons text-lg">add</i>
                        <span>Create Announcement</span>
                    </a>
                </div>

                <!-- Settings -->
                <a href="/teacher/settings" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-primary/10">
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
        <main class="flex-1 md:ml-0 p-4 md:p-8">
            <div class="max-w-7xl mx-auto">
                <!-- Header -->
                <header class="mb-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-4">
                            <button onclick="history.back()" class="text-gray-600 hover:text-primary transition-colors">
                                <i class="material-icons text-2xl">arrow_back</i>
                            </button>
                            <div class="bg-primary/10 p-3 rounded-lg">
                                <i class="material-icons text-primary text-2xl">check_circle</i>
                            </div>
                            <div>
                                <h1 class="text-3xl font-bold text-gray-900">Mark Attendance</h1>
                                <p class="text-gray-600">Mathematics - Grade 10A • <span id="current-date"></span></p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <div class="bg-white border border-gray-200 text-gray-700 px-4 py-2 rounded-lg">
                                <div class="flex items-center space-x-2">
                                    <i class="material-icons text-sm">schedule</i>
                                    <span class="text-sm font-mono" id="current-time"></span>
                                </div>
                            </div>
                            <button onclick="exportAttendance()" class="bg-white text-gray-700 px-4 py-2 rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors flex items-center gap-2">
                                <i class="material-icons">file_download</i>
                                Export
                            </button>
                            <button onclick="saveAttendance()" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-primary-dark transition-colors flex items-center gap-2 font-semibold">
                                <i class="material-icons">save</i>
                                Save All
                            </button>
                        </div>
                    </div>
                </header>

                <!-- Quick Stats -->
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-8">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-gray-900" id="total-students">5</div>
                            <div class="text-sm text-gray-500">Total</div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-600" id="present-count">0</div>
                            <div class="text-sm text-gray-500">Present</div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-red-600" id="absent-count">0</div>
                            <div class="text-sm text-gray-500">Absent</div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-yellow-600" id="late-count">0</div>
                            <div class="text-sm text-gray-500">Late</div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-4">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600" id="excused-count">0</div>
                            <div class="text-sm text-gray-500">Excused</div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-8">
                    <div class="flex flex-col sm:flex-row gap-4 items-center justify-between">
                        <h2 class="text-lg font-semibold text-gray-900">Quick Actions</h2>
                        <div class="flex flex-wrap gap-3">
                            <button onclick="markAllPresent()" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition-all duration-200 flex items-center space-x-2">
                                <i class="material-icons text-sm">check_circle</i>
                                <span>Mark All Present</span>
                            </button>
                            <button onclick="markAllAbsent()" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition-all duration-200 flex items-center space-x-2">
                                <i class="material-icons text-sm">cancel</i>
                                <span>Mark All Absent</span>
                            </button>
                            <button onclick="clearAll()" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-all duration-200 flex items-center space-x-2">
                                <i class="material-icons text-sm">refresh</i>
                                <span>Clear All</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Attendance List -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <h2 class="text-xl font-semibold text-gray-900">Student Attendance</h2>
                            <div class="flex items-center space-x-4">
                                <div class="text-sm text-gray-500">
                                    Progress: <span id="progress-text">0/5</span>
                                </div>
                                <div class="w-24 h-2 bg-gray-200 rounded-full overflow-hidden">
                                    <div id="progress-bar" class="h-full bg-gradient-to-r from-primary to-blue-500 transition-all duration-300" style="width: 0%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divide-y divide-gray-200">
                        <!-- Student Attendance Rows -->
                        <div class="student-row p-4 flex items-center justify-between" data-student-id="1">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=48&h=48&fit=crop&crop=face" alt="Student" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Emma Johnson</h3>
                                    <p class="text-sm text-gray-500">Student ID: 2024001 • Roll No: 01</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 flex-wrap">
                                <button onclick="markAttendance(this, 'present')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">check_circle</i>
                                    Present
                                </button>
                                <button onclick="markAttendance(this, 'absent')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">cancel</i>
                                    Absent
                                </button>
                                <button onclick="markAttendance(this, 'late')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">schedule</i>
                                    Late
                                </button>
                                <button onclick="markAttendance(this, 'excused')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">event_busy</i>
                                    Excused
                                </button>
                            </div>
                        </div>

                        <div class="student-row p-4 flex items-center justify-between" data-student-id="2">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=48&h=48&fit=crop&crop=face" alt="Student" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Michael Chen</h3>
                                    <p class="text-sm text-gray-500">Student ID: 2024002 • Roll No: 02</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 flex-wrap">
                                <button onclick="markAttendance(this, 'present')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">check_circle</i>
                                    Present
                                </button>
                                <button onclick="markAttendance(this, 'absent')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">cancel</i>
                                    Absent
                                </button>
                                <button onclick="markAttendance(this, 'late')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">schedule</i>
                                    Late
                                </button>
                                <button onclick="markAttendance(this, 'excused')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">event_busy</i>
                                    Excused
                                </button>
                            </div>
                        </div>

                        <div class="student-row p-4 flex items-center justify-between" data-student-id="3">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=48&h=48&fit=crop&crop=face" alt="Student" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Sarah Davis</h3>
                                    <p class="text-sm text-gray-500">Student ID: 2024003 • Roll No: 03</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 flex-wrap">
                                <button onclick="markAttendance(this, 'present')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">check_circle</i>
                                    Present
                                </button>
                                <button onclick="markAttendance(this, 'absent')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">cancel</i>
                                    Absent
                                </button>
                                <button onclick="markAttendance(this, 'late')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">schedule</i>
                                    Late
                                </button>
                                <button onclick="markAttendance(this, 'excused')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">event_busy</i>
                                    Excused
                                </button>
                            </div>
                        </div>

                        <div class="student-row p-4 flex items-center justify-between" data-student-id="4">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=48&h=48&fit=crop&crop=face" alt="Student" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">David Wilson</h3>
                                    <p class="text-sm text-gray-500">Student ID: 2024004 • Roll No: 04</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 flex-wrap">
                                <button onclick="markAttendance(this, 'present')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">check_circle</i>
                                    Present
                                </button>
                                <button onclick="markAttendance(this, 'absent')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">cancel</i>
                                    Absent
                                </button>
                                <button onclick="markAttendance(this, 'late')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">schedule</i>
                                    Late
                                </button>
                                <button onclick="markAttendance(this, 'excused')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">event_busy</i>
                                    Excused
                                </button>
                            </div>
                        </div>

                        <div class="student-row p-4 flex items-center justify-between" data-student-id="5">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=48&h=48&fit=crop&crop=face" alt="Student" class="w-12 h-12 rounded-full object-cover border-2 border-gray-200">
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">Alex Rodriguez</h3>
                                    <p class="text-sm text-gray-500">Student ID: 2024005 • Roll No: 05</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2 flex-wrap">
                                <button onclick="markAttendance(this, 'present')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">check_circle</i>
                                    Present
                                </button>
                                <button onclick="markAttendance(this, 'absent')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">cancel</i>
                                    Absent
                                </button>
                                <button onclick="markAttendance(this, 'late')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">schedule</i>
                                    Late
                                </button>
                                <button onclick="markAttendance(this, 'excused')" class="attendance-btn px-3 py-2 rounded-lg border font-medium relative z-10 text-sm">
                                    <i class="material-icons text-sm mr-1">event_busy</i>
                                    Excused
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Notes Section -->
                <div class="mt-8 bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Additional Notes</h3>
                    <textarea 
                        id="attendance-notes"
                        class="w-full h-24 p-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white text-gray-900 resize-none" 
                        placeholder="Add any notes about today's class or specific student situations..."
                    ></textarea>
                </div>
            </div>
        </main>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 md:hidden hidden"></div>

    <!-- Success Modal -->
    <div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-xl p-8 shadow-2xl max-w-md w-full transform transition-all">
                <div class="text-center">
                    <div class="bg-green-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="material-icons text-green-600 text-3xl">check_circle</i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Attendance Saved!</h3>
                    <p class="text-gray-600 mb-6">All attendance records have been saved successfully.</p>
                    <button onclick="closeSuccessModal()" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-primary-dark transition-colors">
                        Continue
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Initialize
        let attendanceData = {};
        const totalStudents = 5;

        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');

        mobileMenuBtn?.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            sidebarOverlay.classList.toggle('hidden');
        });

        sidebarOverlay?.addEventListener('click', () => {
            sidebar.classList.remove('active');
            sidebarOverlay.classList.add('hidden');
        });

        // Update date and time
        function updateDateTime() {
            const now = new Date();
            document.getElementById('current-date').textContent = now.toLocaleDateString('en-US', { 
                weekday: 'long', 
                year: 'numeric', 
                month: 'long', 
                day: 'numeric' 
            });
            document.getElementById('current-time').textContent = now.toLocaleTimeString('en-US', { 
                hour12: true,
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
        }

        // Mark individual attendance
        function markAttendance(button, status) {
            const row = button.closest('.student-row');
            const studentId = row.dataset.studentId;
            const buttons = row.querySelectorAll('.attendance-btn');
            
            // Remove all status classes
            buttons.forEach(btn => {
                btn.classList.remove('present', 'absent', 'late', 'excused');
            });
            
            // Add status to clicked button
            button.classList.add(status);
            
            // Store attendance data
            attendanceData[studentId] = status;
            
            // Update counts and progress
            updateCounts();
            updateProgress();
        }

        // Quick actions
        function markAllPresent() {
            const rows = document.querySelectorAll('.student-row');
            rows.forEach(row => {
                const presentBtn = row.querySelector('.attendance-btn:first-of-type');
                markAttendance(presentBtn, 'present');
            });
        }

        function markAllAbsent() {
            const rows = document.querySelectorAll('.student-row');
            rows.forEach(row => {
                const absentBtn = row.querySelector('.attendance-btn:nth-of-type(2)');
                markAttendance(absentBtn, 'absent');
            });
        }

        function clearAll() {
            const buttons = document.querySelectorAll('.attendance-btn');
            buttons.forEach(btn => {
                btn.classList.remove('present', 'absent', 'late', 'excused');
            });
            attendanceData = {};
            updateCounts();
            updateProgress();
        }

        // Update count displays
        function updateCounts() {
            const counts = { present: 0, absent: 0, late: 0, excused: 0 };
            
            Object.values(attendanceData).forEach(status => {
                if (counts.hasOwnProperty(status)) {
                    counts[status]++;
                }
            });
            
            document.getElementById('present-count').textContent = counts.present;
            document.getElementById('absent-count').textContent = counts.absent;
            document.getElementById('late-count').textContent = counts.late;
            document.getElementById('excused-count').textContent = counts.excused;
        }

        // Update progress
        function updateProgress() {
            const marked = Object.keys(attendanceData).length;
            const percentage = (marked / totalStudents) * 100;
            
            document.getElementById('progress-text').textContent = `${marked}/${totalStudents}`;
            document.getElementById('progress-bar').style.width = `${percentage}%`;
        }

        // Export attendance
        function exportAttendance() {
            const data = {
                date: new Date().toLocaleDateString(),
                class: 'Mathematics - Grade 10A',
                teacher: 'John Doe',
                attendance: attendanceData,
                notes: document.getElementById('attendance-notes').value
            };
            
            console.log('Exporting attendance data:', data);
            alert('Attendance data exported successfully!');
        }

        // Save attendance
        function saveAttendance() {
            const marked = Object.keys(attendanceData).length;
            
            if (marked === 0) {
                alert('Please mark attendance for at least one student.');
                return;
            }
            
            // Show success modal
            document.getElementById('success-modal').classList.remove('hidden');
            
            // Here you would typically send the data to your backend
            const data = {
                date: new Date().toISOString(),
                class: 'Mathematics - Grade 10A',
                teacher: 'John Doe',
                attendance: attendanceData,
                notes: document.getElementById('attendance-notes').value
            };
            
            console.log('Attendance Data:', data);
        }

        function closeSuccessModal() {
            document.getElementById('success-modal').classList.add('hidden');
        }

        // Initialize on page load
        document.addEventListener('DOMContentLoaded', function() {
            updateDateTime();
            setInterval(updateDateTime, 1000); // Update every second
            
            // Initialize total students count
            document.getElementById('total-students').textContent = totalStudents;
        });

        // Keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey && e.key === 's') {
                e.preventDefault();
                saveAttendance();
            }
        });
    </script>
</body>
</html>