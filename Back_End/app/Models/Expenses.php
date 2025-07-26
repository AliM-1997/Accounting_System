<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

    protected $table = 'expenses';

    protected $fillable = [
        'supplier_id',
        'employees_id',
        'amount_lbp',
        'amount_usd',
        'type',
        'note',
    ];

    // Relationships
    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employees_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Suppliers::class, 'supplier_id');
    }
}
