<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;


use App\Http\Resources\UserResource;

use App\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
      $user = UserResource::collection( User::all());
      $data= [
        "msg" => "Return All Records",
        "status" => 200,
        "data" => $user      
      ];
      return response()->json($data); 
    }

    public function show($id){
        $user =  User::find($id);
        if($user){

            $data= [
              "msg" => "Return One Record",
              "status" => 200,
              "data" => new UserResource ($user)      
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
        $user= User::find($id);

        if($user){

            // if(File::exists(public_path('img/categories/'.$categories->cate_image))){
            //     File::delete(public_path('img/categories/'.$categories->cate_image));
            // }
            
            $user->delete();
        
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
        'id' => 'required|unique:users|max:11',
        'name' => 'required|min:3|max:255',
        'email' => 'required|min:3|max:255',
        'role' => 'required|min:3',
        'password' => 'required|min:3',
     
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
    
    
       $newData =  User::create([
           "id" => $abdo->id,
        
           "name" => $abdo->name,
           "email" => $abdo->email,
           "role" => $abdo->role,
           "password" => $abdo->password,
         

       ]);

       $data= [
        "msg" => "Created Successfully",
        "status" => 200,
        "data" => new UserResource ($newData)      
      ];
      return response()->json($data);    
    }

    public function update(Request $request){
        $old_id=$request->old_id;
        $user=User::findOrFail($old_id);

        $validateData = Validator::make($request->all(),[
            'id' => [
                'required',
                Rule::unique('users')->ignore($request->old_id),
            ], 
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255',
            'role' => 'required|min:3',
         
       
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

        //     if(File::exists(public_path('img/categories/'.$user->cate_image))){
        //         File::delete(public_path('img/categories/'.$user->cate_image));
        //     }
            
        //     $image = $request->cate_image;
        //     $imageName = time()."_". rand(1,100000) .".". $image->extension();
        //     $image->move(public_path("img/categories/"), $imageName);
        // }else{
        //     $imageName =$user->cate_image;
        // }


        $user->update([
            "id" => $request->id,
            // "cate_image" => $imageName,
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role,
           
            // "parent_id" => $request->parent_id,
        ]);
        $data= [
            "msg" => "Updated Successfully",
            "status" => 200,
            "data" =>new UserResource($user)      
          ];
          return response()->json($data);
    
    }
    }

