<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location',
    ];

    // Relationships (if you plan on using them later)
    public function employees()
    {
        return $this->hasMany(Employees::class);
    }

    public function cashEntries()
    {
        return $this->hasMany(CashEntries::class);
    }
}
