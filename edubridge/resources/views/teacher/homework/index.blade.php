@php
    $menuItems = [
        [
            'label' => 'Dashboard',
            'icon' => 'home',
            'href' => route('teacher.dashboard'),
            'active' => false,
        ],
        [
            'label' => 'Classes',
            'icon' => 'calendar_month',
            'href' => route('teacher.classes.index'),
            'active' => false,
        ],
        [
            'label' => 'Students',
            'icon' => 'group',
            'href' => route('teacher.classes.students'),
            'active' => false,
        ],
        [
            'label' => 'Homework',
            'icon' => 'description',
            'href' => route('teacher.homework.index'),
            'active' => true,
        ],
        [
            'label' => 'Attendance',
            'icon' => 'event_available',
            'href' => route('teacher.attendance.index'),
            'active' => false,
        ],
    ];

    $homeworks = [
        [
            'id' => 1,
            'title' => 'Algebra I - Chapter 5 Problems',
            'class' => 'Grade 9 - B',
            'subject' => 'Mathematics',
            'dueDate' => '2026-03-22',
            'submissions' => 28,
            'total' => 30,
            'status' => 'Active',
        ],
        [
            'id' => 2,
            'title' => 'Essay on The Great Gatsby',
            'class' => 'Grade 10 - A',
            'subject' => 'English',
            'dueDate' => '2026-03-25',
            'submissions' => 22,
            'total' => 25,
            'status' => 'Active',
        ],
        [
            'id' => 3,
            'title' => 'Photosynthesis Lab Report',
            'class' => 'Grade 10 - A',
            'subject' => 'Science',
            'dueDate' => '2026-03-20',
            'submissions' => 24,
            'total' => 25,
            'status' => 'Due Soon',
        ],
        [
            'id' => 4,
            'title' => 'Programming Assignment - Python Loops',
            'class' => 'Grade 11 - B',
            'subject' => 'ICT',
            'dueDate' => '2026-03-18',
            'submissions' => 18,
            'total' => 20,
            'status' => 'Overdue',
        ],
    ];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework - EduBridge</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        canvas: '#f5f7fb',
                        panel: '#ffffff',
                        stroke: '#d6dbe4',
                        brand: '#2583ea',
                        'brand-dark': '#1768bf',
                        'brand-soft': '#e7f1ff',
                        text: '#111827',
                        muted: '#6b7280',
                    },
                    fontFamily: {
                        display: ['Inter', 'sans-serif'],
                    },
                    boxShadow: {
                        card: '0 18px 40px -28px rgba(15, 23, 42, 0.28)',
                    },
                },
            },
        };
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
</head>
<body class="min-h-screen bg-canvas font-display text-text antialiased">
    <div id="sidebar-overlay" class="fixed inset-0 z-30 hidden bg-slate-900/45 lg:hidden"></div>

    <div class="min-h-screen lg:grid lg:grid-cols-[244px_minmax(0,1fr)]">
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-40 flex w-[244px] -translate-x-full flex-col border-r border-slate-200 bg-panel transition-transform duration-300 ease-out lg:static lg:translate-x-0">
            <div class="px-6 pt-7 pb-6">
                <h1 class="text-2xl font-extrabold tracking-tight text-slate-900">EduBridge School</h1>
            </div>

            <nav class="space-y-2 px-4">
                @foreach ($menuItems as $item)
                    <a
                        href="{{ $item['href'] }}"
                        class="flex items-center gap-3 rounded-lg px-4 py-3 text-base font-medium transition {{ $item['active'] ? 'bg-brand text-white shadow-sm' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}"
                    >
                        <span class="material-symbols-outlined text-[20px]">{{ $item['icon'] }}</span>
                        <span>{{ $item['label'] }}</span>
                    </a>
                @endforeach
            </nav>
        </aside>

        <main class="min-w-0">
            <header class="px-4 py-4 lg:hidden">
                <button id="open-sidebar" type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600">
                    <span class="material-symbols-outlined text-[22px]">menu</span>
                </button>
            </header>

            <section class="px-4 pb-12 sm:px-8 lg:px-8 lg:pt-8 xl:px-8">
                <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h2 class="text-[42px] font-extrabold tracking-[-0.03em] text-slate-900">Homework Assignments</h2>
                        <p class="mt-1 text-base text-muted">Manage and track all your homework assignments</p>
                    </div>

                    <a href="{{ route('teacher.homework.create') }}" class="inline-flex h-11 items-center justify-center gap-2 rounded-xl bg-brand px-5 text-sm font-semibold text-white transition hover:bg-brand-dark">
                        <span class="material-symbols-outlined text-[19px]">add</span>
                        <span>New Homework</span>
                    </a>
                </div>

                <!-- Stats Grid -->
                <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-2xl bg-white p-5 shadow-card ring-1 ring-slate-100">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-muted">Active</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900">24</p>
                            </div>
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100">
                                <span class="material-symbols-outlined text-xl text-blue-600">assignment</span>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white p-5 shadow-card ring-1 ring-slate-100">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-muted">Submissions</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900">156</p>
                            </div>
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-100">
                                <span class="material-symbols-outlined text-xl text-emerald-600">check_circle</span>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white p-5 shadow-card ring-1 ring-slate-100">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-muted">Due Soon</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900">5</p>
                            </div>
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-100">
                                <span class="material-symbols-outlined text-xl text-amber-600">schedule</span>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl bg-white p-5 shadow-card ring-1 ring-slate-100">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-muted">Overdue</p>
                                <p class="mt-1 text-2xl font-bold text-slate-900">3</p>
                            </div>
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-red-100">
                                <span class="material-symbols-outlined text-xl text-red-600">error</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Homework Table -->
                <div class="mt-8 rounded-3xl bg-white shadow-card ring-1 ring-slate-100">
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b border-slate-200">
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-slate-600">Title</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-slate-600">Class & Subject</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-slate-600">Due Date</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-slate-600">Submissions</th>
                                    <th class="px-6 py-4 text-left text-sm font-semibold text-slate-600">Status</th>
                                    <th class="px-6 py-4 text-right text-sm font-semibold text-slate-600">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200">
                                @foreach ($homeworks as $hw)
                                    <tr class="transition hover:bg-slate-50">
                                        <td class="px-6 py-4">
                                            <p class="font-medium text-slate-900">{{ $hw['title'] }}</p>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="space-y-1">
                                                <p class="text-sm text-slate-600">{{ $hw['class'] }}</p>
                                                <p class="text-xs text-muted">{{ $hw['subject'] }}</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <p class="text-sm text-slate-600">{{ \Carbon\Carbon::parse($hw['dueDate'])->format('M d, Y') }}</p>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <div class="h-2 w-32 overflow-hidden rounded-full bg-slate-200">
                                                    <div class="h-full bg-brand" style="width: {{ ($hw['submissions'] / $hw['total']) * 100 }}%"></div>
                                                </div>
                                                <p class="text-sm font-medium text-slate-600">{{ $hw['submissions'] }}/{{ $hw['total'] }}</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($hw['status'] === 'Active')
                                                <span class="inline-flex items-center gap-2 rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-700">
                                                    <span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span>
                                                    Active
                                                </span>
                                            @elseif ($hw['status'] === 'Due Soon')
                                                <span class="inline-flex items-center gap-2 rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-700">
                                                    <span class="h-1.5 w-1.5 rounded-full bg-amber-600"></span>
                                                    Due Soon
                                                </span>
                                            @elseif ($hw['status'] === 'Overdue')
                                                <span class="inline-flex items-center gap-2 rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-700">
                                                    <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>
                                                    Overdue
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex justify-end">
                                                <div class="flex items-center gap-2">
                                                    <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-slate-200 text-slate-600 transition hover:bg-slate-50">
                                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                                    </button>
                                                    <button type="button" class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-slate-200 text-slate-600 transition hover:bg-slate-50">
                                                        <span class="material-symbols-outlined text-[18px]">delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');
        const openSidebarButton = document.getElementById('open-sidebar');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            sidebarOverlay.classList.remove('hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
        }

        openSidebarButton.addEventListener('click', openSidebar);
        sidebarOverlay.addEventListener('click', closeSidebar);

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeSidebar();
            }
        });
    </script>
</body>
</html>
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