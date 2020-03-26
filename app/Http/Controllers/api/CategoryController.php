<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\ApiController;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll(Category::all());
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

        $data= new Category($request->all());
            $data->save();
            return $this->showOne($data);;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return $this->showOne($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'name'=>['regex:/^[A-Z,a-z]*$/'],
            'description'=>['regex:/^[A-Z,a-z]*[A-Z,a-z,0-9,ñ, ]*$/']
        ]);
        if($request->has('name')){
            $category->name=$request->name;
        }
        if($request->has('description')){
            $category->description=$request->description;
        }
        if (!$category->isDirty()) {
            $mensagge="Especificar al menos un valor diferente para actualizar";
            return $this->errorResponse($mensagge,422);
          }
        $category->save();
        return $this->showOne($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $mensagge='No puedes eliminar una categoria debido a que dependen de otros productos';
        return $this->errorResponse($mensagge,422);
    }
}
