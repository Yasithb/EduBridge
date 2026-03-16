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
            'href' => route('teacher.homework.create'),
            'active' => true,
        ],
        [
            'label' => 'Attendance',
            'icon' => 'event_available',
            'href' => route('teacher.attendance.index'),
            'active' => false,
        ],
    ];

    $classOptions = [
        'Grade 8 - A',
        'Grade 9 - B',
        'Grade 10 - A',
        'Grade 11 - B',
        'Grade 12 - A',
    ];

    $subjectOptions = [
        'Mathematics',
        'Science',
        'English',
        'History',
        'Biology',
        'ICT',
    ];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Homework - EduBridge</title>
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
                <div class="flex flex-col gap-5 sm:flex-row sm:items-start sm:justify-between">
                    <div>
                        <h2 class="text-[42px] font-extrabold tracking-[-0.03em] text-slate-900">Homework</h2>
                    </div>

                    <button id="reset-form-button" type="button" class="inline-flex h-10 items-center justify-center gap-2 rounded-xl bg-brand px-5 text-sm font-semibold text-white transition hover:bg-brand-dark">
                        <span class="material-symbols-outlined text-[19px]">add</span>
                        <span>New Homework</span>
                    </button>
                </div>

                <div class="mt-8 rounded-3xl bg-white p-6 shadow-card ring-1 ring-slate-100 sm:p-8 lg:p-10">
                    <div class="max-w-[760px]">
                        <h3 class="text-[22px] font-bold text-slate-900">Create Homework</h3>

                        <form id="homework-form" class="mt-7 space-y-6">
                            <div>
                                <label for="homework-title" class="mb-2 block text-base font-medium text-slate-800">Title</label>
                                <input id="homework-title" name="title" type="text" placeholder="e.g. Algebra I - Chapter 5 Problems" class="h-11 w-full rounded-md border border-stroke bg-white px-4 text-base text-slate-800 outline-none transition focus:border-brand focus:ring-4 focus:ring-brand/10" required>
                            </div>

                            <div>
                                <label for="homework-description" class="mb-2 block text-base font-medium text-slate-800">Description</label>
                                <textarea id="homework-description" name="description" rows="5" placeholder="e.g. Complete exercises 1-10 on page 256. Show all your work." class="w-full rounded-md border border-stroke bg-white px-4 py-3 text-base text-slate-800 outline-none transition focus:border-brand focus:ring-4 focus:ring-brand/10 resize-none" required></textarea>
                            </div>

                            <div class="grid gap-6 md:grid-cols-2">
                                <div>
                                    <label for="homework-class" class="mb-2 block text-base font-medium text-slate-800">Class</label>
                                    <div class="relative">
                                        <select id="homework-class" name="class" class="h-11 w-full appearance-none rounded-md border border-stroke bg-white px-4 pr-10 text-base text-slate-800 outline-none transition focus:border-brand focus:ring-4 focus:ring-brand/10" required>
                                            <option value="" selected disabled>Select a class</option>
                                            @foreach ($classOptions as $classOption)
                                                <option value="{{ $classOption }}">{{ $classOption }}</option>
                                            @endforeach
                                        </select>
                                        <span class="material-symbols-outlined pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-slate-500">expand_more</span>
                                    </div>
                                </div>

                                <div>
                                    <label for="homework-subject" class="mb-2 block text-base font-medium text-slate-800">Subject</label>
                                    <div class="relative">
                                        <select id="homework-subject" name="subject" class="h-11 w-full appearance-none rounded-md border border-stroke bg-white px-4 pr-10 text-base text-slate-800 outline-none transition focus:border-brand focus:ring-4 focus:ring-brand/10" required>
                                            <option value="" selected disabled>Select a subject</option>
                                            @foreach ($subjectOptions as $subjectOption)
                                                <option value="{{ $subjectOption }}">{{ $subjectOption }}</option>
                                            @endforeach
                                        </select>
                                        <span class="material-symbols-outlined pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-slate-500">expand_more</span>
                                    </div>
                                </div>
                            </div>

                            <div class="max-w-[560px]">
                                <label for="homework-due-date" class="mb-2 block text-base font-medium text-slate-800">Due Date</label>
                                <input id="homework-due-date" name="due_date" type="date" class="h-11 w-full rounded-md border border-stroke bg-white px-4 text-base text-slate-800 outline-none transition focus:border-brand focus:ring-4 focus:ring-brand/10" required>
                            </div>

                            <div>
                                <label class="mb-2 block text-base font-medium text-slate-800">Attachments</label>
                                <input id="attachment-input" type="file" class="hidden" multiple accept=".pdf,.doc,.docx,.png,.jpg,.jpeg">
                                <div id="upload-zone" class="flex min-h-[134px] cursor-pointer flex-col items-center justify-center rounded-md border-2 border-dashed border-slate-300 bg-slate-50 px-6 py-8 text-center transition hover:border-brand hover:bg-brand-soft/40">
                                    <span class="material-symbols-outlined text-[42px] text-slate-400">upload_file</span>
                                    <p class="mt-3 text-sm text-slate-600">
                                        <button id="upload-trigger" type="button" class="font-semibold text-brand hover:text-brand-dark">Upload a file</button>
                                        <span> or drag and drop</span>
                                    </p>
                                    <p class="mt-1 text-sm text-slate-400">PDF, DOCX, PNG, JPG up to 10MB</p>
                                </div>
                                <div id="attachment-list" class="mt-4 hidden space-y-2"></div>
                            </div>

                            <div id="form-status" class="hidden rounded-md border px-4 py-3 text-sm"></div>

                            <div class="flex flex-wrap items-center justify-end gap-3 pt-2">
                                <a href="{{ route('teacher.homework.index') }}" class="inline-flex h-11 items-center justify-center rounded-xl border border-slate-200 px-5 text-sm font-semibold text-slate-600 transition hover:bg-slate-100">Cancel</a>
                                <button type="submit" class="inline-flex h-11 items-center justify-center rounded-xl bg-brand px-5 text-sm font-semibold text-white transition hover:bg-brand-dark">Create Homework</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebar-overlay');
        const openSidebarButton = document.getElementById('open-sidebar');

        const form = document.getElementById('homework-form');
        const resetFormButton = document.getElementById('reset-form-button');
        const uploadZone = document.getElementById('upload-zone');
        const uploadTrigger = document.getElementById('upload-trigger');
        const attachmentInput = document.getElementById('attachment-input');
        const attachmentList = document.getElementById('attachment-list');
        const formStatus = document.getElementById('form-status');
        let selectedFiles = [];

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            sidebarOverlay.classList.remove('hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
        }

        function formatBytes(bytes) {
            if (bytes < 1024) {
                return `${bytes} B`;
            }

            if (bytes < 1048576) {
                return `${(bytes / 1024).toFixed(1)} KB`;
            }

            return `${(bytes / 1048576).toFixed(1)} MB`;
        }

        function renderAttachments(files) {
            attachmentList.innerHTML = '';

            if (!files.length) {
                attachmentList.classList.add('hidden');
                return;
            }

            attachmentList.classList.remove('hidden');

            Array.from(files).forEach(function (file) {
                const item = document.createElement('div');
                item.className = 'flex items-center justify-between rounded-md border border-slate-200 bg-slate-50 px-4 py-3';
                item.innerHTML = `
                    <div class="flex items-center gap-3 min-w-0">
                        <span class="material-symbols-outlined text-slate-500">attach_file</span>
                        <div class="min-w-0">
                            <p class="truncate text-sm font-medium text-slate-800">${file.name}</p>
                            <p class="text-xs text-slate-500">${formatBytes(file.size)}</p>
                        </div>
                    </div>
                `;
                attachmentList.appendChild(item);
            });
        }

        function showStatus(message, type) {
            formStatus.textContent = message;
            formStatus.className = 'rounded-md border px-4 py-3 text-sm';

            if (type === 'success') {
                formStatus.classList.add('border-emerald-200', 'bg-emerald-50', 'text-emerald-800');
            } else {
                formStatus.classList.add('border-amber-200', 'bg-amber-50', 'text-amber-800');
            }
        }

        openSidebarButton.addEventListener('click', openSidebar);
        sidebarOverlay.addEventListener('click', closeSidebar);

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeSidebar();
            }
        });

        uploadTrigger.addEventListener('click', function () {
            attachmentInput.click();
        });

        uploadZone.addEventListener('click', function () {
            attachmentInput.click();
        });

        attachmentInput.addEventListener('change', function () {
            selectedFiles = Array.from(attachmentInput.files);
            renderAttachments(selectedFiles);
        });

        uploadZone.addEventListener('dragover', function (event) {
            event.preventDefault();
            uploadZone.classList.add('border-brand', 'bg-brand-soft');
        });

        uploadZone.addEventListener('dragleave', function () {
            uploadZone.classList.remove('border-brand', 'bg-brand-soft');
        });

        uploadZone.addEventListener('drop', function (event) {
            event.preventDefault();
            uploadZone.classList.remove('border-brand', 'bg-brand-soft');

            if (event.dataTransfer.files.length) {
                selectedFiles = Array.from(event.dataTransfer.files);
                renderAttachments(selectedFiles);
            }
        });

        resetFormButton.addEventListener('click', function () {
            form.reset();
            attachmentInput.value = '';
            selectedFiles = [];
            renderAttachments([]);
            formStatus.className = 'hidden rounded-md border px-4 py-3 text-sm';
        });

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            if (!form.reportValidity()) {
                showStatus('Please complete the required homework details before creating the assignment.', 'warning');
                return;
            }

            showStatus('Homework frontend is ready. Connect this form to a Laravel controller to save the assignment and upload files permanently.', 'success');
        });
    </script>
</body>
</html>