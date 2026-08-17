<header class="sticky top-0 z-50 w-full border-b border-[#eaf1ec] dark:border-white/10 bg-white/80 dark:bg-background-dark/80 backdrop-blur-md px-6 py-3">
    <div class="max-w-[1200px] mx-auto flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="size-20">
                <a href="{{ route('admin.login') }}" >
                    <img src="{{ asset('images/logo.png') }}" />
                </a>
            </div>
        </div>
        @if(session()->has('is_admin'))
            <nav class="hidden md:flex items-center gap-8">
                <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('admin.order-session.create')  }}">Tạo phiên đặt</a>
                <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('admin.tracking-order.index') }}">Theo dõi đơn đặt</a>
                    <a class="text-sm font-medium hover:text-primary transition-colors" href="{{ route('admin.logout') }}">
                        Đăng xuất
                    </a>
            </nav>
            <div class="flex items-center gap-4">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary/20" data-alt="Professional avatar portrait of the admin" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAFH_1QfyzqyJjA3iYyqFdZUybp7FnVLm2o971m0ZfCSwsc16fS6_VuiYbJ8NFWlLhazTOhOYH8SKHp3_tuXjeKQQ-QmX79Ol830gFPS4aog8vQj42PaNL9jdSXm8WlEWsVOLwGepz9LnZ7DzVw1wDAXb_Ps7_IqFf2MpaWEqmfKjjOcicvIpOvLFuo_gkzqYTrK7Zp54Rc7aD8U3zI-wWk5kJ1cXRXz5XBUUDILSIPOZggQp5V-ZWQTQwzrtIjWIa4uGcNxiJ3hxLO");'>
                </div>
            </div>
        @endif
    </div>
</header>
