<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destinacija extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function rezervacijas(): HasMany
    {
        return $this->hasMany(Rezervacija::class);
    }
}
