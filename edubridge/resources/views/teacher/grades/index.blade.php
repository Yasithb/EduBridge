<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades - EduBridge Teacher Portal</title>
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
        
        .stats-card {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        
        .stats-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(19, 127, 236, 0.15);
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
                    <a href="/teacher/grades" class="nav-link active flex items-center gap-3 px-4 py-3 rounded-lg">
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
                    <a href="/teacher/reports" class="nav-link flex items-center gap-3 px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20">
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
<        <!-- Main Content -->
        <main class="flex-1 md:ml-0 p-6 bg-gray-50">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Grades Overview</h1>
                <p class="text-gray-600 mt-2">Generate and view progress reports for your students</p>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="stats-card rounded-xl p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-2xl font-bold text-gray-900">137</p>
                            <p class="text-sm text-gray-600">Total Students</p>
                        </div>
                        <div class="p-3 bg-blue-100 rounded-full">
                            <i class="material-icons text-blue-600">people</i>
                        </div>
                    </div>
                </div>

                <div class="stats-card rounded-xl p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-2xl font-bold text-gray-900">84.2%</p>
                            <p class="text-sm text-gray-600">Average Grade</p>
                        </div>
                        <div class="p-3 bg-green-100 rounded-full">
                            <i class="material-icons text-green-600">grade</i>
                        </div>
                    </div>
                </div>

                <div class="stats-card rounded-xl p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-2xl font-bold text-gray-900">42</p>
                            <p class="text-sm text-gray-600">Pending Reports</p>
                        </div>
                        <div class="p-3 bg-yellow-100 rounded-full">
                            <i class="material-icons text-yellow-600">pending</i>
                        </div>
                    </div>
                </div>

                <div class="stats-card rounded-xl p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-2xl font-bold text-gray-900">18</p>
                            <p class="text-sm text-gray-600">Reports Generated</p>
                        </div>
                        <div class="p-3 bg-purple-100 rounded-full">
                            <i class="material-icons text-purple-600">description</i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Report Generation Form -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Generate Progress Report</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="student-select">Select Student</label>
                        <select class="w-full bg-white border border-gray-300 rounded-lg h-12 px-4 focus:ring-2 focus:ring-primary focus:border-primary transition-colors" id="student-select">
                            <option>Select a student...</option>
                            <option>Olivia Chen</option>
                            <option>Liam Rodriguez</option>
                            <option>Sophia Patel</option>
                            <option>Marcus Johnson</option>
                            <option>Emma Williams</option>
                            <option>Noah Davis</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="period-select">Report Period</label>
                        <select class="w-full bg-white border border-gray-300 rounded-lg h-12 px-4 focus:ring-2 focus:ring-primary focus:border-primary transition-colors" id="period-select">
                            <option>Select a period...</option>
                            <option>Mid-Term</option>
                            <option>Final Term</option>
                            <option>Quarter 1</option>
                            <option>Quarter 2</option>
                            <option>Quarter 3</option>
                            <option>Quarter 4</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="type-select">Report Type</label>
                        <select class="w-full bg-white border border-gray-300 rounded-lg h-12 px-4 focus:ring-2 focus:ring-primary focus:border-primary transition-colors" id="type-select">
                            <option>Select a type...</option>
                            <option>Full Report</option>
                            <option>Summary Report</option>
                            <option>Attendance Only</option>
                            <option>Grades Only</option>
                            <option>Behavioral Report</option>
                        </select>
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-4">
                    <button class="bg-primary text-white font-semibold py-3 px-6 rounded-lg hover:bg-primary-dark transition-colors flex items-center gap-2">
                        <i class="material-icons">visibility</i>
                        <span>Preview Report</span>
                    </button>
                    <button class="bg-green-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-green-700 transition-colors flex items-center gap-2">
                        <i class="material-icons">send</i>
                        <span>Generate & Send</span>
                    </button>
                    <button class="bg-gray-100 text-gray-700 font-semibold py-3 px-6 rounded-lg hover:bg-gray-200 transition-colors flex items-center gap-2">
                        <i class="material-icons">download</i>
                        <span>Download PDF</span>
                    </button>
                </div>
            </div>

            <!-- Recent Reports -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mt-8">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-semibold text-gray-900">Recent Reports</h2>
                    <a href="/teacher/reports" class="text-primary hover:text-primary-dark font-medium">View All</a>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="text-left py-3 px-4 font-semibold text-gray-900">Student</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-900">Period</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-900">Type</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-900">Generated</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-900">Status</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-900">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                            <span class="text-blue-600 text-sm font-bold">OC</span>
                                        </div>
                                        <span class="font-medium text-gray-900">Olivia Chen</span>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-gray-600">Quarter 2</td>
                                <td class="py-3 px-4 text-gray-600">Full Report</td>
                                <td class="py-3 px-4 text-gray-600">Oct 30, 2025</td>
                                <td class="py-3 px-4">
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm">Sent</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-2">
                                        <button class="text-primary hover:text-primary-dark">
                                            <i class="material-icons text-sm">visibility</i>
                                        </button>
                                        <button class="text-gray-600 hover:text-gray-800">
                                            <i class="material-icons text-sm">download</i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                            <span class="text-green-600 text-sm font-bold">LR</span>
                                        </div>
                                        <span class="font-medium text-gray-900">Liam Rodriguez</span>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-gray-600">Quarter 2</td>
                                <td class="py-3 px-4 text-gray-600">Summary Report</td>
                                <td class="py-3 px-4 text-gray-600">Oct 29, 2025</td>
                                <td class="py-3 px-4">
                                    <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">Pending</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-2">
                                        <button class="text-primary hover:text-primary-dark">
                                            <i class="material-icons text-sm">visibility</i>
                                        </button>
                                        <button class="text-green-600 hover:text-green-800">
                                            <i class="material-icons text-sm">send</i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                            <span class="text-purple-600 text-sm font-bold">SP</span>
                                        </div>
                                        <span class="font-medium text-gray-900">Sophia Patel</span>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-gray-600">Quarter 2</td>
                                <td class="py-3 px-4 text-gray-600">Grades Only</td>
                                <td class="py-3 px-4 text-gray-600">Oct 28, 2025</td>
                                <td class="py-3 px-4">
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm">Sent</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-2">
                                        <button class="text-primary hover:text-primary-dark">
                                            <i class="material-icons text-sm">visibility</i>
                                        </button>
                                        <button class="text-gray-600 hover:text-gray-800">
                                            <i class="material-icons text-sm">download</i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden md:hidden"></div>

    <script>
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const sidebar = document.getElementById('sidebar');
        const mobileOverlay = document.getElementById('mobile-overlay');

        mobileMenuBtn?.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            mobileOverlay.classList.toggle('hidden');
        });

        mobileOverlay?.addEventListener('click', () => {
            sidebar.classList.remove('active');
            mobileOverlay.classList.add('hidden');
        });

        // Form validation and interaction
        const selects = document.querySelectorAll('select');
        const previewBtn = document.querySelector('button[class*="bg-primary"]');
        
        function validateForm() {
            const student = document.getElementById('student-select').value;
            const period = document.getElementById('period-select').value;
            const type = document.getElementById('type-select').value;
            
            const isValid = student !== 'Select a student...' && 
                           period !== 'Select a period...' && 
                           type !== 'Select a type...';
                           
            if (previewBtn) {
                previewBtn.disabled = !isValid;
                previewBtn.classList.toggle('opacity-50', !isValid);
                previewBtn.classList.toggle('cursor-not-allowed', !isValid);
            }
        }

        selects.forEach(select => {
            select.addEventListener('change', validateForm);
        });

        // Initialize form validation
        validateForm();
    </script>
</body>
</html>