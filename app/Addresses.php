<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Addresses extends Model

{
    use LogsActivity;
    protected static $logAttributes = ['name', 'text'];
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
    protected $fillable = ['addressline', 'city', 'state', 'zip', 'country', 'phone', 'user_id'];
}
