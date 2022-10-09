<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $adminRequests = User::where('is_admin', NULL)-> get();
        $revisorRequests = User::where('is_revisor', NULL)-> get();
        $writerRequests = User::where('is_writer', NULL)-> get();
        $tags = Tag::all();
        return view('admin.dashboard', compact('adminRequests', 'revisorRequests', 'writerRequests'));
    }

    public function makeUserAdmin(User $user)
    {
        $user->is_admin = true;
        $user->save();
        return redirect()->route('admin.dashboard');
    }
    public function makeUserRevisor(User $user)
    {
        $user->is_revisor = true;
        $user->save();
        return redirect()->route('admin.dashboard');
    }
    public function makeUserWriter(User $user)
    {
        $user->is_writer = true;
        $user->save();
        return redirect()->route('admin.dashboard');
    }

    public function editTag(Request $request, Tag $tag){
        $tag->update(
            [
                'name'=>$request->input('name')
            ]
        );

        return redirect()->route('admin.dashboard');

    }

    public function deleteTag(Tag $tag){
        $tag->delete();
        return redirect()->route('admin.dashboard');
    }

    public function storeTag(Request $request){

        Tag::create(['name'=> $request->input('name')]);
        return redirect()->route('admin.dashboard');
    }
}
