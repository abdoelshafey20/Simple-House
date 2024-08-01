<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Model\Book;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BookController extends Controller
{
    public function index(){
        return view("books");
    }
    
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('books.show',['result'=> $book]);
    }

    public function delete($id){
        $book = Book::findOrFail($id);
        $book->delete();
       
        // if(File::exists(public_path('img/comments/'.$comment->cate_image))){
        //     File::delete(public_path('img/comments/'.$comment->cate_image));
        // }
        
        
        return redirect()->route('home')->with("message_book","Deleted Successfully");
    }
    public function create(){
        $book=Book::all();
        return view("books.create",["result"=> $book]);

    }
    public function store(BookRequest $abdo){ 
        //  if($abdo->hasFile("cate_image")){
        //     $image = $abdo->cate_image;
        //     $imageName = time()."_". rand(1,100000) .".". $image->extension();
        //     $image->move(public_path("img/comments/"), $imageName);
        // }
        Book::create([
            "id" => $abdo->id,
            // "cate_image" => $imageName,
            "title_en" => $abdo->title_en,
            "title_ar" => $abdo->title_ar,
            "description_en" => $abdo->description_en,
            "description_ar" => $abdo->description_ar,
       
        ]);
        return redirect()->route("home")->with("message_book","Created Successfully");
    }
    public function edit($id){
        $categories = Book::findOrFail($id);
        return view("books.edit",["item"=>$categories]);
    }
    public function update(Request $request){
        $old_id=$request->old_id;
        $book=Book::findOrFail($old_id);

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
                Rule::unique('books')->ignore($request->old_id),
            ], 
            'title_en' => 'required|min:3|max:255',
            'title_ar' => 'required|min:3|max:255',
            'description_en' => 'required|min:3|max:255',
            'description_ar' => 'required|min:3|max:255',
            // 'parent_id' => 'required',
            // 'cate_image' => '|image|max:2048|mimes:png,jpeg',
        ]);




        $book->update([
            "id" => $request->id,
            // "cate_image" => $imageName,
            "title_en" => $request->title_en,
            "title_ar" => $request->title_ar,
            "description_en" => $request->description_en,
            "description_ar" => $request->description_ar,
           
        ]);
        return redirect()->route("home")->with("message_book","Edit Successfully");
    
    }
 
}
