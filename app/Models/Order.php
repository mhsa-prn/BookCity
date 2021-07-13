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


    protected $appends = ['persian_status'];

    // Add field to eloquent
    public function getPersianStatusAttribute()
    {
        $message = '';

        switch ($this->status) {
            case self::PREPARING:
                $message = 'در حال آماده سازی';
                break;
            case self::CANCELED:
                $message = 'لغو شده';
                break;
            case self::SENDING:
                $message = 'در حال ارسال';
                break;
            case self::DELIVERED:
                $message = 'تحویل داده شده';
                break;
        }

        return $message;
    }


    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

}
