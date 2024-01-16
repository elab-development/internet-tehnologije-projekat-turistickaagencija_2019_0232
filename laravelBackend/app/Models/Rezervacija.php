<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rezervacija extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function destinacija(): BelongsTo
    {
        return $this->belongsTo(Destinacija::class);
    }

    public function putnik(): BelongsTo
    {
        return $this->belongsTo(Putnik::class);
    }
}
