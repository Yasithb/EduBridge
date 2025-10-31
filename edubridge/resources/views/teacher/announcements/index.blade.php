<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements - EduBridge Teacher Portal</title>
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

        .announcement-card {
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
                    <a href="/teacher/announcements" class="nav-link active flex items-center gap-3 px-4 py-3 rounded-lg">
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
        <main class="flex-1 md:ml-0 p-4 md:p-8">
            <div class="max-w-6xl mx-auto">
                <!-- Header -->
                <header class="mb-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-4">
                            <div class="bg-primary/10 p-3 rounded-lg">
                                <i class="material-icons text-primary text-2xl">campaign</i>
                            </div>
                            <div>
                                <h1 class="text-3xl font-bold text-gray-900">Announcements</h1>
                                <p class="text-gray-600">Share important updates with students and parents</p>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <button class="bg-white text-gray-700 px-4 py-2 rounded-lg border border-gray-300 hover:bg-gray-50 transition-colors flex items-center gap-2">
                                <i class="material-icons">filter_list</i>
                                Filter
                            </button>
                            <a href="/teacher/announcements/create" class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary-dark transition-colors flex items-center gap-2">
                                <i class="material-icons">add</i>
                                New Announcement
                            </a>
                        </div>
                    </div>
                </header>

                <!-- Quick Stats -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                    <div class="announcement-card rounded-lg p-4 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-2xl font-bold text-gray-900">12</p>
                                <p class="text-sm text-gray-600">Total Announcements</p>
                            </div>
                            <div class="bg-blue-100 p-2 rounded-lg">
                                <i class="material-icons text-blue-600 text-lg">campaign</i>
                            </div>
                        </div>
                    </div>

                    <div class="announcement-card rounded-lg p-4 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-2xl font-bold text-gray-900">3</p>
                                <p class="text-sm text-gray-600">Active Today</p>
                            </div>
                            <div class="bg-green-100 p-2 rounded-lg">
                                <i class="material-icons text-green-600 text-lg">today</i>
                            </div>
                        </div>
                    </div>

                    <div class="announcement-card rounded-lg p-4 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-2xl font-bold text-gray-900">89%</p>
                                <p class="text-sm text-gray-600">Read Rate</p>
                            </div>
                            <div class="bg-orange-100 p-2 rounded-lg">
                                <i class="material-icons text-orange-600 text-lg">visibility</i>
                            </div>
                        </div>
                    </div>

                    <div class="announcement-card rounded-lg p-4 shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-2xl font-bold text-gray-900">2</p>
                                <p class="text-sm text-gray-600">Scheduled</p>
                            </div>
                            <div class="bg-purple-100 p-2 rounded-lg">
                                <i class="material-icons text-purple-600 text-lg">schedule</i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Announcements List -->
                <div class="space-y-6">
                    
                    <!-- Urgent Announcement -->
                    <div class="announcement-card card-hover rounded-xl p-6 shadow-sm border-l-4 border-red-500">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-start space-x-4">
                                <div class="bg-red-100 p-3 rounded-lg">
                                    <i class="material-icons text-red-600 text-xl">priority_high</i>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-2 mb-2">
                                        <h3 class="text-lg font-semibold text-gray-900">Urgent: Exam Schedule Update</h3>
                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                            Urgent
                                        </span>
                                    </div>
                                    <p class="text-gray-600 mb-3">The midterm exam for Mathematics has been rescheduled to March 20th due to unforeseen circumstances. Please inform all students and parents immediately.</p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span class="flex items-center"><i class="material-icons text-xs mr-1">schedule</i>Posted 2 hours ago</span>
                                        <span class="flex items-center"><i class="material-icons text-xs mr-1">groups</i>Grade 10A, 10B</span>
                                        <span class="flex items-center"><i class="material-icons text-xs mr-1">visibility</i>124 views</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-red-600 rounded-lg hover:bg-gray-100">
                                    <i class="material-icons">delete</i>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-3">
                                <button class="text-primary hover:text-primary-dark font-medium text-sm">View Details</button>
                                <button class="text-gray-600 hover:text-gray-800 text-sm">Share</button>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="bg-gray-200 rounded-full h-2 w-24">
                                    <div class="bg-red-600 h-2 rounded-full w-3/4"></div>
                                </div>
                                <span class="text-xs text-gray-500">75% read</span>
                            </div>
                        </div>
                    </div>

                    <!-- Important Announcement -->
                    <div class="announcement-card card-hover rounded-xl p-6 shadow-sm border-l-4 border-orange-500">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-start space-x-4">
                                <div class="bg-orange-100 p-3 rounded-lg">
                                    <i class="material-icons text-orange-600 text-xl">warning</i>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-2 mb-2">
                                        <h3 class="text-lg font-semibold text-gray-900">Parent-Teacher Meeting Reminder</h3>
                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-orange-100 text-orange-800">
                                            Important
                                        </span>
                                    </div>
                                    <p class="text-gray-600 mb-3">Reminder: Parent-teacher meetings are scheduled for this Friday from 2:00 PM to 5:00 PM. Please ensure you have confirmed your appointment slots with parents.</p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span class="flex items-center"><i class="material-icons text-xs mr-1">schedule</i>Posted yesterday</span>
                                        <span class="flex items-center"><i class="material-icons text-xs mr-1">groups</i>All teachers</span>
                                        <span class="flex items-center"><i class="material-icons text-xs mr-1">visibility</i>89 views</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-red-600 rounded-lg hover:bg-gray-100">
                                    <i class="material-icons">delete</i>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-3">
                                <button class="text-primary hover:text-primary-dark font-medium text-sm">View Details</button>
                                <button class="text-gray-600 hover:text-gray-800 text-sm">Share</button>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="bg-gray-200 rounded-full h-2 w-24">
                                    <div class="bg-orange-600 h-2 rounded-full w-4/5"></div>
                                </div>
                                <span class="text-xs text-gray-500">89% read</span>
                            </div>
                        </div>
                    </div>

                    <!-- General Announcement -->
                    <div class="announcement-card card-hover rounded-xl p-6 shadow-sm border-l-4 border-blue-500">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-start space-x-4">
                                <div class="bg-blue-100 p-3 rounded-lg">
                                    <i class="material-icons text-blue-600 text-xl">info</i>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-2 mb-2">
                                        <h3 class="text-lg font-semibold text-gray-900">New Library Resources Available</h3>
                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                            General
                                        </span>
                                    </div>
                                    <p class="text-gray-600 mb-3">The school library has added new mathematics and science reference books. Students can now access these resources for their projects and assignments. Digital copies are also available online.</p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span class="flex items-center"><i class="material-icons text-xs mr-1">schedule</i>Posted 3 days ago</span>
                                        <span class="flex items-center"><i class="material-icons text-xs mr-1">groups</i>All students</span>
                                        <span class="flex items-center"><i class="material-icons text-xs mr-1">visibility</i>156 views</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-red-600 rounded-lg hover:bg-gray-100">
                                    <i class="material-icons">delete</i>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-3">
                                <button class="text-primary hover:text-primary-dark font-medium text-sm">View Details</button>
                                <button class="text-gray-600 hover:text-gray-800 text-sm">Share</button>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="bg-gray-200 rounded-full h-2 w-24">
                                    <div class="bg-blue-600 h-2 rounded-full w-full"></div>
                                </div>
                                <span class="text-xs text-gray-500">100% read</span>
                            </div>
                        </div>
                    </div>

                    <!-- Scheduled Announcement -->
                    <div class="announcement-card card-hover rounded-xl p-6 shadow-sm border-l-4 border-purple-500 opacity-75">
                        <div class="flex items-start justify-between mb-4">
                            <div class="flex items-start space-x-4">
                                <div class="bg-purple-100 p-3 rounded-lg">
                                    <i class="material-icons text-purple-600 text-xl">schedule</i>
                                </div>
                                <div>
                                    <div class="flex items-center space-x-2 mb-2">
                                        <h3 class="text-lg font-semibold text-gray-900">Science Fair Preparation Guidelines</h3>
                                        <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                            Scheduled
                                        </span>
                                    </div>
                                    <p class="text-gray-600 mb-3">Guidelines for the upcoming science fair projects are now available. Students should start planning their projects and consult with their science teachers for topic approval.</p>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500">
                                        <span class="flex items-center"><i class="material-icons text-xs mr-1">schedule</i>Scheduled for tomorrow</span>
                                        <span class="flex items-center"><i class="material-icons text-xs mr-1">groups</i>Grade 9-12</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-2">
                                <button class="p-2 text-gray-400 hover:text-gray-600 rounded-lg hover:bg-gray-100">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-red-600 rounded-lg hover:bg-gray-100">
                                    <i class="material-icons">delete</i>
                                </button>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex space-x-3">
                                <button class="text-primary hover:text-primary-dark font-medium text-sm">Edit Schedule</button>
                                <button class="text-gray-600 hover:text-gray-800 text-sm">Preview</button>
                            </div>
                            <span class="text-xs text-purple-600 font-medium">Will publish tomorrow at 9:00 AM</span>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center mt-8">
                    <nav class="flex space-x-2">
                        <button class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                            Previous
                        </button>
                        <button class="px-3 py-2 text-sm font-medium text-white bg-primary border border-primary rounded-lg">
                            1
                        </button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                            2
                        </button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                            3
                        </button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                            Next
                        </button>
                    </nav>
                </div>
            </div>
        </main>
    </div>

    <!-- Mobile Sidebar Overlay -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 md:hidden hidden"></div>

    <!-- JavaScript -->
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

        // Announcement actions
        function editAnnouncement(id) {
            console.log('Editing announcement:', id);
            window.location.href = '/teacher/announcements/' + id + '/edit';
        }

        function deleteAnnouncement(id) {
            if (confirm('Are you sure you want to delete this announcement?')) {
                console.log('Deleting announcement:', id);
                // Here you would send a delete request to your backend
                alert('Announcement deleted successfully!');
            }
        }

        function shareAnnouncement(id) {
            console.log('Sharing announcement:', id);
            // Copy link to clipboard or show sharing options
            alert('Announcement link copied to clipboard!');
        }

        function viewAnnouncementDetails(id) {
            console.log('Viewing announcement details:', id);
            // Navigate to detailed view or show modal
        }

        // Filter functionality
        function filterAnnouncements() {
            console.log('Filtering announcements...');
            // Implement filter logic here
        }

        // Initialize tooltips or other UI enhancements
        document.addEventListener('DOMContentLoaded', function() {
            console.log('Announcements page loaded');
        });
    </script>
</body>
</html>
