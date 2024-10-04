<?php

namespace Database\Seeders;

use App\Models\RubberCollectedDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RubberCollectedDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RubberCollectedDetail::create([
            'id'=>1,
            'rubber_collected_id'=>1,
            'farmer_id'=>1,
            'farmer_name'=>'Amin',
            'farmer_village'=>'Kadurahayu',
            'collector_scales'=>200,
            'factory_scales'=>170,
            'can_tolerate'=>20,
            'honorarium_scales'=>190,
            'used_scales'=>190,
            'honorarium_farmer'=>400000,
            'status'=>1, //1=belum dicarikan,2=sudah dicairkan,3=diproses,4=belum diambil,5=tidak dicarikan
        ]);
        RubberCollectedDetail::create([
            'id'=>2,
            'rubber_collected_id'=>1,
            'farmer_id'=>2,
            'farmer_name'=>'Rudi',
            'farmer_village'=>'Tajur',
            'collector_scales'=>20,
            'factory_scales'=>17,
            'can_tolerate'=>2,
            'honorarium_scales'=>19,
            'used_scales'=>19,
            'honorarium_farmer'=>40000,
            'status'=>1, //1=belum dicarikan,2=sudah dicairkan,3=diproses,4=belum diambil,5=tidak dicarikan
        ]);
        RubberCollectedDetail::create([
            'id'=>3,
            'rubber_collected_id'=>1,
            'farmer_id'=>3,
            'farmer_name'=>'Rusman',
            'farmer_village'=>'Tajur',
            'collector_scales'=>550,
            'factory_scales'=>468,
            'can_tolerate'=>55,
            'honorarium_scales'=>523,
            'used_scales'=>523,
            'honorarium_farmer'=>1100000,
            'status'=>1, //1=belum dicarikan,2=sudah dicairkan,3=diproses,4=belum diambil,5=tidak dicarikan
        ]);
        RubberCollectedDetail::create([
            'id'=>4,
            'rubber_collected_id'=>1,
            'farmer_id'=>null,
            'farmer_name'=>'Codet',
            'farmer_village'=>'Kadurahayu',
            'collector_scales'=>60,
            'factory_scales'=>51,
            'can_tolerate'=>6,
            'honorarium_scales'=>57,
            'used_scales'=>57,
            'honorarium_farmer'=>120000,
            'status'=>1, //1=belum dicarikan,2=sudah dicairkan,3=diproses,4=belum diambil,5=tidak dicarikan
        ]);


        RubberCollectedDetail::create([
            'id'=>5,
            'rubber_collected_id'=>2,
            'farmer_id'=>5,
            'farmer_name'=>'Raja Neraka',
            'farmer_village'=>'Kadurahayu',
            'collector_scales'=>200,
            'factory_scales'=>170,
            'can_tolerate'=>20,
            'honorarium_scales'=>190,
            'used_scales'=>190,
            'honorarium_farmer'=>12500,
            'status'=>1, //1=belum dicarikan,2=sudah dicairkan,3=diproses,4=belum diambil,5=tidak dicarikan
        ]);
        RubberCollectedDetail::create([
            'id'=>6,
            'rubber_collected_id'=>2,
            'farmer_id'=>6,
            'farmer_name'=>'Raja Laut',
            'farmer_village'=>'Tajur',
            'collector_scales'=>20,
            'factory_scales'=>17,
            'can_tolerate'=>2,
            'honorarium_scales'=>19,
            'used_scales'=>19,
            'honorarium_farmer'=>12500,
            'status'=>1, //1=belum dicarikan,2=sudah dicairkan,3=diproses,4=belum diambil,5=tidak dicarikan
        ]);

        RubberCollectedDetail::create([
            'id'=>7,
            'rubber_collected_id'=>3,
            'farmer_id'=>1,
            'farmer_name'=>'Amin',
            'farmer_village'=>'Kadurahayu',
            'collector_scales'=>200,
            'factory_scales'=>170,
            'can_tolerate'=>20,
            'honorarium_scales'=>190,
            'used_scales'=>190,
            'honorarium_farmer'=>2500,
            'status'=>1, //1=belum dicarikan,2=sudah dicairkan,3=diproses,4=belum diambil,5=tidak dicarikan
        ]);
        RubberCollectedDetail::create([
            'id'=>8,
            'rubber_collected_id'=>3,
            'farmer_id'=>2,
            'farmer_name'=>'Rudi',
            'farmer_village'=>'Tajur',
            'collector_scales'=>20,
            'factory_scales'=>17,
            'can_tolerate'=>2,
            'honorarium_scales'=>19,
            'used_scales'=>19,
            'honorarium_farmer'=>10000,
            'status'=>1, //1=belum dicarikan,2=sudah dicairkan,3=diproses,4=belum diambil,5=tidak dicarikan
        ]);
    }
}
