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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('slug')->default(null);
            $table->string('image',300)->default(null);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->default(null)->constrained('categories')->onDelete('cascade');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('meta_title')->default(null);
            $table->longText('meta_description')->default(null);
            $table->mediumText('meta_keyword')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
