<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\User;

class PagesController extends Controller
{
    public function getHome() {

        $posts = Posts::orderBy('created_at','desc')->paginate(5);
        for ($i=0; $i < count($posts); $i++) { 
            $posts[$i]->author = User::find($posts[$i]->user_id)->name;
        }
        return view('pages.home')->with('posts',$posts);
    }

    public function getAbout() {

        return view('pages.about');
    }

    public function getContact() {

        return view('pages.contact');
    }

    public function category($category) {

        $posts = Posts::orderBy('created_at','desc')->where('category',$category)->paginate(5);

        return view('pages.category')->with('posts',$posts)->with('category',$category);
    }
}


?>