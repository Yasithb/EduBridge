@php
	$students = [
		'Emma Johnson',
		'Liam Perera',
		'Noah Fernando',
		'Olivia Silva',
		'Ethan Jayasuriya',
	];

	$periods = [
		'Term 1 - 2026',
		'Term 2 - 2026',
		'Term 3 - 2026',
		'Yearly Summary - 2026',
	];

	$reportTypes = [
		'Academic Progress',
		'Attendance Summary',
		'Behavior and Conduct',
		'Complete Progress Pack',
	];

	$navItems = [
		[
			'label' => 'Dashboard',
			'icon' => 'dashboard',
			'href' => route('teacher.dashboard'),
			'active' => false,
		],
		[
			'label' => 'Students',
			'icon' => 'group',
			'href' => route('teacher.classes.students'),
			'active' => false,
		],
		[
			'label' => 'Classes',
			'icon' => 'book_2',
			'href' => route('teacher.classes.index'),
			'active' => false,
		],
		[
			'label' => 'Reports',
			'icon' => 'description',
			'href' => route('teacher.reports.generate'),
			'active' => true,
		],
		[
			'label' => 'Settings',
			'icon' => 'settings',
			'href' => route('teacher.settings'),
			'active' => false,
		],
	];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Progress Reports - EduBridge</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<script>
		tailwind.config = {
			theme: {
				extend: {
					colors: {
						canvas: '#f3f4f6',
						panel: '#ffffff',
						stroke: '#d1d5db',
						brand: '#1f7ae8',
						'brand-soft': '#dbeafe',
						text: '#111827',
						muted: '#6b7280',
					},
					fontFamily: {
						display: ['Inter', 'sans-serif'],
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
	<div id="mobile-overlay" class="fixed inset-0 z-30 hidden bg-black/40 lg:hidden"></div>

	<div class="min-h-screen lg:grid lg:grid-cols-[246px_minmax(0,1fr)]">
		<aside id="sidebar" class="fixed inset-y-0 left-0 z-40 flex w-[246px] -translate-x-full flex-col border-r border-stroke bg-panel transition-transform duration-300 ease-out lg:static lg:translate-x-0">
			<div class="px-6 pt-7 pb-6">
				<h1 class="text-4xl font-bold tracking-[-0.02em] leading-none text-slate-900">Acme School</h1>
			</div>

			<nav class="space-y-1 px-4 pb-4">
				@foreach ($navItems as $item)
					<a
						href="{{ $item['href'] }}"
						class="flex items-center gap-3 rounded-xl px-4 py-3 text-[15px] font-medium transition {{ $item['active'] ? 'bg-brand-soft text-brand' : 'text-slate-500 hover:bg-slate-100 hover:text-slate-900' }}"
					>
						<span class="material-symbols-outlined text-[20px]">{{ $item['icon'] }}</span>
						<span>{{ $item['label'] }}</span>
					</a>
				@endforeach
			</nav>

			<div class="mt-auto p-4">
				<button type="button" class="flex w-full items-center justify-center gap-2 rounded-none bg-slate-100 px-4 py-4 text-[15px] font-medium text-slate-800 transition hover:bg-slate-200">
					<span class="material-symbols-outlined text-[20px]">logout</span>
					<span>Logout</span>
				</button>
			</div>
		</aside>

		<main class="min-w-0">
			<header class="px-4 py-4 lg:hidden">
				<button id="open-sidebar" type="button" class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-stroke bg-white text-slate-600">
					<span class="material-symbols-outlined text-[22px]">menu</span>
				</button>
			</header>

			<section class="px-4 pb-10 sm:px-7 lg:px-16 lg:pt-8">
				<div class="max-w-[760px]">
					<h2 class="text-5xl font-extrabold tracking-[-0.03em] text-slate-900">Progress Reports</h2>
					<p class="mt-2 text-lg text-slate-500">Generate and view progress reports for your students.</p>

					<form id="report-form" class="mt-10 max-w-[430px] space-y-8">
						<div class="space-y-3">
							<label for="student" class="block text-[15px] font-medium text-slate-800">Select Student</label>
							<div class="relative">
								<select id="student" name="student" class="h-12 w-full appearance-none rounded-none border border-stroke bg-white px-4 pr-10 text-[15px] text-slate-800 outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/20" required>
									<option value="" selected disabled>Select a student...</option>
									@foreach ($students as $student)
										<option value="{{ $student }}">{{ $student }}</option>
									@endforeach
								</select>
								<span class="material-symbols-outlined pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-slate-500">expand_more</span>
							</div>
						</div>

						<div class="space-y-3">
							<label for="period" class="block text-[15px] font-medium text-slate-800">Report Period</label>
							<div class="relative">
								<select id="period" name="period" class="h-12 w-full appearance-none rounded-none border border-stroke bg-white px-4 pr-10 text-[15px] text-slate-800 outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/20" required>
									<option value="" selected disabled>Select a period...</option>
									@foreach ($periods as $period)
										<option value="{{ $period }}">{{ $period }}</option>
									@endforeach
								</select>
								<span class="material-symbols-outlined pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-slate-500">expand_more</span>
							</div>
						</div>

						<div class="space-y-3">
							<label for="type" class="block text-[15px] font-medium text-slate-800">Report Type</label>
							<div class="relative">
								<select id="type" name="type" class="h-12 w-full appearance-none rounded-none border border-stroke bg-white px-4 pr-10 text-[15px] text-slate-800 outline-none transition focus:border-brand focus:ring-2 focus:ring-brand/20" required>
									<option value="" selected disabled>Select a type...</option>
									@foreach ($reportTypes as $reportType)
										<option value="{{ $reportType }}">{{ $reportType }}</option>
									@endforeach
								</select>
								<span class="material-symbols-outlined pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-slate-500">expand_more</span>
							</div>
						</div>

						<div class="flex flex-wrap gap-4 pt-3">
							<button id="preview-btn" type="button" class="inline-flex h-12 items-center justify-center gap-2 bg-brand px-6 text-[15px] font-semibold text-white transition hover:bg-blue-700">
								<span class="material-symbols-outlined text-[20px]">visibility</span>
								<span>Preview Report</span>
							</button>
							<button type="submit" class="inline-flex h-12 items-center justify-center gap-2 bg-brand-soft px-6 text-[15px] font-semibold text-brand transition hover:bg-blue-200">
								<span class="material-symbols-outlined text-[20px]">send</span>
								<span>Generate &amp; Send</span>
							</button>
						</div>
					</form>

					<div id="status-message" class="mt-6 hidden max-w-[600px] rounded-md border px-4 py-3 text-sm"></div>

					<div id="preview-card" class="mt-7 hidden max-w-[600px] border border-slate-200 bg-white p-5">
						<h3 class="text-base font-semibold text-slate-900">Report Preview</h3>
						<p class="mt-3 text-sm text-slate-600"><span class="font-medium text-slate-800">Student:</span> <span id="preview-student"></span></p>
						<p class="mt-1 text-sm text-slate-600"><span class="font-medium text-slate-800">Period:</span> <span id="preview-period"></span></p>
						<p class="mt-1 text-sm text-slate-600"><span class="font-medium text-slate-800">Type:</span> <span id="preview-type"></span></p>
						<p class="mt-4 text-sm text-slate-500">This preview confirms selected inputs. Connect this page to your controller and PDF service to generate a final document.</p>
					</div>
				</div>
			</section>
		</main>
	</div>

	<script>
		const sidebar = document.getElementById('sidebar');
		const overlay = document.getElementById('mobile-overlay');
		const openSidebarButton = document.getElementById('open-sidebar');

		const form = document.getElementById('report-form');
		const previewButton = document.getElementById('preview-btn');
		const statusMessage = document.getElementById('status-message');
		const previewCard = document.getElementById('preview-card');

		const studentField = document.getElementById('student');
		const periodField = document.getElementById('period');
		const typeField = document.getElementById('type');

		const previewStudent = document.getElementById('preview-student');
		const previewPeriod = document.getElementById('preview-period');
		const previewType = document.getElementById('preview-type');

		function openSidebar() {
			sidebar.classList.remove('-translate-x-full');
			overlay.classList.remove('hidden');
		}

		function closeSidebar() {
			sidebar.classList.add('-translate-x-full');
			overlay.classList.add('hidden');
		}

		function showStatus(text, isSuccess) {
			statusMessage.textContent = text;
			statusMessage.classList.remove('hidden', 'border-emerald-200', 'bg-emerald-50', 'text-emerald-800', 'border-amber-200', 'bg-amber-50', 'text-amber-800');

			if (isSuccess) {
				statusMessage.classList.add('border-emerald-200', 'bg-emerald-50', 'text-emerald-800');
			} else {
				statusMessage.classList.add('border-amber-200', 'bg-amber-50', 'text-amber-800');
			}
		}

		function hasValidSelection() {
			return studentField.value && periodField.value && typeField.value;
		}

		openSidebarButton.addEventListener('click', openSidebar);
		overlay.addEventListener('click', closeSidebar);

		document.addEventListener('keydown', function (event) {
			if (event.key === 'Escape') {
				closeSidebar();
			}
		});

		previewButton.addEventListener('click', function () {
			if (!form.reportValidity()) {
				showStatus('Please select student, period, and report type before previewing.', false);
				return;
			}

			previewStudent.textContent = studentField.value;
			previewPeriod.textContent = periodField.value;
			previewType.textContent = typeField.value;
			previewCard.classList.remove('hidden');

			showStatus('Preview is ready. Review details, then click Generate & Send.', true);
		});

		form.addEventListener('submit', function (event) {
			event.preventDefault();

			if (!hasValidSelection()) {
				showStatus('Please complete all fields to generate the report.', false);
				return;
			}

			showStatus('Report generation is queued successfully. Connect this form to backend logic to create and send the final report.', true);
		});
	</script>
</body>
</html>
