<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\ApiController;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::with('category')->get();
        return $this->showAll($products );

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
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required|numeric',
            'stock'=>'required',
            'marker'=>'required',
            'category_id'=> 'required',
            //'avatars'=> 'required|mimes:png,jpg,jpeg',
        ]);

        $data= new Product($request->all());
        $data->status='active';
        $data->save();
        return $this->showOne($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product->category;
        return $this->showOne($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required|numeric',
            'stock'=>'required',
            'marker'=>'required',
            'category_id'=> 'required',
            //'avatars'=> 'required|mimes:png,jpg,jpeg',
        ]);
        if ($request->has('name')) {
            $product->name=$request->name;
        }
        if ($request->has('category_id')) {
            $product->category_id=$request->category_id;
        }
        if ($request->has('price')) {
            $product->price=$request->price;
        }
        if ($request->has('marker')) {
            $product->marker=$request->marker;
        }
        if ($request->has('quantity')) {
            $product->quantity=$request->quantity;
        }
        if ($request->has('avatars')) {
            $product->avatars=$request->avatars;
        }
        if ($request->has('status')) {
            $product->status=$request->status;
        }

        if (!$product->isDirty()) {
            $mensagge="Especificar al menos un valor diferente para actualizar";
            return $this->errorResponse($mensagge,422);
          }
        $product->save();
        return $this->showOne($product);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return $this->showOne($product);
    }
}
