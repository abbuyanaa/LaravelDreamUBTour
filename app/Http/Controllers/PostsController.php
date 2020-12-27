<?php

namespace App\Http\Controllers;

use App\Model\Posts;
use App\Model\Language;
use App\Model\Category;
use App\Model\Bairshil;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::select('posts.id', 'posts.title', 'posts.body', 'posts.price', 'posts.bairshil_id', 'posts.cat_id', 'languages.name as lname', 'bairshils.name as bname', 'categories.name as cname')
        ->join('languages', 'posts.lang_id', '=', 'languages.id')
        ->join('bairshils', 'posts.bairshil_id', '=', 'bairshils.id')
        ->join('categories', 'posts.cat_id', '=', 'categories.id')
        ->orderBy('posts.id', 'desc')->get();
        return view('admin.post.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bairshil = Bairshil::orderBy('name', 'asc')->get();
        $lang = Language::all();
        $category = Category::orderBy('name', 'asc')->get();
        return view('admin.post.post_add', compact(['bairshil', 'lang', 'category']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        Posts::create([
            'title' => $request->title,
            'body' => $request->body,
            'price' => $request->price,
            'lang_id' => $request->lang,
            'bairshil_id' => $request->bairshil,
            'cat_id' => $request->cat,
        ]);
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts)
    {
        $bairshil = Bairshil::orderBy('name', 'asc')->get();
        $lang = Language::all();
        $category = Category::orderBy('name', 'asc')->get();
        return view('admin.post.post_edit', compact(['bairshil', 'lang', 'category', 'posts']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        $posts->title = $request->title;
        $posts->body = $request->body;
        $posts->price = $request->price;
        $posts->lang_id = $request->lang;
        $posts->bairshil_id = $request->bairshil;
        $posts->cat_id = $request->cat;
        $posts->save();
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        $posts->delete();
        return redirect()->route('admin.posts.index');
    }
}
