<?php

namespace Database\Seeders;

use App\Models\Farmer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FarmerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Farmer::create([
            "collector_id" => 1,
            "nik" => "123",
            "no_kk" => "123",
            "name" => "Topik",
            "gender" => "M",
            "birth_date" => "2000-01-01",
            "village" => "Bandarejo",
            "sub_district_id" => 1,
            "district_id" => 1,
            "city_id" => 1,
            "province_id" => 1,
            "date_of_join" => "2020-01-01",
            "number_of_garden" => 2,
            "size_of_garden" => 100,
            "number_of_tree" => 5,
            "weekly_harvest" => 1000,
            "ownership_garden" => "Milik Sendiri",
            "phone" => "081234567890",
            "bank_name" => "BCA",
            "account_number" => "1234567890",
            "account_name" => "Topik",
        ]);
    }
}
