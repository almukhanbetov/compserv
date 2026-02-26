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
        Schema::create('languages', function (Blueprint $table) {
            $table->id();
            $table->string('name');               // Go
            $table->string('slug')->unique();     // go
            $table->string('monaco_mode')->nullable(); // cpp / python / php / go
            $table->boolean('is_active')->default(true);

            $table->unsignedInteger('position')->default(0);

            $table->timestamps();

            $table->index('is_active');
            $table->index('position');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('languages');
    }
};
