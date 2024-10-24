<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {

        $user = $request->only(['email', 'password']);
        // dd($customer);
        if (Auth::attempt($user)) {

            // $request->session()->regenerate();

            return redirect()->route('admin.index');
        } else {
            return redirect()->back()->with('message', 'Email hoang Password khong ton tai');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleHandle()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();

            $findUser = User::where('email', $user->email)->first();

            if(!$findUser){
                $newUser = new User;
                $newUser->name = $user->name;
                $newUser->email = $user->email;
                $newUser->avatar = $user->avatar;
                $newUser->password = "12345";
                $newUser->role = "admin";
                $newUser->is_active = "1";
                $newUser->address = "BN";
                $newUser->phone = "0123456789";
                $newUser->save();
                auth()->login($newUser, true);
            }else{
                auth()->login($findUser, true);
            }

            // session()->put('id', $findUser->id);
            // session()->put('role', $findUser->role);

           

          
            return redirect()->route('admin.index');
        } catch (Exception $e) {
            dd($e->getMessage());
        }

       
    }


}
