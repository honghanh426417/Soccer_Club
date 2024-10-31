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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserID');
            $table->string('full_name');
            $table->string('email');
            $table->string('address');
            $table->string('phone_number');
            $table->string('city');
            $table->string('card_name')->nullable();
            $table->string('card_number')->nullable();
            $table->string('security_code')->nullable();
            $table->timestamps();

            $table->foreign('UserID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
