<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index(){
        return view("products");
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show',['result'=> $product]);
    }

    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
       
        if(File::exists(public_path('img/products/'.$product->cate_image))){
            File::delete(public_path('img/products/'.$product->cate_image));
        }
        
        
        return redirect()->route('home')->with("message_pro","Deleted Successfully");
    }
    public function create(){
        $product=Product::all();
        return view("products.create",["result"=> $product]);

    }
    public function store(ProductRequest $abdo){ 
        //  if($abdo->hasFile("cate_image")){
        //     $image = $abdo->cate_image;
        //     $imageName = time()."_". rand(1,100000) .".". $image->extension();
        //     $image->move(public_path("img/categories/"), $imageName);
        // }
        Product::create([
            "id" => $abdo->id,
            // "cate_image" => $imageName,
            "title_en" => $abdo->title_en,
            "title_ar" => $abdo->title_ar,
            "description_en" => $abdo->description_en,
            "description_ar" => $abdo->description_ar,
            "price" => $abdo->price,
            "quantity" => $abdo->quantity,
           
        ]);
        return redirect()->route("home")->with("message_pro","Created Successfully");
    }
    public function edit($id){
        $categories = Product::findOrFail($id);
        return view("products.edit",["item"=>$categories]);
    }
    public function update(Request $request){
        $old_id=$request->old_id;
        $product=Product::findOrFail($old_id);

        // if($request->hasFile("cate_image")){

        //     if(File::exists(public_path('img/products/'.$product->cate_image))){
        //         File::delete(public_path('img/products/'.$product->cate_image));
        //     }
            
        //     $image = $request->cate_image;
        //     $imageName = time()."_". rand(1,100000) .".". $image->extension();
        //     $image->move(public_path("img/products/"), $imageName);
        // }else{
        //     $imageName =$product->cate_image;
        // }

        $request->validate([
            'id' => [
                'required',
                Rule::unique('products')->ignore($request->old_id),
            ], 
            'title_en' => 'required|min:3|max:255',
            'title_ar' => 'required|min:3|max:255',
            'description_en' => 'required|min:3|max:255',
            'description_ar' => 'required|min:3|max:255',
            'quantity' => 'required',
            'price' => 'required',
            // 'cate_image' => '|image|max:2048|mimes:png,jpeg',
        ]);




        $product->update([
            "id" => $request->id,
            // "cate_image" => $imageName,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
            "quantity" => $request->quantity,
            "price" => $request->price,
        ]);
        return redirect()->route("home")->with("message_pro","Edit Successfully");
    
    }
     
}
