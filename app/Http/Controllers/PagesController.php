<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Item;
use App\ShoppingCart;

class PagesController extends Controller
{
    public function index(){
        $datas = [
            'title' => 'Home',
            'items' => Item::where('is_promo', 1)->orderBy('created_at', 'desc')->take(3)->get(),
        ];

        return view('pages.index')->with('datas', $datas);
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }
    public function checkout(){
        $i = 0;
        $cart_id = Auth::user()->shopping_cart_id;
        $carts = ShoppingCart::where('id', $cart_id)->orderBy('created_at', 'asc')->get();

        $items = array();

        foreach ($carts as $cart) {
            $i++;

            $item_model = Item::find($cart->item_id);
            $item_photo = $item_model->photo;
            $item_name = $item_model->name;
            $item_price = ($item_model->is_promo) ? ($item_model->price * 70/100) : $item_model->price;
            $item_total = $cart->amount;

            $item = array(
                'number' => $i, 
                'photo' => $item_photo, 
                'name' => $item_name, 
                'price' => round($item_price), 
                'total' => $item_total,
            );
            $items[$i-1] = $item;

        }

        $datas = [
            'title' => 'Checkout',
            'items' => $items,
        ];

        return view('pages.checkout')->with('datas', $datas);
    }
    public function contact(){
        $title = 'Contact';
        return view('pages.contact')->with('title', $title);
    }
    public function faq(){
        $title = 'FAQ';
        return view('pages.faq')->with('title', $title);
    }
    public function login(){
        $title = 'Login';
        return view('pages.login')->with('title', $title);
    }
    public function foods(){
        $datas = [
            'title' => 'Foods',
            'items' => Item::where('category', 'foods')->orderBy('created_at', 'desc')->paginate(12),
        ];

        return view('pages.foods')->with('datas', $datas);
    }
    public function necessities(){
        $datas = [
            'title' => 'Necessities',
            'items' => Item::where('category', 'necessities')->orderBy('created_at', 'desc')->paginate(12),
        ];

        return view('pages.necessities')->with('datas', $datas);
    }
    public function promos(){
        $datas = [
            'title' => 'Promos',
            'items' => Item::where('is_promo', 1)->orderBy('created_at', 'desc')->paginate(12),
        ];

        return view('pages.promos')->with('datas', $datas);
    }
    public function register(){
        $title = 'Register';
        return view('pages.register')->with('title', $title);
    }
    public function item(){
        $title = 'Item';
        return view('pages.item')->with('title', $title);
    }
    public function admin(){
        $title = 'Admin';
        return view('admin.login')->with('title', $title);
    }
    public function dashboard(){
        $title = 'Dashboard';
        return view('admin.index')->with('title', $title);
    }
    public function dashboardInputItems(){
        $title = 'Items';
        return view('admin.items')->with('title', $title);
    }
}
