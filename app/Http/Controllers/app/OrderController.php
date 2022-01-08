<?php

namespace App\Http\Controllers\app;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    //
    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::id();
        $order->id = "ECOM" . uniqid(true);
        $order->order_product_id = $request->input('order_product_id');
        $order->price = $request->input('price');
        $order->payment_mode = $request->input('payment_mode');
        if ($request->input('address')) {
            $order->address = $request->input('address');
        }
        if ($request->input('comment')) {
            $order->comment = $request->input('comment');
        }
        $order->created_at = Carbon::now()->toDateTimeString(); // Carbon::now()->toDateTimeString();
        $order->status = 'order_placed'; // 1 = Order not picked anyone
        $order->save();

        if ($request->ajax()) {
            return response()->json(['message' => "order placed successfully"]);
        }
        // return redirect('/order')->with('success', 'Order have been placed successfully');
        // return redirect('/order')->with('success', 'Order have been placed successfully');
    }

    /**
     * Store to order_product
     */
    public function store_order_product(Request $request)
    {
        //
        $orderProduct = new OrderProduct();
        $orderProduct->product_id = $request->input('product_id');
        $orderProduct->order_product_id = $request->input('order_product_id');
        $orderProduct->price = $request->input('price');
        $orderProduct->qnty = $request->input('qnty');
        $orderProduct->created_at = Carbon::now()->toDateTimeString();
        $orderProduct->save();

        if ($request->ajax()) {
            return response()->json(['message' => "order placed successfully"]);
        }
    }
}
