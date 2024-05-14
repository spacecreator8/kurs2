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
            $table->string('activity')->default('active');
            $table->string('login');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('name');
            $table->string('surname');
            $table->integer('rate_honesty')->default(100); //рейтинг поведения
            $table->integer('rate_decency')->default(100); //рейтинг поведения
            $table->unsignedBigInteger('role_id')->default(2);
            $table->dateTime('visited_at')->nullable();
            $table->integer('buying_count')->default(0);
            $table->integer('sales_count')->default(0);
            $table->unsignedBigInteger('ava_id')->nullable();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
            $table->softDeletes();
            $table->rememberToken();
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
