<!DOCTYPE html>

<html class="light" lang="en"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>@yield('title', 'MensEst Admin')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js" type="text/javascript"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#339955",
                        "background-light": "#f8f7f7",
                        "background-dark": "#1f2e24",
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
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 20;
        }
        body {
            font-family: 'Be Vietnam Pro', sans-serif;
        }
    </style>

    @stack('styles')
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen text-[#101813] dark:text-white transition-colors duration-200">
<!-- Top Navigation Bar -->

@include('components.admin.partials.header')

<main class="max-w-[1200px] mx-auto px-6 py-10 lg:py-16">
    @yield('content')
</main>

@include('components.admin.partials.footer')

@stack('scripts')
</body></html>