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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->default(null);
            $table->string('country')->default(null);
            $table->string('city')->default(null);
            $table->string('district')->nullable()->default(null);
            $table->string('sub_district')->nullable()->default(null);
            $table->string('zip_code')->default(null);
            $table->text('address')->nullable()->default(null);
            $table->date('dob')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->string('email')->unique()->default(null);
            $table->string('phone')->unique();
            $table->string('otp')->nullable();
            $table->string('password');
            $table->enum('role', ['admin', 'seller', 'customer'])->default('customer');
            $table->string('division')->nullable()->default(null);
            $table->string('latitude')->nullable()->default(null);
            $table->string('longitude')->nullable()->default(null);
            $table->enum('status', ['active', 'blocked'])->default('active');
            $table->boolean('is_verified')->default(false);
            $table->timestamp('otp_expires_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
