<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PagesController extends Controller
{
    public function getHome() {

        $posts = Posts::orderBy('created_at','desc')->paginate(5);
        return view('pages.home')->with('posts',$posts);
    }

    public function getAbout() {

        return view('pages.about');
    }

    public function getContact() {

        return view('pages.contact');
    }

}


?>