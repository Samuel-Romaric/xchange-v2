<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Show extends Component
{
    public $post;
    public $postComments;

    public function mount($post, $postComments)
    {
        // $this->postNb = $postNb;
        $this->post = $post;
        $this->postComments = $postComments;
    }

    public function openModalEditPost($url, $postId)
    {
        $title = $this->post->where('id', $postId)->first()->title;
        $content = $this->post->where('id', $postId)->first()->content;

        $this->dispatchBrowserEvent('edit-post', ['url' => $url, 'title' => $title, 'content' => $content]);
    }

    public function openModalDeletePost($url, $title)
    {
        $this->dispatchBrowserEvent('delete-post', ['url' => $url, 'title' => $title]);
    }

    public function openModalModifyPostComment($url, $postCommentId)
    {
        $content = $this->postComments->where('id', $postCommentId)->first()->content;

        $this->dispatchBrowserEvent('modify-post-comment', ['url' => $url, 'content' => $content]);
    }

    public function openModalDeletePostComment($url, $commentContent)
    {
        $this->dispatchBrowserEvent('delete-comment', ['url' => $url, 'commentContent' => $commentContent]);
    }

    public function render()
    {
        return view('livewire.user.show');
    }
}
