<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	public function up(): void
	{
		Schema::table('tracking_orders', function (Blueprint $table) {
			// 1. Xóa cột member_name
			if (Schema::hasColumn('tracking_orders', 'member_name')) {
				$table->dropColumn('member_name');
			}

			$table->string('user_id')->nullable();
		});
	}

	public function down(): void
	{
		Schema::table('tracking_orders', function (Blueprint $table) {
			// Đảo ngược lại các thay đổi
			$table->dropForeign(['user_id']);
			$table->dropColumn('user_id');

			$table->string('member_name')->nullable();
		});
	}
};
