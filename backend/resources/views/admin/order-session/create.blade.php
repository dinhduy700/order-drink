@extends('components.admin.layout')

@section('title', 'Create Order Session - DrinkHub')

@section('content')
    <form action="{{ route('admin.order-session.store') }}" method="post">
        @csrf
        <div class="flex flex-col items-center text-center mb-12">
            <span class="inline-block px-3 py-1 bg-primary/10 text-primary text-xs font-bold uppercase tracking-widest rounded-full mb-4">Lượt đặt mới</span>
            <h2 class="text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em] mb-4">Tạo đợt đặt đồ mới</h2>
            <p class="text-[#5c8a6b] dark:text-gray-400 text-lg max-w-[600px]">Nhập thông tin bên dưới để bắt đầu gom đơn đặt nước từ team của bạn.</p>
        </div>
        <div class="max-w-[720px] mx-auto">
            <!-- Main Configuration Card -->
            <div class="bg-white dark:bg-[#25362b] rounded-xl shadow-[0_10px_30px_rgba(0,0,0,0.05)] overflow-hidden border border-[#eaf1ec] dark:border-white/5">
                <!-- Card Header Decoration -->
                <div class="h-32 bg-primary/5 dark:bg-primary/20 relative overflow-hidden flex items-center px-10">
                    <div class="relative z-10 flex flex-col">
                        <span class="text-primary font-bold text-lg">Thiết lập phiên đặt hàng</span>
                        <span class="text-primary/60 dark:text-primary/80 text-sm">Thiết lập chi tiết phiên đặt hàng và nguồn cung cấp (nền tảng giao hàng).</span>
                    </div>
                    <div class="absolute right-0 top-0 bottom-0 w-1/3 opacity-20 pointer-events-none flex items-center justify-end pr-6">
                        <span class="material-symbols-outlined text-[120px] rotate-12">local_cafe</span>
                    </div>
                </div>
                <div class="p-8 space-y-8">
                    <!-- Owner invite -->
                    <div class="flex flex-col gap-2">
                        <label class="text-[#101813] dark:text-white text-base font-semibold">Chủ xị</label>
                        <input name="owner_invite"
                               value="{{ old('owner_invite') }}"
                               class="{{ $errors->has('owner_invite') ? 'border-red-500' : 'border-[#d4e2d9]' }} w-full rounded-xl border-[#d4e2d9] dark:border-white/10 dark:bg-background-dark/50 focus:border-primary focus:ring-primary h-14 p-4 text-base transition-all"
                               placeholder="mr Trung, mr Tư...."
                               type="text" />

                        @error('owner_invite')
                            <p class="text-red-500 text-xs mt-1 flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">error</span> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Session Name -->
                    <div class="flex flex-col gap-2">
                        <label class="text-[#101813] dark:text-white text-base font-semibold">Tên phiên đặt hàng</label>
                        <input name="session_name"
                               value="{{ old('session_name') }}"
                               class="{{ $errors->has('session_name') ? 'border-red-500' : 'border-[#d4e2d9]' }} w-full rounded-xl border-[#d4e2d9] dark:border-white/10 dark:bg-background-dark/50 focus:border-primary focus:ring-primary h-14 p-4 text-base transition-all"
                               placeholder="Trà chiều"
                               type="text"/>

                        @error('session_name')
                            <p class="text-red-500 text-xs mt-1 flex items-center gap-1">
                                <span class="material-symbols-outlined text-sm">error</span> {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="flex items-center justify-between mb-1">
                            <label class="text-[#101813] dark:text-white text-base font-semibold">Thực đơn (đường dẫn)</label>
                            <span class="text-xs text-[#5c8a6b] font-medium">Mỗi liên kết một dòng</span>
                        </div>
                        <div class="relative group">
                            <textarea name="menu_urls"
                                      class="{{ $errors->has('menu_urls') ? 'border-red-500' : 'border-[#d4e2d9]' }} w-full rounded-xl border-[#d4e2d9] dark:border-white/10 dark:bg-background-dark/50 focus:border-primary focus:ring-primary min-h-[140px] p-4 text-base transition-all resize-none"
                                      placeholder="https://shopeefood.vn/ho-chi-minh/tra-sua-phuc-long...">{{ old('menu_url') }}</textarea>
                            <div class="absolute bottom-4 right-4 text-primary/40 group-focus-within:text-primary transition-colors">
                                <span class="material-symbols-outlined">add_link</span>
                            </div>

                            @error('menu_urls')
                                <p class="text-red-500 text-xs mt-1 flex items-center gap-1">
                                    <span class="material-symbols-outlined text-sm">error</span> {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <!-- Additional Details Row -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-2">
                            <label class="text-[#101813] dark:text-white text-sm font-semibold">Ngân sách tối đa trên mỗi người (vnđ)</label>
                            <div class="relative">
                                <input name="budget_limit"
                                       value="{{ old('budget_limit') }}"
                                        class="{{ $errors->has('budget') ? 'border-red-500' : 'border-[#d4e2d9]' }} w-full rounded-xl border-[#d4e2d9] dark:border-white/10 dark:bg-background-dark/50 focus:border-primary focus:ring-primary h-12 px-4"
                                        placeholder="No limit"
                                        type="number"/>
                                @error('budget_limit')
                                    <p class="text-red-500 text-xs mt-1 flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm">error</span> {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Footer Action -->
                    <div class="pt-4 border-t border-[#eaf1ec] dark:border-white/5">
                        <button class="w-full bg-primary hover:bg-primary/90 text-white font-bold h-14 rounded-xl shadow-lg shadow-primary/20 transition-all active:scale-[0.98] flex items-center justify-center gap-3">
                            <span>Tạo phiên &amp; Gửi vào Chatwork</span>
                            <span class="material-symbols-outlined">rocket_launch</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Helpful Hints / FAQ -->
            <div class="mt-8 grid md:grid-cols-3 gap-6">
                <div class="p-4 bg-primary/5 dark:bg-primary/5 rounded-xl border border-primary/10">
                    <span class="material-symbols-outlined text-primary mb-2">groups</span>
                    <h4 class="font-bold text-sm mb-1">Thành viên</h4>
                    <p class="text-xs text-[#5c8a6b] dark:text-gray-400">Chia sẻ một đường dẫn duy nhất tới kênh Chatwork của team bạn.</p>
                </div>
                <div class="p-4 bg-primary/5 dark:bg-primary/5 rounded-xl border border-primary/10">
                    <span class="material-symbols-outlined text-primary mb-2">payments</span>
                    <h4 class="font-bold text-sm mb-1">Chia tiền dễ dàng</h4>
                    <p class="text-xs text-[#5c8a6b] dark:text-gray-400">Tự động tính toán giá tiền bao gồm cả thuế và phí vận chuyển.</p>
                </div>
                <div class="p-4 bg-primary/5 dark:bg-primary/5 rounded-xl border border-primary/10">
                    <span class="material-symbols-outlined text-primary mb-2">history</span>
                    <h4 class="font-bold text-sm mb-1">Đặt lại nhanh chóng</h4>
                    <p class="text-xs text-[#5c8a6b] dark:text-gray-400">Tải lại cửa hàng và các món ăn từ những phiên đặt hàng trước đó.</p>
                </div>
            </div>
        </div>
    </form>
@endsection