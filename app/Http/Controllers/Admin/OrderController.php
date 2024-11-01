<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        // $orders = User::join('orders','orders.user_id','user_id')
        //     ->select('orders.*','users.name','users.email','users.is_active')
        //     ->get();
        
            $orders = Order::latest('id')->paginate(10);

        return view('admin.orders.index', compact('orders'));
    }

    public function changeOrderStatus($status, $id){
        if(Auth::check()){
            $order = Order::find($id);
            $order->status = $status;
            $order->save();
            return redirect()->back();
        }
    }
}
