<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return view('admin',compact('products'));
    }

    public function user_index()
    {
        $products=Product::all();
        return view('user',compact('products'));
    }
    

    public function store(Request $request)
    {
        $pname=$request->input('name');
        $pimage=$request->input('pimage');
        $price=$request->input('price');
        $quantity=$request->input('quantity');
        $product=new Product;
        $product->name=$pname;
        $product->image=$pimage;
        $product->price=$price;
        $product->quantity=$quantity;
        $product->save();
        return redirect('admin');
    }

   
    public function update(Request $request)
    {
        $id=$request->input('id');
        $pname=$request->input('name');
        $pimage=$request->input('pimage');
        $price=$request->input('price');
        $quantity=$request->input('quantity');

        $product=Product::find($id);

        $product->name=$pname;
        $product->image=$pimage;
        $product->price=$price;
        $product->quantity=$quantity;
        $product->save();
        return redirect('admin');
    }

    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
      
        return redirect('admin');
    }

    
}
