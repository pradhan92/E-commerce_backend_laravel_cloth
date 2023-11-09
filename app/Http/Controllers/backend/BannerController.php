<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners=Banner::all();
        return view('backend.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //   $request->validate([
    //         'title' =>'required',
    //         'image' =>'required',
    //         'description' =>'required'
    //     ]);

        $banner = new Banner();
        $banner-> title = $request->title;
        $banner-> description = $request->description;
        uploadImage($request,$banner,'image');
        $banner->slug = Str::slug($request->title);
        $banner->save();
        return redirect()->route('banner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner=Banner::findOrFail($id);
        return view('backend.banner.edit')->with('banner',$banner);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::find($id);
        $banner-> title = $request->title;
        $banner-> description = $request->description;
        uploadImage($request,$banner,'image');
        $banner->slug = Str::slug($request->title);
        $banner->save();
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->route('banner.index');
    }
}
