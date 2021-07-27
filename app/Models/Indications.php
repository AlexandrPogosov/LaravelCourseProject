<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indications extends Model
{
    use HasFactory;

    public function metering_device()
    {
        return $this->belongsTo(MeteringDevice::class);
    }
}
