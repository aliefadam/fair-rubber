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
        Schema::create('collectors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('nik')->nullable();
            $table->string('no_kk')->nullable();
            $table->enum('gender', ['F', 'M']);
            $table->date('birth_date');
            $table->string('village');
            $table->string('address');
            $table->unsignedBigInteger('sub_district_id');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('province_id');
            $table->date('date_of_join');
            $table->double('number_of_garden');
            $table->double('size_of_garden');
            $table->double('number_of_tree');
            $table->double('weekly_harvest');
            $table->string('ownership_garden');
            $table->string('phone');
            $table->string('bank_name');
            $table->string('account_number');
            $table->string('account_name');
            $table->double('tolerance')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collectors');
    }
};
