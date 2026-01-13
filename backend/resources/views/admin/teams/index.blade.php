@extends('components.admin.layout')

@section('title', 'Create Order Session - DrinkHub')

@section('content')
    <div class="flex flex-col items-center text-center mb-12">
        <span class="inline-block px-3 py-1 bg-primary/10 text-primary text-xs font-bold uppercase tracking-widest rounded-full mb-4">New Session</span>
        <h2 class="text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em] mb-4">Create New Order Session</h2>
        <p class="text-[#5c8a6b] dark:text-gray-400 text-lg max-w-[600px]">Fill in the details below to start collecting drink requests from your team.</p>
    </div>
    <div class="max-w-[720px] mx-auto">
        <!-- Main Configuration Card -->
        <div class="bg-white dark:bg-[#25362b] rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.05)] overflow-hidden border border-[#eaf1ec] dark:border-white/5">
            <!-- Card Header Decoration -->
            <div class="h-32 bg-primary/5 dark:bg-primary/20 relative overflow-hidden flex items-center px-10">
                <div class="relative z-10 flex flex-col">
                    <span class="text-primary font-bold text-lg">Order Configuration</span>
                    <span class="text-primary/60 dark:text-primary/80 text-sm">Define the session details and delivery sources.</span>
                </div>
                <div class="absolute right-0 top-0 bottom-0 w-1/3 opacity-20 pointer-events-none flex items-center justify-end pr-6">
                    <span class="material-symbols-outlined text-[120px] rotate-12">local_cafe</span>
                </div>
            </div>
            <div class="p-8 space-y-8">
                <!-- Session Name -->
                <div class="flex flex-col gap-2">
                    <label class="text-[#101813] dark:text-white text-base font-semibold">Session Name</label>
                    <input class="w-full rounded-xl border-[#d4e2d9] dark:border-white/10 dark:bg-background-dark/50 focus:border-primary focus:ring-primary h-14 p-4 text-base transition-all" placeholder="e.g., Friday Milk Tea or Afternoon Boost" type="text"/>
                </div>
                <!-- Delivery Platform Selection -->
                <div class="flex flex-col gap-4">
                    <label class="text-[#101813] dark:text-white text-base font-semibold">Delivery Platform</label>
                    <div class="flex flex-wrap gap-3">
                        <button class="flex h-10 items-center justify-center gap-2 rounded-xl bg-primary text-white px-4 transition-transform active:scale-95">
                            <span class="material-symbols-outlined text-lg">storefront</span>
                            <p class="text-sm font-medium">ShopeeFood</p>
                        </button>
                        <button class="flex h-10 items-center justify-center gap-2 rounded-xl bg-[#eaf1ec] dark:bg-white/5 hover:bg-[#dce9df] dark:hover:bg-white/10 text-[#101813] dark:text-white px-4 transition-all">
                            <span class="material-symbols-outlined text-lg">moped</span>
                            <p class="text-sm font-medium">GrabFood</p>
                        </button>
                        <button class="flex h-10 items-center justify-center gap-2 rounded-xl bg-[#eaf1ec] dark:bg-white/5 hover:bg-[#dce9df] dark:hover:bg-white/10 text-[#101813] dark:text-white px-4 transition-all">
                            <span class="material-symbols-outlined text-lg">link</span>
                            <p class="text-sm font-medium">Other Link</p>
                        </button>
                    </div>
                </div>
                <!-- URL Input Area -->
                <div class="flex flex-col gap-2">
                    <div class="flex items-center justify-between mb-1">
                        <label class="text-[#101813] dark:text-white text-base font-semibold">Shop URLs</label>
                        <span class="text-xs text-[#5c8a6b] font-medium">Add one URL per line</span>
                    </div>
                    <div class="relative group">
                        <textarea class="w-full rounded-xl border-[#d4e2d9] dark:border-white/10 dark:bg-background-dark/50 focus:border-primary focus:ring-primary min-h-[140px] p-4 text-base transition-all resize-none" placeholder="https://shopeefood.vn/ho-chi-minh/tra-sua-phuc-long..."></textarea>
                        <div class="absolute bottom-4 right-4 text-primary/40 group-focus-within:text-primary transition-colors">
                            <span class="material-symbols-outlined">add_link</span>
                        </div>
                    </div>
                </div>
                <!-- Additional Details Row -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-[#101813] dark:text-white text-sm font-semibold">Estimated Delivery</label>
                        <div class="relative">
                            <input class="w-full rounded-xl border-[#d4e2d9] dark:border-white/10 dark:bg-background-dark/50 focus:border-primary focus:ring-primary h-12 px-4" type="time"/>
                        </div>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#101813] dark:text-white text-sm font-semibold">Order Limit (Optional)</label>
                        <div class="relative">
                            <input class="w-full rounded-xl border-[#d4e2d9] dark:border-white/10 dark:bg-background-dark/50 focus:border-primary focus:ring-primary h-12 px-4" placeholder="No limit" type="number"/>
                        </div>
                    </div>
                </div>
                <!-- "Pro Tip" Box -->
                <div class="bg-[#EBC985]/10 border-l-4 border-[#EBC985] p-4 rounded-r-lg">
                    <div class="flex gap-3">
                        <span class="material-symbols-outlined text-[#8B6E2E]">lightbulb</span>
                        <p class="text-sm text-[#8B6E2E] leading-relaxed">
                            <span class="font-bold">Pro Tip:</span> You can paste multiple links. We'll automatically group the drinks by shop for you.
                        </p>
                    </div>
                </div>
                <!-- Footer Action -->
                <div class="pt-4 border-t border-[#eaf1ec] dark:border-white/5">
                    <button class="w-full bg-primary hover:bg-primary/90 text-white font-bold h-14 rounded-xl shadow-lg shadow-primary/20 transition-all active:scale-[0.98] flex items-center justify-center gap-3">
                        <span>Launch Session &amp; Notify Team</span>
                        <span class="material-symbols-outlined">rocket_launch</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Helpful Hints / FAQ -->
        <div class="mt-8 grid md:grid-cols-3 gap-6">
            <div class="p-4 bg-primary/5 dark:bg-primary/5 rounded-xl border border-primary/10">
                <span class="material-symbols-outlined text-primary mb-2">groups</span>
                <h4 class="font-bold text-sm mb-1">Invite Team</h4>
                <p class="text-xs text-[#5c8a6b] dark:text-gray-400">Share a single link to your Slack or Teams channel.</p>
            </div>
            <div class="p-4 bg-primary/5 dark:bg-primary/5 rounded-xl border border-primary/10">
                <span class="material-symbols-outlined text-primary mb-2">payments</span>
                <h4 class="font-bold text-sm mb-1">Easy Split</h4>
                <p class="text-xs text-[#5c8a6b] dark:text-gray-400">Automatic price calculation including tax and shipping.</p>
            </div>
            <div class="p-4 bg-primary/5 dark:bg-primary/5 rounded-xl border border-primary/10">
                <span class="material-symbols-outlined text-primary mb-2">history</span>
                <h4 class="font-bold text-sm mb-1">Quick Reorder</h4>
                <p class="text-xs text-[#5c8a6b] dark:text-gray-400">Load shops and items from your previous sessions.</p>
            </div>
        </div>
    </div>
@endsection