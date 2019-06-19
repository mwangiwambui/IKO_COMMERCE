<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('admin.products.create', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Categories::pluck('name','id');
        $products = Products::all();
        return view('admin.products.create',compact('categories','products'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput= $request->except('image');
        try {
            $this->validate($request, [
                'name' => 'required',
                'price' => 'required',
                'author' => 'required',
                'quantity' => 'required',
                'synopsis' => 'required',
                'category_id' => 'required',
                'image' => 'image|mimes:png,jpg,jpeg|max:10000'
            ]);
        } catch (ValidationException $e) {
        }
        $image = $request->image;
        if ($image){
            $imageName= $image->getClientOriginalName();
            $image->move('uploads',$imageName);
            $formInput['image']= $imageName;
        }
        Products::create($formInput);
        return back()->with('message','Product has successfully been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($categoryId)
    {
        if (!empty($categoryId)){
            $categoryname = Categories::pluck('name')->where('id','categoryId');

        }
        return view('admin.products.create' ,compact('categoryname'));
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::destroy($id);
        return back();
    }
}
