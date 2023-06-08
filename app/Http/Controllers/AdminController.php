<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function showUser()
    {
        $data = User::all();
        return view('admin.showUser', compact('data'));
    }
    public function adminProductShow()
    {
        $data = Product::all();
        return view('admin.showProduct', compact('data'));
    }

    public function adminMealShow()
    {
        $data = Meal::all();
        return view('admin.showMeal', compact('data'));
    }
    public function OrderAll()
    {
        $data = Order::all();
        return view('admin.showOrder', compact('data'));
    }
}
