<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $fillable=[

        'book_title',
        'book_desc',
        'book_file',
        'book_cover',
        'price',
        'status',
        'share',
        'views',
        'likes',
        'download',
        'cat_id'

    ];


    public function category()
    {
         return $this->belongsTo(category ::class);
    }
}

