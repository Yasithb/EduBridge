<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Homework - EduBridge</title>
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
                
                <!-- Homework (Active) -->
                <div class="space-y-1">
                    <a href="/teacher/homework" class="nav-link active flex items-center gap-3 px-4 py-3 rounded-lg">
                        <span class="material-symbols-outlined">assignment</span>
                        <span class="font-medium">Homework</span>
                    </a>
                    <a href="/teacher/homework/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm text-blue-100 bg-primary/20">
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
                                <span class="material-symbols-outlined text-primary text-2xl">assignment</span>
                            </div>
                            <div>
                                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Create Assignment</h1>
                                <p class="text-gray-600 dark:text-gray-400">Design and distribute homework assignments to your students</p>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Basic Information Card -->
                <form id="homework-form" class="space-y-8">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6 card-hover animate-fade-in">
                        <div class="flex items-center space-x-3 mb-6">
                            <div class="bg-primary/10 p-2 rounded-lg">
                                <span class="material-symbols-outlined text-primary text-xl">info</span>
                            </div>
                            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Basic Information</h2>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Homework Title -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Assignment Title *</label>
                                <input 
                                    type="text" 
                                    id="title" 
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                                    placeholder="e.g., Quadratic Equations Practice"
                                    required
                                >
                            </div>

                            <!-- Subject -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Subject *</label>
                                <select class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                                    <option value="">Select Subject</option>
                                    <option value="mathematics">Mathematics</option>
                                    <option value="science">Science</option>
                                    <option value="english">English</option>
                                    <option value="history">History</option>
                                    <option value="geography">Geography</option>
                                    <option value="physics">Physics</option>
                                    <option value="chemistry">Chemistry</option>
                                    <option value="biology">Biology</option>
                                </select>
                            </div>

                            <!-- Class/Grade -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Class/Grade *</label>
                                <select class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                                    <option value="">Select Class</option>
                                    <option value="grade-6">Grade 6 - Section A</option>
                                    <option value="grade-7">Grade 7 - Section B</option>
                                    <option value="grade-8">Grade 8 - Section A</option>
                                    <option value="grade-9">Grade 9 - Section A</option>
                                    <option value="grade-10">Grade 10 - Section B</option>
                                    <option value="grade-11">Grade 11 - Section A</option>
                                    <option value="grade-12">Grade 12 - Section C</option>
                                </select>
                            </div>

                            <!-- Priority -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Priority Level</label>
                                <div class="flex space-x-4">
                                    <label class="flex items-center">
                                        <input type="radio" name="priority" value="high" class="text-primary focus:ring-primary">
                                        <span class="ml-2 px-3 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">High</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="priority" value="medium" class="text-primary focus:ring-primary" checked>
                                        <span class="ml-2 px-3 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">Medium</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="radio" name="priority" value="low" class="text-primary focus:ring-primary">
                                        <span class="ml-2 px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Low</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- Assignment Details Card -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6 animate-slide-up">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="bg-secondary/10 p-2 rounded-lg">
                            <span class="material-symbols-outlined text-secondary text-xl">description</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Assignment Details</h2>
                    </div>

                    <!-- Description -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Description/Instructions *</label>
                        <textarea 
                            rows="6" 
                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white resize-none"
                            placeholder="Provide detailed instructions for the homework assignment..."
                            required
                        ></textarea>
                        <div class="flex justify-between items-center mt-2">
                            <p class="text-sm text-gray-500 dark:text-gray-400">Be clear and specific about what students need to do</p>
                            <span class="text-sm text-gray-500 dark:text-gray-400">0/500</span>
                        </div>
                    </div>

                    <!-- Learning Objectives -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Learning Objectives</label>
                        <div id="objectives-container" class="space-y-2">
                            <div class="flex items-center space-x-2">
                                <input 
                                    type="text" 
                                    class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                                    placeholder="e.g., Understand quadratic equations"
                                >
                                <button type="button" onclick="addObjective()" class="p-2 text-primary hover:bg-primary/10 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Grading Criteria -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Total Points</label>
                            <input 
                                type="number" 
                                min="1" 
                                max="100" 
                                value="10"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                            >
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Submission Type</label>
                            <select class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white">
                                <option value="online">Online Submission</option>
                                <option value="paper">Paper Submission</option>
                                <option value="both">Both Online & Paper</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Schedule & Deadlines Card -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6 animate-slide-up" style="animation-delay: 0.1s;">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="bg-green-100 dark:bg-green-900 p-2 rounded-lg">
                            <span class="material-symbols-outlined text-green-600 text-xl">schedule</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Schedule & Deadlines</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Assignment Date -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Assignment Date *</label>
                            <input 
                                type="date" 
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                                required
                            >
                        </div>

                        <!-- Due Date -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Due Date *</label>
                            <input 
                                type="date" 
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                                required
                            >
                        </div>

                        <!-- Due Time -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Due Time</label>
                            <input 
                                type="time" 
                                value="23:59"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                            >
                        </div>
                    </div>

                    <!-- Estimated Duration -->
                    <div class="mt-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Estimated Duration</label>
                        <div class="flex space-x-4">
                            <div class="flex items-center space-x-2">
                                <input type="number" min="0" max="23" value="1" class="w-20 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-center">
                                <span class="text-sm text-gray-600 dark:text-gray-400">hours</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <input type="number" min="0" max="59" value="30" class="w-20 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-center">
                                <span class="text-sm text-gray-600 dark:text-gray-400">minutes</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Attachments & Resources Card -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6 animate-slide-up" style="animation-delay: 0.2s;">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="bg-purple-100 dark:bg-purple-900 p-2 rounded-lg">
                            <span class="material-symbols-outlined text-purple-600 text-xl">attach_file</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Attachments & Resources</h2>
                    </div>

                    <!-- File Upload Area -->
                    <div class="border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-lg p-8 text-center hover:border-primary transition-colors">
                        <div class="space-y-4">
                            <div class="bg-primary/10 w-16 h-16 rounded-full flex items-center justify-center mx-auto">
                                <span class="material-symbols-outlined text-primary text-2xl">cloud_upload</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-medium text-gray-900 dark:text-white">Upload Files</h3>
                                <p class="text-gray-500 dark:text-gray-400">Drag and drop files here, or click to browse</p>
                                <p class="text-sm text-gray-400 dark:text-gray-500">Supported formats: PDF, DOC, DOCX, PNG, JPG (Max 10MB)</p>
                            </div>
                            <button type="button" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-primary-dark transition-colors">
                                Choose Files
                            </button>
                        </div>
                    </div>

                    <!-- Sample Attachments -->
                    <div class="mt-6 space-y-3">
                        <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300">Attached Files:</h4>
                        <div class="space-y-2">
                            <div class="attachment-preview flex items-center justify-between p-3 rounded-lg border border-gray-200 dark:border-gray-600">
                                <div class="flex items-center space-x-3">
                                    <div class="bg-red-100 dark:bg-red-900 p-2 rounded">
                                        <span class="material-symbols-outlined text-red-600 text-sm">picture_as_pdf</span>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-900 dark:text-white">Chapter_5_Exercises.pdf</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">2.3 MB</p>
                                    </div>
                                </div>
                                <button class="text-gray-400 hover:text-red-500 transition-colors">
                                    <span class="material-symbols-outlined text-sm">delete</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- External Resources -->
                    <div class="mt-6">
                        <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">External Resources (URLs)</label>
                        <div id="resources-container" class="space-y-2">
                            <div class="flex items-center space-x-2">
                                <input 
                                    type="url" 
                                    class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                                    placeholder="https://example.com/resource"
                                >
                                <button type="button" onclick="addResource()" class="p-2 text-primary hover:bg-primary/10 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined">add</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Settings Card -->
                <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6 animate-slide-up" style="animation-delay: 0.3s;">
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="bg-orange-100 dark:bg-orange-900 p-2 rounded-lg">
                            <span class="material-symbols-outlined text-orange-600 text-xl">settings</span>
                        </div>
                        <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Additional Settings</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Settings Checkboxes -->
                        <div class="space-y-4">
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-primary focus:ring-primary" checked>
                                <span class="ml-3 text-sm text-gray-700 dark:text-gray-300">Allow late submissions</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-primary focus:ring-primary">
                                <span class="ml-3 text-sm text-gray-700 dark:text-gray-300">Send email notifications</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-primary focus:ring-primary" checked>
                                <span class="ml-3 text-sm text-gray-700 dark:text-gray-300">Visible to students immediately</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-primary focus:ring-primary">
                                <span class="ml-3 text-sm text-gray-700 dark:text-gray-300">Allow resubmissions</span>
                            </label>
                        </div>

                        <!-- Late Penalty -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Late Submission Penalty</label>
                            <div class="flex items-center space-x-2">
                                <input 
                                    type="number" 
                                    min="0" 
                                    max="100" 
                                    value="10"
                                    class="w-20 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white text-center"
                                >
                                <span class="text-sm text-gray-600 dark:text-gray-400">% per day</span>
                            </div>
                            <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Deduction for late submissions</p>
                        </div>
                    </div>
                </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-end pt-6 border-t border-gray-200 dark:border-gray-700">
                        <button type="button" onclick="window.history.back()" class="px-8 py-3 text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-700 border border-gray-300 dark:border-gray-600 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-600 transition-colors font-medium">
                            Cancel
                        </button>
                        <button type="button" onclick="saveDraft()" class="px-8 py-3 text-primary bg-primary/10 border border-primary rounded-lg hover:bg-primary/20 transition-colors font-medium">
                            Save as Draft
                        </button>
                        <button type="submit" class="px-8 py-3 bg-primary text-white rounded-lg hover:bg-primary-dark transition-colors font-semibold shadow-lg">
                            Create Assignment
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <!-- Success Modal -->
    <div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-2xl max-w-md w-full transform transition-all">
                <div class="text-center">
                    <div class="bg-green-100 dark:bg-green-900 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <span class="material-symbols-outlined text-green-600 text-3xl">check_circle</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Assignment Created!</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">The homework assignment has been successfully created and distributed to students.</p>
                    <div class="flex gap-3 justify-center">
                        <button onclick="closeSuccessModal()" class="bg-gray-100 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                            Continue
                        </button>
                        <a href="/teacher/homework" class="bg-primary text-white px-6 py-2 rounded-lg hover:bg-primary-dark transition-colors">
                            View All Assignments
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Add Learning Objective
        function addObjective() {
            const container = document.getElementById('objectives-container');
            const div = document.createElement('div');
            div.className = 'flex items-center space-x-2';
            div.innerHTML = `
                <input 
                    type="text" 
                    class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                    placeholder="Add another learning objective"
                >
                <button type="button" onclick="removeObjective(this)" class="p-2 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors">
                    <span class="material-symbols-outlined">remove</span>
                </button>
            `;
            container.appendChild(div);
        }

        // Remove Learning Objective
        function removeObjective(button) {
            button.parentElement.remove();
        }

        // Add External Resource
        function addResource() {
            const container = document.getElementById('resources-container');
            const div = document.createElement('div');
            div.className = 'flex items-center space-x-2';
            div.innerHTML = `
                <input 
                    type="url" 
                    class="flex-1 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent bg-white dark:bg-gray-700 text-gray-900 dark:text-white"
                    placeholder="https://example.com/resource"
                >
                <button type="button" onclick="removeResource(this)" class="p-2 text-red-500 hover:bg-red-50 dark:hover:bg-red-900/20 rounded-lg transition-colors">
                    <span class="material-symbols-outlined">remove</span>
                </button>
            `;
            container.appendChild(div);
        }

        // Remove External Resource
        function removeResource(button) {
            button.parentElement.remove();
        }

        // Save as Draft
        function saveDraft() {
            // Here you would save the form data as draft
            alert('Assignment saved as draft!');
        }

        // Form submission
        document.getElementById('homework-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Basic form validation
            const title = document.getElementById('title').value;
            const subject = document.querySelector('select').value;
            const description = document.querySelector('textarea').value;
            
            if (!title || !subject || !description) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // Show success modal
            document.getElementById('success-modal').classList.remove('hidden');
            
            // Here you would typically send the data to your backend
            console.log('Assignment created successfully!');
        });

        function closeSuccessModal() {
            document.getElementById('success-modal').classList.add('hidden');
        }

        // Character counter for description
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.querySelector('textarea');
            if (textarea) {
                textarea.addEventListener('input', function() {
                    const length = this.value.length;
                    const maxLength = 500;
                    const counterElement = this.parentNode.querySelector('.text-gray-500:last-child');
                    if (counterElement) {
                        counterElement.textContent = `${length}/${maxLength}`;
                        if (length > maxLength) {
                            counterElement.classList.add('text-red-500');
                            counterElement.classList.remove('text-gray-500');
                        } else {
                            counterElement.classList.remove('text-red-500');
                            counterElement.classList.add('text-gray-500');
                        }
                    }
                });
            }

            // Set default dates
            const today = new Date();
            const nextWeek = new Date(today);
            nextWeek.setDate(nextWeek.getDate() + 7);

            // Set assignment date to today
            const assignmentDate = document.querySelector('input[type="date"]:first-of-type');
            if (assignmentDate) {
                assignmentDate.value = today.toISOString().split('T')[0];
            }

            // Set due date to next week
            const dueDate = document.querySelector('input[type="date"]:nth-of-type(2)');
            if (dueDate) {
                dueDate.value = nextWeek.toISOString().split('T')[0];
            }
        });

        // File upload handling
        const fileUploadArea = document.querySelector('.border-dashed');
        if (fileUploadArea) {
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                fileUploadArea.addEventListener(eventName, preventDefaults, false);
            });

            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ['dragenter', 'dragover'].forEach(eventName => {
                fileUploadArea.addEventListener(eventName, highlight, false);
            });

            ['dragleave', 'drop'].forEach(eventName => {
                fileUploadArea.addEventListener(eventName, unhighlight, false);
            });

            function highlight(e) {
                fileUploadArea.classList.add('border-primary', 'bg-blue-50');
            }

            function unhighlight(e) {
                fileUploadArea.classList.remove('border-primary', 'bg-blue-50');
            }

            fileUploadArea.addEventListener('drop', handleDrop, false);

            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                console.log('Files dropped:', files);
                // Handle file upload here
            }
        }
    </script>
</body>
</html>