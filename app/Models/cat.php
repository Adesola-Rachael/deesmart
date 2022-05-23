<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat extends Model
{
    use HasFactory;

    protected $fillable=[
        'category'
    ];

    protected $table ='cats';

    public function course()
    {
        return $this->hasMany(course::class);
    }
}
