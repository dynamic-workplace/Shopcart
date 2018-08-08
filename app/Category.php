<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public static function everything()
    {
        return static::all();
    }

    public static function search($field, $value)
    {
        return static::where($field, $value)->first();
    }
}
