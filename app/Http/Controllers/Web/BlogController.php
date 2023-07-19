<?php

namespace App\Http\Controllers\Web;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create(){
          $blogs = Blog::orderBy('title', 'DESC')->get();
        //   return $blogs;
        return view('pages.blogs.index',compact('blogs'));
    }
 
    // public function show($post){
    //     $blog = Blog::where(['slug' => $post])->firstOrFail();
    //     // return $blog;
    //     $blogs = Blog::all();

    //     // return $blog->image_path;

    //     // View::share('blogs',$blogs);
    //     return view('pages.blogs.show',compact('blog','blogs'));
    // }

    public function blogone(){
        
        $blog = Blog::where('slug','10-best-ways-to-write-an-essay')->first();
        return view('pages.blogs.show', compact('blog'));
    }

    public function blogtwo(){
        $blog = Blog::where('slug','an-essay-plan-example-by-the-academic-papers-uk')->first();
        return view('pages.blogs.show', compact('blog'));
    }

    public function blogthree(){
        $blog = Blog::where('slug','books-which-are-helpful-for-essay-writing')->first();
        return view('pages.blogs.show', compact('blog'));
    }

    public function blogfour(){
        $blog = Blog::where('slug','essay-on-particular-technological-trends')->first();
        return view('pages.blogs.show', compact('blog'));
    }

    public function blogfive(){
        $blog = Blog::where('slug','innovation-in-education-in-the-uk')->first();
        return  view('pages.blogs.show',compact('blog'));
    }
    
    public function blogsix(){
        $blog = Blog::where('slug','the-structure-and-breakdown-of-1000-words-dissertation')->first();
        return  view('pages.blogs.show',compact('blog'));
    }

    public function blogseven(){

        $blog = Blog::where('slug','writing-dissertation-questionnaire-dos-and-donts')->first();
        // return $blog;
        return view('pages.blogs.show',compact('blog'));
    }
}
