<?php

namespace App\Http\Controllers;


use App\User;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller 
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $product= DB::table("products")->select("id","price","title_".app()->getlocale()." as title","description_".app()->getlocale()." as description","quantity")->get();
        $book=DB::table("books")->select("id","title_".app()->getlocale()." as title","description_".app()->getlocale()." as description")->get();
        $user= User::all();
        $comment= DB::table("comments")->select("id","title_".app()->getlocale()." as title","description_".app()->getlocale()." as description")->get();
        $post= DB::table("posts")->select("id","title_".app()->getlocale()." as title","description_".app()->getlocale()." as description")->get();
        $categories= DB::table("categories")->select("id","cate_image","title_".app()->getlocale()." as title","description_".app()->getlocale()." as description","parent_id")->get();
        return view('home',["result"=>$categories,"product"=>$product,"post"=>$post,"comment"=>$comment,"user"=>$user,"book"=>$book]);
    }
}
