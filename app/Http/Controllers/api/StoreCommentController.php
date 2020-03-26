<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\ApiController;

use App\StoreComment;
use Illuminate\Http\Request;

class StoreCommentController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->showAll(StoreComment::all());
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
            'user' => 'required|numeric',
            'comment' => 'required|alpha_num',
            'stars' => 'required|numeric',
            'store' => 'required|numeric'
        ]);

        $data= new StoreComment($request->all());
        $data->save();
        return $this->showOne($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StoreComment  $storeComment
     * @return \Illuminate\Http\Response
     */
    public function show(StoreComment $storeComment)
    {
        return $this->showOne($storeComment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StoreComment  $storeComment
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreComment $storeComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StoreComment  $storeComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreComment $storeComment)
    {
        return $this->errorResponse('No puedes Modificar un comentario ya publicado',422);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StoreComment  $storeComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreComment $storeComment)
    {
        return $this->errorResponse('No puedes eliminar un comentario ya publicado',422);

    }
}
