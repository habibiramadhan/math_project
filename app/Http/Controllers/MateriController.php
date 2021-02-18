<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class MateriController extends Controller
{
    public function index()
    {
        $materis = Post::orderBy('id', 'ASC')->where('post_type', 'post')->get();
        return view('students.index', compact('materis'));
    }

    public function show(Post $materis, $id)
    {
        $materis = Post::where('id',$id)->get();
        return view('students.materi', compact('materis'));
    }
}
