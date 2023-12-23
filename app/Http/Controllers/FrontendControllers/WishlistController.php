<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function wishlist($user_id)
    {
        // dd($user_id);
        $wishlist=Wishlist::with('product')->where('user_id',$user_id)->get();
        // dd($count);
        return view('Frontend.Pages.Account.Wishlist.Wishlist',compact('wishlist'));
    }

    public function store($product_id)
    {
        // dd($product_id);s
        Wishlist::create([
            'user_id' => auth()->user()->id,
            'product_id' => $product_id,
        ]);
        return redirect()->back();
    }

    public function remove($wishlist_id){
        $product=Wishlist::find($wishlist_id);
        // dd($product);
        if($product){
            $product->delete();
        }
        return redirect()->back();
    }

}
