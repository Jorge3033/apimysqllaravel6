<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\ApiController;

use App\PayMode;
use Illuminate\Http\Request;

class PayModeController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll(PayMode::all());
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
        $data= new PayMode($request->all());
        $data->save();
        return $this->showOne($data);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PayMode  $payMode
     * @return \Illuminate\Http\Response
     */
    public function show(PayMode $payMode)
    {
        return $this->showOne($payMode);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PayMode  $payMode
     * @return \Illuminate\Http\Response
     */
    public function edit(PayMode $payMode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PayMode  $payMode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayMode $payMode)
    {
        if($request->has('name')){
            $payMode->name=$request->name;
        }
        if($request->has('description')){
            $payMode->description=$request->description;
        }
        if (!$payMode->isDirty()) {
            $mensagge="Especificar al menos un valor diferentepara actualizar";
            return $this->errorResponse($mensagge,422);
          }
        $payMode->save();
        return $this->showOne($payMode);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PayMode  $payMode
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayMode $payMode)
    {
        $payMode->delete();
        return $this->showOne($payMode);
    }
}
