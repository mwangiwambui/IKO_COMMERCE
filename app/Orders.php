<?php

namespace App;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Traits\LogsActivity;

class Orders extends Model
{
    use LogsActivity;
    protected $fillable = ['total', 'delivered'];
    protected static $logAttributes = ['name', 'text'];
    public function getDescriptionForEvent($eventName)
    {
        return __CLASS__ . " model has been {$eventName}";
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function orderItems(){
        return $this->belongsToMany(Products::class)->withPivot('qty','total');
    }
    public static function createOrder(){
        $user=Auth::user();
        $order=$user->orders()->create([
            'total'=> Cart::total(),
            'delivered'=>0
        ]);
        $cartItems = Cart::content();

        foreach ($cartItems as $cartItem){
            $order->orderItems()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->price,

            ]);
            $product = Products::find($cartItem->id);
            $product->update(['quantity'=> ($product->quantity - $cartItem->qty)]);
        }


    }


}
