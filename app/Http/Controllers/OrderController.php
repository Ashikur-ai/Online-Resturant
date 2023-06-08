<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function OrderProduct($id)
    {
        $product = Product::find($id);

        $order = new Order;

        $order->name = $product->name;
        $order->price = $product->price;
        $order->image = $product->image;

        $order->save();

        return redirect()->back()->with('message', 'Order placed successfully');

    }
    public function OrderMeal($id)
    {
        $meal = Meal::find($id);

        $order = new Order;

        $order->name = $meal->meal_name;
        $order->price = $meal->price;
        $order->image = $meal->first_product_image;

        $order->save();

        return redirect()->back()->with('message', 'Order placed successfully');
    }
}
