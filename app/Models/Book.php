<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'description', 'author_id', 'price', 'image'];

    /*  public function order_items()
      {
          return $this->hasMany(OrderItem::class);
      }*/

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_books');
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function showDetails($id)
    {

    }


}
