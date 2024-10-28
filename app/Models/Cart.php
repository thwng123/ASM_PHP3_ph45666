<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'user_id',
        'quantity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

//     public function books()
// {
//     return $this->belongsToMany(Book::class);
// }


}
