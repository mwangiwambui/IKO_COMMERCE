<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable= ['name','description','size','image','category_id','price','quantity','synopsis','author'];
    protected $primaryKey = 'id';
    public function category(){
        return $this->belongsTo(Categories::class);
    }
}
