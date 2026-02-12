<!DOCTYPE html>

<html class="light" lang="en"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>MensEst | Place Order</title>
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
            <iframe
                    src="{{ config('app.googlesheet_url') }}&rm=minimal"
                    width="100%"
                    height="800"
                    frameborder="0"
            >
            </iframe>
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