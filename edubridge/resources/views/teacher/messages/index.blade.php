<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages - EduBridge Teacher Portal</title>
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
        
        .message-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .message-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
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
                    <a href="/teacher/messages" class="nav-link active flex items-center gap-3 px-4 py-3 rounded-lg">
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

        <!-- Main Content -->
        <main class="flex-1 md:ml-0 flex flex-col min-h-screen">
            <!-- Header -->
            <header class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="bg-primary/10 p-3 rounded-lg">
                            <i class="material-icons text-primary text-2xl">message</i>
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Messages</h1>
                            <p class="text-gray-600 dark:text-gray-400">Communicate with students, parents, and colleagues</p>
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        <button class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition-colors flex items-center gap-2">
                            <i class="material-icons">add</i>
                            New Message
                        </button>
                    </div>
                </div>
            </header>

            <!-- Messages Content -->
            <div class="flex flex-1">
                <!-- Message List -->
                <div class="w-1/3 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 overflow-y-auto">
                    <div class="p-4 border-b border-gray-200 dark:border-gray-700">
                        <div class="relative">
                            <i class="material-icons absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">search</i>
                            <input type="text" placeholder="Search messages..." class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                        </div>
                    </div>

                    <!-- Message Threads -->
                    <div class="space-y-1 p-2">
                        <!-- Unread Message -->
                        <div class="message-card p-4 rounded-lg bg-blue-50 dark:bg-blue-900/20 border-l-4 border-blue-500 cursor-pointer">
                            <div class="flex items-start space-x-3">
                                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b47c?w=40&h=40&fit=crop&crop=face" alt="Parent" class="w-10 h-10 rounded-full object-cover">
                                <div class="flex-1 min-w-0">
                                    <div class="flex justify-between items-start">
                                        <p class="text-sm font-semibold text-gray-900 dark:text-white">Sarah Johnson</p>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">10:30 AM</span>
                                    </div>
                                    <p class="text-xs text-gray-600 dark:text-gray-300 mb-1">Parent of Emma Johnson</p>
                                    <p class="text-sm text-gray-700 dark:text-gray-300 truncate">Thank you for the homework update. Emma is working on...</p>
                                    <div class="flex justify-between items-center mt-2">
                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200">
                                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-1"></span>
                                            Unread
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Read Message -->
                        <div class="message-card p-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer">
                            <div class="flex items-start space-x-3">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=40&h=40&fit=crop&crop=face" alt="Principal" class="w-10 h-10 rounded-full object-cover">
                                <div class="flex-1 min-w-0">
                                    <div class="flex justify-between items-start">
                                        <p class="text-sm font-semibold text-gray-900 dark:text-white">Dr. Michael Chen</p>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">Yesterday</span>
                                    </div>
                                    <p class="text-xs text-gray-600 dark:text-gray-300 mb-1">Principal</p>
                                    <p class="text-sm text-gray-700 dark:text-gray-300 truncate">Faculty meeting scheduled for next week. Please confirm...</p>
                                </div>
                            </div>
                        </div>

                        <!-- Another Message -->
                        <div class="message-card p-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer">
                            <div class="flex items-start space-x-3">
                                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=40&h=40&fit=crop&crop=face" alt="Colleague" class="w-10 h-10 rounded-full object-cover">
                                <div class="flex-1 min-w-0">
                                    <div class="flex justify-between items-start">
                                        <p class="text-sm font-semibold text-gray-900 dark:text-white">Prof. Lisa Wang</p>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">2 days ago</span>
                                    </div>
                                    <p class="text-xs text-gray-600 dark:text-gray-300 mb-1">Science Department</p>
                                    <p class="text-sm text-gray-700 dark:text-gray-300 truncate">Could you share the mathematics worksheet for grade 10?</p>
                                </div>
                            </div>
                        </div>

                        <!-- Group Message -->
                        <div class="message-card p-4 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 cursor-pointer">
                            <div class="flex items-start space-x-3">
                                <div class="w-10 h-10 bg-green-100 dark:bg-green-900 rounded-full flex items-center justify-center">
                                    <i class="material-icons text-green-600 text-lg">groups</i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex justify-between items-start">
                                        <p class="text-sm font-semibold text-gray-900 dark:text-white">Grade 10A Parents</p>
                                        <span class="text-xs text-gray-500 dark:text-gray-400">3 days ago</span>
                                    </div>
                                    <p class="text-xs text-gray-600 dark:text-gray-300 mb-1">Group Chat • 24 members</p>
                                    <p class="text-sm text-gray-700 dark:text-gray-300 truncate">Reminder: Parent-teacher meeting on Friday at 2 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Message Details -->
                <div class="flex-1 flex flex-col bg-gray-50 dark:bg-gray-900">
                    <!-- Selected Conversation Header -->
                    <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 p-6">
                        <div class="flex items-center space-x-4">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b47c?w=50&h=50&fit=crop&crop=face" alt="Sarah Johnson" class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Sarah Johnson</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">Parent of Emma Johnson • Grade 10A</p>
                            </div>
                            <div class="ml-auto flex space-x-2">
                                <button class="p-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="material-icons">phone</i>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="material-icons">videocam</i>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="material-icons">more_vert</i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Messages -->
                    <div class="flex-1 overflow-y-auto p-6 space-y-4">
                        <!-- Received Message -->
                        <div class="flex items-start space-x-3">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b47c?w=32&h=32&fit=crop&crop=face" alt="Sarah" class="w-8 h-8 rounded-full object-cover">
                            <div class="max-w-xs lg:max-w-md">
                                <div class="bg-white dark:bg-gray-800 p-3 rounded-lg shadow-sm">
                                    <p class="text-sm text-gray-900 dark:text-white">Hello Mr. Doe, I wanted to thank you for the detailed homework update you sent yesterday. Emma has been working diligently on her mathematics assignments.</p>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">10:15 AM</p>
                            </div>
                        </div>

                        <!-- Sent Message -->
                        <div class="flex items-start space-x-3 flex-row-reverse">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=32&h=32&fit=crop&crop=face" alt="Teacher" class="w-8 h-8 rounded-full object-cover">
                            <div class="max-w-xs lg:max-w-md">
                                <div class="bg-primary text-white p-3 rounded-lg shadow-sm">
                                    <p class="text-sm">You're very welcome, Mrs. Johnson! Emma is doing excellent work in class. Her problem-solving skills have improved significantly this semester.</p>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1 text-right">10:20 AM</p>
                            </div>
                        </div>

                        <!-- New Message -->
                        <div class="flex items-start space-x-3">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b47c?w=32&h=32&fit=crop&crop=face" alt="Sarah" class="w-8 h-8 rounded-full object-cover">
                            <div class="max-w-xs lg:max-w-md">
                                <div class="bg-white dark:bg-gray-800 p-3 rounded-lg shadow-sm border-l-4 border-blue-500">
                                    <p class="text-sm text-gray-900 dark:text-white">That's wonderful to hear! She mentioned that you're covering quadratic equations next week. Is there anything I can do to help her prepare at home?</p>
                                    <div class="flex items-center mt-2">
                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200">
                                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-1"></span>
                                            New
                                        </span>
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">10:30 AM</p>
                            </div>
                        </div>
                    </div>

                    <!-- Message Input -->
                    <div class="bg-white dark:bg-gray-800 border-t border-gray-200 dark:border-gray-700 p-4">
                        <div class="flex items-end space-x-3">
                            <div class="flex-1">
                                <textarea placeholder="Type your message..." rows="3" class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white resize-none"></textarea>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <button class="p-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <i class="material-icons">attach_file</i>
                                </button>
                                <button onclick="sendMessage()" class="bg-primary text-white p-3 rounded-lg hover:bg-primary-dark transition-colors">
                                    <i class="material-icons">send</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden md:hidden"></div>

    <!-- JavaScript -->
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

        // Message functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Auto-resize textarea
            const textarea = document.querySelector('textarea');
            textarea.addEventListener('input', function() {
                this.style.height = 'auto';
                this.style.height = Math.min(this.scrollHeight, 120) + 'px';
            });

            // Send message on Enter (but not Shift+Enter)
            textarea.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' && !e.shiftKey) {
                    e.preventDefault();
                    sendMessage();
                }
            });
        });

        function sendMessage() {
            const textarea = document.querySelector('textarea');
            const message = textarea.value.trim();
            
            if (message) {
                console.log('Sending message:', message);
                textarea.value = '';
                textarea.style.height = 'auto';
                
                // Here you would typically send the message to your backend
                alert('Message sent: ' + message);
            }
        }

        // Search functionality
        function searchMessages() {
            const searchInput = document.querySelector('input[placeholder="Search messages..."]');
            const searchTerm = searchInput.value.toLowerCase();
            console.log('Searching for:', searchTerm);
            // Implement search functionality here
        }
    </script>
</body>
</html>
