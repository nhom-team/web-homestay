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
    Schema::create('orders_detail', function (Blueprint $table) {
        $table->id();

        // Khóa ngoại
        $table->foreignId('order_id')
              ->constrained('orders');

        $table->foreignId('rooms_id')
              ->constrained('rooms');

        $table->float('price');

        $table->unsignedInteger('qty');

        $table->float('amount');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_detail');
    }
};
