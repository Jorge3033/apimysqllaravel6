<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\ApiController;

use App\Seller;
use Illuminate\Http\Request;

class SellerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $sellers= Seller::with('user')->get();
        return $this->showAll($sellers);
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
            'name' => 'required|string',
            'last_name' =>'required|string',
            'phone' => 'required|numeric',
            'user_id' => 'required'
        ]);

        $seller= new Seller;
        $seller->status='pending';
        $seller->save();
        return $this->showOne($seller);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        $seller->user;
        return $this->showOne($seller);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        $this->validate($request,[
            'name' => 'string',
            'last_name' =>'string',
            'phone' => 'numeric',
        ]);

        if($request->has('name')){
            $seller->name=$request->name;
        }
        if($request->has('last_name')){
            $seller->last_name=$request->last_name;
        }
        if($request->has('phone')){
            $seller->phone=$request->phone;
        }
        if($request->has('status')){
            $seller->status=$request->status;
        }
        if($request->has('verified_at')){
            $seller->verified_at=$request->verified_at;
        }
        if($request->has('user_id')){
            $seller->user_id=$request->user_id;
        }
        if (!$seller->isDirty()) {
            $mensagge="Especificar al menos un valor diferente para actualizar";
            return $this->errorResponse($mensagge,422);
          }
        $seller->save();
        return $this->showOne($seller);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        return $this->errorResponse('No puedes eliminar a un vendedor por el momento',422);
    }
}
