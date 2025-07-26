<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'name',
        'username',
        'branch_id',
        'role',
        'salary',
        'phone',
        'location',
    ];

    public function branch()
    {
        return $this->belongsTo(Branches::class, 'branch_id');
    }

    public function payrolls()
    {
        return $this->hasMany(Payroll::class, 'employees_id');
    }

    public function adjustments()
    {
        return $this->hasMany(EmployeeAdjustment::class, 'employee_id');
    }

    public function expenses()
    {
        return $this->hasMany(Expenses::class, 'employees_id');
    }

    public function cashEntries()
    {
        return $this->hasMany(CashEntries::class, 'employee_id');
    }
}
