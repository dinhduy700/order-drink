<!DOCTYPE html>

<html class="light" lang="en"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Individual Order Form - Office Drink System</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#11d452",
                        "background-light": "#f6f8f6",
                        "background-dark": "#102216",
                    },
                    fontFamily: {
                        "display": ["Be Vietnam Pro"]
                    },
                    borderRadius: { "DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .leaf-pattern {
            background-color: #f6f8f6;
            background-image: radial-gradient(#11d452 0.5px, transparent 0.5px), radial-gradient(#11d452 0.5px, #f6f8f6 0.5px);
            background-size: 20px 20px;
            background-position: 0 0, 10px 10px;
            opacity: 0.05;
        }
        .dark .leaf-pattern {
            background-color: #102216;
            background-image: radial-gradient(#11d452 0.5px, transparent 0.5px), radial-gradient(#11d452 0.5px, #102216 0.5px);
            opacity: 0.03;
        }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark min-h-screen relative">
<!-- Background Texture -->
<div class="absolute inset-0 leaf-pattern pointer-events-none"></div>
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
    <div class="layout-container flex h-full grow flex-col">
        <!-- Top Navigation Bar -->
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-primary/20 dark:border-primary/10 px-10 py-3 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md sticky top-0 z-50">
            <div class="flex items-center gap-4 text-background-dark dark:text-white">
                <div class="flex items-center gap-3">
                    <div class="size-10 bg-primary/10 text-primary rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-2xl">potted_plant</span>
                    </div>
                    <h1 class="text-lg font-bold leading-tight tracking-tight">MensEst</h1>
                </div>
{{--            <div class="flex gap-2">--}}
{{--                <button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 bg-primary/10 dark:bg-primary/20 text-background-dark dark:text-white gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">--}}
{{--                    <span class="material-symbols-outlined text-primary">coffee</span>--}}
{{--                </button>--}}
{{--                <button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-10 bg-primary/10 dark:bg-primary/20 text-background-dark dark:text-white gap-2 text-sm font-bold leading-normal tracking-[0.015em] min-w-0 px-2.5">--}}
{{--                    <span class="material-symbols-outlined text-primary">account_circle</span>--}}
{{--                </button>--}}
{{--            </div>--}}
        </header>
        <main class="flex flex-1 justify-center py-10 px-4">
            <div class="layout-content-container flex flex-col max-w-[640px] flex-1">
                <!-- Headline Section -->
                <div class="pb-6">
                    <h1 class="text-background-dark dark:text-white tracking-light text-[32px] font-bold leading-tight text-center">Individual Order Form</h1>
                    <p class="text-background-dark/60 dark:text-white/60 text-center mt-2">Place your custom drink order for the team session.</p>
                </div>
                <!-- Main Form Card -->
                <div class="bg-white dark:bg-white/5 border border-primary/20 dark:border-primary/10 rounded-xl shadow-xl overflow-hidden p-6 md:p-8">
                    <!-- Card Hero Image (Optional aesthetic) -->
                    <div class="mb-8 rounded-xl overflow-hidden h-40 relative group">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10"></div>
                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" data-alt="A fresh cup of green matcha latte with latte art" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD6YHNOUubRD0mQtsPoVJ0ALoTWLWPvcbaOe4_q0IqC-YU-gdg2_oaqUt8QxDUUa2kjryYAJGNRVwkvGxn9jsYkqI4BIsAytXIBueWIKNa2NqjkIO3OhuaQQWQZcMRWoDmroazbXhDfFVeqv3u81PEVaysOeY8OKcXWqR8LTFomL-CAPmVAnEa5QyfYICgcDHDeGb0PwREkOflndhwSC5IWaeLwvFfh7tKGfP4lK1ZSwZnHJLYn8-Ttcv88Dg0j9qpSZEFGpNqczf6u"/>
                        <div class="absolute bottom-4 left-4 z-20 text-white">
                            <p class="text-lg font-bold">Refresh Your Day</p>
                            <p class="text-xs opacity-80">Pick your favorite blend below</p>
                        </div>
                    </div>
                    <form class="space-y-6">
                        <!-- Employee Name Field -->
                        <div class="flex flex-col gap-2">
                            <label class="flex flex-col">
                                <p class="text-background-dark dark:text-white text-sm font-semibold leading-normal pb-2">Employee Name (Tên nhân viên)</p>
                                <div class="relative">
                                    <select class="form-input flex w-full appearance-none rounded-xl text-background-dark dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-primary/20 bg-background-light dark:bg-background-dark/50 focus:border-primary h-14 px-4 pr-10 text-base font-normal">
                                        <option disabled="" selected="" value="">Chọn tên bạn nhé</option>
                                        @foreach(config('users') as $user)
                                            <option value="{{ $user['id'] }}">{{ $user['name'] }}</option>
                                        @endforeach
                                    </select>
                                    <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-primary">
                                        <span class="material-symbols-outlined">expand_more</span>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <!-- Drink Name Field -->
                        <div class="flex flex-col gap-2">
                            <label class="flex flex-col">
                                <p class="text-background-dark dark:text-white text-sm font-semibold leading-normal pb-2">Drink Name (Nhập món)</p>
                                <div class="relative">
                                    <input class="form-input flex w-full rounded-xl text-background-dark dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-primary/20 bg-background-light dark:bg-background-dark/50 focus:border-primary h-14 px-4 text-base font-normal placeholder:text-background-dark/30 dark:placeholder:text-white/30" placeholder="e.g., Matcha Latte, Oolong Tea, Espresso"/>
                                    <div class="absolute right-4 top-1/2 -translate-y-1/2 text-primary/40">
                                        <span class="material-symbols-outlined">local_cafe</span>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <!-- Size Selector (Segmented Control) -->
                        <div class="flex flex-col gap-2">
                            <p class="text-background-dark dark:text-white text-sm font-semibold leading-normal pb-1">Size Selection</p>
                            <div id="size-selection-container" class="grid grid-cols-3 gap-2 bg-primary/10 dark:bg-white/5 p-1 rounded-xl border border-primary/10">
                                <button class="size-tab py-3 rounded-lg text-sm font-bold bg-primary text-white shadow-sm" type="button">Small (S)</button>
                                <button class="size-tab py-3 rounded-lg text-sm font-bold text-background-dark/60 dark:text-white/60 hover:bg-white/50 dark:hover:bg-white/10 transition-colors" type="button">Medium (M)</button>
                                <button class="size-tab py-3 rounded-lg text-sm font-bold text-background-dark/60 dark:text-white/60 hover:bg-white/50 dark:hover:bg-white/10 transition-colors" type="button">Large (L)</button>
                            </div>
                        </div>
                        <!-- Notes Field -->
                        <div class="flex flex-col gap-2">
                            <label class="flex flex-col">
                                <p class="text-background-dark dark:text-white text-sm font-semibold leading-normal pb-2">Notes (Ghi chú)</p>
                                <textarea class="form-input flex w-full min-h-[100px] rounded-xl text-background-dark dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-primary/20 bg-background-light dark:bg-background-dark/50 focus:border-primary p-4 text-base font-normal placeholder:text-background-dark/30 dark:placeholder:text-white/30" placeholder="Any special requests? (e.g., 50% sugar, no ice)"></textarea>
                            </label>
                        </div>
                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button class="w-full flex cursor-pointer items-center justify-center overflow-hidden rounded-xl h-14 bg-primary text-white gap-2 text-base font-bold leading-normal tracking-[0.015em] hover:bg-primary/90 transition-all active:scale-[0.98] shadow-lg shadow-primary/20" type="submit">
                                <span class="material-symbols-outlined">send</span>
                                <span>Submit Order</span>
                            </button>
                            <p class="text-center text-xs text-background-dark/40 dark:text-white/40 mt-4">
                                Need help? <a class="text-primary hover:underline font-medium" href="#">Contact Admin</a>
                            </p>
                        </div>
                    </form>
                </div>
                <!-- Footer Info -->
                <div class="mt-8 flex items-center justify-center gap-6 text-background-dark/40 dark:text-white/40">
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">verified_user</span>
                        <span class="text-xs">Secure internal system</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">schedule</span>
                        <span class="text-xs">Orders close at 11:00 AM</span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.size-tab');

        // 1. Bộ class khi tab được CHỌN (Active) - Xóa hết hover
        const activeClasses = ['bg-primary', 'text-white', 'shadow-sm'];

        // 2. Bộ class khi tab CHƯA CHỌN (Inactive) - Bao gồm cả hover
        const inactiveClasses = [
            'text-background-dark/60',
            'dark:text-white/60',
            'hover:bg-white/50',
            'dark:hover:bg-white/10'
        ];

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Xóa trạng thái active của tất cả các nút và trả lại trạng thái inactive (có hover)
                tabs.forEach(t => {
                    t.classList.remove(...activeClasses);
                    t.classList.add(...inactiveClasses);
                });

                // Kích hoạt nút hiện tại: Thêm active, XÓA HOÀN TOÀN inactive (mất luôn hover)
                this.classList.add(...activeClasses);
                this.classList.remove(...inactiveClasses);
            });
        });
    });
</script>
</body>
</html>