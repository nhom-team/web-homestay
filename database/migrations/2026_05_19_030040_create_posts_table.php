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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('title', 1000);
            $table->string('slug', 1000);

            $table->mediumText('detail');

            $table->string('image', 1000);

            $table->enum('post_type', ['post', 'page'])
                ->default('post');

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
        Schema::dropIfExists('posts');
    }
};
