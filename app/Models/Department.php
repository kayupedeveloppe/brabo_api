<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    const ACTIVE    = 1;
    const INACTIVE  = 0;
    const DELETED   = -1;
}