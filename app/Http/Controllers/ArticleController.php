<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {   
        // dd($request->all());
        Auth::user()->articles()->create(
            [
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'body'=>$request->input('body'),
                'img'=>$request->file('img')->store("public/img"),
                'category_id'=>$request->input('category_id')
            ]
            );

            return redirect()->route('home')->with("message", "Articolo caricato correttamente");


    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }


    public function articlesForCategory(Category $category){

        $articles = Article::where('category_id', $category->id)->where('is_accepted', true)->orderBy('created_at', 'DESC')->get();

        return view('articles.indexCategory', compact('articles', 'category'));
    }

    public function articlesForUser(User $user){

        $articles = Article::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();

        return view('articles.indexUser', compact('articles', 'user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
