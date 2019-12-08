<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Customer;

class CustomersAuthController extends Controller
{


    public function register(Request $request){
        // Check if the inputs are valid. Return error if it's not
        $request -> validate([
            'name' => 'string|required',
            'address' => 'string|required',
            'telephone_number' => 'string|required',
            'email' => 'email:rfc|required|unique:customers',
            'password' => 'string|required|confirmed|min:8',
            'password_confirmation' => 'string|required|min:8',
            'terms' => 'required|accepted',
        ]);

        // Input data into database
        $customer = new Customer;
        $customer->name = $request->input('name');
        $customer->address = $request->input('address');
        $customer->telephone_number = $request->input('telephone_number');
        $customer->email = $request->input('email');
        $customer->password = Hash::make($request->input('password'));
        $customer->save();
        
        //Register success
        return redirect('register')->with('success', 'Akun telah dibuat! Kamu dapat login menggunakan email kamu');
    }

    public function login(Request $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->with('success', 'Anda telah berhasi login!');
        } else {
            return redirect('login')->with('login_failed', 'Akun tidak ditemukan atau password salah');
        }
    }

    public function logout(){

        Auth::logout();

        return redirect('/')->with('success', 'Anda telah berhasil keluar');
    }

}
