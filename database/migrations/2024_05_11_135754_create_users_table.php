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
            $table->string('activity');
            $table->string('login');
            $table->string('password');
            $table->string('email');
            $table->string('name');
            $table->string('surname');
            $table->integer('rate_honesty');
            $table->integer('rate_decency'); //рейтинг поведения
            $table->unsignedBigInteger('role_id');
            $table->timestamps();
            $table->dateTime('visited_at');
            $table->integer('buying_count');
            $table->integer('sales_count');
            $table->unsignedBigInteger('ava_id');
            $table->softDeletes();
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
