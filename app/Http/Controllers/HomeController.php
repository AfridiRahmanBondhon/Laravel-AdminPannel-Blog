<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function index(){
        return view('front-end.home.home',[
            /*'blogs'=>Blog::where('status',1)->orderBy('id', 'desc')->skip(1)->take(5)->get()*/
            'blogs'=>Blog::where('status',1)->orderBy('id', 'desc')->take(5)->get()
        ]);
    }

    public function blogDetails($slug){
        return view('front-end.blog.single-blog',[
            'blog'=>Blog::where('slug',$slug)->first()
        ]);
    }
}
