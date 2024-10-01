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
        Schema::create('rubber_collecteds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('collector_id');
            $table->date('date');
            $table->double('total_collector_scales');
            $table->double('total_factory_scales');
            $table->double('total_can_tolerate');
            $table->double('total_honorarium_scales');
            $table->double('total_used_scales');
            
            $table->double('max_tolerance_percentage');
            $table->double('tolerance_percentage_scales');

            $table->double('total_honorarium_farmer');
            $table->double('total_honorarium_collector');
            $table->double('total_honorarium_collector_withdrawn');

            $table->text('description')->nullable();
            $table->string('status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rubber_collecteds');
    }
};
