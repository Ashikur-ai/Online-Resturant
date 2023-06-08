<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;

class HomeController extends Controller
{
    //
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $data = Product::all();
                return view('user.home', compact('data'));
            }
            elseif (Auth::user()->usertype=='1')
            {
                return view('admin.home');
            }
            elseif(Auth::user()->usertype=='2'){
                return view('seller.product_upload');
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function index()
    {
        $data = Product::all();
        return view('user.home', compact('data'));
    }

    public function restaurant()
    {
        return view('user.restaurant');
    }

    public function meal()
    {
        $data = Meal::all();
        return view('user.meal', compact('data'));
    }

    public function about()
    {
        return view('user.about');
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function cart()
    {
        $data = Order::all();
        return view('user.cart', compact('data'));
    }

    public function checkout()
    {
        return view('user.checkout');
    }

    public function logout(Request $request)
    {
        $logout = $request->session()->flush();

        $data = Product::all();
        return view('user.home', compact('data'));
    }
}
