<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function product(Request $request){
   
        $product = Product::create([
     
             'pruductname' => $request->pruductname,
             'product'     => $request->product,
             'description' => $request->description,
             'price'       => $request->price,  
             $imageName = time().'.'.$request->image->extension(),
            'image' =>$request->image->move(public_path('images'), $imageName),
       

        ]);

        return view('add');

    }
     public function getproduct(){

        $product = product::all();

        return view('card',['product'=>$product]);
     }
}
