<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8"/>
<link crossorigin="" href="https://fonts.gstatic.com/" rel="preconnect"/>
<link as="style" href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900" onload="this.rel='stylesheet'" rel="stylesheet"/>
<title>Stitch Design</title>
<link href="data:image/x-icon;base64," rel="icon" type="image/x-icon"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              primary: "#137fec",
              "background-light": "#f6f7f8",
              "background-dark": "#101922",
              "content-light": "#ffffff",
              "content-dark": "#1f2937",
              "text-primary-light": "#111827",
              "text-primary-dark": "#f9fafb",
              "text-secondary-light": "#6b7280",
              "text-secondary-dark": "#9ca3af",
              "border-light": "#e5e7eb",
              "border-dark": "#374151",
            },
            fontFamily: {
              display: ["Inter"],
            },
            borderRadius: { DEFAULT: "0.5rem", lg: "0.75rem", xl: "1rem", full: "9999px" },
          },
        },
      };
    </script>
</head>
<body class="bg-background-light dark:bg-background-dark font-display">
<div class="flex h-screen">
<aside class="w-96 flex flex-col border-r border-border-light dark:border-border-dark bg-content-light dark:bg-content-dark">
<div class="p-4 border-b border-border-light dark:border-border-dark">
<div class="relative">
<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
<svg class="w-5 h-5 text-text-secondary-light dark:text-text-secondary-dark" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</div>
<input class="w-full pl-10 pr-4 py-2 rounded-lg bg-background-light dark:bg-background-dark text-text-primary-light dark:text-text-primary-dark placeholder-text-secondary-light dark:placeholder-text-secondary-dark focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Search" type="text"/>
</div>
</div>
<div class="flex-1 overflow-y-auto">
<nav>
<ul>
<li>
<a class="flex items-center gap-4 p-4 hover:bg-background-light dark:hover:bg-background-dark bg-primary/10 dark:bg-primary/20 border-r-2 border-primary" href="#">
<div class="relative">
<img alt="Emily Carter" class="h-12 w-12 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTuAE6wqIDJN2abngaLYO0qvYYnzmiKuJFsWszU8jtD0HbD58vgaj1D7ykDMNTyVvxRiAnhwGzhVmjWfOlss1pLG5SWde7bSTTzL3oIdGkYGFpGJ6WDIQXZiewrwyQTGrrTl_PoEESOPneJwllFApXvi5h0iqIKN6oJdt0K015Rk_9hzzHSd5JGVnZrOwJOdABJcVtEoprsHabSYbKSvZ_ufTa2fCor5hkoVNkbukzmYRAqqKIt70VQGSPiiLxLiSdS_oqOc5ezwc"/>
<span class="absolute bottom-0 right-0 block h-3 w-3 rounded-full bg-green-500 border-2 border-content-light dark:border-content-dark"></span>
</div>
<div class="flex-1">
<div class="flex justify-between items-center">
<h3 class="text-base font-medium text-text-primary-light dark:text-text-primary-dark">Emily Carter</h3>
<span class="text-xs text-text-secondary-light dark:text-text-secondary-dark">3:00 PM</span>
</div>
<p class="text-sm text-text-secondary-light dark:text-text-secondary-dark truncate">Sounds good, Emily. I'll send you a...</p>
</div>
</a>
</li>
<li>
<a class="flex items-center gap-4 p-4 hover:bg-background-light dark:hover:bg-background-dark" href="#">
<img alt="Liam Harper" class="h-12 w-12 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3JZlwUizzFmPQjWYFbVT6bSLR2D7G8rXici1TG81rWXT9nzDgR-d-uSgGMNPgQecw51pTKzj_qPu9UmmfO6ahUF5ReeWfR9dcwE4PBk6BPlGFWcVynV-jTTwJ01j-iNlq2VBpBS6qveKUb6iuscUrSuqClQ7ysFCJdP7foz-1Ax39wHVM0SubNpqGfmrRW0GVV3Hgzn2xECrL3MMShapmGYCys_lgoE_G-Vx2UNfTjBDb1QnrNUDp9GsoOak9ga0EZxRfkG7CNs4"/>
<div class="flex-1">
<div class="flex justify-between items-center">
<h3 class="text-base font-medium text-text-primary-light dark:text-text-primary-dark">Liam Harper</h3>
<span class="text-xs text-text-secondary-light dark:text-text-secondary-dark">Yesterday</span>
</div>
<p class="text-sm text-text-secondary-light dark:text-text-secondary-dark truncate">Can we reschedule our meeting?</p>
</div>
</a>
</li>
<li>
<a class="flex items-center gap-4 p-4 hover:bg-background-light dark:hover:bg-background-dark" href="#">
<img alt="Olivia Bennett" class="h-12 w-12 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDozsn6gYyN-0kOKsolYwBlRJ1B09DvdzBpTN_hsZO8P59sBvLIjn0PSMM2BYFb1S_da1H4bJMoSUhkZwgYCWg6fNQkljT_9sr_0SFR7Ys00-w1_2IjOB0GOgXjAnj7Vfr6_4SI8Rk8nFK4eQP8bPmsYw39ZEiDZO23oFXdSETSvovE-TenRc65nQyLxgu3EAHg4d99insx9sFOWE3lVkGiQ9yVn9YP6QLpjhVnfNUEDYvn7uQqsquOMgY6N1qlSxosjrnI3WDidrU"/>
<div class="flex-1">
<div class="flex justify-between items-center">
<h3 class="text-base font-medium text-text-primary-light dark:text-text-primary-dark">Olivia Bennett</h3>
<span class="text-xs text-text-secondary-light dark:text-text-secondary-dark">2 days ago</span>
</div>
<p class="text-sm text-text-secondary-light dark:text-text-secondary-dark truncate">Thank you for the update!</p>
</div>
</a>
</li>
<li>
<a class="flex items-center gap-4 p-4 hover:bg-background-light dark:hover:bg-background-dark" href="#">
<img alt="Noah Foster" class="h-12 w-12 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-GDLBjOjXKzseRyDBhtbiqHcylumGYfo_57Z7TJwaGTnRjyfgqEYHe_7Pc92DPjEWJhLmAuMPPFvKXGURsSLO1LAEsEf-0-mchgnziEwFwAzMM1VeMZbaGs7wAFMkEelMyxFYdLY5s0iJfu4SxBEU7HyQigENH_MMX4o_VvRrwdvb4bPs2-Jdsf2wrEiFtsr3tXjKgwc5DenVDhKlt82y0ZtmSRFIRlisYndH3uDv6ax1RZL9WhYl0Fdd3s7967yklJOWjYhDdeg"/>
<div class="flex-1">
<div class="flex justify-between items-center">
<h3 class="text-base font-medium text-text-primary-light dark:text-text-primary-dark">Noah Foster</h3>
<span class="text-xs text-text-secondary-light dark:text-text-secondary-dark">Mar 20</span>
</div>
<p class="text-sm text-text-secondary-light dark:text-text-secondary-dark truncate">Just wanted to confirm the time.</p>
</div>
</a>
</li>
</ul>
</nav>
</div>
</aside>
<main class="flex-1 flex flex-col">
<header class="flex items-center justify-between p-4 border-b border-border-light dark:border-border-dark bg-content-light dark:bg-content-dark">
<div class="flex items-center gap-4">
<img alt="Emily Carter" class="h-12 w-12 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdodSroCpovStgCFMNqhHK0Tit1ySTZ9zq9hw-oiD7TSd7JUwKDS__lt7r_x4FnJU5mvQE-Pqd6XA8e8UjNeIY_kLYZit2KusiSoNbAKBstIczPDXSIXGJBn5KZU1JoeaOeB--WqXXMig_asZkbO-2dSLNSqv8NBRLe5m4VTfavCGsPOVlsTOGjUUHs08UqY4FvG5RD7k_O8zAg9q8sF2Y2yIOSJJLmJMNSAXNisgMVnIDOcTh0fOpzSWWFJQnsi1zqgl2B2MtwQg"/>
<div>
<h2 class="text-xl font-bold text-text-primary-light dark:text-text-primary-dark">Emily Carter</h2>
<p class="text-sm text-text-secondary-light dark:text-text-secondary-dark">Parent of Sarah (Grade 1)</p>
</div>
</div>
<div class="flex items-center gap-2">
<button class="p-2 rounded-full hover:bg-background-light dark:hover:bg-background-dark text-text-secondary-light dark:text-text-secondary-dark">
<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</button>
<button class="p-2 rounded-full hover:bg-background-light dark:hover:bg-background-dark text-text-secondary-light dark:text-text-secondary-dark">
<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</button>
<button class="p-2 rounded-full hover:bg-background-light dark:hover:bg-background-dark text-text-secondary-light dark:text-text-secondary-dark">
<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</button>
</div>
</header>
<div class="flex-1 overflow-y-auto p-6 space-y-6">
<div class="flex items-end gap-3">
<img alt="Emily Carter" class="h-10 w-10 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAPm_Wkt8eNN-5wfHWGmnkJ5rI87PXVdRkFJjT42bWZRxZi0-nR1-FvGjuoXq78TKaR2Tyc341HTJQ5kU_xlTSBCcMoFQkIc7LqYQa-1sMt4mV_mdRKXiu006c85hS9UMqcSOaRV7CXASN2M2TQelsC66hETO7nZ95dFSLwEI5-n7Z-XpZTXydhDEAcke-Lr0Ldjmt2E7aGAYe7LR107e2XAwbwm2vpUbpqr0z8ItyqMggDf1uu1ESmJFeP0g8zm5kIa7uf0t7owTw"/>
<div class="max-w-md">
<div class="bg-background-light dark:bg-background-dark rounded-lg p-3">
<p class="text-sm text-text-primary-light dark:text-text-primary-dark">
                  Hi Ms. Johnson, I wanted to check in on how Sarah is doing in class. She mentioned having some difficulty with the math unit.
                </p>
</div>
<span class="text-xs text-text-secondary-light dark:text-text-secondary-dark mt-1">Emily Carter • 2:55 PM</span>
</div>
</div>
<div class="flex items-end gap-3 justify-end">
<div class="max-w-md text-right">
<div class="bg-primary rounded-lg p-3">
<p class="text-sm text-white">
                  Hi Emily, thanks for reaching out. Sarah is a bright student, but she has been struggling a bit with the new concepts. We're working on it, and I'm available to
                  discuss this further if you'd like.
                </p>
</div>
<span class="text-xs text-text-secondary-light dark:text-text-secondary-dark mt-1">Ms. Johnson • 2:58 PM</span>
</div>
<img alt="Ms. Johnson" class="h-10 w-10 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBToXp6sG1AYFP0j__CiN7rqxAULkmmt8EK0oCpwZSxNQR7uUQYYPSOZRJuUMNToXp3Xt4A2vCv5VBM6SleFrgyT_w-jDPwiTFu0MD2Zur8HpzlQkySdthcM1jGc8-xRRKEbf4Ou-G1FmircA_dlMNtKQ2lkPBH0wWAXpJTQEuidhGbIJ9byySIhy3X-_9l4Sy3B_Md27kvGSEVqvmu8q8--9ThirtnnMxzvc_oZOoDytlmNHgqlcMK8ztuLHa1vgh7EM8NOieLswI"/>
</div>
<div class="flex items-end gap-3">
<img alt="Emily Carter" class="h-10 w-10 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAf9dnX9cV9IuasYoIRqQ6eBjnNaP1jPYnKERD66iPBnO5p_8QftVjNxwX195prbUj9Ye36rxXDuWckVIC-XMysyhP6Lz8bhqNWrZg2AnmidPViUYIKFtFf6JTiUXd7zGrYAnuUtSJamvIRaHprbD6P9G3tFJR4p-sL35OcBhZ15wFQo7lGMrFFCEYHwr3qlPoowKR3do3A9mqCBBg2_R0nUodaLZK99KSArqGmCKeznLOnikS5ju7e9CjWbQwLJFdf6kQNwow4mxk"/>
<div class="max-w-md">
<div class="bg-background-light dark:bg-background-dark rounded-lg p-3">
<p class="text-sm text-text-primary-light dark:text-text-primary-dark">That would be great, Ms. Johnson. How about we schedule a quick call tomorrow afternoon?</p>
</div>
<span class="text-xs text-text-secondary-light dark:text-text-secondary-dark mt-1">Emily Carter • 2:59 PM</span>
</div>
</div>
<div class="flex items-end gap-3 justify-end">
<div class="max-w-md text-right">
<div class="bg-primary rounded-lg p-3">
<p class="text-sm text-white">Sounds good, Emily. I'll send you a calendar invite for 3 PM tomorrow.</p>
</div>
<span class="text-xs text-text-secondary-light dark:text-text-secondary-dark mt-1">Ms. Johnson • 3:00 PM</span>
</div>
<img alt="Ms. Johnson" class="h-10 w-10 rounded-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbF7kqSG10EXyycRWObcJOK8_2ybQ3vpSf5n_X_wVBKNTlQzn24n2VmoyZO58wnkecDemXLhLmJuESTPl05d4-Po0tqHTxP8M9Gjqzz6N_7XkkHgcWGHIQF8pxjxdJqYqAz4Co2OXV64nKMAnxrPsX9xJqA9K4niL9NMwxsxwAG1_nAfE9zMGckFih1NhOTCOyb6lZIDkGgCgj-qUr3GiIvmL-t5bmtNwacrGgfXMQ7JteTRo3sEAK9D4RqWiDFdZcs6pVN8P-CN0"/>
</div>
</div>
<div class="p-4 bg-content-light dark:bg-content-dark border-t border-border-light dark:border-border-dark">
<div class="relative">
<input class="w-full pl-4 pr-24 py-3 rounded-lg bg-background-light dark:bg-background-dark text-text-primary-light dark:text-text-primary-dark placeholder-text-secondary-light dark:placeholder-text-secondary-dark focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Write a message..." type="text"/>
<div class="absolute inset-y-0 right-0 flex items-center pr-3">
<button class="p-2 rounded-full hover:bg-primary/10 text-text-secondary-light dark:text-text-secondary-dark hover:text-primary">
<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</button>
<button class="ml-2 p-2 rounded-full text-white bg-primary hover:bg-primary/90">
<svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
</svg>
</button>
</div>
</div>
</div>
</main>
</div>

</body></html>