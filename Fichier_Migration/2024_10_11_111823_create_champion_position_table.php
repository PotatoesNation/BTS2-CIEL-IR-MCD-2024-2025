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
       Schema::create('champion_position', function (Blueprint $table) {
        $table->id('champion_position_id');
        $table->foreignId('champion_id')->constrained();
        $table->foreignId('position_id')->constrained();
        $table->unique(['champion_id', 'position_id']);
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('champion_position');
    }
};
