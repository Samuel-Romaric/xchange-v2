<?php

namespace App\Http\Livewire\User;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;

    public function searchUpdated()
    {
        $this->resetPage();
    }

    public function openModalEditPost($url, $id)
    {
        $title = auth()->user()->posts()->where('id', $id)->first()->title;
        $content = auth()->user()->posts()->where('id', $id)->first()->content;

        $this->dispatchBrowserEvent('edit-post', ['url' => $url, 'title' => $title, 'content' => $content]);
    }

    public function openModalDeletePost($url, $title)
    {
        $this->dispatchBrowserEvent('delete-post', ['url' => $url, 'title' => $title]);
    }

    public function render()
    {
        $posts = auth()->user()->posts()->where('title', 'like', '%' . $this->search . '%')->orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.user.index', compact('posts'));
    }
}
