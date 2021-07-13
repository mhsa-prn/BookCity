<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    const SUCCESS = 1;
    const PENDING = 2;
    const FAILURE = 0;
}
