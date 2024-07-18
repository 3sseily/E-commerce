<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function get_products(){
        $Products = Product::get();
        return response()->json($Products);
    }

    public function selected_products(){
        $selectedProducts = Product::select('name' , 'price' , 'quantity')->get();
        return response()->json($selectedProducts);
    }
    
    public function show(Product $id){
        return response()->json($id);
    }
    public function store(Request $request){
        $data = $request->all();
        $product = Product::create($data);
        return response()->json([
            'message'=> 'data successfully inserted',
            'status' => 200,
            'product' => $product   
        ]);

    }
}
