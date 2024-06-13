<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayrollPlan extends Model
{
    use HasFactory;

    const PENDING = 0;
    const CLOTURED = 1;
    const CANCELLED = -1;

    protected $table = 'payroll_plans';
}
