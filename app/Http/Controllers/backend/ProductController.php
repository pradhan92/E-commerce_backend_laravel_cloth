<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $colors = Color::all();
        $sizes = Size::all();
        $brands = Brand::all();
        return view('backend.product.create',compact('categories','colors','sizes','brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $product = new Product();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->category_id=$request->category_id;
        $product->brand_id=$request->brand_id;
        $product->color_id=$request->color_id;
        $product->size_id=$request->size_id;
        $product->description=$request->description;
        uploadImage($request,$product,'image');

       $product->save();
       return redirect()->route('product.index');
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
        $product = Product::find($id);
        $categories = Category::all();
        $colors = Color::all();
        $sizes = Size::all();
        $brands = Brand::all();
        return view('backend.product.create',compact('categories','colors','sizes','brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $product = Product::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->category_id=$request->category_id;
        $product->brand_id=$request->brand_id;
        $product->color_id=$request->color_id;
        $product->size_id=$request->size_id;
        $product->description=$request->description;
       $product->update();
       return redirect()->route('product.index');
    }
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product -> delete();
        return redirect()->route('category.index');
    }
}
