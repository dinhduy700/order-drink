@extends('components.admin.layout')

@section('title', 'Theo dõi đơn - MensEst')
@section('content')
    <main class="max-w-7xl mx-auto px-6 py-8 pb-32">
        <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div class="space-y-1">
                <div class="flex items-center gap-3 mb-1">
                    <span class="bg-primary/10 text-primary text-[10px] font-black uppercase tracking-widest px-2 py-1 rounded">Theo dõi đơn hàng</span>
                    <span class="flex items-center gap-1 text-[#5c8a6b] text-sm">
                    <span class="size-2 bg-primary rounded-full"></span>
                        Phiên đang hoạt động
                    </span>
                </div>
                <h2 class="text-4xl font-black tracking-tight text-[#101813] dark:text-white">Danh sách theo dõi đơn</h2>
                <p class="text-[#5c8a6b] dark:text-gray-400 font-medium">Danh sách món • {{ $viewModel->getCountTrackingOrders()  }} món</p>
            </div>
            <div class="flex flex-col gap-2">
                <label class="text-[10px] font-black uppercase tracking-widest text-[#5c8a6b]" for="order-date">Ngày đặt hàng</label>
                <div class="relative">
                    <input class="bg-white dark:bg-white/5 border border-[#d4e2d9] dark:border-white/10 rounded-xl px-4 py-2 text-sm font-bold text-primary focus:ring-2 focus:ring-primary/20 focus:border-primary w-full md:w-48 appearance-none" id="order-date" type="date" value="2024-05-24"/>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-white/5 rounded-xl border border-[#d4e2d9] dark:border-white/10 soft-shadow overflow-hidden">
            <div class="p-6 border-b border-[#eaf1ec] dark:border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4">
                <div class="relative w-full sm:w-96">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#5c8a6b] text-xl">search</span>
                    <input class="w-full bg-[#f9fbfa] dark:bg-white/5 border border-[#d4e2d9] dark:border-white/10 rounded-xl pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary" placeholder="Search by name or drink..." type="text"/>
                </div>
                <div class="flex gap-4 w-full sm:w-auto">
                    <select class="w-full sm:w-48 bg-[#f9fbfa] dark:bg-white/5 border border-[#d4e2d9] dark:border-white/10 rounded-xl px-4 py-2 text-sm focus:ring-2 focus:ring-primary/20 focus:border-primary">
                        <option value="">Filter by Status</option>
                        <option value="pending">Pending</option>
                        <option value="ordered">Ordered</option>
                    </select>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table id="tracking-order" class="w-full text-left border-collapse">
                    <thead>
                    <tr class="bg-forest-green">
                        <th class="px-6 py-4 text-xs font-black uppercase tracking-widest w-16 text-center">Hoàn thành</th>
                        <th class="px-6 py-4 text-xs font-black uppercase tracking-widest w-16">STT</th>
                        <th class="px-6 py-4 text-xs font-black uppercase tracking-widest">Tên thành viên</th>
                        <th class="px-6 py-4 text-xs font-black uppercase tracking-widest">Tên món đồ uống</th>
                        <th class="px-6 py-4 text-xs font-black uppercase tracking-widest">Trạng thái</th>
                        <th class="px-6 py-4 text-xs font-black uppercase tracking-widest">Ghi chú</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-[#eaf1ec] dark:divide-white/10">
                    @foreach($viewModel->orders() as $i => $order)
                        <tr class="hover:bg-primary/5 transition-colors group"
                            data-id="{{ $order->id }}"
                            data-member="{{ $order->member_name }}"
                            data-drink="{{ $order->drink_name }}"
                            data-size="{{ $order->size }}"
                            data-notes="{{ $order->notes }}"
                            data-chatwork_room_id="{{ $order->chatwork_room_id_with_bot }}"
                        >
                            <td class="px-6 py-4 text-center">
                                <input class="rounded border-gray-300 text-primary focus:ring-primary h-5 w-5 cursor-pointer"
                                       name="id[]"
                                       type="checkbox"
                                       value="{{ $order->id }}"
                                />
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-[#5c8a6b]">{{ $i + 1 }}</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
{{--                                    <div class="h-8 w-8 rounded-full bg-primary/10 flex items-center justify-center font-bold text-primary text-[10px]">{{ $order->member_initial }}</div>--}}
                                    <span class="font-bold">{{ $order->member_name }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="font-bold text-primary">{{ $order->drink_name }}</span>
                                    <span class="bg-tag-bg text-tag-text text-[10px] font-black px-2 py-0.5 rounded-full uppercase tracking-tighter bg-red-50 text-red-700">Size {{ $order->size }}</span>
{{--                                    <span class="bg-tag-bg text-tag-text text-[10px] font-black px-2 py-0.5 rounded-full uppercase tracking-tighter">Less Ice</span>--}}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-sm text-[#5c8a6b] bg-purple-50 text-purple-700">{{ $order->status }}</span>
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-sm text-[#5c8a6b]">{{ $order->notes }}</span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
{{--            <div class="p-4 bg-white dark:bg-white/5 border-t border-[#eaf1ec] dark:border-white/10 text-center">--}}
{{--                <button class="text-xs font-bold text-primary flex items-center gap-1 mx-auto hover:underline uppercase tracking-widest">--}}
{{--                    View All {{ $viewModel->getCountTrackingOrders()  }} Orders <span class="material-symbols-outlined text-sm">keyboard_arrow_down</span>--}}
{{--                </button>--}}
{{--            </div>--}}
        </div>
    </main>
    <div class="fixed bottom-0 left-0 right-0 z-50 p-4 pointer-events-none">
        <div class="max-w-7xl mx-auto pointer-events-auto">
            <div class="bg-white dark:bg-[#2a3c2f] border border-[#d4e2d9] dark:border-white/10 rounded-2xl soft-shadow p-5 flex flex-col lg:flex-row items-center gap-6 ring-4 ring-primary/5">
                <div class="flex-shrink-0 flex items-center gap-4 border-r border-[#eaf1ec] dark:border-white/10 pr-6">
                    <div class="bg-primary/10 p-2 rounded-xl text-primary">
                        <span class="material-symbols-outlined text-2xl">receipt_long</span>
                    </div>
                    <div>
                        <p class="text-[10px] font-black uppercase tracking-widest text-[#5c8a6b] mb-0.5">Tổng cộng đơn hàng</p>
                        <p class="text-sm font-bold">{{ $viewModel->getCountTrackingOrders() }} Tổng hợp món</p>
                    </div>
                </div>
                <div class="flex-grow flex flex-wrap gap-3 overflow-x-auto custom-scrollbar py-1">
                    @foreach($viewModel->getDrinkSizeGroup() as $item)
                        <div class="bg-[#f9fbfa] dark:bg-white/10 border border-[#d4e2d9] dark:border-white/10 px-3 py-1.5 rounded-xl flex items-center gap-2 whitespace-nowrap">
                            <span class="bg-primary text-white text-[10px] font-black px-1.5 py-0.5 rounded">{{ $item->count }}x</span>
                            <span class="text-sm font-bold text-forest-green dark:text-green-300">{{ $item->drink_name }}</span>
                        </div>
                    @endforeach
                </div>
                <div class="flex-shrink-0 flex gap-2">
                    <a href="{{ route('admin.tracking-order.confirm') }}" class="bg-primary text-white px-8 py-2.5 rounded-xl text-sm font-black shadow-lg shadow-primary/30 hover:-translate-y-0.5 transition-all active:translate-y-0">
                        CHỐT TẤT CẢ ĐƠN HÀNG
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed top-0 right-0 -z-10 opacity-5 pointer-events-none">
        <svg class="text-primary" fill="currentColor" height="400" viewBox="0 0 100 100" width="400">
            <path d="M50 10c-5 0-15 10-15 25s10 25 15 25 15-10 15-25-10-25-15-25z" transform="rotate(45 50 50)"></path>
            <path d="M50 10c-5 0-15 10-15 25s10 25 15 25 15-10 15-25-10-25-15-25z" transform="rotate(-45 50 50)"></path>
        </svg>
    </div>
    <script>
        // Simple script to default to today's date if not handled by server
        window.addEventListener('load', () => {
            const dateInput = document.getElementById('order-date');
            if (dateInput && !dateInput.value) {
                const today = new Date().toISOString().split('T')[0];
                dateInput.value = today;
            }
        });
    </script>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('input[name="id[]"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                let selectedOrders = JSON.parse(localStorage.getItem('tracked_orders')) || [];

                // 2. Ép kiểu value về Number để đồng bộ với ID từ Database (nếu ID là số)
                const id = Number(this.value);

                const parentTr = this.closest('tr');

                if (this.checked) {
                    if (parentTr) parentTr.classList.add('line-through', 'opacity-50');

                    // Tạo Object chứa đầy đủ thông tin từ data attributes của tr
                    const orderData = {
                        id: id,
                        member_name: parentTr.dataset.member,
                        drink_name: parentTr.dataset.drink,
                        size: parentTr.dataset.size,
                        notes: parentTr.dataset.notes,
                        chatwork_room_id: parentTr.dataset.chatwork_room_id,
                    };

                    if (!selectedOrders.some(order => order.id === id)) {
                        selectedOrders.push(orderData);
                    }
                } else {
                    if (parentTr) parentTr.classList.remove('line-through', 'opacity-50');
                    // Lọc bỏ Object dựa trên ID
                    selectedOrders = selectedOrders.filter(order => Number(order.id) !== id);
                }

                // 5. Lưu lại (Đảm bảo tên key thống nhất: tracked_orders)
                localStorage.setItem('tracked_orders', JSON.stringify(selectedOrders));
            });
        });

        // load init checked
        document.addEventListener('DOMContentLoaded', () => {
            // 1. Lấy danh sách ID đã lưu từ LocalStorage
            const savedOrders = JSON.parse(localStorage.getItem('tracked_orders')) || [];

            // 2. Nếu mảng không rỗng, tiến hành quét checkbox
            if (savedOrders.length > 0) {
                document.querySelectorAll('input[name="id[]"]').forEach(checkbox => {
                    const checkboxId = Number(checkbox.value);

                    // 3. Kiểm tra xem checkboxId này có tồn tại trong mảng Object không
                    // Hàm .some() sẽ trả về true nếu tìm thấy ít nhất 1 phần tử thỏa mãn điều kiện
                    const isChecked = savedOrders.some(order => Number(order.id) === checkboxId);

                    if (isChecked) {
                        checkbox.checked = true;

                        // 4. Thêm class hiệu ứng cho dòng tr cha
                        const parentTr = checkbox.closest('tr');
                        if (parentTr) {
                            parentTr.classList.add('line-through', 'opacity-50');
                        }
                    }
                });
            }
        });
    </script>
@endpush