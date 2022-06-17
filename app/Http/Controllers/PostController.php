<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('formAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $request->validate([
            'menuName'=>'required',
            'typeMenu'=>'required',
            'lotStock'=>'required',
            'price'=>'required',
            'categoryMenu'=>'required',
            'desc'=>'required']);

        Post::create([
            'namaMenu' => $request['menuName'],
            'typeMenu' => $request['typeMenu'],
            'stock' => $request['lotStock'],
            'price' => $request['price'],
            'category' => $request['categoryMenu'],
            'desc' => $request['desc']]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        // dd($post);
        return view('formAdd', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $request->validate([
            'menuName'=>'required',
            'typeMenu'=>'required',
            'lotStock'=>'required',
            'price'=>'required',
            'categoryMenu'=>'required',
            'desc'=>'required']);

            $post->namaMenu = $request->menuName;
            $post->typeMenu = $request->typeMenu;
            $post->stock = $request->lotStock;
            $post->price = $request->price;
            $post->category = $request->categoryMenu;
            $post->desc = $request->desc;
            $post->save();
            return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post -> delete();
        return redirect()->route('home');
    }
}
