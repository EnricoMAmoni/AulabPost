<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\ContactRoleMail;
use App\Mail\RequestRoleMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

    public function home() {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();

        $count = 0;

        return view('home', compact('articles', 'count'));
        
    }

    public function workWithUs(){
        return view('workWithUs');
    }
    
    public function sendRoleRequest(Request $request)
    {
        if($user = Auth::user()){
            $user = Auth::user();
            $role = $request->input('role');
            $email = $request->input('email');
            $presentation = $request->input('presentation');
            $requestMail = new RequestRoleMail(compact('role', 'email', 'presentation'));
            $contactRequestMail = new ContactRoleMail(compact('role', 'email', 'presentation'));
            Mail::to('admin@blog.it')->send($requestMail);
            switch ($role) {
                case 'admin':
                    $user->is_admin= NULL;
                    break;

                case 'revisor':
                    $user->is_revisor= NULL;
                    break;

                case 'writer':
                    $user->is_writer= NULL;
                    break;
            }
            Mail::to($email)->send($contactRequestMail);
            switch ($role) {
                case 'admin':
                    $user->is_admin= NULL;
                    break;

                case 'revisor':
                    $user->is_revisor= NULL;
                    break;

                case 'writer':
                    $user->is_writer= NULL;
                    break;
            }
            $user->update();
            return redirect()->route('home')->with('message', 'Grazie per averci contattato');
        }else{

            return redirect()->route('register')->with('message', 'Non sei registrato, registrati');
        };
    }

    public function searchArticle(Request $request)
    {
        $key = $request->input('key');
        $articles = Article::search($key)->where('is_accepted', true)->get();
        $count = 0;
        return view('articles.index', compact('articles', 'key', 'count'));
    }




}
