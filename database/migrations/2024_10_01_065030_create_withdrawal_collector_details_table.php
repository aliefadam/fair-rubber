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
        Schema::create('withdrawal_collector_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('collector_id');
            $table->double('total_honorarium_withdrawn'); //total di carikan
            $table->double('total_honorarium_remaining_withdrawn'); // total yang belum dicarikan
            $table->double('total_honorarium_should_withdrawn'); //  total yang seharusnya di cairkan
            $table->string('proofment_transfer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('withdrawal_collector_details');
    }
};
