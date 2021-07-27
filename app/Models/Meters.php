<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meters extends Model
{
    use HasFactory;

    public function metering_devices()
    {
        return $this->hasMany(MeteringDevice::class);
    }

    public function data_type()
    {
        return $this->belongsTo(DataTypes::class);
    }

    public function manufacture()
    {
        return $this->belongsTo(Manufacturers::class);
    }
}
