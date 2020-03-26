<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ApiController;

use App\StoreType;
use Illuminate\Http\Request;

class StoreTypeController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=StoreType::all();
        return $this->showAll($data);
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
            'name'=>['regex:/^[A-Z,a-z]*$/'],
            'description'=>['regex:/^[A-Z,a-z]*[A-Z,a-z,0-9,ñ, ]*$/']
        ]);
        $data= new StoreType($request->all());
            $data->save();
            return $this->showOne($data);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StoreType  $storeType
     * @return \Illuminate\Http\Response
     */
    public function show(StoreType $storeType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StoreType  $storeType
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreType $storeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StoreType  $storeType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreType $storeType)
    {
        if($request->has('name')){
            $storeType->name=$request->name;
        }
        if($request->has('description')){
            $storeType->description=$request->description;
        }
        if (!$storeType->isDirty()) {
            return response()->json(['error'=>'Especificar al menos un valor diferentepara actualizar','code'=> 422],422);
          }
        $storeType->save();
        return $this->showOne($storeType);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StoreType  $storeType
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreType $storeType)
    {
        $mensagge='No puedes eliminar un tipo de tienda debido a que dependen de un negocio';
        return response()->json(['error'=>$mensagge,'code'=> 422],422);
    }
}
