<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function mySpace()
    {
        $user = auth()->user();

        $myPostNb = $user->posts()->count();

        return view('users.spaces.index', compact('myPostNb'));
    }

    public function showMyPost($postId)
    {
        $user = auth()->user();

        $post = $user->posts()->where('id', $postId)->first();

        if (is_null($post)) {
            flashy()->error("Désolé ce post n'existe plus !");
            return redirect()->back();
        }

        $postComments = $post->comments()->where('post_id', $post->id)->orderBy('created_at', 'desc')->get();

        return view('users.spaces.show', compact('post', 'postComments'));
    }
}
