<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_sessions', function (Blueprint $table) {
			$table->id();
			$table->string('owner_invite')->comment('Tên người tạo phiên');
			$table->string('session_name')->comment('Tên phiên đặt hàng'); // Bạn đặt name là session_name ở view nên dùng tên này cho đồng bộ
			$table->text('menu_urls')->comment('Danh sách các liên kết thực đơn'); // Dùng text vì có thể chứa nhiều URL
			$table->integer('budget_limit')->comment('Ngân sách tối đa mỗi người');
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_sessions');
    }
};
