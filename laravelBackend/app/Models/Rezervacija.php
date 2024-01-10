<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function destinacija()
    {
        return $this->belongsTo(Destinacija::class);
    }

    public function putnik()
    {
        return $this->belongsTo(Putnik::class);
    }
}
