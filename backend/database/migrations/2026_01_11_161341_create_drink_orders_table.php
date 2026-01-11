<?php
// database/migrations/2026_01_11_000005_create_drink_orders_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('drink_orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('team_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('store_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->date('order_date');
            $table->time('order_time')->nullable();

            $table->enum('status', ['open', 'closed', 'ordered', 'cancelled'])
                ->default('open');

            $table->foreignId('created_by')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->text('note')->nullable();
            $table->timestamps();

            $table->unique(['team_id', 'order_date']); // mỗi team 1 order/ngày
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('drink_orders');
    }
};

