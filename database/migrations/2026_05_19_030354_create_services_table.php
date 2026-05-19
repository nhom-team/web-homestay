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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            // Homestay / phòng áp dụng dịch vụ
            $table->foreignId('room_id')
                  ->constrained('rooms');

            $table->string('name', 255);

            $table->string('image', 1000)->nullable();

            $table->text('description')->nullable();

            $table->float('price')->default(0);

            $table->timestamp('created_at')->useCurrent();

            $table->unsignedInteger('created_by')->default(1);

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
        Schema::dropIfExists('services');
    }
};