<?php

namespace Database\Seeders;

use App\Enums\SeederData;
use App\Models\DataTypes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataTypes::query()->truncate();
        DB::table('data_types')->insert(SeederData::getDataTypes());
    }
}
