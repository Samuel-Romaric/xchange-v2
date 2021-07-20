<?php

namespace App\Http\Controllers\Posts;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    public function addComment(Request $request, $postId)
    {
        $user = auth()->user();

        $validator = \Validator::make(
            $request->all(),
            [
                'content' => 'required|min:5|max:1000',
            ]
        );

        if ($validator->fails()) {
            flashy()->error($validator->errors()->first());
            return redirect()->back();
        }

        $post = Post::where('id', $postId)->first();

        $post->comments()->create([
            'content' => $request->content,
            'user_id' => \Auth::user()->id,
        ]);

        flashy()->success('Commentaire bien ajouté');

        return redirect()->back();
    }

    public function modifyComment(Request $request, $postCommentId)
    {
        $user = auth()->user();

        $validator = \Validator::make(
            $request->all(),
            [
                "content" => "required|min:5|max:1000",
            ]
        );

        if ($validator->fails()) {
            flashy()->error($validator->errors()->first());
            return redirect()->back();
        }

        $postComment = $user->comments()->where('id', $postCommentId)->first();

        if (is_null($postComment)) {
            flashy()->error("Désolé vous ne pouvez pas modifier ce commentaire");
            return redirect()->back();
        }

        $postComment->update([
            'content' => $request->get("content"),
        ]);

        flashy()->success("Votre commentaire à bien été modifié");
        return redirect()->back();
    }

    public function deleteComment($commentId)
    {
        $user = auth()->user();

        $comment = $user->comments()->where('id', $commentId)->first();

        if (is_null($comment)) {
            flashy()->error("Desolé vous ne pouvez pas supprimer ce commentaire");
            return redirect()->back();
        }

        $comment->delete();

        flashy()->success("Votre commentaire a bien été supprimé");

        return redirect()->back();
    }
}
