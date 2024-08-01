<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Model\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index(){
        return view("posts");
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show',['result'=> $post]);
    }

    public function delete($id){
        $post = Post::findOrFail($id);
        $post->delete();
       
        // if(File::exists(public_path('img/categories/'.$post->cate_image))){
        //     File::delete(public_path('img/categories/'.$post->cate_image));
        // }
        
        
        return redirect()->route('home')->with("message_post","Deleted Successfully");
    }
    public function create(){
        $post=Post::all();
        return view("posts.create",["result"=> $post]);

    }
    public function store(PostRequest $abdo){ 
        //  if($abdo->hasFile("cate_image")){
        //     $image = $abdo->cate_image;
        //     $imageName = time()."_". rand(1,100000) .".". $image->extension();
        //     $image->move(public_path("img/categories/"), $imageName);
        // }
        Post::create([
            "id" => $abdo->id,
            // "cate_image" => $imageName,
            "title_en" => $abdo->title_en,
            "title_ar" => $abdo->title_ar,
            "description_en" => $abdo->description_en,
            "description_ar" => $abdo->description_ar,
           
        ]);
        return redirect()->route("home")->with("message_post","Created Successfully");
    }
    public function edit($id){
        $categories = Post::findOrFail($id);
        return view("posts.edit",["item"=>$categories]);
    }
    public function update(Request $request){
        $old_id=$request->old_id;
        $post=Post::findOrFail($old_id);

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

        $request->validate([
            'id' => [
                'required',
                Rule::unique('posts')->ignore($request->old_id),
            ], 
            'title_en' => 'required|min:3|max:255',
            'title_ar' => 'required|min:3|max:255',
            'description_en' => 'required|min:3|max:255',
            'description_ar' => 'required|min:3|max:255',
         
            // 'cate_image' => '|image|max:2048|mimes:png,jpeg',
        ]);




        $post->update([
            "id" => $request->id,
            // "cate_image" => $imageName,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
  
        ]);
        return redirect()->route("home")->with("message_post","Edit Successfully");
    
    }
}
