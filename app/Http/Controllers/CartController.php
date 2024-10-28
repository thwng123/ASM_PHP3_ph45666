<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addToCart(Request $request)
    {
        //
        // dd($request->all(), Auth::user()->id);
        if (Auth::check()) {
            $cartItem = Cart::where('user_id', Auth::user()->id)
                ->where('book_id', $request->input('id'))
                ->first();

            if ($cartItem) {
                $cartItem->quantity += $request->input('quantity');
                $cartItem->save();
            } else {
                $item = new Cart();
                $item->quantity = $request->input('quantity');
                $item->book_id = $request->input('id');
                $item->user_id = Auth::user()->id;
                $item->save();
            }

        }
        return redirect()->back()->with('success', 'Thêm vào giỏ hàng thành công');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function index()
    {

        
        $data = Book::join('carts', 'carts.book_id', 'books.id')
            ->select('books.id as book_id','books.title','books.quantity as bQuantity' , 'books.thumbnail','books.price', 'carts.*')
            ->where('carts.user_id', Auth::user()->id)
            ->get();

        // dd($data);
        $categories = DB::table('categories')->get();

        return view('client.cart', compact('categories', 'data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function updateCart(Request $request)
    {

        // dd($request->cart);

        foreach ($request->cart as $cart) {
            $item = Cart::where('id',$cart['id'])->first();
            $item->quantity = $cart['qty'];
            
            $item->save();
        
        }

        return redirect()->back();
       



    }

    /**
     * Display the specified resource.
     */
    public function deleteCart(string $id)
    {
        $item = Cart::find($id);
        $item->delete();

        return redirect()->back()->with('msg','Xoá thành công');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
