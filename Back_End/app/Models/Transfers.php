<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfers extends Model
{
    use HasFactory;

    protected $table = 'transfers';

    protected $fillable = [
        'from_branch_id',
        'to_branch_id',
        'employee_id',
        'transfer_date',
        'note',
    ];
}
