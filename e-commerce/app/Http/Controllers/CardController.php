<?php

namespace App\Http\Controllers;
use App\Card;
use App\Product;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function index()
    {
        $cards=Card::all();
        return view('history',compact('cards'));
    }
    
    public function card(Request $request)
    {
        
       $id=$request->input('p_id');
       $user_id=$request->input('u_id');
       $product =Product::find($id);
       $card=new Card;
    
       
       $card->name=$product->name;
       $card->image=$product->image;
       $card->price=$product->price;
       $card->user_id=$user_id;
       $card->save();
       $product->quantity=($product->quantity)-1;
       $product->save();

        return redirect('user');

    }
}
