<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function addPost(Request $request)
    {
        $user = auth()->user();

        $validator = \Validator::make(
            $request->all(),
            [
                'title' => 'required|string|min:3',
                'content' => 'required|string|min:5',
            ]
        );

        if ($validator->fails()) {
            flashy()->error($validator->errors()->first());
            return redirect()->back();
        }

        $user->posts()->create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        flashy()->success("Votre post à bien été publié !");

        return redirect()->route('home');
    }

    public function showPost($postId)
    {
        $user = auth()->user();

        $postNb = Post::count();

        $post = Post::where('id', $postId)->first();

        if (is_null($post)) {
            flashy()->error("Désolé ce post n'existe plus !");
            return redirect()->back();
        }

        $postComments = $post->comments()->where('post_id', $post->id)->orderBy('created_at', 'desc')->get();

        return view('posts.show', compact('post', 'postComments', 'postNb'));
    }

    public function modifyPost(Request $request, $postId)
    {
        $user = auth()->user();

        $validator = \Validator::make(
            $request->all(),
            [
                'title' => 'required|string|min:3',
                'content' => 'required|string|min:5',
            ]
        );

        if ($validator->fails()) {
            flashy()->error($validator->errors()->first());
            return redirect()->back();
        }

        // find post to update
        $post = $user->posts()->where('id', $postId)->first();

        if (is_null($post)) {
            flashy()->error("Vous ne pouvez pas modifié cette publication !");
            return redirect()->back();
        }

        $post->title = $request->get('title');
        $post->content = $request->get('content');

        if (!is_null($request->illustration_image)) {

            $file = $request->illustration_image;
            ImageOptimizer::optimize($file);
            $post->addMedia($file)->toMediaCollection('illustrations');
        }

        $post->save();

        flashy()->success("Votre publication a bien été modifié !");

        return redirect()->back();
    }

    public function deletePost($postId)
    {
        $user = auth()->user();

        $post = $user->posts()->where('id', $postId)->first();

        if (is_null($post)) {
            flashy()->error("Désolé vous ne pouvez pas supprimé cette publication");
            return redirect()->back();
        }

        $post->delete();

        flashy()->success("Publication supprimée avec succès !");

        return redirect()->route('home');
    }
}
