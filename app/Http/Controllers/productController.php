<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;  

class productController extends Controller
{
    function __construct(){
        $this->products = new Products;
    }
    function index(){
        return view('product')->with(["products"=>Products::all()]);
    }
   // function index(){$products = $this->products->getProducts();return view("product",compact("products"));}
    function save_products(Request $request){
        $data = [
             'Product_Name' => $request->Product_Name,
             'Description'=> $request->Description,
             'Price'=> $request->Price,
             'QuantityInStock' => $request->QuantityInStock,
        ];
        $this->products->saveProducts($data);
        return back();      
    }
    function delete_products($id){
        $this->products->deleteProducts($id);
        return back();
        
    }
    function update_products($id){
        $products = $this->products->updateProducts($id);
        return view('update_products', compact('products'));
    }
    function save_updated_products(Request $request){
        $data = [
            'Product_Name'=> $request->update_Product_name,
            'Description'=> $request->update_Description,
            'Price'=> $request->update_Price,
            'QuantityInStock'=> $request->update_QuantityInStock,
        ];
        $this->products->updatedProducts($data, $request->id);
        return redirect()->route('product');
    }
    //public function index(){return view('product')->with(["products"=>Products::all()]);}
}
