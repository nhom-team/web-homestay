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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            // Liên kết đơn hàng
            $table->foreignId('order_id')
                ->constrained('orders');

            // Người thanh toán
            $table->foreignId('user_id')
                ->constrained('users');

            // Thông tin thanh toán
            $table->float('amount');

            $table->enum('payment_method', [
                'cash',
                'banking',
                'momo',
                'vnpay'
            ])->default('cash');

            $table->enum('payment_status', [
                'pending',
                'paid',
                'failed'
            ])->default('pending');

            $table->string('transaction_code', 255)->nullable();

            $table->timestamp('created_at')->useCurrent();

            $table->timestamp('updated_at')->nullable();
            $table->unsignedInteger('updated_by')->nullable();

            $table->timestamp('deleted_at')->nullable();

            $table->unsignedTinyInteger('status')->default(2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
