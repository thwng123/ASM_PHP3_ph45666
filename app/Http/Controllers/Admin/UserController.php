<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();

        return view('admin.users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('avatar');

        if($request->hasFile('avatar')){
            $data['avatar'] = Storage::put('users', $request->file('avatar'));
        }

        

        User::query()->create($data);

        return redirect()->route('admin.users.index')->with('message','Thao tác thành công');
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $data = $request->except('avatar');

        if($request->hasFile('avatar')){
            $data['avatar'] = Storage::put('users', $request->file('avatar'));
        }

        $old_image = $user->avatar;

        $user->update($data);

        if($request->hasFile('avatar') && !empty($old_image) && Storage::exists($old_image)){
            Storage::delete($old_image);
        }

        
        return back()->with('message', 'Thao tác thành công');

     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if(Auth::user()->id === $user->id){
            return redirect()->route('admin.users.index')->with('error', 'Bạn không thể xóa chính mình.');
        }

        if($user->avatar){
            Storage::delete($user->avatar);
        }

        $user->delete();
        return redirect()->route('admin.users.index')->with('status', 'Xóa người dùng thành công.');
    }
}
