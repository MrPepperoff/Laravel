<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $layout = 'admin';
    //
    public function index(){
        $layout = $this -> layout;
        // $posts = Post::all();

        // dump($posts);
        return view('pages.indexAdmin', compact('layout'));
    }
}
