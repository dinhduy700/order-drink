@extends('components.admin.layout')

@section('title', 'Create Order Session - DrinkHub')

@section('content')
    <main class="flex-1 flex flex-col items-center justify-center p-6 sm:p-12">
        <div class="max-w-[640px] w-full flex flex-col items-center gap-8">
            <!-- Success State Indicator -->
            <div class="flex flex-col items-center animate-in fade-in slide-in-from-bottom-4 duration-700">
                <div class="bg-primary/10 dark:bg-primary/20 p-6 rounded-full mb-6">
                    <span class="material-symbols-outlined text-primary !text-6xl">check_circle</span>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-center">Tạo phiên đặt hàng thành công!</h1>
                <p class="text-gray-500 dark:text-gray-400 mt-2 text-center text-lg">Cả team đã có thể bắt đầu "lên đơn" rồi nhé.</p>
            </div>
            <!-- Main Card -->
{{--            <div class="w-full bg-white dark:bg-zinc-900 rounded-xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] dark:shadow-[0_8px_30px_rgb(0,0,0,0.2)] border border-gray-100 dark:border-gray-800 overflow-hidden">--}}
{{--                <!-- Session Card Preview -->--}}
{{--                <div class="p-6 border-b border-gray-100 dark:border-gray-800 flex flex-col md:flex-row gap-6">--}}
{{--                    <div class="w-full md:w-48 aspect-video md:aspect-square bg-center bg-cover rounded-lg border border-gray-100 dark:border-gray-700" data-alt="Cover image for coffee session" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA8FHXI0EmZhOoTr1kmgankmFKty9l8Oc9pI3rMbocMY1S6IVLF5CtYZZwrBZmhJ5Moxwls3t1Tm3WDLWspfE146fI1scAuW9Y0jOfph_71ypyWWR-LrqDFQFrciKpJ3r0HJxNQnIBDjWzEj4Rnhl7niWzwQ1LMNP2gCNRlnjIlMKf6K2uWZGz6b99OB1taIgn1E6fd_xYGzH5fCCvfbCOBJY3agc1sLNFNyV8FNuOHauPAKshBV3tWIjoL32uZyz3VyP8C9x9gBu0M");'></div>--}}
{{--                    <div class="flex-1 flex flex-col justify-center">--}}
{{--                        <span class="text-xs font-bold uppercase tracking-wider text-primary mb-1">Session Active</span>--}}
{{--                        <h3 class="text-2xl font-bold mb-2">Friday Boba Run</h3>--}}
{{--                        <!-- DescriptionList Style -->--}}
{{--                        <div class="space-y-2">--}}
{{--                            <div class="flex justify-between items-center text-sm">--}}
{{--                                <span class="text-gray-500 dark:text-gray-400">Total Invites</span>--}}
{{--                                <span class="font-medium">25 links ready</span>--}}
{{--                            </div>--}}
{{--                            <div class="flex justify-between items-center text-sm">--}}
{{--                                <span class="text-gray-500 dark:text-gray-400">Expiration</span>--}}
{{--                                <span class="font-medium">Today, 5:00 PM</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Sharing Section -->--}}
{{--                <div class="p-8 bg-gray-50/50 dark:bg-zinc-800/50 flex flex-col items-center gap-8">--}}
{{--                    <!-- QR Code Container -->--}}
{{--                    <div class="flex flex-col items-center gap-4">--}}
{{--                        <div class="p-4 bg-white rounded-xl shadow-sm border border-gray-200">--}}
{{--                            <div class="size-32 bg-center bg-contain" data-alt="QR Code for joining session" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA9bGBKvuTXliux44T19RYLeIGZAIgmWOrrqEYM6BsWuGqJuElATU6VUmzjm6h_7s3bBuXG9rLNwoduxx_WSMTGuukziklS-d60I9TOlnKqOlu_JKyf886Tk8S4KP8zFXWblR5EaVr8uaO7W37nq4Pa7QkdRHRN_BkKKASh1PHQO-d1OLQ1-UafLYHSXPioEqgc1lwPPYv6aCb2i0hET1goWMC6Uo1ScNrnieyDnW-sjKGbma2LsCZyma6Q6OECUYKnlqWTspYFDBgS");'></div>--}}
{{--                        </div>--}}
{{--                        <p class="text-sm text-gray-500 dark:text-gray-400">Scan to join via mobile</p>--}}
{{--                    </div>--}}
{{--                    <!-- TextField Component -->--}}
{{--                    <div class="w-full max-w-md">--}}
{{--                        <label class="flex flex-col gap-2">--}}
{{--                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Shareable Link</span>--}}
{{--                            <div class="flex items-center group">--}}
{{--                                <input class="flex-1 h-12 px-4 bg-white dark:bg-zinc-900 border border-gray-300 dark:border-zinc-700 rounded-l-lg text-[#101813] dark:text-white focus:ring-0 focus:border-primary border-r-0 text-sm font-medium" readonly="" value="https://orders.team/session/friday-boba-123"/>--}}
{{--                                <button class="h-12 px-5 bg-primary hover:bg-primary/90 text-white rounded-r-lg flex items-center gap-2 transition-colors">--}}
{{--                                    <span class="material-symbols-outlined !text-xl">content_copy</span>--}}
{{--                                    <span class="font-medium text-sm">Copy Link</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- Footer Actions -->--}}
{{--                <div class="p-6 flex flex-col sm:flex-row items-center justify-center gap-4">--}}
{{--                    <button class="w-full sm:w-auto px-8 py-3 rounded-lg border border-gray-200 dark:border-gray-700 font-medium text-gray-600 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-zinc-800 transition-colors flex items-center justify-center gap-2">--}}
{{--                        <span class="material-symbols-outlined !text-xl">dashboard</span>--}}
{{--                        Go to Summary Page--}}
{{--                    </button>--}}
{{--                    <button class="w-full sm:w-auto px-8 py-3 rounded-lg bg-primary/10 dark:bg-primary/20 text-primary font-bold hover:bg-primary/20 dark:hover:bg-primary/30 transition-colors flex items-center justify-center gap-2">--}}
{{--                        <span class="material-symbols-outlined !text-xl">add_circle</span>--}}
{{--                        Create Another--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!-- Secondary Info -->
{{--            <p class="text-sm text-gray-400 dark:text-gray-500 max-w-xs text-center leading-relaxed">--}}
{{--                You can manage participants and close the ordering session from your admin dashboard.--}}
{{--            </p>--}}
        </div>
        <a href="{{ route('admin.order-session.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-10">
            Tạo phiên đặt nước mới.
        </a>

    </main>
@endsection

