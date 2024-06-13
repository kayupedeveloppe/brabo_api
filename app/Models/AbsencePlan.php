<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsencePlan extends Model
{
    use HasFactory;

    const ACTIVE = 1;
    const INACTIVE = -1;
}
