<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();    //get products from the model or db
       return view('products.index', ['products' => $products]);  //pass it to index
       
    }

    public function create(){
        
        return view('products.create');
    }
    public function store(Request $request){
        // dd($request);
        $data = $request->validate([ 
            'name' => 'required',
            'qty' => 'required|decimal:0,1',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $newProduct = Product::create($data);  //call product model and pass data into it.

        return redirect(route('product.index'));  //after saving into db redirect to index page
    }  
    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
        $data = $request->validate([ 
            'name' => 'required',
            'qty' => 'required|decimal:0,1',
            'price' => 'required|numeric',
            'description' => 'nullable'
        ]);

        $product->update($data);     //call product variable to update it

        return redirect(route('product.index'))->with('success', 'Product Updated Successfully');

    }

    public function destroy(Product $product){    //pass products
        $product->delete();

        return redirect(route('product.index'))->with('success', 'Product deleted Successfully');

    }
}
