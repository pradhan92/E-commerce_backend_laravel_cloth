<?php

namespace App\Http\Controllers\api;


use App\Http\Controllers\Controller;
use App\Http\Resources\BannerResource;
use App\Http\Resources\BrandResource;
use App\Http\Resources\CartResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ColorResource;
use App\Http\Resources\CompanyResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SizeResource;
use App\Models\Banner;
use App\Models\Bill;
use App\Models\BillDescription;
use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Color;
use App\Models\Company;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //Main
     public function banner(){
     $banner = Banner::all();
    return response()->json(BannerResource::collection($banner));
   }
    public function company(){
     $company = Company::all();
    return response()->json(CompanyResource::collection($company));
   }

   //Shop
   //get categories
    public function getCategories(){
       // $categories = Category::all(); //only categories
       //categories with products
       $categories = Category::with('products')->get();
        return CategoryResource::collection($categories);
    }
   //get category
     public function getCategory($id){
        $products = Product::where('category_id',$id)->get();
        return ProductResource::collection($products);
     }

    //get products
    public function getProducts(){
        $products = Product::all();
        return ProductResource::collection($products);
    }
     //get single product
     public function getProduct($id){
        $product = Product::find($id);
        if(empty($product)){
            return response()->json(['success' => false,'message' => 'Product is not Found !!'],400);
        }
        return new ProductResource($product);
    }
    //Brand
    public function brand(){
     $brand = Brand::all();
    return response()->json(BrandResource::collection($brand));
   }
    //Color
    public function color(){
     $color = Color::all();
    return response()->json(ColorResource::collection($color));
   }
    //Size
    public function size(){
     $size = Size::all();
    return response()->json(SizeResource::collection($size));
   }
   //add to  cart
    public function addToCart(Request $request){

       // return Auth::user();
        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $request->product_id;
        $cart->qty=$request->qty;
        $cart->amount=$request->qty * $request->price;
        $cart->save();
        return response()->json(['success' => true,'message' => 'item added to cart successfully'],201);

    }
    //get to cart
    public function getToCart(Request $request){
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        return CartResource::collection($carts);
    }

    //order
    public function order(Request $request){
        //return 'your here';
        //return $request;

        $bill = new Bill();
        $bill -> user_id = Auth::user()->id;
        $bill ->total = $request->total;
        $bill->save();

        foreach ($request -> products as $product){

            $billDescription = new BillDescription();
            $billDescription->bill_id = $bill->id;
            $billDescription->product_id = $product['product_id'];
            $billDescription->qty = $product['qty'];
            $billDescription->amount = $product['amount'];
            $billDescription->save();

        }
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        foreach ($carts as $cart){
            $cart->delete();
        }
        return response()->json(['success' => true,'message' => 'Your order has been placed'],201);
    }
}
