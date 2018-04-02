<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'weight', 'price'];

    public static function apple()
    {
        return self::where('name', 'like', '%Iphone%');
    }
}
