<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Settings - EduBridge</title>
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
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
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
        
        .settings-card {
            background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid #e2e8f0;
        }
        
        .dark .settings-card {
            background: linear-gradient(145deg, #1e293b 0%, #334155 100%);
            border: 1px solid #475569;
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
                
                <!-- Settings (Active) -->
                <a href="/teacher/settings" class="nav-link active flex items-center gap-3 px-4 py-3 rounded-lg">
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
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="bg-primary/10 p-3 rounded-lg">
                            <span class="material-symbols-outlined text-primary text-2xl">settings</span>
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Settings</h1>
                            <p class="text-gray-600 dark:text-gray-400">Manage your preferences and system settings</p>
                        </div>
                    </div>
                </header>

                <!-- Settings Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Profile Settings -->
                    <div class="settings-card card-hover rounded-xl p-6 shadow-sm animate-slide-up">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-blue-100 dark:bg-blue-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-blue-600 text-xl">person</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Profile Settings</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">Update your personal information and profile picture</p>
                        <button class="w-full bg-primary text-white py-2 px-4 rounded-lg hover:bg-primary-dark transition-colors">
                            Edit Profile
                        </button>
                    </div>

                    <!-- Notification Settings -->
                    <div class="settings-card card-hover rounded-xl p-6 shadow-sm animate-slide-up" style="animation-delay: 0.1s;">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-green-100 dark:bg-green-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-green-600 text-xl">notifications</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Notifications</h3>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-700 dark:text-gray-300">Email Notifications</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/25 dark:peer-focus:ring-primary/50 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
                                </label>
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-700 dark:text-gray-300">SMS Alerts</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/25 dark:peer-focus:ring-primary/50 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
                                </label>
                            </div>
                            
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-700 dark:text-gray-300">Push Notifications</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" checked class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/25 dark:peer-focus:ring-primary/50 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Privacy Settings -->
                    <div class="settings-card card-hover rounded-xl p-6 shadow-sm animate-slide-up" style="animation-delay: 0.2s;">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-purple-100 dark:bg-purple-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-purple-600 text-xl">shield</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Privacy & Security</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">Manage your privacy settings and security preferences</p>
                        <button class="w-full bg-purple-600 text-white py-2 px-4 rounded-lg hover:bg-purple-700 transition-colors">
                            Security Settings
                        </button>
                    </div>

                    <!-- Class Preferences -->
                    <div class="settings-card card-hover rounded-xl p-6 shadow-sm animate-slide-up" style="animation-delay: 0.3s;">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-orange-100 dark:bg-orange-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-orange-600 text-xl">school</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Class Settings</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">Configure default settings for your classes and assignments</p>
                        <button class="w-full bg-orange-600 text-white py-2 px-4 rounded-lg hover:bg-orange-700 transition-colors">
                            Class Preferences
                        </button>
                    </div>

                    <!-- Grading Settings -->
                    <div class="settings-card card-hover rounded-xl p-6 shadow-sm animate-slide-up" style="animation-delay: 0.4s;">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-red-100 dark:bg-red-900 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-red-600 text-xl">grade</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Grading System</h3>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">Set up your grading scale and assessment preferences</p>
                        <button class="w-full bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700 transition-colors">
                            Grading Settings
                        </button>
                    </div>

                    <!-- System Preferences -->
                    <div class="settings-card card-hover rounded-xl p-6 shadow-sm animate-slide-up" style="animation-delay: 0.5s;">
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="bg-gray-100 dark:bg-gray-700 p-3 rounded-lg">
                                <span class="material-symbols-outlined text-gray-600 dark:text-gray-400 text-xl">tune</span>
                            </div>
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">System</h3>
                        </div>
                        
                        <div class="space-y-4">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-700 dark:text-gray-300">Dark Mode</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" id="dark-mode-toggle" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-primary/25 dark:peer-focus:ring-primary/50 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary"></div>
                                </label>
                            </div>
                            
                            <div>
                                <label class="block text-sm text-gray-700 dark:text-gray-300 mb-1">Language</label>
                                <select class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-sm">
                                    <option>English</option>
                                    <option>Spanish</option>
                                    <option>French</option>
                                    <option>German</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions Section -->
                <div class="mt-12 animate-slide-up" style="animation-delay: 0.6s;">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Quick Actions</h2>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <a href="/teacher/classes/students" class="flex flex-col items-center p-4 bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow">
                            <span class="material-symbols-outlined text-primary text-2xl mb-2">groups</span>
                            <span class="text-sm font-medium text-gray-900 dark:text-white text-center">View Students</span>
                        </a>
                        
                        <a href="/teacher/attendance/mark" class="flex flex-col items-center p-4 bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow">
                            <span class="material-symbols-outlined text-green-600 text-2xl mb-2">check_circle</span>
                            <span class="text-sm font-medium text-gray-900 dark:text-white text-center">Mark Attendance</span>
                        </a>
                        
                        <a href="/teacher/homework/create" class="flex flex-col items-center p-4 bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow">
                            <span class="material-symbols-outlined text-orange-600 text-2xl mb-2">add_task</span>
                            <span class="text-sm font-medium text-gray-900 dark:text-white text-center">Create Assignment</span>
                        </a>
                        
                        <a href="/teacher/grades/create" class="flex flex-col items-center p-4 bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow">
                            <span class="material-symbols-outlined text-red-600 text-2xl mb-2">grade</span>
                            <span class="text-sm font-medium text-gray-900 dark:text-white text-center">Manage Grades</span>
                        </a>
                    </div>
                </div>

                <!-- Save Settings Button -->
                <div class="mt-8 flex justify-end">
                    <button class="bg-primary text-white px-8 py-3 rounded-lg hover:bg-primary-dark transition-colors font-semibold shadow-lg">
                        Save All Settings
                    </button>
                </div>
            </div>
        </main>
    </div>

    <!-- JavaScript -->
    <script>
        // Dark mode toggle
        const darkModeToggle = document.getElementById('dark-mode-toggle');
        
        darkModeToggle.addEventListener('change', function() {
            if (this.checked) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('darkMode', 'enabled');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('darkMode', 'disabled');
            }
        });

        // Load dark mode preference
        document.addEventListener('DOMContentLoaded', function() {
            const darkMode = localStorage.getItem('darkMode');
            if (darkMode === 'enabled') {
                document.documentElement.classList.add('dark');
                darkModeToggle.checked = true;
            }
        });

        // Save settings function
        function saveSettings() {
            // Collect all settings data
            const settings = {
                notifications: {
                    email: document.querySelector('input[type="checkbox"]:nth-of-type(1)').checked,
                    sms: document.querySelector('input[type="checkbox"]:nth-of-type(2)').checked,
                    push: document.querySelector('input[type="checkbox"]:nth-of-type(3)').checked,
                },
                darkMode: darkModeToggle.checked,
                language: document.querySelector('select').value
            };
            
            console.log('Settings saved:', settings);
            
            // Show success message
            alert('Settings saved successfully!');
        }

        // Add event listener to save button
        document.querySelector('button:contains("Save All Settings")').addEventListener('click', saveSettings);
    </script>
</body>
</html>