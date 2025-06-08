<?php

namespace App\Http\Controllers;

use App\Models\Product;

// use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::orderBy("id", "desc")->paginate(4);
        // dd($products);
        return view('products', compact('products'));
    }

    public function main()
    {
        $pizzaCount = Product::where('category', 'Pizza')->count();
        $burgerCount = Product::where('category', 'Burger')->count();
        $pastaCount = Product::where('category', 'Pasta')->count();
        $saladCount = Product::where('category', 'Salad')->count();

        // Pass the counts to the 'main' view
        return view('main', compact('pizzaCount', 'burgerCount', 'pastaCount', 'saladCount'));
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $products = new Product();

        $products->name = $request->name;
        $products->price = $request->price;
        $products->category = $request->category;
        $products->description = $request->description;
        // image
        $extension = $request->file('image')->extension();
        $fileName = date('YmdHis') . '.' . $extension;
        // move uploads
        $request->file('image')->move(public_path('uploads/'), $fileName);
        $products->image = $fileName;

        $products->save();

        return redirect()->route('product-list')->with('success', 'Product added successfully!');
        // dd($fileName);

    }

    // edit
    public function edit($id)
    {
        $products = Product::where('id', $id)->first();

        return view('edit', compact('products'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'description' => 'required',
        ]);

        $products = Product::where('id', $id)->first();

        // កំណត់តម្លៃដំបូង (Initialize) ឱ្យ $fileName ជាមួយនឹងឈ្មោះរូបភាពចាស់របស់ផលិតផល។
        // នេះធានាថា $fileName នឹងមានតម្លៃជានិច្ច ទោះបីគ្មានរូបភាពថ្មីត្រូវបាន upload ក៏ដោយ។
        $fileName = $products->image; // បន្ទាត់ដែលបានបន្ថែម/កែតម្រូវ

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
            ]);

            // លុបរូបភាពចាស់ចេញ ប្រសិនបើវាកំពុងមាន
            if (file_exists(public_path('uploads/' . $products->image)) && !empty($products->image)) {
                unlink(public_path('uploads/' . $products->image));
            }

            $extension = $request->file('image')->extension();
            $fileName = date('YmdHis') . '.' . $extension;
            // រំកិលរូបភាពថ្មីទៅកាន់ថត uploads/
            $request->file('image')->move(public_path('uploads/'), $fileName);
        }

        $products->name = $request->name;
        $products->price = $request->price;
        $products->category = $request->category;
        $products->description = $request->description;
        // កំណត់ឈ្មោះរូបភាពសម្រាប់ផលិតផល
        $products->image = $fileName; // បន្ទាត់នេះនឹងមិន undefined ទៀតទេ

        $products->update();

        return redirect()->route('product-list')->with('success', 'Product updated successfully!');
    }

    public function delete($id)
    {
        $products = Product::where('id', $id)->first();
        if (file_exists(public_path('uploads/' . $products->image)) && !empty($products->image)) {
            unlink(public_path('uploads/' . $products->image));
        }
        $products->delete();
        return redirect()->route('product-list')->with('success', 'Product delete successfully!');
    }
}
