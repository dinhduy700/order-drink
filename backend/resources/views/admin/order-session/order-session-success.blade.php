<!DOCTYPE html>

<html class="light" lang="en"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Order Session Created Success</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#339955",
                        "background-light": "#fafafa",
                        "background-dark": "#18181b",
                    },
                    fontFamily: {
                        "display": ["Be Vietnam Pro"]
                    },
                    borderRadius: {"DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px"},
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .pattern-bg {
            background-color: #fafafa;
            background-image: radial-gradient(#339955 0.5px, transparent 0.5px), radial-gradient(#339955 0.5px, #fafafa 0.5px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
            opacity: 0.05;
        }
        .dark .pattern-bg {
            background-color: #18181b;
            background-image: radial-gradient(#339955 0.5px, transparent 0.5px), radial-gradient(#339955 0.5px, #18181b 0.5px);
            opacity: 0.1;
        }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-[#101813] dark:text-gray-100 min-h-screen relative overflow-x-hidden">
<!-- Subtle Background Pattern Decoration -->
<div class="fixed inset-0 pattern-bg pointer-events-none"></div>
<div class="fixed -top-24 -left-24 w-96 h-96 bg-primary/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="fixed -bottom-24 -right-24 w-96 h-96 bg-primary/10 rounded-full blur-3xl pointer-events-none"></div>
<div class="relative flex flex-col min-h-screen">
    <!-- TopNavBar -->
    <header class="flex items-center justify-between border-b border-gray-200 dark:border-gray-800 px-6 py-4 bg-white/80 dark:bg-zinc-900/80 backdrop-blur-md sticky top-0 z-50">
        <div class="flex items-center gap-3">
            <div class="text-primary size-8">
                <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" d="M24 0.757355L47.2426 24L24 47.2426L0.757355 24L24 0.757355ZM21 35.7574V12.2426L9.24264 24L21 35.7574Z" fill="currentColor" fill-rule="evenodd"></path>
                </svg>
            </div>
            <h2 class="text-lg font-bold tracking-tight">TeamDrinks</h2>
        </div>
        <div class="flex items-center gap-4">
            <div class="bg-center bg-cover rounded-full size-10 border-2 border-primary/20" data-alt="User profile avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBaehJo85EaCZqzfbGgC05fKiQWNVg4YROAI2rZnjlE6-Q50Hr0tEOFUUB7PaucBSIzzuefpULJjnfufj2--Qf7jYttjVMFIolTDXUs7nPUKKWJWi3nPoPoygaKVgg2x4fI__bUfD8NrS8zqSmCGHND9E-r2F3rS3T6HeBqqQSrpe-Ob_Uigi2VGTeLP-BeFViESdw500X-g1g_t2nYrpnNSq-7TisbNnW2gHga54K5PZB4qxlN03ca0Rx26IJ8OqImisfuK_e5UHno");'></div>
        </div>
    </header>
    <main class="flex-1 flex flex-col items-center justify-center p-6 sm:p-12">
        <div class="max-w-[640px] w-full flex flex-col items-center gap-8">
            <!-- Success State Indicator -->
            <div class="flex flex-col items-center animate-in fade-in slide-in-from-bottom-4 duration-700">
                <div class="bg-primary/10 dark:bg-primary/20 p-6 rounded-full mb-6">
                    <span class="material-symbols-outlined text-primary !text-6xl">check_circle</span>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-center">Session Created Successfully!</h1>
                <p class="text-gray-500 dark:text-gray-400 mt-2 text-center text-lg">Your team is ready to start ordering.</p>
            </div>
            <!-- Main Card -->
            <div class="w-full bg-white dark:bg-zinc-900 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-[0_8px_30px_rgb(0,0,0,0.2)] border border-gray-100 dark:border-gray-800 overflow-hidden">
                <!-- Session Card Preview -->
                <div class="p-6 border-b border-gray-100 dark:border-gray-800 flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-48 aspect-video md:aspect-square bg-center bg-cover rounded-lg border border-gray-100 dark:border-gray-700" data-alt="Cover image for coffee session" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA8FHXI0EmZhOoTr1kmgankmFKty9l8Oc9pI3rMbocMY1S6IVLF5CtYZZwrBZmhJ5Moxwls3t1Tm3WDLWspfE146fI1scAuW9Y0jOfph_71ypyWWR-LrqDFQFrciKpJ3r0HJxNQnIBDjWzEj4Rnhl7niWzwQ1LMNP2gCNRlnjIlMKf6K2uWZGz6b99OB1taIgn1E6fd_xYGzH5fCCvfbCOBJY3agc1sLNFNyV8FNuOHauPAKshBV3tWIjoL32uZyz3VyP8C9x9gBu0M");'></div>
                    <div class="flex-1 flex flex-col justify-center">
                        <span class="text-xs font-bold uppercase tracking-wider text-primary mb-1">Session Active</span>
                        <h3 class="text-2xl font-bold mb-2">Friday Boba Run</h3>
                        <!-- DescriptionList Style -->
                        <div class="space-y-2">
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500 dark:text-gray-400">Total Invites</span>
                                <span class="font-medium">25 links ready</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500 dark:text-gray-400">Expiration</span>
                                <span class="font-medium">Today, 5:00 PM</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sharing Section -->
                <div class="p-8 bg-gray-50/50 dark:bg-zinc-800/50 flex flex-col items-center gap-8">
                    <!-- QR Code Container -->
                    <div class="flex flex-col items-center gap-4">
                        <div class="p-4 bg-white rounded-xl shadow-sm border border-gray-200">
                            <div class="size-32 bg-center bg-contain" data-alt="QR Code for joining session" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA9bGBKvuTXliux44T19RYLeIGZAIgmWOrrqEYM6BsWuGqJuElATU6VUmzjm6h_7s3bBuXG9rLNwoduxx_WSMTGuukziklS-d60I9TOlnKqOlu_JKyf886Tk8S4KP8zFXWblR5EaVr8uaO7W37nq4Pa7QkdRHRN_BkKKASh1PHQO-d1OLQ1-UafLYHSXPioEqgc1lwPPYv6aCb2i0hET1goWMC6Uo1ScNrnieyDnW-sjKGbma2LsCZyma6Q6OECUYKnlqWTspYFDBgS");'></div>
                        </div>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Scan to join via mobile</p>
                    </div>
                    <!-- TextField Component -->
                    <div class="w-full max-w-md">
                        <label class="flex flex-col gap-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Shareable Link</span>
                            <div class="flex items-center group">
                                <input class="flex-1 h-12 px-4 bg-white dark:bg-zinc-900 border border-gray-300 dark:border-zinc-700 rounded-l-lg text-[#101813] dark:text-white focus:ring-0 focus:border-primary border-r-0 text-sm font-medium" readonly="" value="https://orders.team/session/friday-boba-123"/>
                                <button class="h-12 px-5 bg-primary hover:bg-primary/90 text-white rounded-r-lg flex items-center gap-2 transition-colors">
                                    <span class="material-symbols-outlined !text-xl">content_copy</span>
                                    <span class="font-medium text-sm">Copy Link</span>
                                </button>
                            </div>
                        </label>
                    </div>
                </div>
                <!-- Footer Actions -->
                <div class="p-6 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <button class="w-full sm:w-auto px-8 py-3 rounded-lg border border-gray-200 dark:border-gray-700 font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-zinc-800 transition-colors flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined !text-xl">dashboard</span>
                        Go to Summary Page
                    </button>
                    <button class="w-full sm:w-auto px-8 py-3 rounded-lg bg-primary/10 dark:bg-primary/20 text-primary font-bold hover:bg-primary/20 dark:hover:bg-primary/30 transition-colors flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined !text-xl">add_circle</span>
                        Create Another
                    </button>
                </div>
            </div>
            <!-- Secondary Info -->
            <p class="text-sm text-gray-400 dark:text-gray-500 max-w-xs text-center leading-relaxed">
                You can manage participants and close the ordering session from your admin dashboard.
            </p>
        </div>
    </main>
    <footer class="py-10 px-6 text-center text-gray-400 dark:text-gray-600 text-sm">
        © 2024 TeamDrinks Internal Systems. All rights reserved.
    </footer>
</div>
</body></html>