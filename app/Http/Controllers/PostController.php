<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('Posts.index')->with('posts',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'

        ]);

        $post= new Post;

        $post->title = $request->input('title');
        $post->desc = $request->input('body');
        $post->save();
            return redirect('Posts.index')->with('success',"Post has been created.");



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('Posts.show')->with('post',$post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::find($id);

        return view('Posts.edit')->with('post',$post);
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

        $post= Post::find($id);

        $post->title = $request->input('title');
        $post->desc = $request->input('body');
        $post->save();
            return redirect('./posts')->with('success',"Post has been modified sucessfully.");


    }

    /**
     * Confirms the response
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts=Post::find($id);
        return view('Posts.destroy')->with('post',$posts);
    }

    /**
     *Deletes the resource in storage
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $posts=Post::find($id);
        $posts->delete();
        return redirect('./posts')->with('success','The post has been sucessfully deleted');
    }
    

    
}
