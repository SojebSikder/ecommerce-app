<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function cart_page()
    {
        $result = Cart::with("products")->where("user_id", Auth::id())->get();
        return view('app/cart', ['data' => $result]);
    }

    public function store(Request $request)
    {
        $product_id = $request->input('product_id');
        if ($product_id == null) {
            return "something went wrong :)";
        }
        $qnty = $request->input('qnty') == 0 ? 1 : $request->input('qnty');


        $result = new Cart();
        $result->user_id = Auth::id();
        $result->product_id = $product_id;
        $result->qnty = $qnty;

        $result->save();
        return back();
    }

    public function destroy($id)
    {
        $user_id = Auth::id();
        $user = Cart::where('id', $id)->first();

        if ($user_id == $user->user_id) {
            $cart = Cart::where('id', $id);
            $cart->delete();
            // return response()->json(['message' => 'Deleted successfully'], 200);
            return redirect('/cart')->with('success', 'Item removed');
        } else {
            return response()->json(["message" => "you're not able to proceed :("], 200);
        }
    }
}
