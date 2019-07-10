<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Categories extends Model
{
    use LogsActivity;
    protected $fillable= ['name','description'];
    protected static $logAttributes = ['name', 'text'];
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
    protected $primaryKey = 'id';
    public function products()
    {
        return $this->hasMany('App\Products');
        // return $this->hasMany(Product::class);
    }

}
