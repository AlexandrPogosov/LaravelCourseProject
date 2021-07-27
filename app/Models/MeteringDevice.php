<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeteringDevice extends Model
{
    use HasFactory;

    public function indications()
    {
        return $this->hasMany(Indications::class);
    }

    public function meter()
    {
        return $this->belongsTo(Meters::class);
    }

    public function meter_group()
    {
        return $this->belongsTo(MeterGroups::class);
    }
}

