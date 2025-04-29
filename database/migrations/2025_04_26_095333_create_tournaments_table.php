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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->enum('game', ['pubg', 'freefire']);
            $table->string('entry_fee');
            $table->string('prize_pool');
            $table->string('max_players');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['upcoming', 'ongoing', 'completed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournament');
    }
};
