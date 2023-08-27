<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    protected $layout = 'default';

    public function index(){

        $layout = 'main';
        $posts = Post::get();
        // dd($posts);
        return view('pages.index', compact('layout', 'posts'));
    }
    public function about(){
        $layout = $this -> layout;

        return view('pages.about', compact('layout'));
    }
    public function contact(){
        $layout = $this -> layout;

        return view('pages.contact', compact('layout'));
    }
    public function portfolio(){
        $layout = $this -> layout;

        return view('pages.portfolio', compact('layout'));
    }
    public function skills(){
        $layout = $this -> layout;
        
        return view('pages.skills', compact('layout'));
    }
}
