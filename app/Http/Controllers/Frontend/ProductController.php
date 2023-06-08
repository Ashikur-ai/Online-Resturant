<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use function Spatie\Ignition\ErrorPage\title;
use App\Models\Meal;

class ProductController extends Controller
{
    public function Upload(Request $request)
    {
        $data = new Product;

        $data->name = $request->name;
        $data->rating = $request->rating;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->amount = $request->amount;

        $image = $request->file;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('ProductImage', $imageName);

        $data->image = $imageName;


        $data->save();

        return redirect()->back()->with('message', 'Product uploaded successfully');
    }

    public function UploadMeal(Request $request)
    {
        $data = new Meal;

        $data->meal_name = $request->meal_name;
        $data->first_product = $request->name1;
        $image1 = $request->file1;
        $imageName1 = time().'a.'.$image1->getClientOriginalExtension();
        $request->file1->move('MealImage', $imageName1);

        $data->first_product_image = $imageName1;


        $data->second_product = $request->name2;
        $image2 = $request->file2;
        $imageName2 = time().'b.'.$image2->getClientOriginalExtension();
        $request->file2->move('MealImage', $imageName2);

        $data->second_product_image = $imageName2;


        $data->third_product = $request->name3;
        $image3 = $request->file3;
        $imageName3 = time().'c.'.$image3->getClientOriginalExtension();
        $request->file3->move('MealImage', $imageName3);

        $data->third_product_image = $imageName3;


        $data->fourth_product = $request->name4;
        $image4 = $request->file4;
        $imageName4 = time().'d.'.$image4->getClientOriginalExtension();
        $request->file4->move('MealImage', $imageName4);

        $data->fourth_product_image = $imageName4;

        $data->price = $request->price;

        $data->save();

        return redirect()->back()->with('message', 'Meal uploaded successfully');
    }

    public function Show()
    {
        $data = Product::all();
        return view('seller.allProduct', compact('data'));
    }

    public function mealPage()
    {
        return view('seller.create_meal');
    }


    public function allMeal()
    {
        $data = Meal::all();
        return view('seller.allMeal', compact('data'));
    }
}
