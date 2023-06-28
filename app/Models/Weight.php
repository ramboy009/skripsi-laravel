<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;
    protected $fillable = [
        'hepatitis_id',
        'symptomp_id',
        'bobot',
    ];

    public function symptomp() {
        return $this->hasMany(Symptomp::class);
    }

    public function hepatitis() {
        return $this->hasMany(Hepatitis::class);
    }
}
