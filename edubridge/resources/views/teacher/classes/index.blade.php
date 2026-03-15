@php
    $classes = [
        [
            'name' => 'Mathematics 101',
            'subject' => 'Algebra',
            'grade' => '10th Grade',
            'students' => 28,
        ],
        [
            'name' => 'English Literature',
            'subject' => 'Classic Novels',
            'grade' => '11th Grade',
            'students' => 25,
        ],
        [
            'name' => 'Science Fundamentals',
            'subject' => 'Biology',
            'grade' => '9th Grade',
            'students' => 32,
        ],
        [
            'name' => 'History of Civilization',
            'subject' => 'World History',
            'grade' => '10th Grade',
            'students' => 30,
        ],
        [
            'name' => 'Computer Science Basics',
            'subject' => 'Programming',
            'grade' => '12th Grade',
            'students' => 22,
        ],
    ];
    $navigationItems = [
        [
            'label' => 'Dashboard',
            'icon' => 'dashboard',
            'href' => route('teacher.dashboard'),
            'active' => request()->routeIs('teacher.dashboard'),
        ],
        [
            'label' => 'Classes',
            'icon' => 'school',
            'href' => route('teacher.classes.index'),
            'active' => request()->routeIs('teacher.classes.*'),
        ],
        [
            'label' => 'Students',
            'icon' => 'group',
            'href' => route('teacher.classes.students'),
            'active' => request()->routeIs('teacher.classes.students'),
        ],
        [
            'label' => 'Assignments',
            'icon' => 'assignment',
            'href' => route('teacher.homework.index'),
            'active' => request()->routeIs('teacher.homework.*'),
        ],
        [
            'label' => 'Grades',
            'icon' => 'grade',
            'href' => route('teacher.grades.index'),
            'active' => request()->routeIs('teacher.grades.*'),
        ],
    ];

    $totalStudents = array_sum(array_column($classes, 'students'));
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Classes - EduBridge</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            DEFAULT: '#2186eb',
                            dark: '#166dca',
                            soft: '#e8f2ff',
                        },
                        page: '#f4f7fb',
                        ink: '#1f2937',
                        muted: '#64748b',
                        line: '#e2e8f0',
                    },
                    boxShadow: {
                        panel: '0 24px 60px -36px rgba(15, 23, 42, 0.35)',
                    },
                    fontFamily: {
                        display: ['Inter', 'sans-serif'],
                    },
                },
            },
        };
</script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
</head>
<body class="min-h-screen bg-page font-display text-ink antialiased">
    <div id="sidebar-overlay" class="fixed inset-0 z-30 hidden bg-slate-900/40 lg:hidden"></div>

    <div class="min-h-screen lg:grid lg:grid-cols-[196px_minmax(0,1fr)]">
        <aside id="teacher-sidebar" class="fixed inset-y-0 left-0 z-40 flex w-[196px] -translate-x-full flex-col border-r border-line bg-white transition-transform duration-300 ease-out lg:static lg:translate-x-0">
            <div class="flex items-center gap-3 border-b border-line px-6 py-6">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand text-white shadow-sm">
                    <span class="material-symbols-outlined text-[22px]">layers</span>
                </div>
                <div>
                    <p class="text-[24px] font-bold tracking-tight text-slate-900">EduBridge</p>
                </div>
            </div>

            <nav class="flex-1 space-y-1 px-3 py-4">
                @foreach ($navigationItems as $item)
                    <a
                        href="{{ $item['href'] }}"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-[15px] font-medium transition {{ $item['active'] ? 'bg-brand-soft text-brand shadow-sm' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }}"
                    >
                        <span class="material-symbols-outlined text-[20px]">{{ $item['icon'] }}</span>
                        <span>{{ $item['label'] }}</span>
                    </a>
                @endforeach
            </nav>

            <div class="border-t border-line px-5 py-4">
                <div class="flex items-center justify-between gap-3">
                    <div>
                        <p class="text-[15px] font-semibold text-slate-900">John Doe</p>
                        <p class="text-sm text-slate-500">Teacher</p>
                    </div>
                    <a href="{{ route('teacher.settings') }}" class="inline-flex h-10 w-10 items-center justify-center rounded-xl text-slate-500 transition hover:bg-slate-100 hover:text-slate-900" aria-label="Open settings">
                        <span class="material-symbols-outlined text-[20px]">logout</span>
                    </a>
                </div>
            </div>
        </aside>

