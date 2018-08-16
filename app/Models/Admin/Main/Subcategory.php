<?php

namespace App\Models\Admin\Main;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = ['name'];

    public function category()
    {
        return $this->belongsTo('App\Models\Admin\Main\Category');
    }

    public static function everything()
    {
        return static::all();
    }

    public static function search($field, $value)
    {
        return static::where($field, $value)->first();
    }

    public static function searchResults($field, $value)
    {
        return static::where($field, $value)->get();
    }
}
