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
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();

            $table->text('excerpt')->nullable();
            $table->string('thumbnail')->nullable();

            $table->longText('content')->nullable();

            $table->foreignId('author_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('category_id')
                ->nullable()
                ->constrained('news_categories')
                ->nullOnDelete();

            $table->enum('status', [
                'draft',
                'published',
                'archived',
            ])->default('draft');

            $table->dateTime('published_at')->nullable();

            $table->unsignedBigInteger('views')->default(0);

            $table->boolean('is_featured')->default(false);
            $table->boolean('allow_comment')->default(false);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->json('meta_keywords')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};