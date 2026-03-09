<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Stitch Design</title>
<link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
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
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<style>
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-gray-200">
<div class="flex h-screen">
<aside class="w-80 bg-white dark:bg-background-dark flex flex-col border-r border-gray-200 dark:border-gray-700">
<div class="p-4 border-b border-gray-200 dark:border-gray-700">
<div class="flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDEbDaXeDcNtfpQFgl_bRSERhJOgc3gPmJKbGjgE8wYxJPjDmbjFArJlP5ySciCwFGjxid8IkdDdIwI7stTGY91WB8YWCe-R2KVXlvnTPREi3wlSgLFl27J6icpSgRmUamyEyVkiMYcof2TVufTPrY4_r7y7N__A2HAXx-QS45k0SzgWocqpfGzsNwo9egdtKzTu_EHyltnIMayt-ESX2Zzx8a_H-AgtIyCZsfNS5tLlYxi0W1RH5fU_oEttLfw4gtDpEUhp7Him6I");'></div>
<h1 class="text-base font-bold text-gray-900 dark:text-white">Acme Co</h1>
</div>
</div>
<nav class="flex-1 p-4 space-y-2">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"></path></svg>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"></path></svg>
<span class="text-sm font-medium">Students</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"></path></svg>
<span class="text-sm font-medium">Attendance</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 dark:bg-primary/20 text-primary" href="#">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm0,176H48V168H76.69L96,187.32A15.89,15.89,0,0,0,107.31,192h41.38A15.86,15.86,0,0,0,160,187.31L179.31,168H208v40Z"></path></svg>
<span class="text-sm font-medium">Messages</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<svg fill="currentColor" height="24" viewBox="0 0 256 256" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm88-29.84q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.21,107.21,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.71,107.71,0,0,0-26.25-10.87,8,8,0,0,0-7.06,1.49L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.21,107.21,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06Zm-16.1-6.5a73.93,73.93,0,0,1,0,8.68,8,8,0,0,0,1.74,5.48l14.19,17.73a91.57,91.57,0,0,1-6.23,15L187,173.11a8,8,0,0,0-5.1,2.64,74.11,74.11,0,0,1-6.14,6.14,8,8,0,0,0-2.64,5.1l-2.51,22.58a91.32,91.32,0,0,1-15,6.23l-17.74-14.19a8,8,0,0,0-5-1.75h-.48a73.93,73.93,0,0,1-8.68,0,8,8,0,0,0-5.48,1.74L100.45,215.8a91.57,91.57,0,0,1-15-6.23L82.89,187a8,8,0,0,0-2.64-5.1,74.11,74.11,0,0,1-6.14-6.14,8,8,0,0,0-5.1-2.64L46.43,170.6a91.32,91.32,0,0,1-6.23-15l14.19-17.74a8,8,0,0,0,1.74-5.48,73.93,73.93,0,0,1,0-8.68,8,8,0,0,0-1.74-5.48L40.2,100.45a91.57,91.57,0,0,1,6.23-15L69,82.89a8,8,0,0,0,5.1-2.64,74.11,74.11,0,0,1,6.14-6.14A8,8,0,0,0,82.89,69L85.4,46.43a91.32,91.32,0,0,1,15-6.23l17.74,14.19a8,8,0,0,0,5.48,1.74,73.93,73.93,0,0,1,8.68,0,8,8,0,0,0,5.48-1.74L155.55,40.2a91.57,91.57,0,0,1,15,6.23L173.11,69a8,8,0,0,0,2.64,5.1,74.11,74.11,0,0,1,6.14,6.14,8,8,0,0,0,5.1,2.64l22.58,2.51a91.32,91.32,0,0,1,6.23,15l-14.19,17.74A8,8,0,0,0,199.87,123.66Z"></path></svg>
<span class="text-sm font-medium">Settings</span>
</a>
</nav>
</aside>
<main class="flex-1 flex flex-col">
<header class="p-4 border-b border-gray-200 dark:border-gray-700">
<div class="flex flex-col gap-1">
<h2 class="text-2xl font-bold text-gray-900 dark:text-white">Messages</h2>
<p class="text-sm text-gray-500 dark:text-gray-400">Communicate with teachers</p>
</div>
<div class="mt-4 relative">
<span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500 dark:text-gray-400">
<svg fill="currentColor" height="20" viewBox="0 0 256 256" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path></svg>
</span>
<input class="w-full pl-10 pr-4 py-2 rounded-lg bg-gray-100 dark:bg-gray-800 border-transparent focus:border-primary focus:ring-primary text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400" placeholder="Search" type="search"/>
</div>
</header>
<div class="flex-1 flex flex-col">
<div class="p-4 border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-background-dark flex items-center gap-4">
<div class="relative">
<div class="w-14 h-14 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAqidB1cN--DwY8uyeKFxwHrctoD-7VCL4n_UO0GNOGZbARzPSzpXgqOrKBPzvVPDLynOoC2hT9S6oddK74cMQ2RlhrBn1HHAU5mMfErhomJfu2zMM8MOmrE4uznbV4YPaGRK8pJ30hIuc--CyS2dWEgrgpwn-D4fsxMI6hj8xQ-plTbItY8Jv2uMPvGH2_o3eDNBgTeJYK12-gBUqJ1gWTwHQiK_BivS1IqeGjIJDlPNNmwdVk5xu8Ds8aI4wa0OsXwFuBD6ejH2w");'></div>
<span class="absolute bottom-0 right-0 block h-3.5 w-3.5 rounded-full bg-green-500 border-2 border-white dark:border-background-dark"></span>
</div>
<div>
<p class="font-semibold text-gray-900 dark:text-white">Ms. Johnson</p>
<p class="text-sm text-gray-500 dark:text-gray-400">Math Teacher</p>
</div>
</div>
<div class="flex-1 p-4 space-y-6 overflow-y-auto">
<div class="flex items-start gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center shrink-0" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBoimeSVimIKMqf1ftb2aBJ7QSas5FyHrNZJV7hTo4s1oDMz2I5V9yLl1OSVLRU6HyHNTd8gs48ADY3oqfIMe0WCg_8i5lVGXp-TEufKQVDRazuNIoPucNrQv6u6guMgIe0YLyQRhSE_At-hp1Wnm08_ETMmdFP2srEf0n_dQ_LK_aPYTE-2AtkqNjJxMYRJUfLT9i9y20JT07YApOWbw_BRl2vsygUFoVQp3NfQByZogagTa1uO2unOFwH1JMDrYbUHSqkVqVP7dQ");'></div>
<div>
<p class="text-xs text-gray-500 dark:text-gray-400 mb-1">Ms. Johnson</p>
<div class="bg-gray-100 dark:bg-gray-800 p-3 rounded-lg rounded-tl-none max-w-md">
<p class="text-sm">Hi there, I'm happy to help with any questions you have about your child's progress in math. Feel free to ask anything!</p>
</div>
</div>
</div>
<div class="flex items-start gap-3 justify-end">
<div class="text-right">
<p class="text-xs text-gray-500 dark:text-gray-400 mb-1">Parent</p>
<div class="bg-primary text-white p-3 rounded-lg rounded-tr-none max-w-md">
<p class="text-sm">Hi Ms. Johnson, thanks for reaching out. I'm a bit concerned about Alex's recent test scores. Could we discuss his performance and any areas he might be struggling with?</p>
</div>
</div>
<div class="w-10 h-10 rounded-full bg-cover bg-center shrink-0" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCCzJRBASxAJDX9i-yeSJ-4NnpCHePLbZu2x99Jrbvao_uslOQNXcmj_1Vlj_PVl-K0aKaEv4QKQuE-zghuNsnWivmCaK0-4wVptzZY3w3iVDEPBhfEGqHY-lPwrBaZZfW3k2aF_P5Fs-J446nOJl1B0yaodYamoywUnlwwyZyo2SvtygKOimJCZSTghi2DxwRn1S1Gji1ralTjmrXtSFwvquZRuBfUTA7fVnnmllrgMXkMGno_9glfPwIr9nb3HB_UVbpJqPpjHFQ");'></div>
</div>
<div class="flex items-start gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center shrink-0" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCj2ccLYTEm7ZcnMpJT-zGVA5xsGdTIQmPpRG8kiceY20-6PDdAGHDxJjXLoe1ROtts-DZgmWi2YbDzXtmbJB90VEYfUG2yFU8k8tZFcGsjEBefKQL4Cp_cK4k8ZbyoZZbfC2SASgzKhuSCivgY7yq-zEG64bewnlDLwGQEY8JDG-YwvaWey2wcz6UO9UoqJ_E_1BXpr8EDNyB-BUDBITLMKBV61m2BRwwm_eRZKPVs7xQAGDAnJBnt8DtLyQcYyGkNHI8jhkgf3Uw");'></div>
<div>
<p class="text-xs text-gray-500 dark:text-gray-400 mb-1">Ms. Johnson</p>
<div class="bg-gray-100 dark:bg-gray-800 p-3 rounded-lg rounded-tl-none max-w-md">
<p class="text-sm">Of course, I'd be happy to discuss Alex's performance with you. Let's schedule a quick call to go over his test results and identify any areas where he might need extra support. How does tomorrow afternoon work for you?</p>
</div>
</div>
</div>
</div>
<footer class="p-4 bg-white dark:bg-background-dark border-t border-gray-200 dark:border-gray-700 flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-cover bg-center shrink-0" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAkdTHaoFQO9McsPnPz4PelF6sGO7y1wRTihdPENXgeRPrCxUhAeGXSMQoqwaYXgPgrN5VHhIb2KzaUxltMUbYJN7bZFStwE4rnL-qDwXXc72jmqbj5iGSIPhYV7JDbLBRZ-XHDuZthn_CLRRvexnXe0l90jMi9MQ4WSwsqVRFBZHF707-UDJZQL99MRPoA30G0wdkqlAY2K9W-emg5o5Bj7DRRiziF8oFHKlI1BmsxMMoufNc8xLIrzApHy2i50KLBJ3urkwjyTrs");'></div>
<div class="flex-1 relative">
<input class="w-full pr-20 py-3 pl-4 rounded-lg bg-gray-100 dark:bg-gray-800 border-transparent focus:border-primary focus:ring-primary text-gray-900 dark:text-white placeholder-gray-500 dark:placeholder-gray-400" placeholder="Write a message" type="text"/>
<div class="absolute inset-y-0 right-0 flex items-center pr-3">
<button class="p-1.5 rounded-full text-gray-500 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700">
<svg fill="currentColor" height="20" viewBox="0 0 256 256" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M216,40H40A16,16,0,0,0,24,56V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,16V158.75l-26.07-26.06a16,16,0,0,0-22.63,0l-20,20-44-44a16,16,0,0,0-22.62,0L40,149.37V56ZM40,172l52-52,80,80H40Zm176,28H194.63l-36-36,20-20L216,181.38V200ZM144,100a12,12,0,1,1,12,12A12,12,0,0,1,144,100Z"></path></svg>
</button>
<button class="ml-2 p-2 rounded-full bg-primary text-white">
<svg fill="currentColor" height="20" viewBox="0 0 256 256" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L192.69,140H40a8,8,0,0,1,0-16H192.69L138.34,69.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"></path></svg>
</button>
</div>
</div>
</footer>
</div>
</main>
</div>

</body></html>