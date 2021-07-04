<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $fillable=[
      'user_id',
      'book_id'
    ];

    public function books()
    {
        return $this->belongsTo(Book::class,'book_id');
    }


}
