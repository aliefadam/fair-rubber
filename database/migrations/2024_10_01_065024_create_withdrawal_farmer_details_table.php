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
        Schema::create('withdrawal_farmer_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('farmer_id');
            $table->foreignId('withdrawal_id');
            $table->double('total_scales_withdrawn');
            $table->double('total_honorarium_withdrawn');
            $table->string('proofment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawal_farmer_details');
    }
};
