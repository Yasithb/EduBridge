<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework - EduBridge Teacher Portal</title>
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

        .form-select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
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
                    <a href="/teacher/homework" class="nav-link active flex items-center gap-3 px-4 py-3 rounded-lg">
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
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Homework Management</h1>
                        <p class="text-gray-600 mt-2">Create and manage homework assignments for your classes</p>
                    </div>
                    <a href="/teacher/homework/create" class="bg-primary text-white font-medium py-3 px-6 rounded-lg flex items-center gap-2 hover:bg-primary-dark transition-colors">
                        <i class="material-icons">add</i>
                        <span>New Homework</span>
                    </a>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="stats-card rounded-xl p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-2xl font-bold text-gray-900">24</p>
                            <p class="text-sm text-gray-600">Active Assignments</p>
                        </div>
                        <div class="p-3 bg-blue-100 rounded-full">
                            <i class="material-icons text-blue-600">assignment</i>
                        </div>
                    </div>
                </div>

                <div class="stats-card rounded-xl p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-2xl font-bold text-gray-900">156</p>
                            <p class="text-sm text-gray-600">Submissions</p>
                        </div>
                        <div class="p-3 bg-green-100 rounded-full">
                            <i class="material-icons text-green-600">check_circle</i>
                        </div>
                    </div>
                </div>

                <div class="stats-card rounded-xl p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-2xl font-bold text-gray-900">18</p>
                            <p class="text-sm text-gray-600">Pending Review</p>
                        </div>
                        <div class="p-3 bg-yellow-100 rounded-full">
                            <i class="material-icons text-yellow-600">pending</i>
                        </div>
                    </div>
                </div>

                <div class="stats-card rounded-xl p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-2xl font-bold text-gray-900">7</p>
                            <p class="text-sm text-gray-600">Due Today</p>
                        </div>
                        <div class="p-3 bg-red-100 rounded-full">
                            <i class="material-icons text-red-600">schedule</i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Create Homework Form -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-8">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Create New Homework</h2>
                
                <form class="space-y-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="title">Assignment Title</label>
                            <input class="w-full bg-white border border-gray-300 rounded-lg h-12 px-4 focus:ring-2 focus:ring-primary focus:border-primary transition-colors" 
                                   id="title" placeholder="e.g. Algebra I - Chapter 5 Problems" type="text"/>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="due-date">Due Date</label>
                            <input class="w-full bg-white border border-gray-300 rounded-lg h-12 px-4 focus:ring-2 focus:ring-primary focus:border-primary transition-colors" 
                                   id="due-date" type="date"/>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" for="description">Description</label>
                        <textarea class="w-full bg-white border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-primary focus:border-primary transition-colors" 
                                  id="description" placeholder="Provide detailed instructions for the assignment..." rows="4"></textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="class">Select Class</label>
                            <select class="form-select w-full bg-white border border-gray-300 rounded-lg h-12 px-4 focus:ring-2 focus:ring-primary focus:border-primary transition-colors" 
                                    id="class">
                                <option>Select a class</option>
                                <option>Grade 9 - Section A (Mathematics)</option>
                                <option>Grade 10 - Section B (Mathematics)</option>
                                <option>Grade 11 - Section A (Mathematics)</option>
                                <option>Grade 12 - Section C (Mathematics)</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" for="subject">Subject</label>
                            <select class="form-select w-full bg-white border border-gray-300 rounded-lg h-12 px-4 focus:ring-2 focus:ring-primary focus:border-primary transition-colors" 
                                    id="subject">
                                <option>Select a subject</option>
                                <option>Mathematics</option>
                                <option>Algebra</option>
                                <option>Geometry</option>
                                <option>Calculus</option>
                                <option>Statistics</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Attachments</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg hover:border-primary transition-colors">
                            <div class="space-y-1 text-center">
                                <i class="material-icons text-4xl text-gray-400">cloud_upload</i>
                                <div class="flex text-sm text-gray-600">
                                    <label class="relative cursor-pointer bg-white rounded-md font-medium text-primary hover:text-primary-dark focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary" 
                                           for="file-upload">
                                        <span>Upload a file</span>
                                        <input class="sr-only" id="file-upload" name="file-upload" type="file" multiple/>
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PDF, DOCX, PNG, JPG up to 10MB</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="flex items-center">
                            <input class="h-4 w-4 text-primary border-gray-300 rounded focus:ring-primary" 
                                   id="notify-parents" name="notify-parents" type="checkbox"/>
                            <label class="ml-2 block text-sm text-gray-700" for="notify-parents">Notify parents via email</label>
                        </div>
                        
                        <div class="flex items-center">
                            <input class="h-4 w-4 text-primary border-gray-300 rounded focus:ring-primary" 
                                   id="auto-grade" name="auto-grade" type="checkbox"/>
                            <label class="ml-2 block text-sm text-gray-700" for="auto-grade">Enable auto-grading</label>
                        </div>
                    </div>

                    <div class="flex justify-end pt-4 border-t border-gray-200">
                        <div class="flex gap-3">
                            <button type="button" class="bg-gray-100 text-gray-700 font-medium py-3 px-6 rounded-lg hover:bg-gray-200 transition-colors">
                                Save as Draft
                            </button>
                            <button type="submit" class="bg-primary text-white font-medium py-3 px-6 rounded-lg hover:bg-primary-dark transition-colors">
                                Create Assignment
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Recent Assignments -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-semibold text-gray-900">Recent Assignments</h2>
                    <div class="flex items-center gap-2">
                        <select class="form-select bg-white border border-gray-300 rounded-lg text-sm px-3 py-2 focus:ring-2 focus:ring-primary focus:border-primary">
                            <option>All Classes</option>
                            <option>Grade 9 - Section A</option>
                            <option>Grade 10 - Section B</option>
                        </select>
                    </div>
                </div>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="text-left py-3 px-4 font-semibold text-gray-900">Assignment</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-900">Class</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-900">Due Date</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-900">Submissions</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-900">Status</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-900">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-3 px-4">
                                    <div>
                                        <p class="font-medium text-gray-900">Quadratic Equations Practice</p>
                                        <p class="text-sm text-gray-600">Chapter 4 exercises 1-15</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-gray-600">Grade 9 - Section A</td>
                                <td class="py-3 px-4 text-gray-600">Nov 2, 2025</td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-2">
                                        <span class="text-gray-900 font-medium">18/25</span>
                                        <div class="w-16 bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 72%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4">
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm">Active</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-2">
                                        <button class="text-primary hover:text-primary-dark">
                                            <i class="material-icons text-sm">visibility</i>
                                        </button>
                                        <button class="text-gray-600 hover:text-gray-800">
                                            <i class="material-icons text-sm">edit</i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800">
                                            <i class="material-icons text-sm">delete</i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-3 px-4">
                                    <div>
                                        <p class="font-medium text-gray-900">Trigonometry Review</p>
                                        <p class="text-sm text-gray-600">Sin, Cos, Tan problems</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-gray-600">Grade 10 - Section B</td>
                                <td class="py-3 px-4 text-gray-600">Nov 1, 2025</td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-2">
                                        <span class="text-gray-900 font-medium">22/30</span>
                                        <div class="w-16 bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-500 h-2 rounded-full" style="width: 73%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4">
                                    <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-sm">Due Soon</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-2">
                                        <button class="text-primary hover:text-primary-dark">
                                            <i class="material-icons text-sm">visibility</i>
                                        </button>
                                        <button class="text-gray-600 hover:text-gray-800">
                                            <i class="material-icons text-sm">edit</i>
                                        </button>
                                        <button class="text-red-600 hover:text-red-800">
                                            <i class="material-icons text-sm">delete</i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-gray-50">
                                <td class="py-3 px-4">
                                    <div>
                                        <p class="font-medium text-gray-900">Linear Functions Test</p>
                                        <p class="text-sm text-gray-600">Comprehensive assessment</p>
                                    </div>
                                </td>
                                <td class="py-3 px-4 text-gray-600">Grade 9 - Section A</td>
                                <td class="py-3 px-4 text-gray-600">Oct 30, 2025</td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-2">
                                        <span class="text-gray-900 font-medium">25/25</span>
                                        <div class="w-16 bg-gray-200 rounded-full h-2">
                                            <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-4">
                                    <span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full text-sm">Completed</span>
                                </td>
                                <td class="py-3 px-4">
                                    <div class="flex items-center gap-2">
                                        <button class="text-primary hover:text-primary-dark">
                                            <i class="material-icons text-sm">visibility</i>
                                        </button>
                                        <button class="text-gray-600 hover:text-gray-800">
                                            <i class="material-icons text-sm">analytics</i>
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

        // Form validation
        const form = document.querySelector('form');
        const requiredFields = ['title', 'due-date', 'description', 'class', 'subject'];
        const submitBtn = form.querySelector('button[type="submit"]');

        function validateForm() {
            const isValid = requiredFields.every(fieldId => {
                const field = document.getElementById(fieldId);
                return field.value.trim() !== '' && field.value !== field.querySelector('option')?.textContent;
            });

            submitBtn.disabled = !isValid;
            submitBtn.classList.toggle('opacity-50', !isValid);
            submitBtn.classList.toggle('cursor-not-allowed', !isValid);
        }

        requiredFields.forEach(fieldId => {
            const field = document.getElementById(fieldId);
            if (field) {
                field.addEventListener('input', validateForm);
                field.addEventListener('change', validateForm);
            }
        });

        // File upload handling
        const fileUpload = document.getElementById('file-upload');
        const uploadArea = fileUpload?.parentElement?.parentElement?.parentElement;

        if (uploadArea && fileUpload) {
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                uploadArea.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                uploadArea.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                uploadArea.addEventListener(eventName, unhighlight, false);
            });

            function highlight(e) {
                uploadArea.classList.add('border-primary', 'bg-blue-50');
            }

            function unhighlight(e) {
                uploadArea.classList.remove('border-primary', 'bg-blue-50');
            }

            uploadArea.addEventListener('drop', handleDrop, false);

            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                fileUpload.files = files;
            }
        }

        // Initialize form validation
        validateForm();
    </script>
</body>
</html>