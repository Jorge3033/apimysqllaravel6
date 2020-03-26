<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\ApiController;

use App\Store;
use Illuminate\Http\Request;

class StoreController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll(Store::all());
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
            'avatars' => 'reqired|mimes:png,jpg,jpeg',
            'name' => 'required|alpha',
            'location' => 'required|alpha',
            'state' => 'required|alpha',
            'municiality' => 'required|alpha',
            'steet' => 'required|alpha_num',
            'interior_number' => 'required|alpha_num',
            'exterior_number' => 'required|alpha_num',
            'postal_code' => 'required|numeric',
            'monday' => 'required|alpha_num',
            'tuesday' => 'required|alpha_num',
            'wednesday' => 'required|alpha_num',
            'thursday' => 'required|alpha_num',
            'friday' => 'required|alpha_num',
            'saturday' => 'required|alpha_num',
            'sunday' => 'required|alpha_num',
            'seller_id' => 'required|numeric',
        ]);
        $data= new Store($request->all());
        $data->save();
        return $this->showOne($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        $this->validate($request,[
            'avatars' => 'reqired|mimes:png,jpg,jpeg',
            'name' => 'required|alpha',
            'location' => 'required|alpha',
            'state' => 'required|alpha',
            'municiality' => 'required|alpha',
            'steet' => 'required|alpha_num',
            'interior_number' => 'required|alpha_num',
            'exterior_number' => 'required|alpha_num',
            'postal_code' => 'required|numeric',
            'monday' => 'required|alpha_num',
            'tuesday' => 'required|alpha_num',
            'wednesday' => 'required|alpha_num',
            'thursday' => 'required|alpha_num',
            'friday' => 'required|alpha_num',
            'saturday' => 'required|alpha_num',
            'sunday' => 'required|alpha_num',
            'seller_id' => 'required|numeric',
        ]);


        if($store->has('avatars')){$store->avatars=$request->avatars;}

        if($store->has('name')){$store->name=$request->name;}

        if($store->has('location')){$store->location=$request->location;}

        if($store->has('state')){$store->state=$request->state;}

        if($store->has('municiality')){$store->municipiality=$request->municipiality;}

        if($store->has('steet')){$store->street=$request->street;}

        if($store->has('interior_number')){$store->interior_number=$request->interior_number;}

        if($store->has('exterior_number')){$store->exterior_number=$request->exterior_number;}

        if($store->has('postal_code')){$store->postal_code=$request->postal_code;}

        if($store->has('monday')){$store->monday=$request->monday;}

        if($store->has('tuesday')){$store->tuesday=$request->tuesday;}

        if($store->has('wednesday')){$store->wednesday=$request->wednesday;}

        if($store->has('thursday')){$store->thursday=$request->thursday;}

        if($store->has('friday')){$store->friday=$request->friday;}

        if($store->has('saturday')){$store->saturday=$request->saturday;}

        if($store->has('sunday')){$store->sunday=$request->sunday;}

        if($store->has('seller_id')){$store->seller_id=$request->seller_id;}


        if (!$store->isDirty()) {
            $mensagge="Especificar al menos un valor diferente para actualizar";
            return $this->errorResponse($mensagge,422);
          }
        $store->save();
        return $this->showOne($store);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        return $this->errorResponse('No puedeseleimiar una tienda por el momento',422);
    }
}
