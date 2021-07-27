<?php

namespace App\Enums;

use Carbon\Carbon;

class SeederData
{
    public static function getUnits(): array
    {
        return [
            ['title' => 'liters', 'slug' => 'l'],
            ['title' => 'cube/hour', 'slug' => 'm3/h'],
            ['title' => 'kilowatt/hour', 'slug' => 'kWt/h'],
        ];
    }

    public static function getDataTypes(): array
    {
        return [
            ['title' => 'Cold Water', 'unit_id' => 1],
            ['title' => 'Hot Water', 'unit_id' => 1],
            ['title' => 'Gas', 'unit_id' => 2],
            ['title' => 'Electricity', 'unit_id' => 3],
        ];
    }

    public static function getManufacturers(): array
    {
        return [
            ['title' => 'Novator', 'link' => 'https://novator-tm.com/'],//1
            ['title' => 'Baylan', 'link' => 'https://baylan-ed.com.ua/'],//2
            ['title' => 'Apator', 'link' => 'https://www.apator.com/ru'],//3
            ['title' => 'Gross', 'link' => 'https://gross.ua/'],//4
            ['title' => 'Valtec', 'link' => 'https://valtec.ua/ru/'],//5
            ['title' => 'Бетар', 'link' => 'https://www.betar.ru'],//6
            ['title' => 'БТК-Центр', 'link' => 'https://btk-center.com.ua/'],//7
            ['title' => 'Интерм', 'link' => 'https://intermgaz.com/index.htm'],//8
            ['title' => 'ТеплоПрибор', 'link' => 'https://теплоприбор.рф'],//9
            ['title' => 'Арзамас', 'link' => 'https://www.oaoapz.com/catalog/schetchiki-gaza/schetchiki-gaza-bytovye-sgbe-1-6-sgbe-2-4/'],//10
            ['title' => 'Gallus', 'link' => 'https://gazkomplekt.com.ua'],//11
            ['title' => 'Элехант', 'link' => 'https://elehant.ru'],//12
            ['title' => 'INCOTEX', 'link' => 'https://www.incotex.com/'],//13
            ['title' => 'Тайпит', 'link' => 'https://taipit.ru/'],//14
            ['title' => 'Энергомера', 'link' => 'https://www.energomera.com/'],//15
            ['title' => 'EKF', 'link' => 'https://ekfgroup.com/'],//16
            ['title' => 'TDM ЕLECTRIC', 'link' => 'https://tdme.com.ua/'],//17
        ];
    }

    public static function getMeters()
    {
        return [
          ['model' => 'Novator LK-15H', 'verification_period' => Carbon::now()->toDateTimeString(), 'link' => 'https://www.novator-tm.com/index_uk.php?id=meters-lk-15', 'data_type_id' => 1, 'manufacturer_id' => 1],
          ['model' => 'Novator LK-15G', 'verification_period' => Carbon::now()->toDateTimeString(), 'link' => 'https://www.novator-tm.com/index_uk.php?id=meters-lk-15', 'data_type_id' => 2, 'manufacturer_id' => 1],
          ['model' => 'BAYLAN KK-12', 'verification_period' => Carbon::now()->toDateTimeString(), 'link' => 'https://www.novator-tm.com/index_uk.php?id=meters-lk-15', 'data_type_id' => 2, 'manufacturer_id' => 1],
            //TODO fill Meters Data
        ];
    }
}
