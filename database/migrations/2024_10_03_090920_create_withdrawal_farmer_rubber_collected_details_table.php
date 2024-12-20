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
        Schema::create('withdrawal_farmer_rubber_collected_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('withdrawal_farmer_rubber_collected_id');
            $table->foreignId('rubber_collected_id');
            $table->string('opinion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawal_farmer_rubber_collected_details');
    }
};
