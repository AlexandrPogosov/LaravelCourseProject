<?php

namespace Database\Seeders;

use App\Enums\SeederData;
use App\Models\Units;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Units::query()->truncate();
       DB::table('units')->insert(SeederData::getUnits());
    }
}
