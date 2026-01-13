<!DOCTYPE html>

<html class="light" lang="en"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Login | GreenSips Internal</title>
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
                        "primary": "#238b23",
                        "background-light": "#f3f6f3",
                        "background-dark": "#2e382e",
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
        body {
            font-family: "Be Vietnam Pro", sans-serif;
        }
        .login-card-shadow {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }
        .botanical-pattern {
            background-color: #238b23;
            background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.1) 1px, transparent 0);
            background-size: 24px 24px;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen flex items-center justify-center p-4">
<!-- Main Container -->
<div class="w-full max-w-[1000px] bg-white dark:bg-[#1e261e] rounded-xl overflow-hidden login-card-shadow flex flex-col md:flex-row min-h-[600px]">
    <!-- Left Side: Visual Anchor -->
    <div class="md:w-1/2 relative overflow-hidden hidden md:block">
        <div class="absolute inset-0 bg-primary/10 botanical-pattern"></div>
        <div class="absolute inset-0 flex flex-col items-center justify-center p-12 text-center z-10">
            <div class="mb-8 p-6 bg-white/20 backdrop-blur-md rounded-2xl border border-white/30">
                <div class="w-64 h-64 rounded-xl bg-cover bg-center shadow-2xl" data-alt="A refreshing iced matcha latte with mint leaves on a wooden table" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCXwWQURCi9Jy94jZMlTcG6aOcEkzUt3iJJzF-OS1XhD4KEA8n7b_FjddX7DwcT8ESnDwGKal2FsRyqYF4yPZZaWVzlDGNPsBNp8P1lp84sI47GnUu6M8BEsFhp32Xd3i7gSQxFMCP-9FR8hIoEm96AfFG8NrGLR18G_ZM6_tGirPisQjmAN9FzCvI-SUC32kehIrcvBpwE0Z6-ieASm4y1aN9WkqECtavKZnmNpTBy4a2DfJxrBXOwzj7TwedzxmYnaQP1gaYedW-4');">
                </div>
            </div>
            <h2 class="text-3xl font-bold text-primary dark:text-[#88c488] mb-4">Mens-est Team</h2>
            <p class="text-primary/80 dark:text-background-light/70 text-lg">Vui vẻ lên nào !.</p>
        </div>
        <!-- Decorative Elements -->
        <div class="absolute -bottom-16 -left-16 w-64 h-64 bg-primary/20 rounded-full blur-3xl"></div>
        <div class="absolute -top-16 -right-16 w-48 h-48 bg-primary/10 rounded-full blur-2xl"></div>
    </div>
    <!-- Right Side: Login Form -->
    <div class="flex-1 flex flex-col justify-center p-8 md:p-16">
        <!-- Header Section -->
        <div class="mb-10 text-center md:text-left">
            <div class="flex items-center justify-center md:justify-start gap-2 mb-6">
                <div class="bg-primary p-2 rounded-lg text-white">
                    <span class="material-symbols-outlined leading-none text-2xl">eco</span>
                </div>
                <span class="text-xl font-bold tracking-tight text-[#101910] dark:text-white">Mens-est</span>
            </div>
            <h1 class="text-3xl font-bold text-[#101910] dark:text-white mb-2">Chào bạn</h1>
            <p class="text-[#578e57] dark:text-[#a3bfa3] text-base">Đăng nhập giúp mình nhen.</p>
        </div>
        <!-- Login Form -->
        <form action="{{ route('admin.login.post') }}" method="post" class="space-y-5">
            @csrf
            <!-- Email Field -->
            <div class="flex flex-col gap-2">
                <label class="text-[#101910] dark:text-white text-sm font-semibold ml-1">Tên đăng nhập</label>
                <div class="relative group">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#578e57] group-focus-within:text-primary transition-colors">person</span>
                    <input name="username"
                           value="{{ old('username') }}"
                            class="{{ $errors->has('username') ? 'border-red-500' : 'border-[#d4e2d9]' }} w-full pl-12 pr-4 h-14 bg-background-light dark:bg-background-dark focus:border-primary focus:ring-1 focus:ring-primary rounded-xl text-[#101910] dark:text-white placeholder:text-[#578e57]/50 transition-all outline-none"
                            placeholder="username"
                            type="text"/>

                </div>
                    @error('username')
                        <p class="text-red-500 text-xs mt-1 flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">error</span> {{ $message }}
                        </p>
                    @enderror
            </div>
            <!-- Password Field -->
            <div class="flex flex-col gap-2">
                <label class="text-[#101910] dark:text-white text-sm font-semibold ml-1">Mật khẩu</label>
                <div class="relative group">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[#578e57] group-focus-within:text-primary transition-colors">lock</span>
                    <input name="password"
                            class="{{ $errors->has('password') ? 'border-red-500' : 'border-[#d4e2d9]' }} w-full pl-12 pr-4 h-14 bg-background-light dark:bg-background-dark  focus:border-primary focus:ring-1 focus:ring-primary rounded-xl text-[#101910] dark:text-white placeholder:text-[#578e57]/50 transition-all outline-none"
                            placeholder="••••••••"
                            type="password"/>
                </div>
                @error('password')
                    <p class="text-red-500 text-xs mt-1 flex items-center gap-1">
                        <span class="material-symbols-outlined text-sm">error</span> {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- Submit Button -->
            <button class="w-full h-14 bg-primary hover:bg-[#1a6b1a] text-white font-bold rounded-xl shadow-lg shadow-primary/20 transition-all flex items-center justify-center gap-2 transform active:scale-[0.98]" type="submit">
                <span>Login</span>
                <span class="material-symbols-outlined text-xl">login</span>
            </button>
        </form>

    </div>
</div>
<!-- Small decorative circles in background -->
<div class="fixed top-20 right-[10%] w-32 h-32 bg-primary/5 rounded-full -z-10 blur-xl"></div>
<div class="fixed bottom-20 left-[10%] w-48 h-48 bg-primary/5 rounded-full -z-10 blur-2xl"></div>
</body></html>