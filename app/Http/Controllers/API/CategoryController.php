<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Http\Resources\CategoryResource;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index(){
      $categories = CategoryResource::collection( Category::all());
      $data= [
        "msg" => "Return All Records",
        "status" => 200,
        "data" => $categories      
      ];
      return response()->json($data); 
    }

    public function show($id){
        $categories =  Category::find($id);
        if($categories){

            $data= [
              "msg" => "Return One Record",
              "status" => 200,
              "data" => new CategoryResource ($categories)      
            ];
            return response()->json($data); 
        }else{
            $data= [
                "msg" => "No Such Id",
                "status" => 205,
                "data" => null      
              ];
              return response()->json($data); 
        }
      }
      public function delete(Request $request){
        $id= $request->id;
        $categories= Category::find($id);

        if($categories){

            if(File::exists(public_path('img/categories/'.$categories->cate_image))){
                File::delete(public_path('img/categories/'.$categories->cate_image));
            }
            
            $categories->delete();
        
            $data= [
                "msg" => "Deleted Successfully",
            "status" => 200,
            "data" => null    
          ];
          return response()->json($data); 
        
        }else{
            $data= [
                "msg" => "No Such ID",
            "status" => 205,
            "data" => null    
          ];
          return response()->json($data); 
        }
          
      }

      public function store(Request $abdo){ 
       
       $validateData = Validator::make($abdo->all(),[
        'id' => 'required|unique:categories|max:11',
        'title_en' => 'required|min:3|max:255',
        'title_ar' => 'required|min:3|max:255',
        'description_en' => 'required|min:3|max:255',
        'description_ar' => 'required|min:3|max:255',
        'parent_id' => 'required',
        'cate_image' => 'required|image|max:2048|mimes:png,jpeg',
       ]);

       if($validateData->fails()){
        $data= [
            "msg" => "Validation Required",
            "status" => 300,
            "data" =>$validateData->errors()      
          ];
          return response()->json($data);
       }
       
        if($abdo->hasFile("cate_image")){
           $image = $abdo->cate_image;
           $imageName = time()."_". rand(1,100000) .".". $image->extension();
           $image->move(public_path("img/categories/"), $imageName);
       }
    
    
       $newData =  Category::create([
           "id" => $abdo->id,
           "cate_image" => $imageName,
           "title_en" => $abdo->title_en,
           "title_ar" => $abdo->title_ar,
           "description_en" => $abdo->description_en,
           "description_ar" => $abdo->description_ar,
           "parent_id" => $abdo->parent_id,
       ]);

       $data= [
        "msg" => "Created Successfully",
        "status" => 200,
        "data" => new CategoryResource ($newData)      
      ];
      return response()->json($data);    
    }

    public function update(Request $request){
        $old_id=$request->old_id;
        $category=Category::findOrFail($old_id);

        $validateData = Validator::make($request->all(),[
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
    
           if($validateData->fails()){
            $data= [
                "msg" => "Validation Required",
                "status" => 200,
                "data" =>$validateData->errors()      
              ];
              return response()->json($data);

            }
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


        $category->update([
            "id" => $request->id,
            "cate_image" => $imageName,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
            "parent_id" => $request->parent_id,
        ]);
        $data= [
            "msg" => "Updated Successfully",
            "status" => 200,
            "data" =>new CategoryResource($category)      
          ];
          return response()->json($data);
    
    }
    }

