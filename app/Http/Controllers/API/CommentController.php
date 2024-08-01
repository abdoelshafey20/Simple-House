<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Http\Resources\CommentResource;

use App\Model\Comment;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CommentController extends Controller
{
    public function index(){
      $comment = CommentResource::collection( Comment::all());
      $data= [
        "msg" => "Return All Records",
        "status" => 200,
        "data" => $comment      
      ];
      return response()->json($data); 
    }

    public function show($id){
        $comment =  Comment::find($id);
        if($comment){

            $data= [
              "msg" => "Return One Record",
              "status" => 200,
              "data" => new CommentResource ($comment)      
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
        $comment= Comment::find($id);

        if($comment){

            // if(File::exists(public_path('img/categories/'.$categories->cate_image))){
            //     File::delete(public_path('img/categories/'.$categories->cate_image));
            // }
            
            $comment->delete();
        
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
        'id' => 'required|unique:comments|max:11',
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
       
    //     if($abdo->hasFile("cate_image")){
    //        $image = $abdo->cate_image;
    //        $imageName = time()."_". rand(1,100000) .".". $image->extension();
    //        $image->move(public_path("img/categories/"), $imageName);
    //    }
    
    
       $newData =  Comment::create([
           "id" => $abdo->id,
        
           "title_en" => $abdo->title_en,
           "title_ar" => $abdo->title_ar,
           "description_en" => $abdo->description_en,
           "description_ar" => $abdo->description_ar,

       ]);

       $data= [
        "msg" => "Created Successfully",
        "status" => 200,
        "data" => new CommentResource ($newData)      
      ];
      return response()->json($data);    
    }

    public function update(Request $request){
        $old_id=$request->old_id;
        $comment=Comment::findOrFail($old_id);

        $validateData = Validator::make($request->all(),[
            'id' => [
                'required',
                Rule::unique('comments')->ignore($request->old_id),
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


        $comment->update([
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
            "data" =>new CommentResource($comment)      
          ];
          return response()->json($data);
    
    }
    }

