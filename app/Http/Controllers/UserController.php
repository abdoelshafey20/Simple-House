<?php

namespace App\Http\Controllers;


use App\Http\Requests\UserRequest;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index(){
        return view("users");
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show',['result'=> $user]);
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
       
        // if(File::exists(public_path('img/categories/'.$user->cate_image))){
        //     File::delete(public_path('img/categories/'.$user->cate_image));
        // }
        
        
        return redirect()->route('home')->with("message_user","Deleted Successfully");
    }
    public function create(){
        $user=User::all();
        return view("users.create",["result"=> $user]);

    }
    public function store(UserRequest $abdo){ 
        //  if($abdo->hasFile("cate_image")){
        //     $image = $abdo->cate_image;
        //     $imageName = time()."_". rand(1,100000) .".". $image->extension();
        //     $image->move(public_path("img/categories/"), $imageName);
        // }
        User::create([
            "id" => $abdo->id,
            // "cate_image" => $imageName,
            "name" => $abdo->name,
            "email" => $abdo->email,
            "password" => $abdo->password,
            "role" => $abdo->role,
           
        ]);
        return redirect()->route("home")->with("message_user","Created Successfully");
    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view("users.edit",["item"=>$user]);
    }
    public function update(Request $request){
        $old_id=$request->old_id;
        $user=User::findOrFail($old_id);

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

        $request->validate([
            'id' => [
                'required',
                Rule::unique('users')->ignore($request->old_id),
            ], 
          
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255',
            'role' => 'required|min:3',
           
           
          
            // 'cate_image' => '|image|max:2048|mimes:png,jpeg',
        ]);




        $user->update([
            "id" => $request->id,
            // "cate_image" => $imageName,
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role,
          
  
        ]);
        return redirect()->route("home")->with("message_user","Edit Successfully");
    
    }
}
