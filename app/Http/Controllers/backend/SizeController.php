<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\size;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Sabberworm\CSS\Value\Size as ValueSize;

class sizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $size=size::orderBy('id','DESC')->paginate();
        return view('backend.size.index')->with('sizes',$size);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $size = new size();
        $size->title=$request->title;
        $size->slug=Str::slug($request->title);
        $size->status=$request->status;
        $size->save();
        return redirect()->route('size.index');
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
        $size=size::find($id);
        return view('backend.size.edit')->with('size',$size);
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
        $size = size::find($id);
        $size->title=$request->title;
        $size->slug=Str::slug($request->title);
        $size->status=$request->status;
        $size->update();
        return redirect()->route('size.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $size = size::find($id);
        $size->delete();
        return redirect()->route('size.index');
    }
}
