<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Products extends Model
{
    use LogsActivity;
    protected static $logAttributes = ['name', 'text'];
    protected $fillable= ['name','description','size','image','category_id','price','quantity','synopsis','author'];
    protected $primaryKey = 'id';
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
    public function category(){
        return $this->belongsTo(Categories::class);
    }
}
