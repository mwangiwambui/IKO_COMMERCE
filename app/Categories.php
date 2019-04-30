<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable= ['name','description'];
    public function products()
    {
        return $this->hasMany('App\Product');
        // return $this->hasMany(Product::class);
    }

}
