<?php

namespace App\Http\Controllers;
use App\Models\Product;

// use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::orderBy("id","desc")->get();
        // dd($products);
        return view('products',compact('products'));
    }

    public function main(){
        return view('main');
    }

    public function add() {
        return view('add');
    }

    public function store (Request $request){
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'description' => 'required',
            'image'=> 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $products = new Product();

        $products->name = $request->name;
        $products->price = $request->price;
        $products->category = $request->category;
        $products->description = $request->description;
        // image
        $extension = $request->file('image')->extension();
        $fileName = date('YmdHis').'.'.$extension;
        // move uploads
        $request->file('image')->move(public_path('uploads/'), $fileName);
        $products->image = $fileName;

        $products->save();

        return redirect()->route('product-list')->with('success', 'Product added successfully!');
        // dd($fileName);

    }
}
