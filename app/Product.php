<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public static function apple()
    {
        return self::where('name', 'like', '%Iphone%');
    }
}
