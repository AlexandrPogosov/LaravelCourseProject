<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rates extends Model
{
    use HasFactory;

    public function meter_groups()
    {
        return $this->hasMany(Rates::class);
    }

    public function data_type()
    {
        return $this->belongsTo(DataTypes::class);
    }
}
