<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->limit('2')->get();
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->limit('2')->get();
        
        if ($categories->count() == 0) {
            $jumlahcategory = 0;
        }else{
            $jumlahcategory = $categories->count();
        };


        if ($posts->count() == 0) {
            $jumlahpost = 0;
        }else{
            $jumlahpost = $posts->count();
        };
        return view('admin.index', compact('categories', 'posts'))
        ->with('jumlahcategory', $jumlahcategory)
        ->with('jumlahpost', $jumlahpost);
    }
}
