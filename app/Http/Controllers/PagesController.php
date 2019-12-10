<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class PagesController extends Controller
{
    public function index(){
        $datas = [
            'title' => 'Home',
            'promos' => Item::where('is_promo', 1)->orderBy('created_at', 'desc')->take(3)->get(),
        ];

        return view('pages.index')->with('datas', $datas);
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }
    public function checkout(){
        $title = 'Checkout';
        return view('pages.checkout')->with('title', $title);
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
            'foods' => Item::where('category', 'foods')->orderBy('created_at', 'desc')->paginate(12),
        ];

        return view('pages.foods')->with('datas', $datas);
    }
    public function necessities(){
        $datas = [
            'title' => 'Necessities',
            'necessities' => Item::where('category', 'necessities')->orderBy('created_at', 'desc')->paginate(12),
        ];

        return view('pages.necessities')->with('datas', $datas);
    }
    public function promos(){
        $datas = [
            'title' => 'Promos',
            'promos' => Item::where('is_promo', 1)->orderBy('created_at', 'desc')->paginate(12),
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
