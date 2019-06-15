<?php

namespace App\Http\Controllers;

use App\Products;
use Dotenv\Validator;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = Cart::content();


       return view('users.cart',compact('cartItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function addItem($id){
        $product = Products::find($id);



        Cart::add($id, $product->name, 1, $product->price, ['size'=>'medium'],$product->image,$product->quantity);
        return back()->with('success', 'Product added to cart successfully!');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'qty' => 'required|numeric|between:1,5'
        ]);
        if ($validator->fails()){
            session()->flash('errors', collect(['Quantity must between 1 and 5']));
            return response()->json(['success'=> false], 400);
        }
        if ($request->qty> $request->quantity){
            session()->flash('errors', collect(['We currently do not have enough items in stock.']));
            return response()->json(['success'=> false], 400);
        }
        Cart::update($id,['qty'=>$request->qty]);
        session()->flash('success_message', 'Quantity was updated successfully');

        return response()->json(['success'=>true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Cart::remove($id);
       return back();
    }
}
