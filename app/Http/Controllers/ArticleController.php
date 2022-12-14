<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;
use App\Models\Tag;

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
        $tags = Tag::all();
        return view('articles.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {   
        $article = Auth::user()->articles()->create(
            [
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'body'=>$request->input('body'),
                'img'=>$request->file('img')->store("public/img"),
                'category_id'=>$request->input('category_id')
            ]
        );
        
            $selectedTags = $request->input('tags');
            foreach($selectedTags as $tagId)
            {
                $article->tags()->attach($tagId);
            }
            
            return redirect()->route('home')->with("message", "Articolo caricato correttamente, inviato in revisione");
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

        $count = 0;

        return view('articles.indexCategory', compact('articles', 'category', 'count'));
    }

    public function articlesForUser(User $user){

        $articles = Article::where('user_id', $user->id)->orderBy('created_at', 'DESC')->get();

        $count = 0;

        return view('articles.indexUser', compact('articles', 'user', 'count'));
    }

    


    public function articleDashboard()
    {
        return view('articles.dashboard');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $tags = Tag::all();
        return view ('articles.edit', compact('article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        if($request->has('img')){
            $article->update(
                [
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'body'=>$request->input('body'),
                'img'=>$request->file('img')->store("public/img"),
                'category_id'=>$request->input('category_id')
                ]
            );

        }else{
            $article->update(
                [
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'body'=>$request->input('body'),
                'category_id'=>$request->input('category_id')
                ]
            );

        }

        $article->tags()->detach();
        $article->tags()->sync($request->input('tags'));
        return redirect()->route('articles.dashboard')->with("message", "Articolo modificato correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.dashboard');
    }
}
