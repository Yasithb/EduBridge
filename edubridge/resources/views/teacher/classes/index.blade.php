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
