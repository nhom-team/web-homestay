<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::create('contacts', function (Blueprint $table) {
        $table->id();

        // Người gửi
        $table->foreignId('user_id')
              ->nullable()
              ->constrained('users');

        $table->string('name', 255);

        $table->string('email', 255);

        $table->string('phone', 255);

        $table->string('title', 1000)->nullable();

        $table->mediumText('content');

        // Trả lời liên hệ
        $table->unsignedInteger('replay_id')->default(0);

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
        Schema::dropIfExists('contacts');
    }
};
