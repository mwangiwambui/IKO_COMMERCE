<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    protected $fillable = ['addressline', 'city', 'state', 'zip', 'country', 'phone', 'user_id'];
}
