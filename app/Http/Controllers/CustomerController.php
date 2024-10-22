<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Customer::all();

        return view('admin.customers.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('avatar');

        if($request->hasFile('avatar')){
            $data['avatar'] = Storage::put('customers', $request->file('avatar'));
        }

        

        Customer::query()->create($data);

        return redirect()->route('admin.customers.index')->with('message','Thao tác thành công');
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('admin.customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $data = $request->except('avatar');

        if($request->hasFile('avatar')){
            $data['avatar'] = Storage::put('customers', $request->file('avatar'));
        }

        $old_image = $customer->avatar;

        $customer->update($data);

        if($request->hasFile('avatar') && !empty($old_image) && Storage::exists($old_image)){
            Storage::delete($old_image);
        }

        
        return back()->with('message', 'Thao tác thành công');

     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
