<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable= ['name','description'];
    protected $primaryKey = 'id';
    public function products()
    {
        return $this->hasMany('App\Products');
        // return $this->hasMany(Product::class);
    }

}
