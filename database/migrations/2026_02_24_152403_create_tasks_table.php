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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('title');
            $table->text('description')->nullable();

            $table->longText('starter_code')->nullable();

            // JSON тесты:
            // [
            //   {"expected":"55"},
            //   {"expected":"10"}
            // ]
            $table->json('tests_json');

            $table->unsignedInteger('difficulty')->default(1); // 1-5
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index('language_id');
            $table->index('difficulty');
            $table->index('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
