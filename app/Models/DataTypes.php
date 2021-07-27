<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTypes extends Model
{
    use HasFactory;

    public function rates()
    {
        return $this->hasMany(Rates::class);
    }

    public function meters()
    {
        return $this->hasMany(Meters::class);
    }

    public function unit()
    {
        return $this->belongsTo(Units::class);
    }
}

