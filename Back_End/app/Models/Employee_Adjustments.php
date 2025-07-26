<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAdjustment extends Model
{
    use HasFactory;

    protected $table = 'employee_adjustments'; // optional if you want to control table name explicitly

    protected $fillable = [
        'employee_id',
        'type', 
        'amount',
        'note',
    ];

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employee_id');
    }
}
