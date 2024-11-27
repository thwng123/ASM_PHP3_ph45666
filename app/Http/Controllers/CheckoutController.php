<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function vnpay_payment()
    {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "http://localhost:8000/checkout";
        $vnp_TmnCode = "ODHPVKBF";//Mã website tại VNPAY 
        $vnp_HashSecret = "UNALWNR0PIE1WSUTD5PQRWE2MCVGVUAM"; //Chuỗi bí mật

        $vnp_TxnRef = time(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này 

        $vnp_OrderInfo = time();
        $vnp_OrderType = 100000;
        $vnp_Amount = 1000000;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        //Add Params of 2.0.1 Version
   
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
   
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00'
            ,
            'message' => 'success'
            ,
            'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo
    }

    public function index()
    {
        $data = Book::join('carts', 'carts.book_id', 'books.id')
            ->select('books.id as book_id', 'books.title', 'books.quantity as bQuantity', 'books.thumbnail', 'books.price', 'carts.*')
            ->where('carts.user_id', Auth::user()->id)
            ->get();
        $categories = DB::table('categories')->get();
        return view('client.checkout', compact('categories', 'data'));
    }
    public function checkout(Request $request)
    {
        // dd($request->all());
        if (Auth::check()) {
            $order = new Order();

            $order->status = "Đang chờ xử lý";
            $order->user_id = Auth::user()->id;
            $order->total_bill = $request->input('total_bill');
            $order->user_name = $request->input('user_name');
            $order->user_phone = $request->input('user_phone');
            $order->user_address = $request->input('user_address');
            $order->user_email = $request->input('user_email');

            if ($order->save()) {
                $carts = Cart::where('user_id', Auth::user()->id)->get();

                foreach ($carts as $item) {


                    $book = Book::find($item->book_id);

                    if ($book->quantity <= 0) {
                        // Gửi thông báo cho người dùng rằng sản phẩm đã hết hàng
                        return redirect()->back()->with('error', 'Sản phẩm ' . $book->name . ' đã hết hàng.');
                    }

                    $orderItem = new OrderItem();
                    $orderItem->book_id = $item->book_id;
                    $orderItem->quantity = $item->quantity;
                    $orderItem->price = $book->price;
                    $orderItem->order_id = $order->id;

                    $orderItem->save();
                    $item->delete();

                    $book->quantity -= $item->quantity;
                    $book->save();
                }
            }
        }

        return redirect()->route('client.index')->with('msg', 'Đặt hàng thành công');
    }
}
