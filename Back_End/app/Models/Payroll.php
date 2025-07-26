<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $table = 'payrolls';

    protected $fillable = [
        'employees_id',
        'employee_position',
        'basic_salary',
        'advanced_salary',
        'max_advanced_salary',
        'deductions',
        'discrepancy',
        'additions',
        'bonus',
        'off_days',
        'working_days',
        'current_expensis',
        'total_salary',
    ];

    public function employee()
    {
        return $this->belongsTo(Employees::class, 'employees_id');
    }
}
