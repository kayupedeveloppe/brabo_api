<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;

    const IS_FOR_EMPLOYER = 1;
    const IS_FOR_EMPLOYEE = 2;
}
