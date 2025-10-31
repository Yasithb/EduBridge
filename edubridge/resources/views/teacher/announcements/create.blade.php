<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Announcement - EduBridge Teacher Portal</title>
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
                    <a href="/teacher/announcements/create" class="nav-link active flex items-center gap-3 px-8 py-2 rounded-lg text-sm">
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
        <main class="flex-1 md:ml-0 p-4 md:p-8">
            <!-- Header -->
            <div class="mb-8">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Create Announcement</h1>
                        <p class="text-gray-600 mt-2">Share important information with students and parents</p>
                    </div>
                </div>
            </div>

            <!-- Create Announcement Form -->
            <div class="bg-white rounded-lg shadow-sm p-6 card-hover">
                <form class="space-y-6">
                    <!-- Announcement Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                            Announcement Title
                        </label>
                        <input 
                            type="text" 
                            id="title" 
                            name="title" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Enter announcement title..."
                        >
                    </div>

                    <!-- Category -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-700 mb-2">
                            Category
                        </label>
                        <select 
                            id="category" 
                            name="category" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                        >
                            <option value="">Select category...</option>
                            <option value="general">General</option>
                            <option value="academic">Academic</option>
                            <option value="event">Event</option>
                            <option value="urgent">Urgent</option>
                            <option value="holiday">Holiday</option>
                        </select>
                    </div>

                    <!-- Target Audience -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Target Audience
                        </label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <label class="flex items-center">
                                <input type="checkbox" name="audience[]" value="students" class="mr-2">
                                <span>Students</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="audience[]" value="parents" class="mr-2">
                                <span>Parents</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="audience[]" value="teachers" class="mr-2">
                                <span>Teachers</span>
                            </label>
                        </div>
                    </div>

                    <!-- Priority Level -->
                    <div>
                        <label for="priority" class="block text-sm font-medium text-gray-700 mb-2">
                            Priority Level
                        </label>
                        <select 
                            id="priority" 
                            name="priority" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                        >
                            <option value="low">Low</option>
                            <option value="medium" selected>Medium</option>
                            <option value="high">High</option>
                            <option value="urgent">Urgent</option>
                        </select>
                    </div>

                    <!-- Content -->
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
                            Announcement Content
                        </label>
                        <textarea 
                            id="content" 
                            name="content" 
                            rows="6"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            placeholder="Enter announcement content..."
                        ></textarea>
                    </div>

                    <!-- Schedule -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="publish_date" class="block text-sm font-medium text-gray-700 mb-2">
                                Publish Date
                            </label>
                            <input 
                                type="date" 
                                id="publish_date" 
                                name="publish_date" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            >
                        </div>
                        <div>
                            <label for="expiry_date" class="block text-sm font-medium text-gray-700 mb-2">
                                Expiry Date (Optional)
                            </label>
                            <input 
                                type="date" 
                                id="expiry_date" 
                                name="expiry_date" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                            >
                        </div>
                    </div>

                    <!-- Attachment -->
                    <div>
                        <label for="attachment" class="block text-sm font-medium text-gray-700 mb-2">
                            Attachment (Optional)
                        </label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center">
                            <i class="material-icons text-4xl text-gray-400 mb-2">cloud_upload</i>
                            <p class="text-gray-600">Drag and drop files here or click to browse</p>
                            <input type="file" id="attachment" name="attachment" class="hidden">
                            <button type="button" class="mt-2 px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">
                                Choose Files
                            </button>
                        </div>
                    </div>

                    <!-- Send Email Notification -->
                    <div class="flex items-center">
                        <input type="checkbox" id="email_notification" name="email_notification" class="mr-2">
                        <label for="email_notification" class="text-sm text-gray-700">
                            Send email notification to selected audience
                        </label>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex gap-4 pt-6">
                        <button 
                            type="submit" 
                            class="flex-1 bg-primary text-white font-semibold py-3 px-6 rounded-lg hover:bg-primary-dark transition-colors"
                        >
                            <i class="material-icons mr-2">send</i>
                            Publish Announcement
                        </button>
                        <button 
                            type="button" 
                            class="px-6 py-3 border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-colors"
                        >
                            Save as Draft
                        </button>
                        <button 
                            type="button" 
                            class="px-6 py-3 border border-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-50 transition-colors"
                        >
                            Preview
                        </button>
                    </div>
                </form>
            </div>

            <!-- Quick Templates -->
            <div class="mt-8 bg-white rounded-lg shadow-sm p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Templates</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <button class="p-4 border border-gray-200 rounded-lg text-left hover:bg-gray-50 transition-colors">
                        <h4 class="font-medium text-gray-900">School Closure</h4>
                        <p class="text-sm text-gray-600 mt-1">Template for emergency closures</p>
                    </button>
                    <button class="p-4 border border-gray-200 rounded-lg text-left hover:bg-gray-50 transition-colors">
                        <h4 class="font-medium text-gray-900">Event Reminder</h4>
                        <p class="text-sm text-gray-600 mt-1">Remind about upcoming events</p>
                    </button>
                    <button class="p-4 border border-gray-200 rounded-lg text-left hover:bg-gray-50 transition-colors">
                        <h4 class="font-medium text-gray-900">Assignment Update</h4>
                        <p class="text-sm text-gray-600 mt-1">Updates about assignments</p>
                    </button>
                </div>
            </div>
        </main>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 md:hidden hidden"></div>

    <script>
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

        // File upload functionality
        const fileInput = document.getElementById('attachment');
        const uploadArea = fileInput?.parentElement;

        uploadArea?.addEventListener('click', () => {
            fileInput.click();
        });

        uploadArea?.addEventListener('dragover', (e) => {
            e.preventDefault();
            uploadArea.classList.add('border-primary', 'bg-primary/5');
        });

        uploadArea?.addEventListener('dragleave', () => {
            uploadArea.classList.remove('border-primary', 'bg-primary/5');
        });

        uploadArea?.addEventListener('drop', (e) => {
            e.preventDefault();
            uploadArea.classList.remove('border-primary', 'bg-primary/5');
            
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                // Handle file upload here
            }
        });

        // Quick template functionality
        const templateButtons = document.querySelectorAll('button[class*="p-4 border"]');
        templateButtons.forEach(button => {
            button.addEventListener('click', () => {
                const templateType = button.querySelector('h4').textContent;
                
                // Fill form based on template type
                const titleInput = document.getElementById('title');
                const contentTextarea = document.getElementById('content');
                const categorySelect = document.getElementById('category');
                
                switch(templateType) {
                    case 'School Closure':
                        titleInput.value = 'School Closure Notice';
                        contentTextarea.value = 'Due to unforeseen circumstances, the school will be closed on [DATE]. All classes and activities are canceled. Please stay safe and informed.';
                        categorySelect.value = 'urgent';
                        break;
                    case 'Event Reminder':
                        titleInput.value = 'Upcoming Event Reminder';
                        contentTextarea.value = 'This is a friendly reminder about the upcoming [EVENT NAME] scheduled for [DATE] at [TIME]. Please mark your calendars.';
                        categorySelect.value = 'event';
                        break;
                    case 'Assignment Update':
                        titleInput.value = 'Assignment Update';
                        contentTextarea.value = 'There has been an update regarding [ASSIGNMENT NAME]. Please check the details and adjust your schedule accordingly.';
                        categorySelect.value = 'academic';
                        break;
                }
            });
        });
    </script>
</body>
</html>
<link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>
<body class="font-display bg-background-light dark:bg-background-dark">
<div class="flex min-h-screen">
<aside class="w-64 bg-white dark:bg-[#1C2937] flex flex-col p-4 border-r border-gray-200 dark:border-gray-700">
<h1 class="text-xl font-bold text-gray-800 dark:text-white mb-8">Acme High</h1>
<nav class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20 rounded-lg" href="#">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"></path></svg>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20 rounded-lg" href="#">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M216,40H136V24a8,8,0,0,0-16,0V40H40A16,16,0,0,0,24,56V176a16,16,0,0,0,16,16H79.36L57.75,219a8,8,0,0,0,12.5,10l29.59-37h56.32l29.59,37a8,8,0,1,0,12.5-10l-21.61-27H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,136H40V56H216V176ZM104,120v24a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0Zm32-16v40a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm32-16v56a8,8,0,0,1-16,0V88a8,8,0,0,1,16,0Z"></path></svg>
<span>Classes</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 bg-primary/20 dark:bg-primary/30 text-primary rounded-lg" href="#">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M192,72H152.2c-2.91-.17-53.62-3.74-101.91-44.24A16,16,0,0,0,24,40V200a16,16,0,0,0,26.29,12.25c37.77-31.68,77-40.76,93.71-43.3v31.72A16,16,0,0,0,151.12,214l11,7.33A16,16,0,0,0,186.5,212l11.77-44.36A48,48,0,0,0,192,72ZM171,207.89l0,.11-11-7.33V168h21.6ZM192,152H160V88h32a32,32,0,1,1,0,64Z"></path></svg>
<span class="font-bold">Announcements</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20 rounded-lg" href="#">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"></path></svg>
<span>Calendar</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-gray-600 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20 rounded-lg" href="#">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm88-29.84q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.21,107.21,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.71,107.71,0,0,0-26.25-10.87,8,8,0,0,0-7.06,1.49L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.21,107.21,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06Zm-16.1-6.5a73.93,73.93,0,0,1,0,8.68,8,8,0,0,0,1.74,5.48l14.19,17.73a91.57,91.57,0,0,1-6.23,15L187,173.11a8,8,0,0,0-5.1,2.64,74.11,74.11,0,0,1-6.14,6.14,8,8,0,0,0-2.64,5.1l-2.51,22.58a91.32,91.32,0,0,1-15,6.23l-17.74-14.19a8,8,0,0,0-5-1.75h-.48a73.93,73.93,0,0,1-8.68,0,8,8,0,0,0-5.48,1.74L100.45,215.8a91.57,91.57,0,0,1-15-6.23L82.89,187a8,8,0,0,0-2.64-5.1,74.11,74.11,0,0,1-6.14-6.14,8,8,0,0,0-5.1-2.64L46.43,170.6a91.32,91.32,0,0,1-6.23-15l14.19-17.74a8,8,0,0,0,1.74-5.48,73.93,73.93,0,0,1,0-8.68,8,8,0,0,0-1.74-5.48L40.2,100.45a91.57,91.57,0,0,1,6.23-15L69,82.89a8,8,0,0,0,5.1-2.64,74.11,74.11,0,0,1,6.14-6.14A8,8,0,0,0,82.89,69L85.4,46.43a91.32,91.32,0,0,1,15-6.23l17.74,14.19a8,8,0,0,0,5.48,1.74,73.93,73.93,0,0,1,8.68,0,8,8,0,0,0,5.48-1.74L155.55,40.2a91.57,91.57,0,0,1,15,6.23L173.11,69a8,8,0,0,0,2.64,5.1,74.11,74.11,0,0,1,6.14,6.14,8,8,0,0,0,5.1,2.64l22.58,2.51a91.32,91.32,0,0,1,6.23,15l-14.19,17.74A8,8,0,0,0,199.87,123.66Z"></path></svg>
<span>Settings</span>
</a>
</nav>
</aside>
<main class="flex-1 p-8">
<div class="flex items-center justify-between mb-8">
<h2 class="text-3xl font-bold text-gray-800 dark:text-white">Announcements</h2>
<button class="bg-primary text-white font-bold py-2 px-4 rounded-lg flex items-center gap-2 hover:bg-primary/90">
<svg fill="currentColor" height="20" viewBox="0 0 256 256" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M224,128a8,8,0,0,1-8,8H136v80a8,8,0,0,1-16,0V136H40a8,8,0,0,1,0-16h80V40a8,8,0,0,1,16,0v80h80A8,8,0,0,1,224,128Z"></path></svg>
<span>New Announcement</span>
</button>
</div>
<div class="space-y-8">
<div>
<h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Recent Announcements</h3>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
<div class="bg-white dark:bg-[#1C2937] p-6 rounded-xl shadow-sm">
<p class="text-sm text-gray-500 dark:text-gray-400 mb-2">October 19, 2024</p>
<h4 class="text-lg font-bold text-gray-800 dark:text-white mb-2">School Closure</h4>
<p class="text-gray-600 dark:text-gray-300">Due to unforeseen circumstances, the school will be closed tomorrow, October 20th. All classes and activities are canceled. Please stay safe and informed.</p>
</div>
<div class="bg-white dark:bg-[#1C2937] p-6 rounded-xl shadow-sm">
<p class="text-sm text-gray-500 dark:text-gray-400 mb-2">October 15, 2024</p>
<h4 class="text-lg font-bold text-gray-800 dark:text-white mb-2">Parent-Teacher Conference</h4>
<p class="text-gray-600 dark:text-gray-300">Parent-Teacher Conferences are scheduled for November 5th. Please sign up for a time slot with your child's teacher.</p>
</div>
<div class="bg-white dark:bg-[#1C2937] p-6 rounded-xl shadow-sm">
<p class="text-sm text-gray-500 dark:text-gray-400 mb-2">October 10, 2024</p>
<h4 class="text-lg font-bold text-gray-800 dark:text-white mb-2">Science Fair</h4>
<p class="text-gray-600 dark:text-gray-300">The annual Science Fair will be held on December 10th. Students are encouraged to start working on their projects.</p>
</div>
</div>
</div>
<div>
<h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Past Announcements</h3>
<div class="space-y-4">
<div class="bg-white dark:bg-[#1C2937] p-4 rounded-lg flex items-center justify-between">
<div>
<p class="text-sm text-gray-500 dark:text-gray-400">September 28, 2024</p>
<p class="font-semibold text-gray-700 dark:text-gray-200">Welcome Back Assembly</p>
</div>
<a class="text-primary hover:underline text-sm" href="#">View Details</a>
</div>
<div class="bg-white dark:bg-[#1C2937] p-4 rounded-lg flex items-center justify-between">
<div>
<p class="text-sm text-gray-500 dark:text-gray-400">September 15, 2024</p>
<p class="font-semibold text-gray-700 dark:text-gray-200">Fall Sports Tryouts</p>
</div>
<a class="text-primary hover:underline text-sm" href="#">View Details</a>
</div>
<div class="bg-white dark:bg-[#1C2937] p-4 rounded-lg flex items-center justify-between">
<div>
<p class="text-sm text-gray-500 dark:text-gray-400">September 5, 2024</p>
<p class="font-semibold text-gray-700 dark:text-gray-200">First Day of School Reminders</p>
</div>
<a class="text-primary hover:underline text-sm" href="#">View Details</a>
</div>
</div>
</div>
</div>
</main>
</div>


</body></html>