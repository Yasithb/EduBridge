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
