<?php
// database/migrations/2026_01_11_000006_create_drink_order_items_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('drink_order_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('drink_order_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('drink_name');
            $table->string('size')->nullable();
            $table->string('sugar_level')->nullable();
            $table->string('ice_level')->nullable();

            $table->integer('quantity')->default(1);
            $table->integer('unit_price')->nullable();
            $table->integer('total_price')->nullable();

            $table->text('note')->nullable();
            $table->timestamps();

            $table->unique(['drink_order_id', 'user_id']); // 1 người 1 dòng
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('drink_order_items');
    }
};

