<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories');
    }
    
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show',['result'=> $category]);
    }

    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
       
        if(File::exists(public_path('img/categories/'.$category->cate_image))){
            File::delete(public_path('img/categories/'.$category->cate_image));
        }
        
        
        return redirect()->route('home')->with("message_cate","Deleted Successfully");
    }
    public function create(){
        $category=Category::all();
        return view("categories.create",["result"=> $category]);

    }
    public function store(CategoryRequest $abdo){ 
         if($abdo->hasFile("cate_image")){
            $image = $abdo->cate_image;
            $imageName = time()."_". rand(1,100000) .".". $image->extension();
            $image->move(public_path("img/categories/"), $imageName);
        }
        Category::create([
            "id" => $abdo->id,
            "cate_image" => $imageName,
            "title_en" => $abdo->title_en,
            "title_ar" => $abdo->title_ar,
            "description_en" => $abdo->description_en,
            "description_ar" => $abdo->description_ar,
            "parent_id" => $abdo->parent_id,
        ]);
        return redirect()->route("home")->with("message_cate","Created Successfully");
    }
    public function edit($id){
        $categories = Category::findOrFail($id);
        return view("categories.edit",["item"=>$categories]);
    }
    public function update(Request $request){
        $old_id=$request->old_id;
        $category=Category::findOrFail($old_id);

        if($request->hasFile("cate_image")){

            if(File::exists(public_path('img/categories/'.$category->cate_image))){
                File::delete(public_path('img/categories/'.$category->cate_image));
            }
            
            $image = $request->cate_image;
            $imageName = time()."_". rand(1,100000) .".". $image->extension();
            $image->move(public_path("img/categories/"), $imageName);
        }else{
            $imageName =$category->cate_image;
        }

        $request->validate([
            'id' => [
                'required',
                Rule::unique('categories')->ignore($request->old_id),
            ], 
            'title_en' => 'required|min:3|max:255',
            'title_ar' => 'required|min:3|max:255',
            'description_en' => 'required|min:3|max:255',
            'description_ar' => 'required|min:3|max:255',
            'parent_id' => 'required',
            'cate_image' => '|image|max:2048|mimes:png,jpeg',
        ]);




        $category->update([
            "id" => $request->id,
            "cate_image" => $imageName,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
            "parent_id" => $request->parent_id,
        ]);
        return redirect()->route("home")->with("message_cate","Edit Successfully");
    
    }
     
}
