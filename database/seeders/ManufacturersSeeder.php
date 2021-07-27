<?php

namespace Database\Seeders;

use App\Enums\SeederData;
use App\Models\Manufacturers;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturers::query()->truncate();
        DB::table('manufacturers')->insert(SeederData::getManufacturers());
    }
}
