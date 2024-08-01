<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Model\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;

class CommentController extends Controller
{
    public function index(){
        return view("comments");
    }
    
    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.show',['result'=> $comment]);
    }

    public function delete($id){
        $comment = Comment::findOrFail($id);
        $comment->delete();
       
        // if(File::exists(public_path('img/comments/'.$comment->cate_image))){
        //     File::delete(public_path('img/comments/'.$comment->cate_image));
        // }
        
        
        return redirect()->route('home')->with("message_com","Deleted Successfully");
    }
    public function create(){
        $comment=Comment::all();
        return view("comments.create",["result"=> $comment]);

    }
    public function store(CommentRequest $abdo){ 
        //  if($abdo->hasFile("cate_image")){
        //     $image = $abdo->cate_image;
        //     $imageName = time()."_". rand(1,100000) .".". $image->extension();
        //     $image->move(public_path("img/comments/"), $imageName);
        // }
        Comment::create([
            "id" => $abdo->id,
            // "cate_image" => $imageName,
            "title_en" => $abdo->title_en,
            "title_ar" => $abdo->title_ar,
            "description_en" => $abdo->description_en,
            "description_ar" => $abdo->description_ar,
       
        ]);
        return redirect()->route("home")->with("message_com","Created Successfully");
    }
    public function edit($id){
        $categories = Comment::findOrFail($id);
        return view("comments.edit",["item"=>$categories]);
    }
    public function update(Request $request){
        $old_id=$request->old_id;
        $comment=Comment::findOrFail($old_id);

        // if($request->hasFile("cate_image")){

        //     if(File::exists(public_path('img/comments/'.$comment->cate_image))){
        //         File::delete(public_path('img/comments/'.$comment->cate_image));
        //     }
            
        //     $image = $request->cate_image;
        //     $imageName = time()."_". rand(1,100000) .".". $image->extension();
        //     $image->move(public_path("img/comments/"), $imageName);
        // }else{
        //     $imageName =$comment->cate_image;
        // }

        $request->validate([
            'id' => [
                'required',
                Rule::unique('comments')->ignore($request->old_id),
            ], 
            'title_en' => 'required|min:3|max:255',
            'title_ar' => 'required|min:3|max:255',
            'description_en' => 'required|min:3|max:255',
            'description_ar' => 'required|min:3|max:255',
            // 'parent_id' => 'required',
            // 'cate_image' => '|image|max:2048|mimes:png,jpeg',
        ]);




        $comment->update([
            "id" => $request->id,
            // "cate_image" => $imageName,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
           
        ]);
        return redirect()->route("home")->with("message_com","Edit Successfully");
    
    }
 
}
