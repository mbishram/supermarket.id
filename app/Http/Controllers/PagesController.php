<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Home';
        return view('pages.index')->with('title', $title);
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
    public function offers(){
        $title = 'Offers';
        return view('pages.offers')->with('title', $title);
    }
    public function foods(){
        $title = 'Foods';
        return view('pages.foods')->with('title', $title);
    }
    public function necessities(){
        $title = 'Necessities';
        return view('pages.necessities')->with('title', $title);
    }
    public function promos(){
        $title = 'Promos';
        return view('pages.promos')->with('title', $title);
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
