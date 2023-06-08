<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    public function detail($id)
    {
        $data = Product::find($id);
        return view('user.productDetails', compact('data'));
    }

    public function weekly()
    {
        return view('user.weekly');
    }

    public function mart()
    {
        return view('user.mart');
    }
}
