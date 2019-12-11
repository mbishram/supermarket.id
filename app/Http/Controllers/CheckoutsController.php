<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ShoppingCart;
use App\Customer;

class CheckoutsController extends Controller
{
    private $cart_id;

    public function __construct(){
        $latest_cart = ShoppingCart::latest('id')->first();

        if ($latest_cart !== null) {
            $this->cart_id = ($latest_cart->id)+1;
        } else {
            $this->cart_id = 1;
        }
    }

    public function add(Request $request){
        $cart_id = $request->user()->shopping_cart_id;
        $latest_cart = ShoppingCart::where('id', $cart_id)->latest('id')->first();
        if($latest_cart !== null){
            $total_amount = $latest_cart->amount + $request->input('item_price');
        } else{
            $total_amount = $request->input('item_price');
        }
        

        $cart = new ShoppingCart;
        $cart->id = $cart_id;
        $cart->item_id = $request->input('item_id');
        $cart->amount = $total_amount;
        $cart->save();

        // Update the amount of other items
        $update = DB::table('shopping_carts')->where('id', $cart_id)->update(array('amount' => $total_amount));

        return back()->with('success', 'Item added!');
    }

    public function checkout(Request $request){
        $customer = Customer::find(Auth::id());
        $customer->shopping_cart_id = $this->cart_id;
        $customer->save();

        return redirect()->home()->with('success', 'Keranjang berhasil dibayar!');
    }


}
