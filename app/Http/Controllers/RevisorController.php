<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function revisorDashboard(){
        $article = Article::where('is_accepted', false)->get();
        return view('revisor.dashboard', compact('article'));
    }

    public function articleDetail(Article $article)
    {
        return view('revisor.article-detail', compact('article'));
    }

    public function acceptArticle(Article $article)
    {
        $article->is_accepted = true;
        $article->save();

        return redirect()->route('revisor.dashboard')->with('message', 'articolo pubblicato');
    }

    public function rejectArticle(Article $article)
    {
        $article->is_accepted = false;
        $article->delete();

        return redirect()->route('revisor.dashboard')->with('message', 'articolo rifiutato');
    }

}
