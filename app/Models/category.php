<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable=[
        'category'
    ];
    // public function course()
    // {
    //     return $this->hasMany(course::class);
    // }  protected $fillable=[
       

    protected $table ='categories';

    public function book()
    {
        return $this->hasMany(book::class);
        // return $this->hasMany(course::class);
    }   
    
}
