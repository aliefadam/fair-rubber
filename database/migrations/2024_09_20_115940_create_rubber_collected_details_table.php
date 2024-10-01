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
        Schema::create('rubber_collected_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rubber_collected_id');
            $table->foreignId('farmer_id')->nullable();
            $table->string('farmer_name')->nullable();
            $table->string('farmer_village')->nullable();
            $table->double('collector_scales');
            $table->double('factory_scales');
            $table->double('can_tolerate');
            $table->double('honorarium_scales');
            $table->double('used_scales');
            $table->double('honorarium_farmer');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rubber_collected_details');
    }
};
