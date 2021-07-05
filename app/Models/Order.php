<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const PREPARING = 1;
    const CANCELED = 2;
    const SENDING = 3;
    const DELIVERED = 4;
}
