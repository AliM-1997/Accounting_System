<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashEntries extends Model
{
    use HasFactory;

    protected $table = 'cash_entries';

    protected $fillable = [
        'branch_id',
        'employee_id',
        'amount_lbp',
        'amount_usd',
        'extra_lbp',
        'extra_usd',
        'total',
        'systematic',
        'variance',
    ];

    // Relationships
    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branches::class, 'branch_id');
    }
}
