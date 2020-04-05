<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\ApiController;

use App\StoreService;
use Illuminate\Http\Request;

class StoreServiceController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll(StoreService::all());
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

        $data= new StoreService($request->all());
            $data->save();
            return $this->showOne($data);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StoreService  $storeService
     * @return \Illuminate\Http\Response
     */
    public function show(StoreService $storeService)
    {
        return $this->showOne($storeService);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StoreService  $storeService
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreService $storeService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StoreService  $storeService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreService $storeService)
    {
        $this->validate($request,[
            'name'=>['regex:/^[A-Z,a-z]*$/'],
            'description'=>['regex:/^[A-Z,a-z]*[A-Z,a-z,0-9,ñ, ]*$/']
        ]);
        if($request->has('name')){
            $storeService->name=$request->name;
        }
        if($request->has('description')){
            $storeService->description=$request->description;
        }
        if (!$storeService->isDirty()) {
            $mensagge="Especificar al menos un valor diferente para actualizar";
            return $this->errorResponse($mensagge,422);
          }
        $storeService->save();
        return $this->showOne($storeService);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StoreService  $storeService
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreService $storeService)
    {
        $storeService->delete();
        return $this->showOne($storeService);
    }
}
