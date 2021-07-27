<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MeterGroups extends Model
{
    use HasFactory, Notifiable;

    public $fillable = [
        'MyProperty',
        'title',
        'address',
        'city'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function rate() {
        return $this->belongsTo(Rates::class);
    }

    public function meter_devices()
    {
        return $this->hasMany(MeteringDevice::class);
    }
}
