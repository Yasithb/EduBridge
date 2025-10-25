<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
<link as="style" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter:wght@400;500;700;900" onload="this.rel='stylesheet'" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
<title>Teacher Dashboard</title>
</head>
<body class="font-display bg-background-light dark:bg-background-dark">
<div class="flex min-h-screen">
<aside class="flex flex-col w-64 bg-white dark:bg-background-dark border-r border-gray-200 dark:border-gray-800">
<div class="p-4 flex items-center gap-3">
<img alt="Teacher Avatar" class="w-10 h-10 rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3TgNg93dHtELX46JUu9WrtWosV3S9w2yFs2czsda4BNyg6-2xq0N2VW0PjGD_aFbDWXgKvP86erCJjGpDCbXB4r0ZgBw8y9eNWIAF9u_f3zMAAupFnwDdOwirSigXDeiNmkKYlAE2LMpg2kvzDGKdaf-4uDhMVjlt9n35B-5hOwQblj2sfckk6B0KxZK3j4VHM--cP5ejP4N_iRzvGY9QnZL3c9nqD49JhsUnBTvKBQWssOiecgYSM5Foh28WG88OQcMj-z2PmfU"/>
<span class="font-medium text-gray-800 dark:text-white">Ms. Evelyn Reed</span>
</div>
<nav class="flex-1 px-2 py-4 space-y-2">
<a class="flex items-center gap-3 px-4 py-2 text-sm font-medium text-white bg-primary rounded-lg" href="#">
<span class="material-symbols-outlined">dashboard</span> Dashboard
        </a>
<a class="flex items-center gap-3 px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20 rounded-lg" href="#">
<span class="material-symbols-outlined">class</span> Classes
        </a>
<a class="flex items-center gap-3 px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20 rounded-lg" href="#">
<span class="material-symbols-outlined">checklist</span> Attendance
        </a>
<a class="flex items-center gap-3 px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20 rounded-lg" href="#">
<span class="material-symbols-outlined">mail</span> Messages
        </a>
<a class="flex items-center gap-3 px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-primary/10 dark:hover:bg-primary/20 rounded-lg" href="#">
<span class="material-symbols-outlined">school</span> Exams
        </a>
</nav>
</aside>
<main class="flex-1 p-8">
<h1 class="text-3xl font-bold text-gray-900 dark:text-white">Dashboard</h1>
<div class="mt-8 space-y-8">
<div class="bg-white dark:bg-background-dark p-6 rounded-lg shadow-sm">
<h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Today's Classes</h2>
<div class="overflow-x-auto">
<table class="min-w-full text-sm">
<thead class="text-left text-gray-500 dark:text-gray-400">
<tr>
<th class="p-4 font-medium">Class</th>
<th class="p-4 font-medium">Subject</th>
<th class="p-4 font-medium">Time</th>
<th class="p-4 font-medium">Action</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-200 dark:divide-gray-800">
<tr class="text-gray-800 dark:text-gray-300">
<td class="p-4 whitespace-nowrap">Class 10A</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">Mathematics</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">9:00 AM - 10:00 AM</td>
<td class="p-4 whitespace-nowrap"><a class="text-primary font-semibold" href="#">Join</a></td>
</tr>
<tr class="text-gray-800 dark:text-gray-300">
<td class="p-4 whitespace-nowrap">Class 11B</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">Physics</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">11:00 AM - 12:00 PM</td>
<td class="p-4 whitespace-nowrap"><a class="text-primary font-semibold" href="#">Join</a></td>
</tr>
<tr class="text-gray-800 dark:text-gray-300">
<td class="p-4 whitespace-nowrap">Class 12C</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">Chemistry</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">1:00 PM - 2:00 PM</td>
<td class="p-4 whitespace-nowrap"><a class="text-primary font-semibold" href="#">Join</a></td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
<div class="bg-white dark:bg-background-dark p-6 rounded-lg shadow-sm">
<h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Pending Attendance</h2>
<div class="overflow-x-auto">
<table class="min-w-full text-sm">
<thead class="text-left text-gray-500 dark:text-gray-400">
<tr>
<th class="p-4 font-medium">Class</th>
<th class="p-4 font-medium">Subject</th>
<th class="p-4 font-medium">Date</th>
<th class="p-4 font-medium">Action</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-200 dark:divide-gray-800">
<tr class="text-gray-800 dark:text-gray-300">
<td class="p-4 whitespace-nowrap">Class 10A</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">Mathematics</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">2024-03-15</td>
<td class="p-4 whitespace-nowrap"><a class="text-primary font-semibold" href="#">Mark Attendance</a></td>
</tr>
<tr class="text-gray-800 dark:text-gray-300">
<td class="p-4 whitespace-nowrap">Class 11B</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">Physics</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">2024-03-15</td>
<td class="p-4 whitespace-nowrap"><a class="text-primary font-semibold" href="#">Mark Attendance</a></td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="bg-white dark:bg-background-dark p-6 rounded-lg shadow-sm">
<h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Unread Messages</h2>
<div class="space-y-4">
<div class="flex items-center gap-4 p-4 bg-primary/5 dark:bg-primary/10 rounded-lg">
<img alt="Principal Avatar" class="w-12 h-12 rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuADcvUBkqQLp8cd5xYW637vuPTqwFED8EN1XTPwYmuUKSF_HmUq9eZJtjCMChsW-bP_f-zl3_7HR0bqGrJ7KOZXkKul5jzrELYgEY-8v5a9_qMzcAHys6IdTlsBbGRgCxtRgPgp4iRZI5LZxGtwtGiEqGbjohTFkJUfpaheb-8SurNiD9wf5lYdMGltZ3cWRU-col1uc2NVpeeMeN_fv5eKTEd0YLXnCdET_nq95c1sZjdg-maSBDtzGQFEH43SM386wbmGaAX7EaA"/>
<div>
<p class="font-semibold text-gray-800 dark:text-white">New message from Principal</p>
<p class="text-sm text-gray-500 dark:text-gray-400">2024-03-15</p>
</div>
</div>
<div class="flex items-center gap-4 p-4 bg-primary/5 dark:bg-primary/10 rounded-lg">
<img alt="Parent Avatar" class="w-12 h-12 rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdxh1kckHfX7A3RXzCL7x9JLUt66dP2Y5RmO7OF3iGRiOPULt_LJq04TQyyoJ1Arj4YvxcJu1GzfXb945jMPxyP-EcdoLbfQuBE_wG3LUXvz2ognTh1tATBU6oAQOFXvZ7GdLJh6qlkqDdsFBRaAQZEjKTo6T9dncm-TGcHDaijnGgMssu-D9FRjVfjOwYcL5-7CG0GxvdiDEW_dVguPggCyT0irQ7Gs2fnaGJPWsWbSSzb-D9MXYt6UgflCVw8M2uqjue7eTX8TU"/>
<div>
<p class="font-semibold text-gray-800 dark:text-white">New message from Parent</p>
<p class="text-sm text-gray-500 dark:text-gray-400">2024-03-14</p>
</div>
</div>
</div>
</div>
</div>
<div class="bg-white dark:bg-background-dark p-6 rounded-lg shadow-sm">
<h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Upcoming Exams</h2>
<div class="overflow-x-auto">
<table class="min-w-full text-sm">
<thead class="text-left text-gray-500 dark:text-gray-400">
<tr>
<th class="p-4 font-medium">Exam</th>
<th class="p-4 font-medium">Subject</th>
<th class="p-4 font-medium">Date</th>
<th class="p-4 font-medium">Time</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-200 dark:divide-gray-800">
<tr class="text-gray-800 dark:text-gray-300">
<td class="p-4 whitespace-nowrap">Midterm Exam</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">Mathematics</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">2024-04-01</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">9:00 AM</td>
</tr>
<tr class="text-gray-800 dark:text-gray-300">
<td class="p-4 whitespace-nowrap">Final Exam</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">Physics</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">2024-05-15</td>
<td class="p-4 whitespace-nowrap text-gray-600 dark:text-gray-400">10:00 AM</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</main>
</div>

</body></html>