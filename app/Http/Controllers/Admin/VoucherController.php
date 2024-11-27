<?php

namespace App\Http\Controllers\Admin;

use App\Events\VoucherEvent;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;
// use Illuminate\Validation\Validator;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vouchers = Voucher::latest('id')->paginate(5);
        return view('admin.vouchers.index', compact('vouchers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.vouchers.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required',
            'type' => 'required',
            'discount' => 'required|numeric',
            'status' => 'required',
        ]);

        if ($validator->passes()) {

            if(!empty($request->starts_at)){
                $now = Carbon::now();

                $startAt =  Carbon::createFromFormat('Y-m-d H:i:s', $request->starts_at);

                if($startAt->lte($now) == true){
                    return response()->json([
                        'status' => false,
                        'errors' => ['starts_at' => 'Ngày bắt đầu không được nhỏ hơn ngày hiện tại']
                    ]);
                }
            }
            
            if(!empty($request->starts_at) && !empty($request->expires_at)){
                $expiresAt = Carbon::createFromFormat('Y-m-d H:i:s', $request->expires_at);

                $startAt =  Carbon::createFromFormat('Y-m-d H:i:s', $request->starts_at);

                if($expiresAt->gt($startAt) == false){
                    return response()->json([
                        'status' => false,
                        'errors' => ['expires_at' => 'Ngày kết thúc phải hơn ngày bắt đầu']
                    ]);
                }
            }


            $voucher = new Voucher();
            $voucher->code          = $request->code;
            $voucher->name          = $request->name;
            $voucher->description   = $request->description;
            $voucher->max_uses      = $request->max_uses;
            $voucher->max_uses_user = $request->max_uses_user;
            $voucher->type          = $request->type;
            $voucher->discount      = $request->discount;
            $voucher->min_amount    = $request->min_amount;
            $voucher->status        = $request->status;
            $voucher->starts_at     = $request->starts_at;
            $voucher->expires_at    = $request->expires_at;

            $voucher->save();

            broadcast(new VoucherEvent($voucher));

            $msg = 'Thêm voucher thành công';

            session()->flash('success',$msg);

            return response()->json([
                'status' => true,
                'message' => $msg,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
