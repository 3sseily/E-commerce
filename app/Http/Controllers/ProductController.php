<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function get_products(){
        $products = Product::get();
        return view('products.all' , ['products'=> $products]);
    }

    public function get_prod($prod_id){
        $product = Product::findOrFail($prod_id);
        return view('products.details', ['product'=> $product]);
    }


    public function create(){
        return view("products/create");
    }

    public function store(ProductRequest $req){
        $data = $req->all();

        if($req->hasFile('image')){
            $image = $req->file('image');

            $name = time() . "_Product_" . uniqid() . "." . $image->getClientOriginalExtension();
            $destination = public_path('uploads');
            
            $image->move($destination , $name);

            $imgHolder = "uploads/{$name}";
            $data['image'] = $imgHolder;
        }else{
            $data['image'] =  "default.png";
        }
    
        Product::create($data);
        return redirect('/');

    }

    public function delete(Product $id){
        $id->delete();
        return redirect('/');

    }

}
