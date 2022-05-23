<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;

    protected $fillable=[
        // 
    ];

    protected $table ='courses';

    public function cat()
    {
         return $this->belongsTo(Cat::class);
    }

}
