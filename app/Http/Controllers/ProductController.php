<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function add(){
    $r=request();
    if($r->file('image')!=''){
       $image=$r->file('image');  //get uploaded file from HTML      
        $image->move('images',$image->getClientOriginalName());  //image copy to folder under public/images 
        $imageName=$image->getClientOriginalName(); //get uploaded image file name
    }
    else{
        $imageName="empty.jpg";//default image
    }
    $addProduct=Product::create([
        'name'=>$r->productName,
        'description'=>$r->description,
        'price'=>$r->price,
        'quantity'=>$r->quantity,
        'image'=>$imageName,
        'categoryID'=>$r->categoryID,
    ]);
    return redirect()->route('viewProduct');
    }

    public function view(){
        $viewAll=Product::all();
        return view('viewProduct')->with('products',$viewAll);
    }
    
    public function delete($id){
        $deleteProduct=Product::find($id);
        $deleteProduct->delete();
        return redirect()->route('viewProduct');
    }

    public function show(){
        $viewAll=Product::all();
        return view('showProduct')->with('products',$viewAll);
    }

    public function showDetail($id){
        $viewAll=Product::all()->where('id',$id);
        //SQL select * from Products where id='$id'
        return view('showProductDetail')->with('products',$viewAll);
    }

}
