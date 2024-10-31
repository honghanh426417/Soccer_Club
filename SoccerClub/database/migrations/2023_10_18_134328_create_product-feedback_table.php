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
        Schema::create('product_feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserID');
            $table->unsignedBigInteger('productID');
            $table->text('feedback_comment');
            $table->text('rating');
            $table->timestamps();

            $table->foreign('UserID')->references('id')->on('users');
            $table->foreign('productID')->references('id')->on('products');
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
