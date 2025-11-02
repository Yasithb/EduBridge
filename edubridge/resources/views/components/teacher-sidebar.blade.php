<!-- Teacher Sidebar Component -->
<aside class="w-64 bg-white dark:bg-gray-800 shadow-lg border-r border-gray-200 dark:border-gray-700 hidden lg:flex flex-col">
    <div class="gradient-bg h-16 flex items-center px-6">
        <h1 class="text-xl font-bold text-white">EduBridge Teacher</h1>
    </div>
    
    <nav class="flex-1 px-4 py-6 space-y-2">
        <!-- Dashboard -->
        <a href="/teacher/dashboard" class="nav-link {{ request()->is('teacher/dashboard') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-lg {{ request()->is('teacher/dashboard') ? '' : 'text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="font-medium">Dashboard</span>
        </a>
        
        <!-- Classes -->
        <div class="space-y-1">
            <a href="/teacher/classes" class="nav-link {{ request()->is('teacher/classes*') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-lg {{ request()->is('teacher/classes*') ? '' : 'text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined">school</span>
                <span class="font-medium">Classes</span>
            </a>
            <a href="/teacher/classes/students" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm {{ request()->is('teacher/classes/students') ? 'text-blue-100 bg-primary/20' : 'text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined text-sm">groups</span>
                <span>View Students</span>
            </a>
        </div>
        
        <!-- Attendance -->
        <div class="space-y-1">
            <a href="/teacher/attendance" class="nav-link {{ request()->is('teacher/attendance*') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-lg {{ request()->is('teacher/attendance*') ? '' : 'text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined">how_to_reg</span>
                <span class="font-medium">Attendance</span>
            </a>
            <a href="/teacher/attendance/mark" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm {{ request()->is('teacher/attendance/mark') ? 'text-blue-100 bg-primary/20' : 'text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined text-sm">check_circle</span>
                <span>Mark Attendance</span>
            </a>
        </div>
        
        <!-- Grades -->
        <div class="space-y-1">
            <a href="/teacher/grades" class="nav-link {{ request()->is('teacher/grades*') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-lg {{ request()->is('teacher/grades*') ? '' : 'text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined">grade</span>
                <span class="font-medium">Grades</span>
            </a>
            <a href="/teacher/grades/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm {{ request()->is('teacher/grades/create') ? 'text-blue-100 bg-primary/20' : 'text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined text-sm">add_circle</span>
                <span>Create/Edit Grades</span>
            </a>
        </div>
        
        <!-- Homework -->
        <div class="space-y-1">
            <a href="/teacher/homework" class="nav-link {{ request()->is('teacher/homework*') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-lg {{ request()->is('teacher/homework*') ? '' : 'text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined">assignment</span>
                <span class="font-medium">Homework</span>
            </a>
            <a href="/teacher/homework/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm {{ request()->is('teacher/homework/create') ? 'text-blue-100 bg-primary/20' : 'text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined text-sm">add_task</span>
                <span>Create Assignment</span>
            </a>
        </div>
        
        <!-- Messages -->
        <div class="space-y-1">
            <a href="/teacher/messages" class="nav-link {{ request()->is('teacher/messages*') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-lg {{ request()->is('teacher/messages*') ? '' : 'text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined">message</span>
                <span class="font-medium">Messages</span>
            </a>
            <a href="/teacher/messages/chat" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm {{ request()->is('teacher/messages/chat') ? 'text-blue-100 bg-primary/20' : 'text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined text-sm">chat</span>
                <span>Chat</span>
            </a>
        </div>
        
        <!-- Reports -->
        <div class="space-y-1">
            <a href="/teacher/reports" class="nav-link {{ request()->is('teacher/reports*') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-lg {{ request()->is('teacher/reports*') ? '' : 'text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-medium">Reports</span>
            </a>
            <a href="/teacher/reports/generate" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm {{ request()->is('teacher/reports/generate') ? 'text-blue-100 bg-primary/20' : 'text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined text-sm">bar_chart</span>
                <span>Generate Report</span>
            </a>
        </div>
        
        <!-- Announcements -->
        <div class="space-y-1">
            <a href="/teacher/announcements" class="nav-link {{ request()->is('teacher/announcements*') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-lg {{ request()->is('teacher/announcements*') ? '' : 'text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined">campaign</span>
                <span class="font-medium">Announcements</span>
            </a>
            <a href="/teacher/announcements/create" class="nav-link flex items-center gap-3 px-8 py-2 rounded-lg text-sm {{ request()->is('teacher/announcements/create') ? 'text-blue-100 bg-primary/20' : 'text-gray-600 dark:text-gray-400 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
                <span class="material-symbols-outlined text-sm">add_box</span>
                <span>Create Announcement</span>
            </a>
        </div>
        
        <!-- Settings -->
        <a href="/teacher/settings" class="nav-link {{ request()->is('teacher/settings') ? 'active' : '' }} flex items-center gap-3 px-4 py-3 rounded-lg {{ request()->is('teacher/settings') ? '' : 'text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20' }}">
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