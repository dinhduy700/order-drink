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
        Schema::create('tracking_orders', function (Blueprint $table) {
			$table->id();
			$table->foreignId('order_session_id')->constrained()->onDelete('cascade');

			$table->string('member_name')->comment('Tên thành viên đặt đồ');
			$table->string('drink_name')->comment('Tên món đồ uống');
			$table->string('size')->comment('Kích thước món');
			$table->text('notes')->nullable()->comment('Ghi chú thêm (ít đường, đá riêng...)');
			$table->integer('status')->comment('Trạng thái: 1: pending, 2: ordered');

			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracking_order');
    }
};
