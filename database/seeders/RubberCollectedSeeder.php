<?php

namespace Database\Seeders;

use App\Models\RubberCollected;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RubberCollectedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RubberCollected::create(
            [
                'id' => 1,
                'collector_id' => 1,
                'date' => '2024-01-01',
                'total_collector_scales' => 830,
                'total_factory_scales' => 706,
                'total_can_tolerate' => 125,
                'total_honorarium_scales' => 830,

                'total_used_scales' => 830,

                'max_tolerance_percentage' => 10,
                'tolerance_percentage_scales' => 15,

                'total_honorarium_farmer' => 1660000,
                'total_honorarium_collector' => 415000,
                'total_honorarium_collector_withdrawn' => 0,

                'description' => 1,
                'status' => 1, //1=belum dicarikan,2=sudah dicairkan,3=diproses,4=belum diambil,5=tidak dicarikan

            ]
        );
        RubberCollected::create(

            [
                'id' => 2,
                'collector_id' => 2,
                'date' => '2024-10-01',
                'total_collector_scales' => 830,
                'total_factory_scales' => 706,
                'total_can_tolerate' => 125,
                'total_honorarium_scales' => 830,

                'total_used_scales' => 830,

                'max_tolerance_percentage' => 10,
                'tolerance_percentage_scales' => 15,

                'total_honorarium_farmer' => 100000,
                'total_honorarium_collector' => 25000,
                'total_honorarium_collector_withdrawn' => 0,

                'description' => 1,
                'status' => 1, //1=belum dicarikan,2=sudah dicairkan,3=diproses,4=belum diambil,5=tidak dicarikan

            ]
        );
        RubberCollected::create(

            [
                'id' => 3,
                'collector_id' => 1,
                'date' => '2024-10-01',
                'total_collector_scales' => 830,
                'total_factory_scales' => 706,
                'total_can_tolerate' => 125,
                'total_honorarium_scales' => 830,

                'total_used_scales' => 830,

                'max_tolerance_percentage' => 10,
                'tolerance_percentage_scales' => 15,

                'total_honorarium_farmer' => 50000,
                'total_honorarium_collector' => 12500,
                'total_honorarium_collector_withdrawn' => 0,

                'description' => 1,
                'status' => 1, //1=belum dicarikan,2=sudah dicairkan,3=diproses,4=belum diambil,5=tidak dicarikan

            ],
        );
    }
}
