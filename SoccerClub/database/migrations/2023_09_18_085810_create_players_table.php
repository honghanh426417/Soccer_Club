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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('player_name', 255);
            $table->date('date_of_birth');
            $table->text('nationality');
            $table->longText('player_title');
            $table->longText('biography');
            $table->text('position');
            $table->double('height');
            $table->double('weight');
            $table->string('player_image', 255);
            $table->string('jersey_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
