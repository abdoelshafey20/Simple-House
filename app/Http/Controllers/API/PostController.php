<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Http\Resources\PostResource;
use App\Model\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index(){
      $post = PostResource::collection( Post::all());
      $data= [
        "msg" => "Return All Records",
        "status" => 200,
        "data" => $post      
      ];
      return response()->json($data); 
    }

    public function show($id){
        $post =  Post::find($id);
        if($post){

            $data= [
              "msg" => "Return One Record",
              "status" => 200,
              "data" => new PostResource ($post)      
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
        $post= Post::find($id);

        if($post){

            // if(File::exists(public_path('img/categories/'.$categories->cate_image))){
            //     File::delete(public_path('img/categories/'.$categories->cate_image));
            // }
            
            $post->delete();
        
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
        'id' => 'required|unique:posts|max:11',
        'title_en' => 'required|min:3|max:255',
        'title_ar' => 'required|min:3|max:255',
        'description_en' => 'required|min:3|max:255',
        'description_ar' => 'required|min:3|max:255',
   
       ]);

       if($validateData->fails()){
        $data= [
            "msg" => "Validation Required",
            "status" => 200,
            "data" =>$validateData->errors()      
          ];
          return response()->json($data);
       }
       
      //   if($abdo->hasFile("cate_image")){
      //      $image = $abdo->cate_image;
      //      $imageName = time()."_". rand(1,100000) .".". $image->extension();
      //      $image->move(public_path("img/categories/"), $imageName);
      //  }
    
    
       $newData =  Post::create([
           "id" => $abdo->id,
        
           "title_en" => $abdo->title_en,
           "title_ar" => $abdo->title_ar,
           "description_en" => $abdo->description_en,
           "description_ar" => $abdo->description_ar,

       ]);

       $data= [
        "msg" => "Created Successfully",
        "status" => 200,
        "data" => new PostResource ($newData)      
      ];
      return response()->json($data);    
    }

    public function update(Request $request){
        $old_id=$request->old_id;
        $post=Post::findOrFail($old_id);

        $validateData = Validator::make($request->all(),[
            'id' => [
                'required',
                Rule::unique('posts')->ignore($request->old_id),
            ], 
            'title_en' => 'required|min:3|max:255',
            'title_ar' => 'required|min:3|max:255',
            'description_en' => 'required|min:3|max:255',
            'description_ar' => 'required|min:3|max:255',
       
        ]);
    
           if($validateData->fails()){
            $data= [
                "msg" => "Validation Required",
                "status" => 200,
                "data" =>$validateData->errors()      
              ];
              return response()->json($data);

            }
        // if($request->hasFile("cate_image")){

        //     if(File::exists(public_path('img/categories/'.$post->cate_image))){
        //         File::delete(public_path('img/categories/'.$post->cate_image));
        //     }
            
        //     $image = $request->cate_image;
        //     $imageName = time()."_". rand(1,100000) .".". $image->extension();
        //     $image->move(public_path("img/categories/"), $imageName);
        // }else{
        //     $imageName =$post->cate_image;
        // }


        $post->update([
            "id" => $request->id,
            // "cate_image" => $imageName,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
          
        ]);
        $data= [
            "msg" => "Updated Successfully",
            "status" => 200,
            "data" =>new PostResource($post)      
          ];
          return response()->json($data);
    
    }
    }

