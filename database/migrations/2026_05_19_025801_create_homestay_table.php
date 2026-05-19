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
        Schema::create('homestay', function (Blueprint $table) {
            $table->id();

            $table->string('name', 1000);
            $table->string('slug', 1000);

            $table->string('image', 1000)->nullable();

            $table->unsignedInteger('parent_id')->default(0);

            $table->unsignedInteger('sort_order')->default(1);

            $table->text('description')->nullable();

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
        Schema::dropIfExists('homestay');
    }
};
