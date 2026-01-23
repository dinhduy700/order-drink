@extends('components.admin.layout')

@section('title', 'Xác nhận để đặt - MensEst')
@section('content')
    <main class="flex-1 flex items-center justify-center p-6 bg-black/40 backdrop-blur-sm">
        <div class="w-full max-w-[800px] bg-white dark:bg-[#1a1d23] rounded-2xl shadow-2xl overflow-hidden flex flex-col max-h-[90vh]">
            <div class="bg-[#f0fdf4] dark:bg-[#1e2f24] border-b border-[#dcfce7] dark:border-[#2d4a37] p-6 text-center shrink-0">
                <div class="flex justify-center mb-2">
                    <span class="material-symbols-outlined text-[#16a34a] text-3xl">fact_check</span>
                </div>
                <h2 class="text-[#0e1b12] dark:text-[#dcfce7] text-xl md:text-2xl font-bold leading-tight">
                    Final Order Confirmation
                </h2>
                <p class="mt-1 text-sm text-[#3e5c48] dark:text-[#a1c6ad]">Review "who ordered what" before marking as ordered.</p>
            </div>
            <div class="flex-1 overflow-y-auto p-6">
                <div class="mb-4 flex items-center justify-between">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-gray-500 dark:text-gray-400">Member Selections (8 items)</h3>
                    <span class="text-sm font-medium text-primary bg-primary/10 px-3 py-1 rounded-full">Total: $42.50</span>
                </div>
                <div class="overflow-hidden border border-[#e7f3eb] dark:border-[#2d323a] rounded-xl">
                    <table class="w-full text-left border-collapse">
                        <thead class="bg-gray-50 dark:bg-[#252930] text-xs font-bold text-gray-600 dark:text-gray-400 uppercase">
                        <tr>
                            <th class="px-6 py-4">Member Name</th>
                            <th class="px-6 py-4">Drink Name</th>
                            <th class="px-6 py-4">Size</th>
                            <th class="px-6 py-4">Notes</th>
                        </tr>
                        </thead>
                        <tbody id="confirm-list-content" class="divide-y divide-[#e7f3eb] dark:divide-[#2d323a]">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="p-6 border-t border-[#e7f3eb] dark:border-[#2d323a] bg-gray-50 dark:bg-[#1a1d23] flex flex-col sm:flex-row-reverse gap-3 shrink-0">
                <button id="btn-confirm-ordered" class="flex-[2] bg-primary hover:bg-primary-dark text-[#0e1b12] font-bold py-4 px-6 rounded-xl transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2 active:scale-[0.98]">
                    <span class="material-symbols-outlined">check_circle</span>
                    Confirm &amp; Mark as Ordered
                </button>
                <a href="{{ route('admin.tracking-order.index') }}" class="flex-1 bg-white dark:bg-[#2d323a] border border-gray-200 dark:border-[#3d424a] hover:bg-gray-50 dark:hover:bg-[#343a42] text-[#0e1b12] dark:text-white font-bold py-4 px-6 rounded-xl transition-all flex items-center justify-center gap-2 active:scale-[0.98]">
                    <span class="material-symbols-outlined">arrow_back</span>
                    Back
                </a>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const container = document.getElementById('confirm-list-content');
            const savedOrders = JSON.parse(localStorage.getItem('tracked_orders')) || [];
            if (savedOrders.length === 0) {
                container.innerHTML = '<tr><td colspan="4" class="text-center py-4 text-gray-500">Chưa có món nào được chọn.</td></tr>';
                return;
            }

            // Duyệt qua mảng và tạo HTML
            const html = savedOrders.map(order => `
                <tr class="hover:bg-gray-50 dark:hover:bg-[#252930] transition-colors">
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <span class="font-bold text-[#0e1b12] dark:text-white">${order.member_name}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm">${order.drink_name}</td>
                    <td class="py-3 text-center">
                        <span class="px-2 py-0.5 rounded bg-primary/10 text-primary-dark dark:text-primary text-[10px] font-bold uppercase">Size ${order.size}</span>
                    </td>
                    <td class="py-3 text-sm text-gray-600">${order.notes || '---'}</td>
                </tr>
            `).join('');
            container.innerHTML = html;
        });

        $('#btn-confirm-ordered').on('click', function(e) {
            e.preventDefault();

            // 1. Lấy dữ liệu từ localStorage
            const savedOrders = JSON.parse(localStorage.getItem('tracked_orders')) || [];

            if (savedOrders.length === 0) {
                alert('Vui lòng chọn ít nhất một đơn hàng!');
                return;
            }

            // 2. Lấy danh sách ID
            const ids = savedOrders.map(order => order.id);
            const chatwork_room_ids = savedOrders.map(order => order.chatwork_room_id);

            // 3. Hiệu ứng Loading cho nút
            const $btn = $(this);
            const originalText = $btn.html();
            $btn.prop('disabled', true).html('<span class="material-symbols-outlined animate-spin">sync</span> Processing...');

            // 4. Gửi AJAX
            $.ajax({
                url: "{{ route('admin.tracking-order.confirm-ordered') }}",
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}", // Bắt buộc phải có CSRF Token trong Laravel
                    ids: ids,
                    chatwork_room_ids: chatwork_room_ids
                },
                success: function(response) {
                    if (response.success) {
                        // Xóa localStorage sau khi server xác nhận thành công
                        localStorage.removeItem('tracked_orders');

                        // 2. Chuyển hướng đến URL mà Controller trả về
                        if (response.redirect_url) {
                            window.location.href = response.redirect_url;
                        } else {
                            window.location.reload();
                        }
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    alert('Có lỗi xảy ra trong quá trình xử lý.');
                },
                complete: function() {
                    // Trả lại trạng thái nút
                    $btn.prop('disabled', false).html(originalText);
                }
            });
        });
    </script>
@endpush
