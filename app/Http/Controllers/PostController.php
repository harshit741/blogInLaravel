<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use DB;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Posts::orderBy('created_at','desc')->paginate(10);
        return view('pages.posts')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'      => 'required|unique:posts,title|max:255',
            'body'       => 'required',
            'category'   => 'required',
            'header_image' => 'image|nullable|max:20480'
        ]);
        
        if($request->hasFile('header_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('header_image')->getClientOriginalName();
            $fileName = str_replace(' ', '_', $filenameWithExt);
            // Get just filename
            $filename = pathinfo($fileName, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('header_image')->getClientOriginalExtension();
            // Filename to store
            $storeImage = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('header_image')->storeAs('/post_header_images', $storeImage);
        } else {
            $storeImage = 'noimage.jpg';
        }
        $post = new Posts;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category = $request->input('category');
        $post->anonymous = $request->input('anonymous');
        $post->header_image = $storeImage;
        
        $post->save();

        return redirect('/posts')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Posts::find($id);
        return view('pages.post')->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
